<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Workflow;
use Illuminate\Http\Request;
use App\Traits\FileUploadTrait;

class WorkflowController extends Controller
{
    use FileUploadTrait;

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $workflow = Workflow::all();
        return view('admin.workflow.index', compact('workflow'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.workflow.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'title' => ['required', 'max:200'],
            'sub_title' => ['required', 'max:6553'],
            'icon' => ['required', 'image', 'mimes:jpeg,png,jpg,gif,svg', 'max:5000'],
        ]);

        $workflow = new Workflow();
        if ($imagePath = $this->uploadImage($request, 'icon')) {
            $workflow->icon = $imagePath;
        }
        $workflow->title = $request->title;
        $workflow->sub_title = $request->sub_title;
        $workflow->save();

        toastr()->success('Workflow Created Successfully!');
        return redirect()->route('admin.workflow.index');
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
        $workflow = Workflow::findOrFail($id);
        return view('admin.workflow.edit', compact('workflow'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'title' => ['required', 'max:200'],
            'sub_title' => ['required', 'max:6553'],
            'icon' => ['nullable', 'image', 'mimes:jpeg,png,jpg,gif,svg', 'max:5000'],
        ]);

        $workflow = Workflow::findOrFail($id);
        /** Handle Image Upload */
        if ($workflow->icon) {
            $imagePath = $this->uploadImage($request, 'icon', $workflow->icon);
            $workflow->icon = !empty($imagePath) ? $imagePath : $workflow->icon;
        }

        $workflow->title = $request->title;
        $workflow->sub_title = $request->sub_title;
        $workflow->save();

        toastr()->success('Service Updated Successfully!');
        return redirect()->route('admin.workflow.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        try {
            $workflow = Workflow::findOrFail($id);

            if ($workflow->icon) {
                $this->removeImage($workflow->icon);
            }

            $workflow->delete();
            return response(['status' => 'success', 'message' => 'Deleted Successfully!']);
        } catch (\Exception $e) {
            return response(['status' => 'error', 'message' => 'something went wrong!']);
        }
    }
}
