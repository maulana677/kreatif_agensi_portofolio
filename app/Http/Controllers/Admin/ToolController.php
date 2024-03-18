<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Tool;
use Illuminate\Http\Request;
use App\Traits\FileUploadTrait;

class ToolController extends Controller
{
    use FileUploadTrait;

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $tools = Tool::all();
        return view('admin.tools.index', compact('tools'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.tools.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => ['required', 'max:200'],
            'tagline' => ['required', 'string', 'max:255'],
            'logo' => ['required', 'image', 'max:5000'],
        ]);

        $imagePath = $this->uploadImage($request, 'logo');

        $tools = new Tool();
        $tools->logo = $imagePath;
        $tools->name = $request->name;
        $tools->tagline = $request->tagline;
        $tools->save();

        toastr()->success('Tools Created Successfully!');
        return redirect()->route('admin.tools.index');
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
        $tools = Tool::findOrFail($id);
        return view('admin.tools.edit', compact('tools'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'name' => ['required', 'max:200'],
            'tagline' => ['required', 'string', 'max:255'],
            'logo' => ['image', 'max:5000'],
        ]);

        $tools = Tool::findOrFail($id);
        /** Handle Image Upload */
        $imagePath = $this->uploadImage($request, 'logo', $tools->logo);

        $tools->logo = !empty($imagePath) ? $imagePath : $tools->logo;
        $tools->name = $request->name;
        $tools->tagline = $request->tagline;
        $tools->save();

        toastr()->success('Tools Updated Successfully!');
        return redirect()->route('admin.tools.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        try {
            $tools = Tool::findOrFail($id);
            $this->removeImage($tools->logo);
            $tools->delete();
            return response(['status' => 'success', 'message' => 'Deleted Successfully!']);
        } catch (\Exception $e) {
            return response(['status' => 'error', 'message' => 'something went wrong!']);
        }
    }
}
