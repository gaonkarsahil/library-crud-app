<?php

use Illuminate\Support\Facades\Route;


// Route::apiResource('books', 'BookController');

// Define the routes for the resource controller with middleware applied to 'store' and 'update' actions
Route::apiResource('books', 'BookController')->only(['store', 'update'])
                                             ->middleware('validate.inputs:case1');

// Define the remaining routes for the resource controller without middleware
Route::apiResource('books', 'BookController')->except(['store', 'update']);