<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AttendanceController;
use App\Http\Controllers\RequestController;

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

Route::middleware('auth')->group(function() {

Route::get('/', [AttendanceController::class,'index'])->name('index');
Route::post('/attendance',[AttendanceController::class,'attendance'])->name('attendance');
Route::post('/attendance/break_bigin',[AttendanceController::class,'break_bigin'])->name('break_bigin');
Route::post('/attendance/break_end',[AttendanceController::class,'break_end'])->name('break_end');
Route::post('/attendance/end',[AttendanceController::class,'attendance_end'])->name('attendance_end');
Route::get('/req_ot',[RequestController::class,'req_ot'])->name('req_ot');
Route::post('/req_ot/confirm',[RequestController::class,'req_ot_confirm'])->name('req_ot_confirm');
Route::post('/req_ot/comp',[RequestController::class,'req_ot_comp'])->name('req_ot_comp_comp');
Route::get('/req_vac',[RequestController::class,'req_vac'])->name('req_vac');
Route::post('/req_vac/comp',[RequestController::class,'req_vac_comp'])->name('req_vac_comp');
Route::get('/req_correct',[RequestController::class,'req_correct'])->name('req_correct');
Route::post('/req_correct',[RequestController::class,'req_correct_comp'])->name('req_correct_comp');

});