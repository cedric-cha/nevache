<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PropertyController;

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

Route::get('/admin', [App\Http\Controllers\PropertyController::class, 'index'])->name('admin');

Route::get('/edit-property/{id}', [App\Http\Controllers\PropertyController::class, 'edit'])->name('edit');

Route::get('/annonce/{id}', function () {
    return view('property');
});

Auth::routes();

Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/details/{id}', [App\Http\Controllers\HomeController::class, 'details'])->name('details');

Route::post('/store', [App\Http\Controllers\PropertyController::class, 'store'])->name('sauvegarde');

Route::patch('/update/{id}', [App\Http\Controllers\PropertyController::class, 'update'])->name('updated');
Route::delete('/delete/{property}', [App\Http\Controllers\PropertyController::class, 'delete'])->name('delete');

Route::delete('/delete-photo/{property}/{photo}', [App\Http\Controllers\PropertyController::class, 'deletePhoto']);

Route::get('/mentions-legales', function (){
    return view('mentions-legales');
});

Route::get('/politique-de-confidentialites', function (){
    return view('politiques');
});



Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
