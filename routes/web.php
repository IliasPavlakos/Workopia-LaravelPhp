<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

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

Route::get('/test2', function () {
    return response('Hello World!', 200);
});

Route::get('/test3', function () {
    return new Response('Hello World!', 200);
});

Route::get('/test4', function () {
    return response('<h1>Hello World!</h1>', 200)->header('content-type', 'text/html');
});

Route::get('/test5', function () {
    return response('<h1>Hello World!</h1>', 200)->header('content-type', 'text/plain');
});

Route::get('/download', function () {
    return response()->download(public_path('favicon.ico'));
});

Route::get('/test6', function () {
    return response('<h1>Hello World!</h1>', 200)->header('content-type', 'text/plain')->cookie('name', 'ilias');
});
