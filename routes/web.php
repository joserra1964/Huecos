<?php

use App\Http\Controllers\PageController;
use Illuminate\Support\Facades\Route;
/*
Route::get('/', [PageController::class, 'home'])->name('home');
Route::get('blog', [PageController::class, 'blog'])->name('blog');
Route::get('blog/{slug}', [PageController::class, 'post'])->name('post');
*/

Route::controller(PageController::class)->group(function () {
    Route::get('/', 'home')->name('home');
    Route::get('blog', 'blog')->name('blog');
    Route::get('blog/{slug}', 'post')->name('post');
    Route::get('obras/{id?}', [PageController::class,'obras'])->name('obras');
    Route::get('provincias', [PageController::class,'provincias'])->name('provincias');
    Route::get('emplazamientos',[PageController::class,'emplazamientos'])->name('emplazamientos');
    Route::get('plantillas',[PageController::class,'plantillas'])->name('plantillas');
    Route::get('4plus',[PageController::class,'cuatroplusTransmisiones'])->('4plusTransmisiones');

});
