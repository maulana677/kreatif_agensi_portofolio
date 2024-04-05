<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Project;
use App\Models\ProjectCategory;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use App\Traits\FileUploadTrait;
use Alert;

class ProjectController extends Controller
{
    use FileUploadTrait;

    public function index()
    {
        $projects = Project::all();
        return view('admin.projects.index', compact('projects'));
    }

    public function create()
    {
        $projectsCategories = ProjectCategory::all();
        return view('admin.projects.create', compact('projectsCategories'));
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

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        $projectsCategories = ProjectCategory::all();
        $project = Project::findOrFail($id);
        return view('admin.projects.edit', compact('projectsCategories', 'project'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => ['required', 'max:200'],
            'projectCategory_id' => ['required', 'numeric'],
            'cover' => ['image', 'max:5000'],
            'about' => ['required', 'max:6553'],
        ]);

        $project = Project::findOrFail($id);
        /** Handle Image Upload */
        $imagePath = $this->uploadImage($request, 'cover', $project->cover);

        $project->cover = !empty($imagePath) ? $imagePath : $project->cover;
        $project->name = $request->name;
        $project->slug = Str::slug($request->name);
        $project->about = $request->about;
        $project->projectCategory_id = $request->projectCategory_id;
        $project->save();

        toastr()->success('Project Updated Successfully!');
        return redirect()->route('admin.projects.index');
    }

    public function destroy($id)
    {
        try {
            $project = Project::findOrFail($id);
            $this->removeImage($project->cover);
            $project->delete();
            return response(['status' => 'success', 'message' => 'Deleted Successfully!']);
        } catch (\Exception $e) {
            return response(['status' => 'error', 'message' => 'something went wrong!']);
        }
    }
}
