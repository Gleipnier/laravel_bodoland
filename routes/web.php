<?php

use GuzzleHttp\Middleware;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\ProfileController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/',[HomeController::class,'homepage']);

/*Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');*/

route::get('/home',[HomeController::class,'index'])->middleware('auth')->name('home');

route::get('post',[HomeController::class,'post'])->middleware(['auth','admin']);

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';

Route::get('/about', function () {
    return view('pages.about');
})->name('about');

Route::get('/contact', function () {
    return view('pages.contact');
})->name('contact');

Route::get('/homepage', function () {
    return view('home.homepage');
})->name('homepage');

Route::get('/organizations', function () {
    return view('pages.organizations');
})->name('organizations');

Route::get('/documents', function () {
    return view('pages.documents');
})->name('documents');

Route::get('/information', function () {
    return view('pages.information');
})->name('information');

Route::get('/gallery', function () {
    return view('pages.gallery');
})->name('gallery');



//For making posts
Route::post('/create-Post',[PostController::class,'createPost']);

//For Updates

Route::post('/update-Post',[PostController::class,'updatePost']);

//For fetching
Route::get('/edit/{post}', [PostController::class, 'edit'])->name('posts.edit');

// For deleting
Route::delete('/posts/{id}', [PostController::class, 'destroy'])->name('posts.destroy');


// For index view
// Route::get('/index', [PostController::class, 'index'])->name('index');

Route::get('/posts', [PostController::class, 'index'])->name('posts.index');

// View index

Route::get('/dashboard', function () {
    return view('admin.index');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::get('/index', function () {
    return view('posts.index');
})->middleware(['auth', 'verified'])->name('index');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';

//Admin auth

Route::get('admin/dashboard',[HomeController::class,'index'])->
    middleware(['auth','admin']);
    
Route::get('edit/{id}',[AdminController::class,'edit']);