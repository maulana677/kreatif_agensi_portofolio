<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Project;
use App\Models\ProjectScreenshot;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $projects = Project::orderBy('id', 'desc')->take(6)->get();
        return view('frontend.index', [
            'projects' => $projects
        ]);
    }

    public function details(Project $project, ProjectScreenshot $screenshots)
    {
        // $screenshots = ProjectScreenshot::orderBy('id', 'desc')->take(6)->get();

        return view('frontend.detail', [
            'project' => $project,
            'screenshots' => $screenshots
        ]);
    }

    public function book()
    {
        return view('frontend.book');
    }
}
