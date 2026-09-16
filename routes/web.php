<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
})->name('blog.index');

Route::get('/blog/{slug?}', function (?string $slug = null) {
    return view('blog.show', ['slug' => $slug]);
})->name('blog.show');

Route::get('/categories', function () {
    return view('blog.categories');
})->name('blog.categories');

Route::get('/about', function () {
    return view('blog.about');
})->name('blog.about');

Route::get('/contact', function () {
    return view('blog.contact');
})->name('blog.contact');

Route::get('/admin', function () {
    return view('admin.index');
})->name('admin.index');
