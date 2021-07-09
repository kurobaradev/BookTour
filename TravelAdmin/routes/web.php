<?php

use App\Http\Controllers\admin\AdminBlogController;
use App\Http\Controllers\admin\AdminCarController;
use App\Http\Controllers\admin\AdminCategoriesTourController;
use App\Http\Controllers\admin\AdminCategoryBlogController;
use App\Http\Controllers\admin\AdminCategoryCarController;
use App\Http\Controllers\admin\AdminController;
use App\Http\Controllers\admin\AdminTourController;
use Illuminate\Support\Facades\Route;

use Illuminate\Support\Facades\Auth;
Route::get('/', function () {
    return view('welcome');
});
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
    




    Route::prefix('oders')->group(function () {
        Route::get('/', function () {      
            return 'List oders';
        });
        Route::get('/create',  function () {      
            return 'Create oder';
        });
        Route::get('/edit', function () {      
            return 'edit oder';
        });

    });
    Route::prefix('categories-car')->group(function () {
        Route::get('/', function () {      
            return 'List categories car';
        });
        Route::get('/create',  function () {      
            return 'Create categories car';
        });
        Route::get('/edit', function () {      
            return 'edit categories car';
        });

    });
    Route::prefix('cars')->group(function () {
        Route::get('/', function () {      
            return 'List cars';
        });
        Route::get('/create',  function () {      
            return 'Create car';
        });
        Route::get('/edit', function () {      
            return 'edit car';
        });

    });
    Route::prefix('categories-news')->group(function () {
        Route::get('/', function () {      
            return 'List categories news';
        });
        Route::get('/create',  function () {      
            return 'Create categories news';
        });
        Route::get('/edit', function () {      
            return 'edit categories news';
        });

    });
    Route::prefix('news')->group(function () {
        Route::get('/', function () {      
            return 'List news';
        });
        Route::get('/create',  function () {      
            return 'Create news';
        });
        Route::get('/edit', function () {      
            return 'edit news';
        });

    });

    // Route::prefix('product')->group(function () {
    //     Route::get('/', [ AdminProductController::class,'index'])->name('product.index');
    //     Route::get('/create', [ AdminProductController::class,'create'])->name('product.create');
    //     Route::post('/store', [ AdminProductController::class,'store'])->name('product.store');
    //     Route::get('/edit/{id}', [ AdminProductController::class,'edit'])->name('product.edit');
    //     Route::post('/update/{id}', [ AdminProductController::class,'update'])->name('product.update');
    //     Route::get('/delete/{id}', [ AdminProductController::class,'delete'])->name('product.delete');
    // });

    // Route::prefix('slider')->group(function () {
    //     Route::get('/', [ AdminSliderController::class,'index'])->name('slider.index');
    //     Route::get('/create', [ AdminSliderController::class,'create'])->name('slider.create');
    //     Route::post('/store', [ AdminSliderController::class,'store'])->name('slider.store');
    //     Route::get('/edit/{id}', [ AdminSliderController::class,'edit'])->name('slider.edit');
    //     Route::post('/update/{id}', [ AdminSliderController::class,'update'])->name('slider.update');
    //     Route::get('/delete/{id}', [ AdminSliderController::class,'delete'])->name('slider.delete');
    // });
    
  
});


Auth::routes();
Auth::routes();