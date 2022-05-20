<?php

use App\Http\Livewire\Test;
use App\Http\Livewire\KlaimForm;
use App\Http\Livewire\KlaimChart;
use App\Http\Livewire\KlaimIndex;
use App\Http\Livewire\ForcastChart;
use App\Http\Livewire\ForcastIndex;
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

Route::get('/', function () {
    return view('auth.login');
});

Route::middleware(['auth:sanctum', 'verified'])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
    Route::get('/klaim', KlaimIndex::class)->name('klaim.index');
    Route::get('/about', Test::class)->name('about');
    Route::get('/klaim/chart', KlaimChart::class)->name('klaim.chart');
    Route::get('/klaim/form/{id?}', KlaimForm::class)->name('klaim.form');
    Route::get('/forcast', ForcastIndex::class)->name('forcast.index');
    Route::get('/forcast/chart', ForcastChart::class)->name('forcast.chart');
});
