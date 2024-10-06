<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\userside\HomeController;
use App\Http\Controllers\userside\OrdersController;
use App\Http\Controllers\userside\productsReviews;
use App\Http\Controllers\CkEditorUploadImageController;



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

// Route::get('/', function () {
//     return view('welcome');
// });

// Route::get('/', function () {
//     return view('home');
// });

Route::get('/', [HomeController::class, 'getHomeDataF']); 
Route::post('submit.order', [OrdersController::class, 'submitOrderF'])->name('submit.order');
Route::post('submit.review', [productsReviews::class, 'productsReviewsF'])->name('submit.review');






























// Route::get('/womens-fashion', [webController::class, 'womensf'])->name('womensf');
// Route::post('altis16/login', [adminAuthController::class, 'adminloginf'])->name('altis16/login');
//////////////////////////////////////////////////////////
// Route::post('/docid', [homePageController::class, 'getDocByIdForSignBySearchF'])->name('searchbydocid');
// Route::get('/docs/{filename}', [homePageController::class, 'showPdf'])->name('show.pdf');
// Route::get('/wizostamp/home',  [adminAuthController::class, 'gotothomeF'] );
// Route::post('/wizostamp/editprofile', [adminAuthController::class, 'adminprofileUpdateF'])->name('editadminprofile');

//////////////////////////////////////////////////////////////////////////
/////////// for clear cache 
Route::get('/clear', function () {
    $run = Artisan::call('config:clear');
    $run = Artisan::call('cache:clear');
    $run = Artisan::call('config:cache');
    $run = Artisan::call('route:clear');

    // Restart the queue worker (if applicable):
    // $run = Artisan::call('queue:restart');
    
    // $run = Artisan::call('view:clear');
    return 'Cache Cleard';
});
//////////////////////////////////////////////////////////////////////////
// Route::post('/upload-image', [CkEditorUploadImageController::class, 'upload'])->name('image.upload');



// {{$settingsData['websiteName']}}

// {{url($settingsData['websiteLogo'])}}

// settingsData

// src="{{ asset($baseUrl.'/uploads/'.$settingsData['websiteLogo']) }}"


















