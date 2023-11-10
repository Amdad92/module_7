<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/// routes/api.php

Route::get('/hello', function () {
    return view('hello');
});
