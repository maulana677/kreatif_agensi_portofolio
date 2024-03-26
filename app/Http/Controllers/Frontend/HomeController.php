<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\About;
use App\Models\FooterGridOne;
use App\Models\FooterInfo;
use App\Models\FooterTitle;
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
        $footerGridOne = FooterGridOne::where(['status' => 1])->get();
        $footerGridOneTitle = FooterTitle::where([
            'key' => 'grid_one_title',
        ])->first();
        $projects = Project::orderBy('id', 'desc')->take(6)->get();
        return view('frontend.index', [
            'projects' => $projects,
            'smallTitles' => $smallTitles,
            'hero' => $hero,
            'footerInfo' => $footerInfo,
            'footerGridOne' => $footerGridOne,
            'footerGridOneTitle' => $footerGridOneTitle,
        ]);
    }

    public function details(Project $project, ProjectScreenshot $screenshots)
    {
        $footerInfo = FooterInfo::first();
        $footerGridOne = FooterGridOne::where(['status' => 1])->get();
        $footerGridOneTitle = FooterTitle::where([
            'key' => 'grid_one_title',
        ])->first();
        return view('frontend.detail', [
            'project' => $project,
            'screenshots' => $screenshots,
            'footerInfo' => $footerInfo,
            'footerGridOne' => $footerGridOne,
            'footerGridOneTitle' => $footerGridOneTitle,
        ]);
    }

    public function services(Project $project)
    {
        $footerInfo = FooterInfo::first();
        $footerGridOne = FooterGridOne::where(['status' => 1])->get();
        $footerGridOneTitle = FooterTitle::where([
            'key' => 'grid_one_title',
        ])->first();
        return view('frontend.services', [
            'project' => $project,
            'footerInfo' => $footerInfo,
            'footerGridOne' => $footerGridOne,
            'footerGridOneTitle' => $footerGridOneTitle,
        ]);
    }

    public function testimonials(Project $project)
    {
        $footerInfo = FooterInfo::first();
        $footerGridOne = FooterGridOne::where(['status' => 1])->get();
        $footerGridOneTitle = FooterTitle::where([
            'key' => 'grid_one_title',
        ])->first();
        return view('frontend.testimonial', [
            'project' => $project,
            'footerInfo' => $footerInfo,
            'footerGridOne' => $footerGridOne,
            'footerGridOneTitle' => $footerGridOneTitle,
        ]);
    }

    public function about()
    {
        $about = About::first();
        $footerGridOne = FooterGridOne::where(['status' => 1])->get();
        $footerInfo = FooterInfo::first();
        $footerGridOneTitle = FooterTitle::where([
            'key' => 'grid_one_title',
        ])->first();
        return view('frontend.about', [
            'about' => $about,
            'footerInfo' => $footerInfo,
            'footerGridOne' => $footerGridOne,
            'footerGridOneTitle' => $footerGridOneTitle,
        ]);
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
