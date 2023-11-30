<?php

use App\Http\Controllers\CrudController;
use Illuminate\Support\Facades\Route;



Route::controller(CrudController::class)->group(function () {
    Route::get('/','index')->name('home');
    Route::post('/store','Store')->name('store.info');
    Route::get('/infos','Display')->name('display.info');
    Route::post('/info/edit/{id}','Edit')->name('edit.info');
    Route::get('/info/update','Update')->name('update.info');
    Route::get('/info/delete','Delete')->name('delete.info');
});


