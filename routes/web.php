<?php

use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get("/greeting", function() {
    return view("greeting");
});

// Route::get("/user/{id?}/{name?}", function($userId="1",$userName="arif"){
//     // return "User id ".$userId." User name is: ".$userName;
//     return view("user.index", [
//         "userId"=>$userId,
//         "userName"=>$userName
//     ]);
// });

Route::get("/user/{id}/{name}",[UserController::class, "index"]);

