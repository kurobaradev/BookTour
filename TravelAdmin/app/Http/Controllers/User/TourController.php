<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\Cars;
use App\Models\CategoriesTour;
use App\Models\CategoryCars;
use App\Models\oder;
use App\Models\Slider;
use App\Models\Tour;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;
use App\Mail\Mailodertour;
class TourController extends Controller
{
    public function index($id)
    {  
        $slider = Slider::latest()->get();
        $tour = Tour::find($id);
        $categoryCar = CategoryCars::where('parent_id', 0)->take(3)->get();
        $categoryTour = CategoriesTour::where('parent_id', 0)->take(3)->get();
        $TourSame = Tour::where('category_tour_id', '=', $tour->category_tour_id)->get();
        return view('user.pages.detail-tour', compact('slider','tour', 'categoryCar', 'categoryTour', 'TourSame'));
    }
    public function alltour()
    {
        $slider = Slider::latest()->get();
        $tour = Tour::all();
        $categoryCar = CategoryCars::where('parent_id', 0)->take(3)->get();
        $categoryTour = CategoriesTour::where('parent_id', 0)->take(3)->get();
        return view('user.pages.categorytour', compact('slider','categoryCar', 'categoryTour', 'tour'));
    }
    public function categorytour($id)
    {
        $slider = Slider::latest()->get();
        $tour = Tour::where('category_tour_id', $id)->take(3)->get();
        $categoryname = CategoriesTour::find($id);
        $categoryCar = CategoryCars::where('parent_id', 0)->take(3)->get();
        $categoryTour = CategoriesTour::where('parent_id', 0)->take(3)->get();
        // $TourSame = Tour::where('category_tour_id', '=', $tour->category_tour_id)->get();
        return view('user.pages.tour', compact('slider', 'categoryCar', 'categoryTour', 'tour', 'categoryname'));
    }
    public function booktour($id)
    {
        $tour = Tour::find($id);
        $car = Cars::all();
        $categoryCar = CategoryCars::where('parent_id', 0)->take(3)->get();
        $categoryTour = CategoriesTour::where('parent_id', 0)->take(3)->get();
        $TourSame = Tour::where('category_tour_id', '=', $tour->category_tour_id)->get();
        return view('user.pages.book-tour', compact('categoryCar', 'categoryTour', 'tour', 'TourSame', 'car'));
    }
    public function pay($id)
    {
        $categoryCar = CategoryCars::where('parent_id', 0)->take(3)->get();
        $categoryTour = CategoriesTour::where('parent_id', 0)->take(3)->get();
        // $TourSame = Tour::where('category_tour_id', '=', $tour->category_tour_id)->get();
        return view('user.pages.pay', compact('categoryCar', 'categoryTour',));
    }
    public function payadd(Request $request)
    {
        $dataOderCreate = [
            'tour_name' => $request->tour_name,
            'tour_id' => $request->tour_id,
            'departed' => $request->departed,
            'duration' => $request->duration,
            'Nguoilon' => $request->Nguoilon,
            'treem' => $request->treem,
            'phone' => $request->phone,
            'price_car' => $request->price_car,
            'price' => ((($request->price_tour * $request->Nguoilon) + (($request->price_tour * $request->treem) / 100 * 30)) + $request->price_car),
            'user_name' => Auth::user()->name,
            'user_mail' => Auth::user()->email,
            'status' => 0,
        ];
        $categoryCar = CategoryCars::where('parent_id', 0)->take(3)->get();
        $categoryTour = CategoriesTour::where('parent_id', 0)->take(3)->get();
        return view('user.pages.pay', compact('categoryCar', 'categoryTour', 'dataOderCreate'));
        // dd($dataOderCreate);
        // $this->blogs->create($dataBlogCreate);
        // return redirect(route('categorycar.index'));
        // $TourSame = Tour::where('category_tour_id', '=', $tour->category_tour_id)->get();
    }
    public function payconfirm(Request $request)
    {
        $dataOderCreate = oder::create([
            'tour_name' => $request->tour_name,
            'tour_id' => $request->tour_id,
            'departed' => $request->departed,
            'duration' => $request->duration,
            'Nguoilon' => $request->Nguoilon,
            'treem' => $request->treem,
            'phone' => $request->phone,
            'price_car' => $request->price_car,
            'price' => $request->price,
            'user_name' => Auth::user()->name,
            'user_mail' => Auth::user()->email,
            'status' => 0,
            'user_id' => auth()->id(),
        ]);
        Mail::to('hoan.uda@gmail.com')->send(new Mailodertour($dataOderCreate));
        $dataOderCreate->save();
        return redirect(route('thongtincanhan.index'));
    }
    public function search()
    {
        $slider = Slider::latest()->get();
        $tour = Tour::all();
        $categoryCar = CategoryCars::where('parent_id', 0)->take(3)->get();
        $categoryTour = CategoriesTour::where('parent_id', 0)->take(3)->get();
        return view('user.pages.search', compact('slider','categoryCar', 'categoryTour', 'tour'));
    }
    public function loginUser()
    {
        $tour = Tour::all();
        $categoryCar = CategoryCars::where('parent_id', 0)->take(3)->get();
        $categoryTour = CategoriesTour::where('parent_id', 0)->take(3)->get();
        return view('user.pages.loginUser', compact('categoryCar', 'categoryTour', 'tour'));
    }
    public function registrationUser()
    {
        $tour = Tour::all();
        $categoryCar = CategoryCars::where('parent_id', 0)->take(3)->get();
        $categoryTour = CategoriesTour::where('parent_id', 0)->take(3)->get();
        return view('user.pages.registrationUser', compact('categoryCar', 'categoryTour', 'tour'));
    }
    public function confirmEmail()
    {
        $tour = Tour::all();
        $categoryCar = CategoryCars::where('parent_id', 0)->take(3)->get();
        $categoryTour = CategoriesTour::where('parent_id', 0)->take(3)->get();
        return view('user.pages.confirmEmail', compact('categoryCar', 'categoryTour', 'tour'));
    }
}
