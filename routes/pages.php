<?php

use App\Http\Controllers\PageController;

Route::get ('/about', [PageController::class, 'about']);
Route::get ('/blog', [PageController::class, 'blog']);
Route::get ('/family', [PageController::class, 'family']);
