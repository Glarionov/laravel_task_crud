<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\OrderController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

//Route::middleware('auth:api')->get('/user', function (Request $request) {
//    return $request->user();
//});

Route::group([
    'middleware' => 'api',
    'prefix' => '/v1/auth/'

], function ($router) {

    Route::post('test', [AuthController::class, 'test']);
    Route::post('login', [AuthController::class, 'login']);
    Route::post('logout', [AuthController::class, 'logout']);
    Route::post('register', [AuthController::class, 'register']);
    Route::post('refresh', [AuthController::class, 'refresh']);
//    Route::post('user-profile', [AuthController::class, 'userProfile'])->middleware('requireSpecialAccess');
});

Route::group([
    'middleware' => 'api',
    'prefix' => '/v1/order/'

], function ($router) {

    Route::post('create', [OrderController::class, 'create']);
    Route::post('cancel', [OrderController::class, 'cancel']);
//    Route::post('login', [AuthController::class, 'login']);
//    Route::post('logout', [AuthController::class, 'logout']);
//    Route::post('register', [AuthController::class, 'register']);
//    Route::post('refresh', [AuthController::class, 'refresh']);
//    Route::post('user-profile', [AuthController::class, 'userProfile'])->middleware('requireSpecialAccess');
});
