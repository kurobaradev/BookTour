<?php

use App\Http\Controllers\admin\AdminBlogController;
use App\Http\Controllers\admin\AdminCarController;
use App\Http\Controllers\admin\AdminCategoriesTourController;
use App\Http\Controllers\admin\AdminCategoryBlogController;
use App\Http\Controllers\admin\AdminCategoryCarController;
use App\Http\Controllers\admin\AdminController;
use App\Http\Controllers\admin\AdminIntroduceController;
use App\Http\Controllers\admin\AdminOderCarController;
use App\Http\Controllers\admin\AdminOderController;
use App\Http\Controllers\admin\AdminSliderController;
use App\Http\Controllers\admin\AdminTourController;
use App\Http\Controllers\User\UserController;
use App\Http\Controllers\User\TinTucController;
use App\Http\Controllers\User\TourController;
use App\Http\Controllers\User\TrangChuController;
use App\Http\Controllers\User\UserController as UserUserController;
use Illuminate\Support\Facades\Route;

use Illuminate\Support\Facades\Auth;

Route::prefix('/')->group(function () {
    
    Route::get('/',  [ TrangChuController::class,'index'])->name('trangchu.index');  
    Route::get('/chi-tiet-tin-tuc/{id}',  [ TinTucController::class,'index'])->name('chitiettintuc.index');
    Route::get('/chi-tiet-tour/{id}', [TourController::class,'index'])->name('chitiettour.index');
    Route::get('/tour/{id}/{slug}.html', [TourController::class,'categorytour'])->name('categorytour.index');
    Route::get('/tour', [TourController::class,'alltour'])->name('tatcatour.index');
    Route::get('/book-tour/{id}', [TourController::class,'booktour'])->name('booktour.index');
    Route::post('/pay/add', [TourController::class,'payAdd'])->name('thanhtoan.index');
    Route::post('/pay/payconfirm', [TourController::class,'payconfirm'])->name('payconfirm.index');
    Route::get('/news.html', [ TinTucController::class,'allnews'])->name('tintuc.index');
    Route::get('/introduce.html', [ TrangChuController::class,'about'])->name('gioithieu.index');  
    Route::get('/cars', [ TrangChuController::class,'cars'])->name('xe.index');  
    Route::get('/cars/{id}', [ TrangChuController::class,'detailcars'])->name('chitietxe.index');  
    Route::get('/cars/{id}/{slug}.html', [TrangChuController::class,'categorycar'])->name('danhmucxe.index');
    Route::get('/timkiemxe', [ TrangChuController::class,'searchcar'])->name('timkiemxe.index');  
    Route::get('/timkiemtour', [ TrangChuController::class,'searchtour'])->name('timkiemtour.index');  
    Route::get('/loginUser', [ TrangChuController::class,'loginUser'])->name('loginUser.index'); 
    Route::get('/registrationUser', [ TrangChuController::class,'registrationUser'])->name('registrationUser.index');
    Route::get('/confirmEmail', [ TrangChuController::class,'confirmEmail'])->name('confirmEmail.index'); 
    Route::get('/user', [ TrangChuController::class,'user'])->name('thongtincanhan.index');  
    Route::get('/book-car/{id}', [ TrangChuController::class,'bookcar'])->name('bookcar.index');
    Route::post('/paycar/add', [TrangChuController::class,'payaddcar'])->name('thanhtoanxe.index');
    Route::post('/paycar/payconfirm', [TrangChuController::class,'payconfirmcar'])->name('payconfirmcar.index');
    Route::get('/loginuser', [ UserController::class,'loginUser'])->name('userlogin.index');
    Route::post('/loginuser', [ UserController::class,'postloginUser'])->name('postloginuser.index');
    Route::get('/registeruser', [ UserUserController::class,'registerUser'])->name('userregister.index');
    Route::post('/registeruser', [ UserController::class,'postregisterUser']);
    Route::get('/logoutuser', [ UserController::class,'logout'])->name('user.logout');;
});

