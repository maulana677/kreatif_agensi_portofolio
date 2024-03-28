<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\About;
use App\Models\FooterGridFour;
use App\Models\FooterGridOne;
use App\Models\FooterGridThree;
use App\Models\FooterGridTwo;
use App\Models\FooterInfo;
use App\Models\FooterSocialLink;
use App\Models\FooterTitle;
use App\Models\Hero;
use App\Models\Project;
use App\Models\ProjectCategory;
use App\Models\ProjectOrder;
use App\Models\ProjectScreenshot;
use App\Models\ProjectSectionSetting;
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
        $footerGridTwo = FooterGridTwo::where(['status' => 1])->get();
        $footerGridThree = FooterGridThree::where(['status' => 1])->get();
        $footerGridFour = FooterGridFour::where(['status' => 1])->get();
        $socialLinks = FooterSocialLink::where('status', 1)->get();
        $projectTitle = ProjectSectionSetting::first();

        $footerGridOneTitle = FooterTitle::where([
            'key' => 'grid_one_title',
        ])->first();
        $footerGridTwoTitle = \App\Models\FooterTitle::where([
            'key' => 'grid_two_title',
        ])->first();
        $footerGridThreeTitle = \App\Models\FooterTitle::where([
            'key' => 'grid_three_title',
        ])->first();
        $footerGridFourTitle = \App\Models\FooterTitle::where([
            'key' => 'grid_four_title',
        ])->first();

        $projects = Project::orderBy('id', 'desc')->take(6)->get();

        return view('frontend.index', [
            'projects' => $projects,
            'smallTitles' => $smallTitles,
            'hero' => $hero,
            'footerInfo' => $footerInfo,
            'footerGridOne' => $footerGridOne,
            'footerGridTwo' => $footerGridTwo,
            'footerGridThree' => $footerGridThree,
            'footerGridFour' => $footerGridFour,
            'footerGridOneTitle' => $footerGridOneTitle,
            'footerGridTwoTitle' => $footerGridTwoTitle,
            'footerGridThreeTitle' => $footerGridThreeTitle,
            'footerGridFourTitle' => $footerGridFourTitle,
            'socialLinks' => $socialLinks,
            'projectTitle' => $projectTitle,
        ]);
    }

    public function details(Project $project, ProjectScreenshot $screenshots)
    {
        $footerInfo = FooterInfo::first();
        $footerGridOne = FooterGridOne::where(['status' => 1])->get();
        $footerGridTwo = FooterGridTwo::where(['status' => 1])->get();
        $footerGridThree = FooterGridThree::where(['status' => 1])->get();
        $footerGridFour = FooterGridFour::where(['status' => 1])->get();

        $footerGridOneTitle = FooterTitle::where([
            'key' => 'grid_one_title',
        ])->first();
        $footerGridTwoTitle = \App\Models\FooterTitle::where([
            'key' => 'grid_two_title',
        ])->first();
        $footerGridThreeTitle = \App\Models\FooterTitle::where([
            'key' => 'grid_three_title',
        ])->first();
        $footerGridFourTitle = \App\Models\FooterTitle::where([
            'key' => 'grid_four_title',
        ])->first();

        return view('frontend.detail', [
            'project' => $project,
            'screenshots' => $screenshots,
            'footerInfo' => $footerInfo,
            'footerGridOne' => $footerGridOne,
            'footerGridTwo' => $footerGridTwo,
            'footerGridThree' => $footerGridThree,
            'footerGridFour' => $footerGridFour,
            'footerGridOneTitle' => $footerGridOneTitle,
            'footerGridTwoTitle' => $footerGridTwoTitle,
            'footerGridThreeTitle' => $footerGridThreeTitle,
            'footerGridFourTitle' => $footerGridFourTitle,
        ]);
    }

    public function services(Project $project)
    {
        $footerInfo = FooterInfo::first();
        $footerGridOne = FooterGridOne::where(['status' => 1])->get();
        $footerGridTwo = FooterGridTwo::where(['status' => 1])->get();
        $footerGridThree = FooterGridThree::where(['status' => 1])->get();
        $footerGridFour = FooterGridFour::where(['status' => 1])->get();

        $footerGridOneTitle = FooterTitle::where([
            'key' => 'grid_one_title',
        ])->first();
        $footerGridTwoTitle = \App\Models\FooterTitle::where([
            'key' => 'grid_two_title',
        ])->first();
        $footerGridThreeTitle = \App\Models\FooterTitle::where([
            'key' => 'grid_three_title',
        ])->first();
        $footerGridFourTitle = \App\Models\FooterTitle::where([
            'key' => 'grid_four_title',
        ])->first();

        return view('frontend.services', [
            'project' => $project,
            'footerInfo' => $footerInfo,
            'footerGridOne' => $footerGridOne,
            'footerGridTwo' => $footerGridTwo,
            'footerGridThree' => $footerGridThree,
            'footerGridFour' => $footerGridFour,
            'footerGridOneTitle' => $footerGridOneTitle,
            'footerGridTwoTitle' => $footerGridTwoTitle,
            'footerGridThreeTitle' => $footerGridThreeTitle,
            'footerGridFourTitle' => $footerGridFourTitle,
        ]);
    }

    public function testimonials(Project $project)
    {
        $footerInfo = FooterInfo::first();
        $footerGridOne = FooterGridOne::where(['status' => 1])->get();
        $footerGridTwo = FooterGridTwo::where(['status' => 1])->get();
        $footerGridThree = FooterGridThree::where(['status' => 1])->get();
        $footerGridFour = FooterGridFour::where(['status' => 1])->get();

        $footerGridOneTitle = FooterTitle::where([
            'key' => 'grid_one_title',
        ])->first();
        $footerGridTwoTitle = \App\Models\FooterTitle::where([
            'key' => 'grid_two_title',
        ])->first();
        $footerGridThreeTitle = \App\Models\FooterTitle::where([
            'key' => 'grid_three_title',
        ])->first();
        $footerGridFourTitle = \App\Models\FooterTitle::where([
            'key' => 'grid_four_title',
        ])->first();

        return view('frontend.testimonial', [
            'project' => $project,
            'footerInfo' => $footerInfo,
            'footerGridOne' => $footerGridOne,
            'footerGridTwo' => $footerGridTwo,
            'footerGridThree' => $footerGridThree,
            'footerGridFour' => $footerGridFour,
            'footerGridOneTitle' => $footerGridOneTitle,
            'footerGridTwoTitle' => $footerGridTwoTitle,
            'footerGridThreeTitle' => $footerGridThreeTitle,
            'footerGridFourTitle' => $footerGridFourTitle,
        ]);
    }

    public function about()
    {
        $about = About::first();
        $footerInfo = FooterInfo::first();
        $footerGridOne = FooterGridOne::where(['status' => 1])->get();
        $footerGridTwo = FooterGridTwo::where(['status' => 1])->get();
        $footerGridThree = FooterGridThree::where(['status' => 1])->get();
        $footerGridFour = FooterGridFour::where(['status' => 1])->get();

        $footerGridOneTitle = FooterTitle::where([
            'key' => 'grid_one_title',
        ])->first();
        $footerGridTwoTitle = \App\Models\FooterTitle::where([
            'key' => 'grid_two_title',
        ])->first();
        $footerGridThreeTitle = \App\Models\FooterTitle::where([
            'key' => 'grid_three_title',
        ])->first();
        $footerGridFourTitle = \App\Models\FooterTitle::where([
            'key' => 'grid_four_title',
        ])->first();

        return view('frontend.about', [
            'about' => $about,
            'footerInfo' => $footerInfo,
            'footerGridOne' => $footerGridOne,
            'footerGridTwo' => $footerGridTwo,
            'footerGridThree' => $footerGridThree,
            'footerGridFour' => $footerGridFour,
            'footerGridOneTitle' => $footerGridOneTitle,
            'footerGridTwoTitle' => $footerGridTwoTitle,
            'footerGridThreeTitle' => $footerGridThreeTitle,
            'footerGridFourTitle' => $footerGridFourTitle,
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
