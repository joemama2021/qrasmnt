<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\QRLoginWS\QRLoginWSController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

Route::get('/qrtest', function () {
    return view('qrlogin.showqr');
});
Route::get('/qrscanner',[QRLoginWSController::class,'qrscanner'])->name('qrscanner');
Route::post('web/loginws', [QRLoginWSController::class,'loginWS']);//Check when passcode hasbeen received

require __DIR__.'/auth.php';
