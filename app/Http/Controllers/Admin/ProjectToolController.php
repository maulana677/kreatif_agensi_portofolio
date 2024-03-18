<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Project;
use App\Models\ProjectTool;
use App\Models\Tool;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\View\View;

class ProjectToolController extends Controller
{
    public function index()
    {
        $tools = Tool::orderBy('id', 'desc')->get();
        $projectTools = ProjectTool::all();
        $count = $projectTools->count();
        return view('admin.project-tools.index', compact('tools', 'projectTools', 'count'));
    }

    public function store(Request $request, Project $project)
    {
        $project = Project::where('id', true)->first();

        $request->validate([
            'tool_id' => ['required', 'numeric'],
        ]);

        $projectTools = new ProjectTool();
        $projectTools->tool_id = $request->tool_id;
        $projectTools->project_id = $project->id;
        $projectTools->save();

        toastr()->success('Project Tools Created Successfully!');
        return redirect()->back();
    }

    public function destroy(string $id)
    {
        try {
            $projectTools = ProjectTool::findOrFail($id);
            $projectTools->delete();
            return response(['status' => 'success', 'message' => 'Deleted Successfully!']);
        } catch (\Exception $e) {
            return response(['status' => 'error', 'message' => 'something went wrong!']);
        }
    }
}
