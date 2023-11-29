<?php

use Illuminate\Support\Facades\Route;
use App\HTTP\Controllers\inventorycontroller;


Route::get('/',[inventorycontroller::class,'ReadData']);
Route::get('/add-data',[inventorycontroller::class,'addData']);
Route::post('/store-data',[inventorycontroller::class,'storeData']);
Route::get('/update-data/{id}',[inventorycontroller::class,'updateData']);
Route::post('/store-update-data',[inventorycontroller::class,'storeUpdateData']);
Route::get('/delete-data/{id}',[inventorycontroller::class,'deleteData']);


