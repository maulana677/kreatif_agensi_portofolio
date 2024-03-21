<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Project;
use App\Models\ProjectScreenshot;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Traits\FileUploadTrait;

class ProjectScreenshotController extends Controller
{
    use FileUploadTrait;

    public function create(Project $project)
    {
        return view('admin.project-screenshots.create', [
            'project' => $project,
        ]);
    }

    public function store(Request $request, Project $project)
    {
        $request->validate([
            'screenshot' => ['required', 'image', 'max:5000']
        ]);

        $imagePath = $this->uploadImage($request, 'screenshot');

        $projectScreenshots = new ProjectScreenshot();
        $projectScreenshots->screenshot = $imagePath;
        $projectScreenshots['project_id'] = $project->id;
        $projectScreenshots->save();

        toastr()->success('Project Created Successfully!');
        return redirect()->back();
    }

    public function destroy(string $id)
    {
        try {
            $projectScreenshots = ProjectScreenshot::findOrFail($id);
            $this->removeImage($projectScreenshots->screenshot);
            $projectScreenshots->delete();
            return response(['status' => 'success', 'message' => 'Deleted Successfully!']);
        } catch (\Exception $e) {
            return response(['status' => 'error', 'message' => 'something went wrong!']);
        }
    }
}
