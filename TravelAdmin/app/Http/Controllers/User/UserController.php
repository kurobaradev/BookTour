<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Http\Requests\RegisterRequest;
use App\Models\CategoriesTour;
use App\Models\CategoryCars;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    function loginUser()
    {
        $categoryCar = CategoryCars::where('parent_id', 0)->take(3)->get();
        $categoryTour = CategoriesTour::where('parent_id', 0)->take(3)->get();
        // $remember = $request->has('remember_me') ? true : false;
        // dd(bcrypt("123456789"));
        if (Auth::check()) {
            return redirect(route('thongtincanhan.index'));
        }
        return view('user.pages.loginUser', compact('categoryCar', 'categoryTour'));
    }
    function postloginUser(Request $request)
    {
        $remember = $request->has('remember_me') ? true : false;
        if (Auth::attempt([
            'email' => $request->email,
            'password' => $request->password 
        ], $remember)) {
            session()->flash('success', 'Đăng nhập thành công !.');
            return redirect(route('thongtincanhan.index'));
        }
        else{
            session()->flash('fail', 'Tài khoản hoặc mật khẩu sai !.');
            return redirect(route('userlogin.index'));
        }
    }

    public function logout(Request $request)
    {
        $categoryCar = CategoryCars::where('parent_id', 0)->take(3)->get();
        $categoryTour = CategoriesTour::where('parent_id', 0)->take(3)->get();
        // $remember = $request->has('remember_me') ? true : false;
        Auth::logout();
        return redirect(route('userlogin.index', compact('categoryCar', 'categoryTour')));
    }
    function registerUser()
    {
        $categoryCar = CategoryCars::where('parent_id', 0)->take(3)->get();
        $categoryTour = CategoriesTour::where('parent_id', 0)->take(3)->get();
        // $remember = $request->has('remember_me') ? true : false;
        // dd(bcrypt("123456789"));
        if (Auth::check()) {
            return redirect(route('thongtincanhan.index'));
        }
        return view('user.pages.registrationUser', compact('categoryCar', 'categoryTour'));
    }
    
    public function postregisterUser(RegisterRequest $request)
    {
        User::create([
            'name' => $request->name,
            'email' =>$request->email,
            'address'=>$request->address,
            'phone'=>$request->phone,
            'password' => bcrypt($request->password)
        ]);
        session()->flash('success', 'Đăng kí thành công !.');
        return redirect(route('userlogin.index'));
    }
}
