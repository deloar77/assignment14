<?php

use App\Http\Controllers\googleformcontroller;
use Illuminate\Foundation\Http\Middleware\VerifyCsrfToken;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::post('/registerbygoogle',[googleformcontroller::class,'registerbygoogle'])->withoutMiddleware([VerifyCsrfToken::class]);