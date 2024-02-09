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
Route::get("recipies", [RecipieController::class, "index"]);
Route::get("recipies/{id}", [RecipieController::class, "show"]);
Route::post("recipies", [RecipieController::class, "store"]);
Route::put("recipies/{id}", [RecipieController::class, "update"]);
Route::delete("recipies/{id}", [RecipieController::class, "destroy"]);

Route::get("lists", [RecipieListController::class, "index"]);
Route::get("lists/{id}", [RecipieListController::class, "show"]);
Route::post("lists", [RecipieListController::class, "store"]);
Route::put("lists/{id}", [RecipieListController::class, "update"]);
Route::delete("lists/{id}", [RecipieListController::class, "destroy"]);


Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
