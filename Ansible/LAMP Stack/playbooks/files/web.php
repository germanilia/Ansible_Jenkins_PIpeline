<?php
use Illuminate\Support\Facades\DB;
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

Route::get('/', function () {
#    return view('welcome');
     $users =  DB::select('select * from USERS');
     print("<h2>Username: ".$users[0]->ALIAS."<h2>");
     print("<h2>Real Name: ".$users[0]->NAME."<h2>");
     print("Serveing From: ".$_SERVER['SERVER_ADDR']);
});