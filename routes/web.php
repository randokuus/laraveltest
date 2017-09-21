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

Route::get('/', function () {
    return view('welcome');
});
Route::view('/welcome', 'welcome');

//route mis tagastab antud "user" ja id parameetri aadressi ribalt
/*Route::get('user/{id}', function($id){
    return 'user'.$id;
});*/

Route::get('user/{id}',function($id){
    return 'user'.$id;
})->where('id','[0-9]+');

Route::get('/hello', function(){
   return "hello world"; 
});

Route::redirect('/hello', '/', 301);

//-------------------------------------
Route::get('/template', function(){
   return view('child'); 
});