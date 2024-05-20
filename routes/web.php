<?php

use App\Http\Controllers\WebController;
use Illuminate\Support\Facades\Route;


Route::get('/', [WebController::class, 'index'])->name('web.index');

Route::post(
    '/web/employees/save',
    [WebController::class, 'saveEmployee'])
    ->name('web.employee.save');
