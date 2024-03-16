<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Project;
use App\Models\ProjectCategory;
use Illuminate\Http\Request;

class ProjectController extends Controller
{
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
            'title' => ['required', 'max:200']
        ]);

        $create = new TyperTitle();
        $create->title = $request->title;
        $create->save();

        session()->flash("success", "Data Created Successfully");

        return redirect()->route('admin.typer-title.index');
    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        $title = TyperTitle::findOrFail($id);
        return view('admin.typer-title.edit', compact('title'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'title' => ['required', 'max:200']
        ]);

        $edit = TyperTitle::findOrFail($id);
        $edit->title = $request->title;
        $edit->save();

        session()->flash("success", "Data Updated Successfully");

        return redirect()->route('admin.typer-title.index');
    }

    public function destroy($id)
    {
        $title = TyperTitle::findOrFail($id);
        $title->delete();
    }
}
