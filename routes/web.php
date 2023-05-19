<?php

use App\Http\Livewire\Main\Components\AboutUs;
use App\Http\Livewire\Main\Components\ContactUs;
use App\Http\Livewire\Main\Components\Faq;
use App\Http\Livewire\Main\Components\Projects;
use App\Http\Livewire\Main\Components\Services;
use App\Http\Livewire\Main\Index;
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

// Index
Route::get('/', Index::class)->name('index');
Route::get('/about-us', AboutUs::class)->name('about-us');
Route::get('/services', Services::class)->name('services');
Route::get('/projects', Projects::class)->name('projects');
Route::get('/faq', Faq::class)->name('faq');
Route::get('/contact-us', ContactUs::class)->name('contact');

