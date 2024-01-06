<?php

use App\Http\Controllers\Api\PostController as ApiPostController;
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


Route::middleware(['api.token'])->group(function () {
	//Rotte API protette
	
	//LIST
	Route::get('post/list', [ApiPostController::class, 'list']);
	
	//DETAIL
	Route::get('post/detail/{slug}', [ApiPostController::class, 'detail']);
	
	// ADD
	Route::post('post/add', [ApiPostController::class,'add']);
});