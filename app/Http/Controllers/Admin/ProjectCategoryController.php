<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\ProjectCategory;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class ProjectCategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $projectCategory = ProjectCategory::all();
        return view('admin.project-category.index', compact('projectCategory'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.project-category.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => ['required', 'max:200']
        ]);

        $category = new ProjectCategory();
        $category->name = $request->name;
        $category->slug = Str::slug($request->name);
        $category->save();

        toastr()->success('Data Successfully Created');
        return redirect()->route('admin.projects-category.index');
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
        $projectCategory = ProjectCategory::findOrFail($id);
        return view('admin.project-category.edit', compact('projectCategory'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'name' => ['required', 'max:200']
        ]);

        $category = ProjectCategory::findOrFail($id);
        $category->name = $request->name;
        $category->slug = Str::slug($request->name);
        $category->save();

        toastr()->success('Data Successfully Created');
        return redirect()->route('admin.projects-category.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        // $project = ProjectCategory::findOrFail($id);
        // $project->delete();
        // toastr()->success('Data Deleted Successfully!');

        try {
            $category = ProjectCategory::findOrFail($id);
            $category->delete();
            return response(['status' => 'success', 'message' => 'Deleted Successfully!']);
        } catch (\Exception $e) {
            return response(['status' => 'error', 'message' => 'something went wrong!']);
        }
    }
}
