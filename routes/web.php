<?php

use App\Events\messageCreated;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    messageCreated::dispatch('haidsid');
    return view('welcome');
});
