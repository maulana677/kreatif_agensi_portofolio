<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\ProjectCategory;
use App\Models\ProjectOrder;
use Illuminate\Http\Request;

class ProjectOrderController extends Controller
{
    public function index()
    {
        $projectsOrders = ProjectOrder::all();
        return view('admin.project-orders.index', compact('projectsOrders'));
    }

    public function show($id)
    {
        $projectsCategories = ProjectCategory::all();
        $projectsOrders = ProjectOrder::findOrFail($id);
        return view('admin.project-orders.show', compact('projectsOrders', 'projectsCategories'));
    }
}
