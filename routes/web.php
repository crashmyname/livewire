<?php

use App\Livewire\Counter;
use App\Livewire\Sidebar;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/counter', Counter::class);
Route::get('/sidebar', Sidebar::class);