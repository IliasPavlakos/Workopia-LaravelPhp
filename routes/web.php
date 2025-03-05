<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/jobs', function () {
    return 'Available jobs!';
})->name('jobs');

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

Route::get('/users', function (Request $request) {
    return $request->all(['name', 'age']);
});

Route::get('/users2', function (Request $request) {
    return $request->all();
});

Route::get('/users3', function (Request $request) {
    return $request->has('name');
});
