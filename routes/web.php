<?php

use App\Models\user;
use App\Models\Category;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ProfilesController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\ContactUsController;
use App\Http\Controllers\DashboardProfileController;


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

Route::get('/dashboard', function(){
    return view('layouts.private.dashboard');
})->name('dashboard')->middleware('auth');

Route::get('/login', [LoginController::class, 'index'])->name('login')->middleware('guest');
Route::post('/login', [LoginController::class, 'authenticate'])->name('login');
Route::post('/logout', [LoginController::class, 'logout']);

// profile 
Route::get('/profile', [ProfilesController::class, 'index'])->name('profile');

// home 
Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/home', [HomeController::class, 'index'])->name('home');


// contact
Route::get('/contact', [ContactController::class, 'index'])->name('contact');
Route::post('/contacts', [ContactController::class, 'store'])->name('contactsend');

// register
Route::get('/register', [RegisterController::class, 'index'])->name('register')->middleware('guest');
Route::post('/register', [RegisterController::class, 'store'])->name('register');

// categori
route::get('/categories', function(){
    return view('layouts.public.categories', [
        'categories' => category::all()
    ]);
})->name('categories');

route::get('/categories/{category:slug}', function(category $category)
{
    return view('layouts.public.profiles', [
        'title' => "Recipe By Category : $category->name",
        'profiles' => $category->profiles->load('category', 'author')
    ]);
});

/*dashboard*/
Route::get('/Dashboard', function(){
    return view('layouts.private.dashboard');
})->name('dashboard');

// eror
Route::get('/error', function () {
    return view('error');
});

// /Private Area
Route::get('/dashboard/profiles/checkSlug', [DashboardProfileController::class, 'checkSlug'])->middleware('auth');
Route::resource('/dashboard/products', DashboardProfileController::class)->middleware('auth');


Route::middleware(['auth'])->group(function () {
    Route::resource('/dashboard/products', DashboardProfileController::class);
});

