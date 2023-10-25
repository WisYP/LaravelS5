<?php

use Illuminate\Support\Facades\Route;
use App\Http\controllers\Box;

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

Route::
get('/repect', function () {
    echo "KEEP RESPECT EACH OTHER";
});

Route::get('/percobaan',[Box::class, 'coba']);
Route::get('/box',[Box::class, 'index']);
