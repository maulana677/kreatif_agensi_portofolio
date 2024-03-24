<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\SmallTitle;
use Illuminate\Http\Request;

class SmallTitleController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $smallTitle = SmallTitle::all();
        return view('admin.small-title.index', compact('smallTitle'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.small-title.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'title' => ['required', 'max:200']
        ]);

        $smallTitle = new SmallTitle();
        $smallTitle->title = $request->title;
        $smallTitle->save();

        toastr()->success('Title Created Successfully!');
        return redirect()->route('admin.small-title.index');
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
        $smallTitleEdit = SmallTitle::findOrFail($id);
        return view('admin.small-title.edit', compact('smallTitleEdit'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'title' => ['required', 'max:200']
        ]);

        $smallTitleUpdate = SmallTitle::findOrFail($id);
        $smallTitleUpdate->title = $request->title;
        $smallTitleUpdate->save();

        toastr()->success('Title Updated Successfully!');
        return redirect()->route('admin.typer-title.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        try {
            $smallTitleDelete = SmallTitle::findOrFail($id);
            $smallTitleDelete->delete();
            return response(['status' => 'success', 'message' => 'Deleted Successfully!']);
        } catch (\Exception $e) {
            return response(['status' => 'error', 'message' => 'something went wrong!']);
        }
    }
}
