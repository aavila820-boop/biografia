<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/commit1', function () {
    return view('commit1');
});

Route::get('/commit2', function () {
    return view('commit2');
});

Route::get('/commit3', function () {
    return view('commit3');
});

Route::get('/commit4', function () {
    return view('commit4');
});

Route::get('/commit5', function () {
    return view('commit5');
});

Route::get('/commit6', function () {
    return view('commit6');
});




Route::get('/laboral1', function () {
    return view('laboral1');
});

Route::get('/laboral2', function () {
    return view('laboral2');
});

Route::get('/laboral3', function () {
    return view('laboral3');
});


Route::get('/habilidad1', function () {
    return view('habilidad1');
});
Route::get('/habilidad2', function () {
    return view('habilidad2');
});
Route::get('/habilidad3', function () {
    return view('habilidad3');
});



