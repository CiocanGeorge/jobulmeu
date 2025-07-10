<?php

use App\Livewire\CreateJob;
use App\Livewire\JobShow;
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

Route::view('dashboard', 'dashboard')
    ->middleware(['auth', 'verified'])
    ->name('dashboard');



Route::view('profile', 'profile')
    ->middleware(['auth'])
    ->name('profile');

Route::get('/create-job/{id?}', CreateJob::class)->name('create-job');
Route::get('/job-show/{id}', JobShow::class)->name('job-show');



require __DIR__ . '/auth.php';
