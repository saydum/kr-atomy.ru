<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\WebController;
use App\Http\Controllers\FormController;
use App\Http\Controllers\CatalogController;


Route::get('/', [WebController::class, 'index'])->name('web.index');

Route::get('/products', [CatalogController::class, 'index'])->name('web.products.index');
Route::get('/products/{product}/show', [CatalogController::class, 'show'])->name('web.products.show');
Route::get('/products/{slug}', [CatalogController::class, 'slug'])->name('web.products.slug');

Route::post('/web/form/send', [FormController::class, 'send'])->name('web.form.send');
