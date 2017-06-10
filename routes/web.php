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
	/*return App\Models\Post::create([
		'content' => 'Aquí Testeando',
		'user_id' => \Auth::user()->id,
		]);*/
    return view('welcome');
});

Route::resource('posts', 'PostController', [
		'middleware' => 'App\Http\Middleware\PostOwner',
		
		]);
Route::get('interactions', 'UserController@interactions' )->name('interactions');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/registrarPost', function () {
	return App\Models\Post::create([
		'content' => 'Aquí Testeando',
		'user_id' => \Auth::user()->id,
		]);
    //return view('welcome');
});
