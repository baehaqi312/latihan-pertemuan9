<?php

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
    return view('contents.beranda');
}) ->name('beranda');

Route::get('/about', function () {
    return view('contents.about');
}) ->name('about');

Route::get('/gallery', function () {
    return view('contents.gallery');
}) ->name('gallery');

Route::get('/experience', function () {
    return view('contents.experience');
}) ->name('experience');

Route::get('/education', function () {
    return view('contents.education');
}) ->name('education');

Route::get('/contact', function () {
    return view('contents.contact');
}) ->name('contact');
