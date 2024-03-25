<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\About;
use App\Models\FooterInfo;
use App\Models\Hero;
use App\Models\Project;
use App\Models\ProjectCategory;
use App\Models\ProjectOrder;
use App\Models\ProjectScreenshot;
use App\Models\SmallTitle;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $hero = Hero::first();
        $footerInfo = FooterInfo::first();
        $smallTitles = SmallTitle::all();
        $projects = Project::orderBy('id', 'desc')->take(6)->get();
        return view('frontend.index', [
            'projects' => $projects,
            'smallTitles' => $smallTitles,
            'hero' => $hero,
            'footerInfo' => $footerInfo,
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
        $projectsCategories = ProjectCategory::all();
        return view('frontend.book', compact('projectsCategories'));
    }

    public function storeBook(Request $request)
    {
        $request->validate([
            'name' => ['required', 'max:200'],
            'email' => ['required', 'max:255'],
            'budget' => ['required', 'numeric'],
            'projectCategory_id' => ['required', 'numeric'],
            'brief' => ['required', 'max:6553'],
        ]);

        $projectOrder = new ProjectOrder();
        $projectOrder->name = $request->name;
        $projectOrder->email = $request->email;
        $projectOrder->budget = $request->budget;
        $projectOrder->projectCategory_id = $request->projectCategory_id;
        $projectOrder->brief = $request->brief;
        $projectOrder->save();

        toastr()->success('Book Successfully!');
        return redirect()->back();
    }
}
