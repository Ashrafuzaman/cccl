<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\FrontendController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });

Auth::routes();

// Route::get('/home', [HomeController::class, 'index'])->name('home');

Route::get('/clear', function(){
    Artisan::call('cache:clear');
    Artisan::call('route:clear');
    Artisan::call('config:clear');
});



// --------------- START BACKEND PART ---------------
Route::get('/home', [AdminController::class, 'index'])->name('home');



// --------------- START FRONTEND PART ---------------
Route::get('/', [FrontendController::class, 'index'])->name('index');
Route::get('/frontend/category', [FrontendController::class, 'frontend_category'])->name('frontend_category');
Route::get('/frontend/product', [FrontendController::class, 'frontend_product'])->name('frontend_product');
Route::get('/frontend/service', [FrontendController::class, 'frontend_service'])->name('frontend_service');
Route::get('/frontend/contact_us', [FrontendController::class, 'frontend_contact_us'])->name('frontend_contact_us');
Route::get('/frontend/corporate_speech', [FrontendController::class, 'frontend_corporate_speech'])->name('frontend_corporate_speech');
Route::get('/frontend/gallery', [FrontendController::class, 'frontend_gallery'])->name('frontend_gallery');





