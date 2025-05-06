
<?php

use App\Http\Controllers\HalamanController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
//routes/web.php
use App\Http\Controllers\PostController;

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

// Route::get('/', [HalamanController::class, 'shera'])-> name('shera');
Route::get('/', [HalamanController::class, 'shera'])-> name('shera');
Route::get('/skills', [HalamanController::class, 'skills'])-> name('skills');
Route::get('/about', [HalamanController::class, 'about'])-> name('about');
Route::get('/contact', [HalamanController::class, 'contact'])-> name('contact');
Route::get('/hobby', [HalamanController::class, 'hobby'])-> name('hobby');
Route::post('/contact', function (App\Http\Requests\PostRequest $request) {

    return back()->with('success','Data Added Successfully.');
    });
Route::resource('posts', PostController::class);

Route::get("/login", [UserController::class, "login"])->name('login');
Route::post("/do-login", [UserController::class, "doLogin"])->name('doLogin');
Route::post("/do-logout", [UserController::class, "doLogout"])->name('doLogout');
Route::get("/sample", [UserController::class, "createSample"])->name('createSample');