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
	return view('index');
});

Route::get('resume', function () {
    return view('resume');
});

Route::get('projects', function () {
    return view('projects');
});

Route::get('contact', function () {
    return view('contact');
});

Route::get('academic', function () {
    return view('academic');
});

Route::get('hello', function () {
    return view('hello');
});

Route::get('js1', function () {
    return view('js1');
});

Route::get('js2', function () {
    return view('js2');
});

Route::get('layout', function () {
    return view('layout');
});

Route::get('5026221063', function () {
    return view('5026221063');
});

Route::get('link', function () {
    return view('link');
});

Route::get('style', function () {
    return view('style');
});

Route::get('validasi', function () {
    return view('validasi');
});

Route::get('welcome', function () {
    return view('welcome');
});
