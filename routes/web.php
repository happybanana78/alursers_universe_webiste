<?php

//use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Models\Listing;

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

Route::get('/', function () {
    return view('main', [
        "heading" => "Latest Listings",
        "listings" => Listing::all()
    ]);
});

//example routes
/*
Route::get("/hello", function() {
    return "hello gigi";
});

Route::get("/posts/{id}", function ($id) {
    dd($id); //helper method for debugging
    return response("post " . $id);
})->where("id", "[0-9]+"); //constrains for id type

Route::get("/search", function (Request $request) {
    return $request->name;
});
*/