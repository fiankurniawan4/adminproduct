<?php

use Illuminate\Support\Facades\Route;

Route::view('/', 'welcome');


Route::middleware('auth')->group(function () {

    Route::view('dashboard', 'dashboard/dashboard')
        ->name('dashboard');

    Route::view('profile', 'profile')
        ->name('profile');

    Route::view('dashboard/product', 'dashboard/product/product')
        ->name('dashboard.product.index');

    Route::view('dashhboard/product/add', 'dashboard/product/tambah')
        ->name('dashboard.product.add');

    Route::view('dashhboard/product/edit/{id}', 'dashboard/product/edit')
        ->name('dashboard.product.edit');

    Route::view('dashhboard/kategori', 'dashboard/kategori/kategori')
        ->name('dashboard.kategori.index');

    Route::view('dashhboard/kategori/add', 'dashboard/kategori/tambah')
        ->name('dashboard.kategori.add');

    Route::view('dashhboard/kategori/edit/{id}', 'dashboard/kategori/edit')
        ->name('dashboard.kategori.edit');
});


require __DIR__ . '/auth.php';
