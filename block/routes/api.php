<?php

use App\Http\Controllers\EconetController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('test', [EconetController::class, 'filters']);
