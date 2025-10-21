<?php

use Illuminate\Support\Facades\Route;

Route::get('/invoice', function () {
    return view('invoice');
});

Route::get('/', function () {
    return redirect('/invoice'); // Chuyển hướng từ / về /invoice
});
