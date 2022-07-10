<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FormLoginController;

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
    return view('main');
});

Route::post('/postlogin', 'FormLoginController@postlogin')->name('postlogin');

Route::get('login', function (Request $request) {
    $type = $request->type;
    return view('formlogin', compact('type'));
});

Route::get('dashboard', function () {
    return view('dashboard');
});