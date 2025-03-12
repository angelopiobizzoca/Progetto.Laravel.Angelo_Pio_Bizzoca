<?php

use Illuminate\Support\Facades\Route;

Route::get('/home', function () {
    return view('welcome');
});

Route::get('/seconda-pagina', function () {
    return view('paginadue');
});