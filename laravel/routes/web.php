<?php

use Illuminate\Support\Facades\Route;

foreach (config('tenancy.central_domains') as $domain) {
    Route::get('/', function () {
        return view('welcome');
    });
}
