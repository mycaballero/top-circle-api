<?php

use App\Http\Controllers\Users\UserController;
use Illuminate\Support\Facades\Route;
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

$router->group(['prefix' => 'api/v1'], function () use ($router) {
    //users
    $router->group(['prefix' => 'users'], function () use ($router) {
        $router->get('/', [UserController::class, 'index']);
    });
});


