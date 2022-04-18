<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

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

Auth::routes();


Route::get('/register', function () {
    return view('auth.login');
});



// ==================================================================
Route::middleware(['auth'])->group(function () {
    Route::get('/', [HomeController::class, 'index'])->name('home');
    Route::get('/clients', function () { return view('admin.client.index');});
    Route::get('/add-client', function () { return view('admin.client.add-client');});
    Route::get('/suppliers', function () { return view('admin.supplier.index');});
    Route::get('/add-supplier', function () { return view('admin.supplier.add-supplier');});

});
// ==================================================================


