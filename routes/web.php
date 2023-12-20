<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
Use App\Http\Controllers\HomeController;
Use App\Http\Controllers\adminController;
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

Route::get('/', [HomeController::class, 'homepage']);

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::get('/home',[HomeController::class, 'index'])->middleware('auth')->name('home');
Route::get('/post_description/{id}', [HomeController::class, 'post_description']);
Route::get('/create_post', [HomeController::class, 'create_post'])->middleware('auth');
Route::post('/user_post', [HomeController::class, 'user_post'])->middleware('auth');
Route::get('/my_post', [HomeController::class, 'my_post'])->middleware('auth');
Route::get('/delete_my_post/{id}', [HomeController::class, 'delete_my_post'])->middleware('auth');
Route::get('/post_update_page/{id}', [HomeController::class, 'post_update_page'])->middleware('auth');
Route::post('/post_update_submit/{id}', [HomeController::class, 'post_update_submit'])->middleware('auth');


Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';

Route::get('/post_page', [adminController::class, 'post_page']);
Route::post('/add_post', [adminController::class, 'add_post']);
Route::get('/show_post', [adminController::class, 'show_post']);
Route::get('/delete_post/{id}', [adminController::class, 'delete_post']);
Route::get('/edit_page/{id}', [adminController::class, 'edit_page']);
Route::post('/update_post/{id}', [adminController::class, 'update_post']);
Route::get('/accept_post/{id}', [adminController::class, 'accept_post']);
Route::get('/reject_post/{id}', [adminController::class, 'reject_post']);
