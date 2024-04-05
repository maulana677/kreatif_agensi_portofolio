<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Service;
use Illuminate\Http\Request;
use App\Traits\FileUploadTrait;

class ServicesController extends Controller
{
    use FileUploadTrait;
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $services = Service::all();
        return view('admin.service.index', compact('services'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.service.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'title' => ['required', 'max:200'],
            'sub_title' => ['required', 'max:6553'],
            'image' => ['required', 'image', 'max:5000'],
            'icon' => ['required', 'image', 'mimes:jpeg,png,jpg,gif,svg', 'max:5000'],
        ]);


        // $imagePath = $this->uploadImage($request, 'image');

        // $imagePath = $this->uploadImage($request, 'icon');

        $services = new Service();
        if ($imagePath = $this->uploadImage($request, 'image')) {
            $services->image = $imagePath;
        }

        if ($imagePath = $this->uploadImage($request, 'icon')) {
            $services->icon = $imagePath;
        }
        $services->title = $request->title;
        $services->sub_title = $request->sub_title;
        $services->save();

        toastr()->success('Service Created Successfully!');
        return redirect()->route('admin.services.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $services = Service::findOrFail($id);
        return view('admin.service.edit', compact('services'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'title' => ['required', 'max:200'],
            'sub_title' => ['required', 'max:6553'],
            'image' => ['nullable', 'image', 'max:5000'],
            'icon' => ['nullable', 'image', 'mimes:jpeg,png,jpg,gif,svg', 'max:5000'],
        ]);

        $services = Service::findOrFail($id);
        /** Handle Image Upload */
        if ($services->image) {
            $imagePath = $this->uploadImage($request, 'image', $services->image);

            $services->image = !empty($imagePath) ? $imagePath : $services->image;
        }

        if ($services->icon) {
            $imagePath = $this->uploadImage($request, 'icon', $services->icon);

            $services->icon = !empty($imagePath) ? $imagePath : $services->icon;
        }

        $services->title = $request->title;
        $services->sub_title = $request->sub_title;
        $services->save();

        toastr()->success('Service Updated Successfully!');
        return redirect()->route('admin.services.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        try {
            $services = Service::findOrFail($id);

            if ($services->image) {
                $this->removeImage($services->image);
            }

            if ($services->icon) {
                $this->removeImage($services->icon);
            }

            $services->delete();
            return response(['status' => 'success', 'message' => 'Deleted Successfully!']);
        } catch (\Exception $e) {
            return response(['status' => 'error', 'message' => 'something went wrong!']);
        }
    }
}
