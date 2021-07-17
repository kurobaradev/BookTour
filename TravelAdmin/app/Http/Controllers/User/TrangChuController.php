<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\Blogs;
use App\Models\Cars;
use App\Models\CategoriesTour;
use App\Models\CategoryCars;
use App\Models\Introduce;
use App\Models\oder;
use App\Models\Slider;
use App\Models\Tour;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class TrangChuController extends Controller
{
    public function index()
    {
        $slider = Slider::latest()->get();
        $tours = Tour::limit(2)->get();
        $blogs = Blogs::latest()->get();
        $categoryCar = CategoryCars::where('parent_id', 0)->take(3)->get();
        $categoryTour = CategoriesTour::where('parent_id', 0)->take(3)->get();
        return view('user.pages.trangchu', compact('slider', 'tours', 'blogs', 'categoryCar', 'categoryTour'));
    }
    public function about()
    {
        $introduce = Introduce::find(1);
        $categoryCar = CategoryCars::where('parent_id', 0)->take(3)->get();
        $categoryTour = CategoriesTour::where('parent_id', 0)->take(3)->get();
        // dd($introduce->content);
        return view('user.pages.introduce', compact('introduce', 'categoryCar', 'categoryTour'));
    }
    public function cars()
    {
        $cars = Cars::all();
        $categoryCar = CategoryCars::where('parent_id', 0)->take(3)->get();
        $categoryTour = CategoriesTour::where('parent_id', 0)->take(3)->get();
        // dd($introduce->content);
        return view('user.pages.cars', compact('cars', 'categoryCar', 'categoryTour'));
    }
    public function detailcars($id)
    {
        $cars = Cars::find($id);
        $categoryCar = CategoryCars::where('parent_id', 0)->take(3)->get();
        $categoryTour = CategoriesTour::where('parent_id', 0)->take(3)->get();
        // dd($introduce->content);
        return view('user.pages.detail-cars', compact('cars', 'categoryCar', 'categoryTour'));
    }
    public function categorycar($id)
    {
        $cars = Cars::where('category_car_id', $id)->take(10)->get();
        $categoryname = CategoryCars::find($id);
        $categoryCar = CategoryCars::where('parent_id', 0)->take(3)->get();
        $categoryTour = CategoriesTour::where('parent_id', 0)->take(3)->get();
        // $TourSame = Tour::where('category_tour_id', '=', $tour->category_tour_id)->get();
        return view('user.pages.categorycar', compact('categoryCar', 'categoryTour', 'cars', 'categoryname'));
    }
    public function user()
    {
        $user = Auth::user();
        $tour = oder::where('user_id', $user->id)->get();
        $tourwat = oder::where('status', 0)->where('user_id', $user->id)->get();
        $tourconfirm = oder::where('status', 1)->where('user_id', $user->id)->get();
        $categoryCar = CategoryCars::where('parent_id', 0)->take(3)->get();
        // dd($tour->name);
        $categoryTour = CategoriesTour::where('parent_id', 0)->take(3)->get();
        return view('user.pages.user', compact('categoryCar', 'categoryTour', 'tour', 'user', 'tourwat', 'tourconfirm'));
    }
}
