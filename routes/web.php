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
use App\Http\Controllers\DashboardHomeController;
use App\Http\Controllers\DashboardContactController;
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

Route::get('/profile', [ProfileController::class, 'index'])->name('profile');
//halaman single post(single profile)
route::get('profiles/{profile:slug}', [ProfileController::class, 'show']);

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/home', [HomeController::class, 'index'])->name('home');

Route::get('/contact', [ContactController::class, 'index'])->name('contact');

Route::get('/register', [RegisterController::class, 'index'])->name('register')->middleware('guest');
Route::post('/register', [RegisterController::class, 'store'])->name('register');

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

route::get('/authors/{author:username}', function(user $author){
    return view('layouts.public.profiles', [
        'title' => "Recipe By Author : $author->name",
        'profiles' => $author->profiles->load('category', 'author')
    ]);
});

//Private Area
Route::get('/dashboard/profiles/checkSlug', [DashboardProfileController::class, 'checkSlug'])->middleware('auth');
Route::get('/dashboard/homes/checkSlug', [DashboardHomeController::class, 'checkSlug'])->middleware('auth');

Route::resource('/dashboard/profiles', DashboardProfileController::class)->middleware('auth');
Route::resource('/dashboard/homes', DashboardHomeController::class)->middleware('auth');
Route::resource('/dashboard/contacts', DashboardContactController::class)->middleware('auth');
Route::prefix('dashboard')->group(function () {
Route::get('profiles', [ProfileController::class, 'index'])->name('dashboard.private.index');
});
/*login*/
Route::get('/login', function(){
    return view('layouts.public.login');
})->name('login');

Route::get('/login', [LoginController::class, 'index'])->name('login')->middleware('guest');
Route::post('/login', [LoginController::class, 'authenticate'])->name('login');
Route::post('/logout', [LoginController::class, 'logout']);

/*dashboard*/
Route::get('/Dashboard', function(){
    return view('layouts.private.index');
})->name('dashboard');

Route::get('/profile', [ProfileController::class, 'index'])->name('profile');
Route::post('/profile', [ProfileController::class, 'create'])->name('profile.create');
Route::resource('profiles', ProfilesController::class);

Route::get('/error', function () {
    return view('error');
});
