<?php

use Aamarpay\Pgtest\Controllers\formController;
use Illuminate\Support\Facades\Route;

Route::get('form', [Aamarpay\Pgtest\Controllers\formController::class,'see']);