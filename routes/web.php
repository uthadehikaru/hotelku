<?php

use App\Http\Controllers\OrderDetail;
use App\Livewire\LoginForm;
use Illuminate\Support\Facades\Auth;
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

Route::view('/', 'welcome');
Route::get('order/{order:booking_code}', OrderDetail::class)->name('order.detail');
Route::get('login', LoginForm::class)->name('login');
Route::get('logout', function () {
    Auth::logout();

    return redirect()->route('login');
})->name('logout');
