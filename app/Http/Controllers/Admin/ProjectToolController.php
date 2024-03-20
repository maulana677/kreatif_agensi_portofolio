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
    public function create(Project $project)
    {
        // $projectTools = ProjectTool::where('project_id', $projectId)->get();
        $tools = Tool::orderBy('id', 'desc')->get();
        return view('admin.project-tools.create', [
            'tools' => $tools,
            'project' => $project,
        ]);
    }

    public function store(Request $request, Project $project)
    {
        // $project = Project::where('id', true)->first();

        // $request->validate([
        //     'tool_id' => ['required', 'numeric'],
        // ]);

        // $projectTools = new ProjectTool();
        // $projectTools->tool_id = $request->tool_id;
        // $projectTools->project_id = $project->id;
        // $projectTools->save();

        // toastr()->success('Project Tools Created Successfully!');
        // return redirect()->back();

        $validated = $request->validate([
            'tool_id' => ['required', 'integer'],
        ]);

        DB::beginTransaction();

        try {
            $validated['project_id'] = $project->id;

            $assignTool = ProjectTool::updateOrCreate($validated);

            DB::commit();

            toastr()->success('Project Created Successfully!');
            return redirect()->back();
        } catch (\Throwable $th) {
            DB::rollBack();

            toastr()->error('something went wrong!');
            return redirect()->back();
        }
    }

    public function destroy($id)
    {
        // dd($projectTool);
        try {
            $projectTool = ProjectTool::findOrFail($id);
            $projectTool->delete();

            toastr()->success('Project Deleted Successfully!');
            return redirect()->back();
        } catch (\Exception $e) {
            toastr()->error('something went wrong!');
            return redirect()->back();
        }

        // try {
        //     $projectTool = ProjectTool::findOrFail($projectTool);
        //     $projectTool->delete();
        //     return response(['status' => 'success', 'message' => 'Deleted Successfully!']);
        // } catch (\Exception $e) {
        //     return response(['status' => 'error', 'message' => 'something went wrong!']);
        // }
    }
}
