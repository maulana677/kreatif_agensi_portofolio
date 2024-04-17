<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\About;
use App\Models\Faq;
use App\Models\FaqSectionSetting;
use App\Models\FooterGridFour;
use App\Models\FooterGridOne;
use App\Models\FooterGridThree;
use App\Models\FooterGridTwo;
use App\Models\FooterInfo;
use App\Models\FooterSocialLink;
use App\Models\FooterTitle;
use App\Models\GeneralSetting;
use App\Models\Hero;
use App\Models\Project;
use App\Models\ProjectCategory;
use App\Models\ProjectOrder;
use App\Models\ProjectScreenshot;
use App\Models\ProjectSectionSetting;
use App\Models\RunningLogo;
use App\Models\Service;
use App\Models\ServiceSectionSetting;
use App\Models\SmallTitle;
use App\Models\Testimonial;
use App\Models\TestimonialSectionSetting;
use App\Models\Workflow;
use App\Models\WorkflowSectionSetting;
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
        $workflowTitle = WorkflowSectionSetting::first();
        $faqSectionTitle = FaqSectionSetting::first();
        $faqQuestion = Faq::orderBy('id', 'asc')->take(3)->get();
        // $faqQuestion = Faq::all();
        $serviceSetting = ServiceSectionSetting::first();
        $service = Service::orderBy('id', 'asc')->take(2)->get();
        $generalSetting = GeneralSetting::first();
        // $seoSetting = SeoSetting::first();
        $testimonials = Testimonial::all();
        $testimonialsSectionTitle = TestimonialSectionSetting::first();
        $countProject = Project::count();
        $countCompany = RunningLogo::count();
        $countTestimonial = Testimonial::count();
        $countService = Service::count();
        $workflows = Workflow::all();

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
        $runningLogo = RunningLogo::orderBy('id', 'desc')->take(7)->get();

        return view('frontend.index', [
            'projects' => $projects,
            'runningLogo' => $runningLogo,
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
            'workflowTitle' => $workflowTitle,
            'faqSectionTitle' => $faqSectionTitle,
            'faqQuestion' => $faqQuestion,
            'serviceSetting' => $serviceSetting,
            'service' => $service,
            'generalSetting' => $generalSetting,
            'testimonials' => $testimonials,
            'testimonialsSectionTitle' => $testimonialsSectionTitle,
            'countProject' => $countProject,
            'countCompany' => $countCompany,
            'countTestimonial' => $countTestimonial,
            'countService' => $countService,
            'workflows' => $workflows,
        ]);
    }

    public function details(Project $project, ProjectScreenshot $screenshots)
    {
        $footerInfo = FooterInfo::first();
        $footerGridOne = FooterGridOne::where(['status' => 1])->get();
        $footerGridTwo = FooterGridTwo::where(['status' => 1])->get();
        $footerGridThree = FooterGridThree::where(['status' => 1])->get();
        $footerGridFour = FooterGridFour::where(['status' => 1])->get();
        $socialLinks = FooterSocialLink::where('status', 1)->get();
        $projectTitle = ProjectSectionSetting::first();
        $workflowTitle = WorkflowSectionSetting::first();
        $generalSetting = GeneralSetting::first();
        $faqSectionTitle = FaqSectionSetting::first();
        $faqQuestion = Faq::orderBy('id', 'asc')->take(3)->get();
        $testimonials = Testimonial::orderBy('id', 'asc')->take(1)->get();

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
            'socialLinks' => $socialLinks,
            'projectTitle' => $projectTitle,
            'workflowTitle' => $workflowTitle,
            'generalSetting' => $generalSetting,
            'faqSectionTitle' => $faqSectionTitle,
            'faqQuestion' => $faqQuestion,
            'testimonials' => $testimonials,
        ]);
    }

    public function services(Project $project)
    {
        $footerInfo = FooterInfo::first();
        $footerGridOne = FooterGridOne::where(['status' => 1])->get();
        $footerGridTwo = FooterGridTwo::where(['status' => 1])->get();
        $footerGridThree = FooterGridThree::where(['status' => 1])->get();
        $footerGridFour = FooterGridFour::where(['status' => 1])->get();
        $socialLinks = FooterSocialLink::where('status', 1)->get();
        $serviceSetting = ServiceSectionSetting::first();
        $service = Service::all();
        $generalSetting = GeneralSetting::first();

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
            'socialLinks' => $socialLinks,
            'serviceSetting' => $serviceSetting,
            'service' => $service,
            'generalSetting' => $generalSetting,
        ]);
    }

    public function testimonials(Project $project)
    {
        $footerInfo = FooterInfo::first();
        $footerGridOne = FooterGridOne::where(['status' => 1])->get();
        $footerGridTwo = FooterGridTwo::where(['status' => 1])->get();
        $footerGridThree = FooterGridThree::where(['status' => 1])->get();
        $footerGridFour = FooterGridFour::where(['status' => 1])->get();
        $socialLinks = FooterSocialLink::where('status', 1)->get();
        $generalSetting = GeneralSetting::first();
        $testimonials = Testimonial::all();
        $testimonialsSectionTitle = TestimonialSectionSetting::first();

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
            'socialLinks' => $socialLinks,
            'generalSetting' => $generalSetting,
            'testimonials' => $testimonials,
            'testimonialsSectionTitle' => $testimonialsSectionTitle,
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
        $socialLinks = FooterSocialLink::where('status', 1)->get();
        $generalSetting = GeneralSetting::first();

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
            'socialLinks' => $socialLinks,
            'generalSetting' => $generalSetting
        ]);
    }

    public function book()
    {
        $projectsCategories = ProjectCategory::all();
        $generalSetting = GeneralSetting::first();
        $testimonials = Testimonial::orderBy('id', 'asc')->take(1)->get();

        return view('frontend.book', [
            'projectsCategories' => $projectsCategories,
            'generalSetting' => $generalSetting,
            'testimonials' => $testimonials
        ]);
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
