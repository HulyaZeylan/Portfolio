<?php

namespace App\Http\Controllers\front;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Projects;

use Illuminate\Http\Request;
use Illuminate\Pagination\Paginator;

class ProjectController extends Controller
{
    public function index($slug_project)
    {


        $categories = Category::with('children')->get();

        // $project = project::where('slug',$slug_project)->firstOrFail();
        $project = Projects::whereSlug($slug_project)->firstOrFail();

        $opportunities = projectDetail::with('project')
            ->where('opportunity_project', '1')
            ->take(2)
            ->get();

        return view('front.project-detail',
            compact('categories', 'project', 'opportunities'));
    }



}
