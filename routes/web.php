<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('dashboard');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

Route::get('/inventory', function () {
    return view('inventory');
})->name('inventory');

Route::get('/orders', function () {
    return view('orders');
})->name('orders');

Route::get('/delivery', function () {
    return view('delivery');
})->name('delivery');

Route::get('/promotions', function () {
    return view('promotions');
})->name('promotions');
