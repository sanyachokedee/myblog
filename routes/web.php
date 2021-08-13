<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

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

// Route::get('/', function () {
//     return view('welcome');
//     // return csrf_token(); //ให้แสดง csrf แต่ละอุปกรณ์จะได้ค่าไม่เหมือนกัน แต่ถ้าเป็นเครร่ื่องเดียวกันจะได้ค่าเดิม
// });

// Route::get('about', function () {
//     return 'About Page';
//     // return view('welcome'); // เรียก welcome page ถ้า return เหมือน echo
// });

Route::get('user/{id?}', function ($id="") {
    return 'User : '.$id;
    // return view('welcome'); // เรียก welcome page ถ้า return เหมือน echo
});

Route::post('product', function () {
    return 'This is my product';
    // return view('welcome'); // เรียก welcome page ถ้า return เหมือน echo
});

Route::put('product', function () {
    return 'Update product';
    // return view('welcome'); // เรียก welcome page ถ้า return เหมือน echo
});

Route::delete('product', function () {
    return 'Delete product';
    // return view('welcome'); // เรียก welcome page ถ้า return เหมือน echo
});

Route::get('category/{name}', function($name){
    return $name;
})->where('name','[A-Za-z]+');

Route::get('group/{id}',function($id){
    return $id;    
})->where('id','[0-9]+');

Route::get('product/{id}/{name}', function($id, $name){
    return 'Product ID:'.$id.'<br>Product name: '.$name;
})->where(['id'=>'[0-9]+', 'name'=> '[a-z]+']);

Route::get('guest/showroom/profile/{name?}', function ($name=null) {
    return 'Hello '.$name;
})->name('profile');

//ส่งเข้า controller ไม่ต้องมี call back function
// Route::get('/','App\Http\Controllers\HomeController@home');
// Route::get('service','App\Http\Controllers\HomeController@service');
// Route::get('contact','App\Http\Controllers\HomeController@contact');

//วิธีเดิม laravel 5,6,7 ต้องเปิดใน /http/provider/RouteServiceProvider Line 29
// Route::get('/','HomeController@home');
// Route::get('service','HomeController@service');
// Route::get('contact','HomeController@contact');

//วิธีใหม่ laravel 8
Route::get('/',[HomeController::class, 'home']);
Route::get('about',[HomeController::class, 'about']);
Route::get('service',[HomeController::class, 'service']);
Route::get('contact',[HomeController::class, 'contact']);
Route::get('login',[HomeController::class, 'login']);

// Route::get('mpage',[HomeController::class, 'mpage1']);

Route::get('employees',[HomeController::class, 'employees']);