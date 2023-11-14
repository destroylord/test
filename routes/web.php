<?php

use Illuminate\Support\Facades\Route;



Route::controller(\App\Http\Controllers\IdentityController::class)
        ->group(function () {

    Route::get('/','index' )->name('indentites');
    Route::get('/create', 'create')->name('identities.create');
    route::get('/show/{id}', 'show')->name('identities.show');
    Route::get('/edit/{id}', 'edit')->name('identities.edit');
    Route::put('/update/{id}', 'update')->name('identities.update');
    Route::delete('/delete/{id}', 'destroy')->name('identities.destroy');
    Route::post('/store', 'store' )->name('identities.store');

});
