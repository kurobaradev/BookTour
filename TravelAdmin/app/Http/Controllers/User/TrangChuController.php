<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\Blogs;
use App\Models\CategoriesTour;
use App\Models\CategoryCars;
use App\Models\Introduce;
use App\Models\Slider;
use App\Models\Tour;
use Illuminate\Http\Request;

class TrangChuController extends Controller
{
    public function index()
    {
        $slider = Slider::latest()->get();
        $tours = Tour::limit(2)->get();
        $blogs = Blogs::latest()->get();
        $categoryCar = CategoryCars::where('parent_id',0)->take(3)->get();
        $categoryTour = CategoriesTour::where('parent_id',0)->take(3)->get();
        return view('user.pages.trangchu', compact('slider','tours','blogs','categoryCar','categoryTour'));
    }
    public function about()
    {
        $introduce = Introduce::find(1);
        $categoryCar = CategoryCars::where('parent_id',0)->take(3)->get();
        $categoryTour = CategoriesTour::where('parent_id',0)->take(3)->get();
        // dd($introduce->content);
        return view('user.pages.introduce', compact('introduce','categoryCar','categoryTour'));
    }
    
}
