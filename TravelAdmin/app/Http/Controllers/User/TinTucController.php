<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\Blogs;
use App\Models\CategoriesTour;
use App\Models\CategoryCars;
use Illuminate\Http\Request;

class TinTucController extends Controller
{
    public function index($id)
    {
        $blog = Blogs::find($id);
        $blogRamdom = Blogs::inRandomOrder()->get();
        $blogNew = Blogs::limit(3)->get();
        $categoryCar = CategoryCars::where('parent_id',0)->take(3)->get();
        $categoryTour = CategoriesTour::where('parent_id',0)->take(3)->get();
        return view('user.pages.detail-news',compact('blog','categoryCar','categoryTour','blogRamdom','blogNew'));
    }
    public function allnews()
    {
        $blog = Blogs::all();
        $categoryCar = CategoryCars::where('parent_id',0)->take(3)->get();
        $categoryTour = CategoriesTour::where('parent_id',0)->take(3)->get();
        return view('user.pages.news',compact('blog','categoryCar','categoryTour'));
    }
}
