<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Project;
use App\Models\RunningLogo;
use App\Models\Service;
use App\Models\Testimonial;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        $countProject = Project::count();
        $countCompany = RunningLogo::count();
        $countTestimonial = Testimonial::count();
        $countService = Service::count();
        return view('admin.dashboard.index', [
            'countProject' => $countProject,
            'countCompany' => $countCompany,
            'countTestimonial' => $countTestimonial,
            'countService' => $countService
        ]);
    }
}
