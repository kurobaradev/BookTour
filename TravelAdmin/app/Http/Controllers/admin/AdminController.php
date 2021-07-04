<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
    function loginAdmin()
    {
        // dd(bcrypt("123456789"));
        if (Auth::check()) {
            return redirect(route('admin.dashboard'));   
        }
        return view('admin.login');
    }
    function postloginAdmin(Request $request)
    {
        $remember = $request->has('remember_me') ? true: false;
        if (Auth::attempt([
            'email' => $request->email,
            'password' => $request->password],$remember))
        {
            return redirect(route('admin.dashboard'));   

        }
    }
}
