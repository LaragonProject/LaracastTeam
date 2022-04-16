<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
  return view('user.usermain');
});

Route::get('/showmarksheet', function () {
  return view('user.marksheet');
});

Route::get('/home', function () {
  return view('user.home');
});

