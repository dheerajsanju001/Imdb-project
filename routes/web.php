<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\moviecontroller;

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
    return view('welcome');
});
Route::get('search', function () {
    return view('search_page');
});
Route::get('display', function () {
    return view('display');
});
Route::get('showing', function () {
    return view('showing');
});
//*********************DISPLAY{ID} ROUTE  USED TO DISPLAY FULL INFO OF MOVIE*********************/
Route::get('display/{id}','App\Http\Controllers\moviecontroller@ShowFullDescription');

//*********************SHOWING ROUTE  USED TO SHOW ALL  MOVIESF ON SHOWING PAGE*********************/
Route::get('showing','App\Http\Controllers\moviecontroller@HomePage');

//*********************SEARCH_HERE ROUTE  USED TO SEARCH A PARTICULAR MOVIE *********************/
Route::post('search_here','App\Http\Controllers\moviecontroller@search');
