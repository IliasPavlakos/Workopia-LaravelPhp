<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use Illuminate\Http\Response;


use App\Http\Controllers\JobController;
use App\Http\Controllers\HomeController;

Route::get('/', [HomeController::class, 'index']);

Route::get('/jobs', [JobController::class, 'index']);

Route::get('/jobs/create', [JobController::class, 'create']);

Route::get('/test', function (Request $request) {
    return [
        'method' => request()->method(),
        'uri' => $request->path(),
        'ip' => $request->ip(),
        'path' => $request->path(),
        'userAgent' => $request->userAgent(),
        'header' => $request->header(),
    ];
});
