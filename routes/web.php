<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('welcome');
});



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
