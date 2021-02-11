<?php


namespace App\Http\Controllers\front;


use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;

class PortfolioController extends Controller
{
    public function index()
    {


        $categories = Category::all();


        return view('front.portfolio',
            compact('categories'));
    }

}

