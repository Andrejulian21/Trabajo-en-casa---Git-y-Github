<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('miBiografia');
})-> name("Biografia");

Route::get('/expLaboral', function () {
    return view('experiencia laboral');
})-> name("Experiencia laboral");

Route::get('/habilidades', function () {
    return view('habilidades');
})-> name("Habilidades");

Route::get('/academia', function () {
    return view('academia');
})-> name("Academia");