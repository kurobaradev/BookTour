<?php

use App\Http\Controllers\admin\AdminBlogController;
use App\Http\Controllers\admin\AdminCarController;
use App\Http\Controllers\admin\AdminCategoriesTourController;
use App\Http\Controllers\admin\AdminCategoryBlogController;
use App\Http\Controllers\admin\AdminCategoryCarController;
use App\Http\Controllers\admin\AdminController;
use App\Http\Controllers\admin\AdminIntroduceController;
use App\Http\Controllers\admin\AdminSliderController;
use App\Http\Controllers\admin\AdminTourController;
use Illuminate\Support\Facades\Route;

use Illuminate\Support\Facades\Auth;
Route::get('/', function () {return view('user.pages.trangchu');});
Route::get('/user', function () {return view('user.pages.user');});
Route::get('/tour', function () {return view('user.pages.tour');});
Route::get('/detail-tour', function () {return view('user.pages.detail-tour');});
Route::get('/search', function () {return view('user.pages.search');});
Route::get('/news', function () {return view('user.pages.news');});
Route::get('/detail-news', function () {return view('user.pages.detail-news');});
Route::get('/cars', function () {return view('user.pages.cars');});
Route::get('/pay', function () {return view('user.pages.pay');});
Route::get('/book-tour', function () {return view('user.pages.book-tour');});
Route::get('/introduce', function () {return view('user.pages.introduce');});

Route::prefix('/admin')->group(function () {

    Route::get('/', [ AdminController::class,'loginAdmin']);
    Route::post('/', [ AdminController::class,'postloginAdmin']);
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
    
  
});


Auth::routes();
Auth::routes();