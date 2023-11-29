<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::prefix ('material_type')->group(function()  {
    Route::get('/',[MaterialTypeController::class, 'index']);
    Route::get('/name', [MaterialTypeController::class, 'name']);
    Route::post('/', [MaterialTypeController::class, 'store']);
    Route::post('complete/{id}', [MaterialTypeController::class, 'complete']);
    Route::delete('/{id}', [MaterialTypeController::class, 'destroy']);
}); 

Route::prefix ('stone_products')->group(function()  {
    Route::get('/',[StoneProductsController::class, 'index']);
    Route::get('/name', [StoneProductsController::class, 'name']);
    Route::get('/price', [StoneProductsController::class, 'price']);
    Route::get('/type_id', [StoneProductsController::class, 'type_id']);
}); 

Route::prefix ('sold_products')->group(function()  {
    Route::get('/',[SoldProductsController::class, 'index']);
    Route::get('/sum', [SoldProductsController::class, 'sum']);
    Route::get('/amount', [SoldProductsController::class, 'amount']);
    Route::get('/stone_products_id', [SoldProductsController::class, 'stone_products_id']);
}); 

