<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PhotoController;

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

// Route::get('/photos', [PhotoController::class,'index']);
// Route::post('/photos', [PhotoController::class,'store']);


//ใช้ตัวนี้ตัวเดียวจะเรียกทุกอย่าง 7 อย่างได้เลย
Route::resource('photos',PhotoController::class);

Route::get('photos/search/{keyword}',[PhotoController::class,'search']);
// Route::middleware('auth:api')->get('/user', function (Request $request) {
//     return $request->user();
// });

