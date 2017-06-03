<?php

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

/*Route::get('/', function () {
    return view('welcome');
});*/

Route::get('/', function () {
    return view('front1');
});

Route::get('front1', function () {
    return view('front1');
});

Route::get('About', function () {
    return view('About');
});

Route::get('add', function () {
    return view('add');
});

Route::get("add",'quiz1@show');
Route::post("store1",'quiz1@store');


Route::get("add2",'question1@index2');
Route::post("store2",'question1@store');



Route::get('login', function () {
    return view('login');
});
Route::post("loginme",'logincontroller@login');



Route::get('new1', function () {
    return view('new1');
});

Route::get("front2", 'quiz1@index2');
Route::get("show",'quiz1@show');

Route::get('new2', function () {
    return view('new2');
});
Route::get("new1",'player1@index');
Route::post("store",'player1@store');

Route::get('question', 'quiz1@index');


Route::get('/{id}',array("as"=>'selectcat',"uses"=>'question1@show'));