Route::prefix('/admin')->group(function () {

    Route::get('/', [ AdminController::class,'loginAdmin'])->name('adminlogin.index');
    Route::post('/', [ AdminController::class,'postloginAdmin']);
    Route::get('/logout', [ AdminController::class,'logout'])->name('admin.logout');;
    Route::get('/dashboard', function () {return view('admin.dashboard');})->name('admin.dashboard');
    Route::prefix('categories-tour')->group(function () {
        Route::get('/', [ AdminCategoriesTourController::class,'index'])->name('categoriestour.index');
        Route::get('/create', [ AdminCategoriesTourController::class,'create'])->name('categoriestour.create');
        Route::post('/store', [ AdminCategoriesTourController::class,'store'])->name('categoriestour.store');
        Route::get('/edit/{id}', [ AdminCategoriesTourController::class,'edit'])->name('categoriestour.edit');
        Route::post('/update/{id}', [ AdminCategoriesTourController::class,'update'])->name('categoriestour.update');
        Route::get('/delete/{id}', [ AdminCategoriesTourController::class,'delete'])->name('categoriestour.delete');

    });
    Route::prefix('tour')->group(function () {
        Route::get('/', [ AdminTourController::class,'index'])->name('tour.index');
        Route::get('/create', [ AdminTourController::class,'create'])->name('tour.create');
        Route::post('/store', [ AdminTourController::class,'store'])->name('tour.store');
        Route::get('/edit/{id}', [ AdminTourController::class,'edit'])->name('tour.edit');
        Route::post('/update/{id}', [ AdminTourController::class,'update'])->name('tour.update');
        Route::get('/delete/{id}', [ AdminTourController::class,'delete'])->name('tour.delete');

    });
    Route::prefix('category-car')->group(function () {
        Route::get('/', [ AdminCategoryCarController::class,'index'])->name('categorycar.index');
        Route::get('/create', [ AdminCategoryCarController::class,'create'])->name('categorycar.create');
        Route::post('/store', [ AdminCategoryCarController::class,'store'])->name('categorycar.store');
        Route::get('/edit/{id}', [ AdminCategoryCarController::class,'edit'])->name('categorycar.edit');
        Route::post('/update/{id}', [ AdminCategoryCarController::class,'update'])->name('categorycar.update');
        Route::get('/delete/{id}', [ AdminCategoryCarController::class,'delete'])->name('categorycar.delete');

    });
    Route::prefix('car')->group(function () {
        Route::get('/', [ AdminCarController::class,'index'])->name('car.index');
        Route::get('/create', [ AdminCarController::class,'create'])->name('car.create');
        Route::post('/store', [ AdminCarController::class,'store'])->name('car.store');
        Route::get('/edit/{id}', [ AdminCarController::class,'edit'])->name('car.edit');
        Route::post('/update/{id}', [ AdminCarController::class,'update'])->name('car.update');
        Route::get('/delete/{id}', [ AdminCarController::class,'delete'])->name('car.delete');

    });
    Route::prefix('category-blog')->group(function () {
        Route::get('/', [ AdminCategoryBlogController::class,'index'])->name('categoryblog.index');
        Route::get('/create', [ AdminCategoryBlogController::class,'create'])->name('categoryblog.create');
        Route::post('/store', [ AdminCategoryBlogController::class,'store'])->name('categoryblog.store');
        Route::get('/edit/{id}', [ AdminCategoryBlogController::class,'edit'])->name('categoryblog.edit');
        Route::post('/update/{id}', [ AdminCategoryBlogController::class,'update'])->name('categoryblog.update');
        Route::get('/delete/{id}', [ AdminCategoryBlogController::class,'delete'])->name('categoryblog.delete');

    });
    Route::prefix('blog')->group(function () {
        Route::get('/', [ AdminBlogController::class,'index'])->name('blog.index');
        Route::get('/create', [ AdminBlogController::class,'create'])->name('blog.create');
        Route::post('/store', [ AdminBlogController::class,'store'])->name('blog.store');
        Route::get('/edit/{id}', [ AdminBlogController::class,'edit'])->name('blog.edit');
        Route::post('/update/{id}', [ AdminBlogController::class,'update'])->name('blog.update');
        Route::get('/delete/{id}', [ AdminBlogController::class,'delete'])->name('blog.delete');

    });
    Route::prefix('slider')->group(function () {
        Route::get('/', [ AdminSliderController::class,'index'])->name('slider.index');
        Route::post('/store', [ AdminSliderController::class,'store'])->name('slider.store');
        Route::get('/delete/{id}', [ AdminSliderController::class,'delete'])->name('slider.delete');

    });
    Route::prefix('introduce')->group(function () {
        Route::get('/', [ AdminIntroduceController::class,'index'])->name('introduce.index');
        Route::post('/update/{id}', [ AdminIntroduceController::class,'update'])->name('introduce.update');
    });
    Route::prefix('oder')->group(function () {
        Route::get('/', [ AdminOderController::class,'index'])->name('oder.index');
        Route::get('/store/{id}', [ AdminOderController::class,'update'])->name('confirmoder.index');
        Route::get('/pdf/{id}', [ AdminOderController::class,'pdf'])->name('pdftour.pdf');
    });
    Route::prefix('odercar')->group(function () {
        Route::get('/', [ AdminOderCarController::class,'index'])->name('odercar.index');
        Route::get('/store/{id}', [ AdminOderCarController::class,'update'])->name('confirmodercar.index');
        Route::get('/pdf/{id}', [ AdminOderCarController::class,'pdf'])->name('pdfcar.pdf');
    });
  
});


Auth::routes();
Auth::routes();
// Auth::logoutOtherDevices();