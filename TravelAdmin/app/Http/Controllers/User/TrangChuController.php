<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Mail\OderCar;
use App\Models\Blogs;
use App\Models\Cars;
use App\Models\CategoriesTour;
use App\Models\CategoryCars;
use App\Models\Introduce;
use App\Models\oder;
use App\Models\Oder_Car;
use App\Models\Slider;
use App\Models\Tour;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;

class TrangChuController extends Controller
{
    public function index()
    {
        $car = Cars::latest()->get();
        $slider = Slider::latest()->get();
        $tours = Tour::limit(6)->get();
        $blogs = Blogs::latest()->get();
        $categoryCar = CategoryCars::where('parent_id', 0)->take(3)->get();
        $categoryTour = CategoriesTour::where('parent_id', 0)->take(3)->get();
        return view('user.pages.trangchu', compact('slider', 'tours', 'blogs', 'categoryCar', 'categoryTour','car'));
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
        $slider = Slider::all();
        $cars = Cars::all();
        $categoryCar = CategoryCars::where('parent_id', 0)->take(3)->get();
        $categoryTour = CategoriesTour::where('parent_id', 0)->take(3)->get();
        // dd($introduce->content);
        return view('user.pages.cars', compact('slider','cars', 'categoryCar', 'categoryTour'));
    }
    public function detailcars($id)
    {
        $slider = Slider::all();
        $cars = Cars::find($id);
        $categoryCar = CategoryCars::where('parent_id', 0)->take(3)->get();
        $categoryTour = CategoriesTour::where('parent_id', 0)->take(3)->get();
        // dd($introduce->content);
        return view('user.pages.detail-cars', compact('slider','cars', 'categoryCar', 'categoryTour'));
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
        
        $categoryCar = CategoryCars::where('parent_id', 0)->take(3)->get();
        // dd($tour->name);
        $categoryTour = CategoriesTour::where('parent_id', 0)->take(3)->get();
        if (Auth::check()) {
            $user = Auth::user();
            $tour = oder::where('user_id', $user->id)->get();
            $tourwat = oder::where('status', 0)->where('user_id', $user->id)->get();
            $tourconfirm = oder::where('status', 1)->where('user_id', $user->id)->get();
            $carwat = Oder_Car::where('status', 0)->where('user_id', $user->id)->get();
            $carconfirm = Oder_Car::where('status', 1)->where('user_id', $user->id)->get();
            // return redirect(route('thongtincanhan.index'));
            return view('user.pages.user', compact('categoryCar', 'categoryTour', 'tour', 'user', 'tourwat', 'tourconfirm','carwat', 'carconfirm'));
        }
        return view('user.pages.loginUser', compact('categoryCar', 'categoryTour'));
    }
   public function updateprofile(Request $request)
   {
       $id = Auth::user()->id;
            User::find($id)->update([
                'name' => $request->name,
                'email' => Auth::user()->email,
                'address' => $request->address,
                'phone' => $request->phone,
            ]);
        session()->flash('success', 'Cập nhật thành công !.');
        return redirect(route('thongtincanhan.index'));
    
   }
    public function searchcar()
    {
        $search_text= $_GET['search_car'];
        $cars = Cars::where('name','LIKE','%'.$search_text.'%')->get();
        $slider = Slider::all();
        $categoryCar = CategoryCars::where('parent_id', 0)->take(3)->get();
        // dd($tour->name);
        $categoryTour = CategoriesTour::where('parent_id', 0)->take(3)->get();
        return view('user.pages.searchcar', compact('cars','categoryCar', 'categoryTour','slider'));
    }
    public function searchtour()
    {
        $search_text= $_GET['search_tour'];
        $tours = Tour::where('name','LIKE','%'.$search_text.'%')->get();
        $slider = Slider::all();
        $categoryCar = CategoryCars::where('parent_id', 0)->take(3)->get();
        // dd($tour->name);
        $categoryTour = CategoriesTour::where('parent_id', 0)->take(3)->get();
        return view('user.pages.searchtour', compact('categoryCar', 'categoryTour','slider','tours'));
    }
    public function bookcar($id)
    {
        $categoryCar = CategoryCars::where('parent_id', 0)->take(3)->get();
        // dd($tour->name);
        $categoryTour = CategoriesTour::where('parent_id', 0)->take(3)->get();
        if (Auth::check()) {
            $cars = Cars::find($id);
            // return redirect(route('thongtincanhan.index'));
            return view('user.pages.bookcar', compact('categoryCar', 'categoryTour','cars'));
        }
        return view('user.pages.loginUser', compact('categoryCar', 'categoryTour'));
    }
    public function payaddcar(Request $request)
    {
        $dataOderCarCreate = [
            'car_name' => $request->car_name,
            'departed' => $request->departed,
            'duration' => $request->duration,
            'price' => $request->price,
            'phone' => $request->phone,
            'user_name' => Auth::user()->name,
            'user_mail' => Auth::user()->email,
            'status' => 0,
        ];
        $categoryCar = CategoryCars::where('parent_id', 0)->take(3)->get();
        $categoryTour = CategoriesTour::where('parent_id', 0)->take(3)->get();
        return view('user.pages.paycar', compact('categoryCar', 'categoryTour', 'dataOderCarCreate'));
        // dd($dataOderCreate);
        // $this->blogs->create($dataBlogCreate);
        // return redirect(route('categorycar.index'));
        // $TourSame = Tour::where('category_tour_id', '=', $tour->category_tour_id)->get();
    }
    public function payconfirmcar(Request $request)
    {
        $dataOdercarCreate = Oder_Car::create([
            'car_name' => $request->car_name,
            'departed' => $request->departed,
            'duration' => $request->duration,
            'price' => $request->price,
            'phone' => $request->phone,
            'user_name' => Auth::user()->name,
            'user_mail' => Auth::user()->email,
            'status' => 0,
            'user_id' => auth()->id(),
        ]);
        Mail::to(Auth::user()->email)->send(new OderCar($dataOdercarCreate));
        $dataOdercarCreate->save();
        session()->flash('success', 'Đặt xe thành công !.');
        return redirect(route('thongtincanhan.index'));
    }
}
