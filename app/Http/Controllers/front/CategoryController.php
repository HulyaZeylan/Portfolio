<?php


namespace App\Http\Controllers\front;


use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Projects;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index(Request $request, $slug_category)
    {

        $category = Category::where('slug', $slug_category)->firstOrFail();
        $categorySlug= $category->slug;
        $idFound= $category->id;
        $projects = Projects::where('category_id',$idFound)->get();

       // dd($projects);


        return view('front.projects',
            compact('projects', 'category','categorySlug'));
    }



}
