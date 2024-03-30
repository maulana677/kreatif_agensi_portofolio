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
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
