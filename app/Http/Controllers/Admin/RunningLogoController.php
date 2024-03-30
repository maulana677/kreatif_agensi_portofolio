<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\RunningLogo;
use Illuminate\Http\Request;
use App\Traits\FileUploadTrait;

class RunningLogoController extends Controller
{
    use FileUploadTrait;

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $runningLogo = RunningLogo::all();
        return view('admin.hero-running-logo.index', compact('runningLogo'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.hero-running-logo.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'icon' => ['required', 'image', 'max:5000'],
        ]);

        $imagePath = $this->uploadImage($request, 'icon');
        $runningLogo = new RunningLogo();
        $runningLogo->icon = $imagePath;
        $runningLogo->save();

        toastr()->success('Icon Created Successfully!');
        return redirect()->route('admin.hero-running-logo.index');
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
        $runningLogo = RunningLogo::findOrFail($id);
        return view('admin.hero-running-logo.edit', compact('runningLogo'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'icon' => ['required', 'image', 'max:5000'],
        ]);

        $runningLogo = RunningLogo::findOrFail($id);
        /** Handle Image Upload */
        $imagePath = $this->uploadImage($request, 'icon', $runningLogo->icon);

        $runningLogo->icon = !empty($imagePath) ? $imagePath : $runningLogo->icon;
        $runningLogo->save();

        toastr()->success('Icon Updated Successfully!');
        return redirect()->route('admin.hero-running-logo.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        try {
            $runningLogo = RunningLogo::findOrFail($id);
            $this->removeImage($runningLogo->icon);
            $runningLogo->delete();
            return response(['status' => 'success', 'message' => 'Deleted Successfully!']);
        } catch (\Exception $e) {
            return response(['status' => 'error', 'message' => 'something went wrong!']);
        }
    }
}
