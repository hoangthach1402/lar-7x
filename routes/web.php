<?php

use App\Mail;

use App\Mail\testEmail;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\User;
use App\member; 


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



Route::get('collect','BoxController@index');

Route::get('/home', 'HomeController@index')->name('home');
Route::get('1','mycontroller@show');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('show','mycontroller@show');
Route::get('taskhome','taskController@index');
Route::post('store','taskController@store')->name('store');
Route::get('taskregister','taskController@create');
Route::get('homie','taskController@homie');
Route::get('showall','taskController@showall');
Route::get('/2', function () {
    return view('testlayout.index');
});
Route::get('user/{id}/edit','taskController@edit')->name('user.edit');
Route::patch('user/{id}/update','taskController@update')->name('user.update');


 Route::resource('sharks', 'sharkController');
 Route::resource('crud', 'exampleController');
 
 Route::resource('member', 'MemberController');
Route::get('crud/test',function(){
    return view('member.test');
})->name('crud.test');
Route::delete('member/{id}', function ($id) {
    
});

Route::resource('anki', 'ankiController');

Route::get('send-mail', function () {
   
    $details = [
        'title' => 'Mail from ItSolutionStuff.com',
        'body' => 'This is for testing email using smtp'
    ];
  
});

Route::get('vue',function(){
    return view('vue.index');
});


Route::prefix('demo')->group(function () {
 Route::get('home','testController@index');
 Route::post('store','testController@store')->name('demo.store');
 Route::get('/','testController@show');
});
Route::post('logout','MemberController@logout')->name('logout');

Route::get('homeshop','ProductController@index')->name('homeshop');

 

