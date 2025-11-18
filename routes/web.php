<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/contact', function (){
    return view('contact');
});

Route::get('/produtos', function (){
    $busca = request('search');
    return view('products', ['busca' => $busca]);
});

Route::get('/produtos/{id?}', function ($id = 1) {
    return view('product', ['id' => $id]);
});