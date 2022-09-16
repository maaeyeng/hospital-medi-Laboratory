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

Route::get('/', function () {
    return view('welcome');
});

Route::get('ho-lab',function(){
    return view('index');
});

Route::get('ho-lab/add', function(){
    return view('hp-labs.index');
});

Route::get('ho-lab/registers', function(){
    return view('registers.index');
});
Route::get('ho-lab/speciments', function(){
    return view('speciments.index');
});


/// Process

Route::any ( '/search', function () {
    if(isset($q)){
    $q = Input::get ( 'q' );
    //Register table
    $user = User::where ( 'name', 'LIKE', '%' . $q . '%' )->orWhere ( 'email', 'LIKE', '%' . $q . '%' )->get ();
    if (count ( $user ) > 0)
        return view ( 'registers.index' )->withDetails ( $user )->withQuery ( $q );
    else
        return view ( 'registers.index' )->withMessage ( 'No Details found. Try to search again !' );
    } 
} );
