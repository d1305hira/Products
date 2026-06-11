<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\AdminController;

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

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/contents', [HomeController::class, 'contents'])->name('contents');
Route::get('/access', [HomeController::class, 'access'])->name('access');

Route::get('/contact', [ContactController::class, 'contact'])->name('contact');
Route::post('/contact/confirm', [ContactController::class, 'confirm'])->name('confirm');
Route::post('/completed', [ContactController::class, 'store'])->name('store');

Route::get('/admin/contactslist', [AdminController::class, 'showList'])->name('contactslist');
Route::get('/admin/contacts/csv', [AdminController::class, 'exportcsv'])->name('contacts.csv');