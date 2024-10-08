<?php

use App\Models\service;
use App\Models\Documents;
use GuzzleHttp\Middleware;
use App\Models\information;
use App\Models\LatestUpdate;
use App\Models\SportsOfficer;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\OfficersController;
use App\Http\Controllers\EventsNewsController;
use App\Http\Controllers\InformationController;
use App\Http\Controllers\BookServicesController;
use App\Http\Controllers\LatestUpdateController;
use App\Http\Controllers\LibraryCatalogueController;
use App\Http\Controllers\ResearchLearningController;


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

Route::get('/',[HomeController::class,'newHome']);
Route::get('/newHome',[HomeController::class,'newHome']);
Route::get('/upcomingEvents',[HomeController::class,'UpcomingEvents']);
Route::get('/recentNews',[HomeController::class,'RecentNews']);
Route::get('/whoIsWho',[HomeController::class,'WhoIsWho']);

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
    $officers = SportsOfficer::all(); 
    return view('pages.about', compact('officers')); 
})->name('about');

Route::get('/contact', function () {
    return view('pages.contact');
})->name('contact');

// Route::get('/homepage', function () {
//     $latestUpdates = LatestUpdate::all();
//     $services = Service::all();
//     return view('home.homepage', compact('services', 'latestUpdates'));
// })->name('homepage');
Route::get('/homepage',[HomeController::class,'newHome'])->name('homepage');


Route::get('/organizations', function () {
    return view('pages.organizations');
})->name('organizations');

Route::get('/documents', function () {
    $document = Documents::all(); 
    return view('pages.documents', compact('document')); 
})->name('documents');

Route::get('/information', function () {
    $information = Information::all(); // Fetch all data from the Information model
    return view('pages.information', compact('information')); // Pass it to the view
})->name('information');

Route::get('/gallery', function () {
    return view('pages.gallery');
})->name('gallery');

Route::get('/testing', function () {
    return view('pages.testing');
})->name('testing');






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

// Posts View

Route::get('/indexposts', [PostController::class, 'index'])->middleware(['auth', 'verified'])->name('posts.indexposts');

// Information View

Route::get('/indexinformation', [InformationController::class, 'index'])->middleware(['auth', 'verified'])->name('posts.indexinformation');

// Officers View

Route::get('/indexofficers', [OfficersController::class, 'index'])->middleware(['auth', 'verified'])->name('posts.indexofficers');

//Updates View

Route::get('/admin.index', [LatestUpdateController::class, 'index'])->middleware(['auth', 'verified'])->name('admin.latest-updates.index');


Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';

//Admin auth

//Route::get('admin/dashboard',[HomeController::class,'index'])->middleware(['auth','admin']);
    
Route::get('edit/{id}',[AdminController::class,'edit']);


// For Service Slider

Route::resource('services', ServiceController::class);


// For LatestUpdate 

Route::prefix('admin')->middleware(['auth', 'admin'])->group(function () {
    Route::resource('latest-updates', LatestUpdateController::class);

});


//Books section

Route::get('/bookhome', [LibraryCatalogueController::class, 'home'])->name('bookhome');
Route::get('/books', [LibraryCatalogueController::class, 'books'])->name('books');
Route::get('/journals', [LibraryCatalogueController::class, 'journals'])->name('journals');
Route::get('/eresources', [LibraryCatalogueController::class, 'eresources'])->name('eresources');
Route::get('/feedback', [LibraryCatalogueController::class, 'feedback'])->name('feedback');
Route::get('/bookstaff', [HomeController::class, 'WhoIsWho'])->name('bookstaff');
Route::get('/faq', [LibraryCatalogueController::class, 'faq'])->name('faq');
Route::get('/policy', [LibraryCatalogueController::class, 'policy'])->name('policy');
Route::get('/donation', [LibraryCatalogueController::class, 'donation'])->name('donation');
Route::get('/book-services', [BookServicesController::class, 'index'])->name('book-services');
Route::get('/research-learning', [ResearchLearningController::class, 'index'])->name('research-learning');
Route::get('/events-news', [EventsNewsController::class, 'index'])->name('events-news');

//cicular test

Route::get('/books-by-division', [LibraryCatalogueController::class, 'booksByDivision'])->name('books.division');
Route::get('/books-by-subdivision/{subdivision}', [LibraryCatalogueController::class, 'booksBySubdivision'])->name('books.subdivision');



use App\Http\Controllers\Admin\EventController;
use App\Http\Controllers\Admin\WhoIsWhoController;


// Admin LTE Dashboard

Route::prefix('admin')->middleware(['auth'])->group(function () {

    Route::get('dashboard', [App\Http\Controllers\Admin\DashboardController::class, 'index'])->name('admin.dashboard');

    Route::resource('events', EventController::class);
    Route::resource('whoiswho', WhoIsWhoController::class);    
});







