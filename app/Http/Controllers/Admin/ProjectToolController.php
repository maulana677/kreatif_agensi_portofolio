<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Tool;
use Illuminate\Http\Request;

class ProjectToolController extends Controller
{
    public function create()
    {
        $tools = Tool::orderBy('id', 'desc')->get();
        return view('admin.project-tools.create', compact('tools'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => ['required', 'max:200'],
            'projectCategory_id' => ['required', 'numeric'],
            'cover' => ['required', 'image', 'max:5000'],
            'about' => ['required', 'max:6553'],
        ]);

        $imagePath = $this->uploadImage($request, 'cover');

        $project = new Project();
        $project->cover = $imagePath;
        $project->name = $request->name;
        $project->slug = Str::slug($request->name);
        $project->about = $request->about;
        $project->projectCategory_id = $request->projectCategory_id;
        $project->save();

        toastr()->success('Project Created Successfully!');
        return redirect()->route('admin.projects.index');
    }
}
