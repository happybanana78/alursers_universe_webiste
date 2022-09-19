<?php

//use Illuminate\Http\Request;

use App\Http\Controllers\SearchController;
use App\Http\Controllers\SlideController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Display Main Page
Route::get("/", function() {
    return view("main");
});

// Search for NFT Rarity
Route::post("/search", [SearchController::class, "search"]);

// Signup User
Route::post("/register", [UserController::class, "signup"]);