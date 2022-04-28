<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MonitorController;
use App\Http\Controllers\BrandController;

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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::apiResource('monitors', MonitorController::class);

Route::apiResource('brands', BrandController::class)->only(['index', 'show']);

Route::get('brands/{id}/monitors', [BrandController::class, 'indexFunctie']);

Route::delete('brands/{id}/monitors', [BrandController::class, 'destroyFunctie']);
