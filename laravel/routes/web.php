<?php

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

Route::get("/api/warehouse/inventory",function(){
	return response()->json([
		"message" => "Hai",
		"port" => $_SERVER["SERVER_PORT"]
	],200);
});

Route::get("/api/warehouse/pricing",function(){
	return response()->json([
		"message" => "Hai",
		"port" => $_SERVER["SERVER_PORT"]
	],200);
});

Route::get("/show-image",function(){
	return view("image");
});

Route::get("/",function(){
	return response()->json([
		"message" => "Hai",
		"port" => $_SERVER["SERVER_PORT"]
	],200);
});

Route::get("/test",function(){
	return response()->json([
		"message" => "Hai Test"
	],200);
});

Route::get("/404",function(){
	return response()->json([
		"message" => "Hai 404"
	],404);
});

Route::get("/500",function(){
	return response()->json([
		"message" => "Hai 500"
	],500);
});

Route::get("/503",function(){
	return response()->json([
		"message" => "Hai 503"
	],503);
});