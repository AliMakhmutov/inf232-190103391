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
    return view('welcome');
});

Route::get('/student', function () {
    return view('student');
}); //Жаңа student деген view аштым

Route::get('/test/{name}/{id}/{age?}', function($name, $id, $age=18) {
    return "Name: $name"."<br>". "ID: $id"."<br>". "Age: $age";
}); //4 дәріс үйренгенге мысал

Route::get('/hello', function () {
    return "Hello Wolrd";
}); 