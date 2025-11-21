<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EventController;

Route::get('/', [EventController::class, 'index']);
Route::get('/events/create', [EventController::class, 'create']);
Route::post('/events', [EventController::class, 'store']);

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