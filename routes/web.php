<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\homecontriller;
use App\Http\Controllers\admincontroller;
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


Route::get("/",[homecontriller::class,"index"]);
Route::get("/users",[admincontroller::class,"user"]);
Route::get("/deletemenu/{id}",[admincontroller::class,"deletemenu"]);
Route::get("/updateview/{id}",[admincontroller::class,"updateview"]);
Route::post("/update/{id}",[admincontroller::class,"update"]);
Route::post("/reservation",[admincontroller::class,"reservation"]);
Route::get("/viewreservation",[admincontroller::class,"viewreservation"]);
Route::get("/deleteuser/{id}",[admincontroller::class,"deleteuser"]);
Route::get("/foodmenu",[admincontroller::class,"foodmenu"]);
Route::post("/uploadfood",[admincontroller::class,"upload"]);
Route::get("/viewchef",[admincontroller::class,"viewchef"]);
Route::post("/uploadchef",[admincontroller::class,"uploadchef"]);
Route::get("/redirect",[homecontriller::class,"redirect"]);
Route::get("/updatechef/{id}",[admincontroller::class,"updatechef"]);
Route::post("/updatefoodchef/{id}",[admincontroller::class,"updatefoodchef"]);
Route::get("/deletechef/{id}",[admincontroller::class,"deletechef"]);
Route::post("/addcart/{id}",[homecontriller::class,"addcart"]);
Route::get("/showcart/{id}",[homecontriller::class,"showcart"]);
Route::get("/remove/{id}",[homecontriller::class,"remove"]);
Route::post("/orderconfirm",[homecontriller::class,"orderconfirm"]);
Route::get("/orders",[admincontroller::class,"orders"]);
Route::get("/search",[admincontroller::class,"search"]);


Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
