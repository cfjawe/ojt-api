<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\fortnite;

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
    return view('home');
    
});

Route::get('index',[fortnite::class, 'getallnews']);
Route::get('entertainmentnewscontent',[fortnite::class, 'getentertainmentnewscontent']);
Route::get('governmentcontent',[fortnite::class, 'getgovernment']);
Route::get('lottocontent',[fortnite::class, 'getlotto']);
Route::get('tabloidcontent',[fortnite::class, 'gettabloid']);
Route::get('promotionalbanner',[fortnite::class, 'getpromotional']);
Route::get('adsbanner',[fortnite::class, 'getadsbanner']);