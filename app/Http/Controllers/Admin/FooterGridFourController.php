<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\FooterGridFour;
use App\Models\FooterTitle;
use Illuminate\Http\Request;
use App\Traits\FileUploadTrait;


class FooterGridFourController extends Controller
{
    use FileUploadTrait;

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $footer = FooterGridFour::all();
        return view('admin.footer-grid-four.index', compact('footer'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.footer-grid-four.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'logo' => ['required', 'image', 'mimes:jpeg,png,jpg,gif,svg', 'max:5000'],
            'name' => ['required', 'max:255'],
            'url' => ['required']
        ]);

        $imagePath = $this->uploadImage($request, 'logo');
        $footer = new FooterGridFour();
        $footer->logo = $imagePath;
        $footer->name = $request->name;
        $footer->url = $request->url;
        $footer->status = $request->status;
        $footer->save();

        toastr()->success('Created Successfully!');
        return redirect()->route('admin.footer-grid-four.index');
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
        $footer = FooterGridFour::findOrFail($id);
        return view('admin.footer-grid-four.edit', compact('footer'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'logo' => ['nullable', 'image', 'mimes:jpeg,png,jpg,gif,svg', 'max:5000'],
            'name' => ['required', 'max:255'],
            'url' => ['required']
        ]);

        $footer = FooterGridFour::findOrFail($id);
        /** Handle Image Upload */
        $imagePath = $this->uploadImage($request, 'logo', $footer->cover);

        $footer->logo = !empty($imagePath) ? $imagePath : $footer->logo;
        $footer->name = $request->name;
        $footer->url = $request->url;
        $footer->status = $request->status;
        $footer->save();

        toastr()->success('Updated Successfully!');
        return redirect()->route('admin.footer-grid-four.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        try {
            $footer = FooterGridFour::findOrFail($id);
            $this->removeImage($footer->logo);
            $footer->delete();
            return response(['status' => 'success', 'message' => 'Deleted Successfully!']);
        } catch (\Exception $e) {
            return response(['status' => 'error', 'message' => 'something went wrong!']);
        }
    }

    public function handleTitle(Request $request)
    {
        $request->validate([
            'title' => ['required', 'max:255']
        ]);

        FooterTitle::updateOrCreate(
            [
                'key' => 'grid_four_title'
            ],
            [
                'value' => $request->title
            ]
        );

        toastr()->success('Updated Successfully!');
        return redirect()->back();
    }
}
