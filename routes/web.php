<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Front\UserController;
use App\Http\Controllers\Admin\SecondController;
use App\Http\Controllers\NewsController2;


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
  $data=[];
  $data['id']=5;
  $data['name']='ahmed eman';
    return view('welcome',$data);
});

Route::get('index','Front\UserController@getIndex');

Route::get('/test1', function () {
    return 'welcome';
});
Route::get('/landing', function () {
    return view('landing');
});

Route::get('/show number/{id}', function ($id) {
    return $id;
}) -> name ('a');
Route::get('/show string/{id?}', function () {
    return 'welcome';
}) -> name('b');


Route::resource('news','NewsController');


Route::group(['namespace' => 'Admin'],function(){
    Route::get('second','SecondController@ShowString0');
}   );



Route::get('login',function(){
    return 'Must be login to access this Route';
})->name('login');

Route::namespace('Front')->group(function(){
    Route::get('/users',[UserController::class,'showUserName']);
});

Auth::routes(['verify'=>true]);

Route::get('/home', 'HomeController@index')->name('home')->middleware('verified');
