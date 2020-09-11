<?php

use Illuminate\Support\Facades\Route;
use LaraChimp\Entropy\Http\Controllers;

Route::get('/', Controllers\DashboardController::class);

