<?php

use App\Http\Controllers\LoginController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\BlogsController;
use App\Http\Controllers\ReviewController;
use App\Http\Controllers\SolutionController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Artisan;
use App\Http\Controllers\AttractionController;
use App\Http\Controllers\TeamController;
use App\Http\Controllers\UsersController;
use App\Http\Controllers\ContactController;

Route::get("/",[PageController::class,'Home'])->name("home");
Route::get("/about",[PageController::class,'About'])->name("about");
Route::get("/service",[PageController::class,'service'])->name("service");
Route::get("/contact",[PageController::class,'contact'])->name("contact");
Route::get("/blog",[PageController::class,'blogs'])->name("blog");
Route::get('/blog/{blog}', [PageController::class, 'showFrontend'])
    ->name('blog.read');

Route::get("/features",[PageController::class,'features'])->name("features");
Route::get("/ourteam",[PageController::class,'ourteam'])->name("ourteam");
Route::get('/ourteam/{team}', [PageController::class, 'showTeam'])
    ->name('ourteam.read');


Route::post('/contact-send', [ContactController::class, 'send'])
    ->name('contact.send');



Route::get("/testimonial",[PageController::class,'testimonial'])->name("testimonial");
// Route::get("/register",[LoginController::class,'Register'])->name("register");
// Route::post("/register",[LoginController::class,'store'])->name("register.store");
Route::get("/login",[LoginController::class,'Login'])->name("login");
Route::post("/login",[LoginController::class,'Login_check'])->name("Login_check");




Route::get('/cache-refresh', function () {
    Artisan::call('cache:clear');
    Artisan::call('config:clear');
    Artisan::call('route:clear');
    Artisan::call('view:clear');

    return '✅ Cache cleared successfully';
});




Route::middleware('auth')->group(function () {

    Route::get('/dashboard', [LoginController::class, 'dashboard'])
        ->name('dashboard');

      Route::resource('users', UsersController::class);
 
   
    Route::resource('blogs', BlogsController::class);
    Route::resource('solutions', SolutionController::class);

    Route::resource('reviews', ReviewController::class);
Route::resource('attractions', AttractionController::class);
Route::resource('teams', TeamController::class);


    Route::post('/logout', [LoginController::class, 'logout'])
        ->name('logout');
});

