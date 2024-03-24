<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\About;
use App\Models\Hero;
use App\Models\Project;
use App\Models\ProjectScreenshot;
use App\Models\SmallTitle;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $hero = Hero::first();
        $smallTitles = SmallTitle::all();
        $projects = Project::orderBy('id', 'desc')->take(6)->get();
        return view('frontend.index', [
            'projects' => $projects,
            'smallTitles' => $smallTitles,
            'hero' => $hero
        ]);
    }

    public function details(Project $project, ProjectScreenshot $screenshots)
    {
        return view('frontend.detail', [
            'project' => $project,
            'screenshots' => $screenshots
        ]);
    }

    public function services(Project $project)
    {
        return view('frontend.services', [
            'project' => $project
        ]);
    }

    public function testimonials(Project $project)
    {
        return view('frontend.testimonial', [
            'project' => $project
        ]);
    }

    public function about()
    {
        $about = About::first();
        return view('frontend.about', compact('about'));
    }

    public function book()
    {
        return view('frontend.book');
    }
}
