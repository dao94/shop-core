<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', 'HomeController@index');

Route::get('home', 'HomeController@index');
Route::get('photo', 'PhotoController@index');
Route::get('category/{id}', 'HomeController@list_category_by_id')->where('id', '[0-9]+');
Route::get('introduction/{id}','IntroductionController@index')->where('id', '[0-9]+');
Route::get('product/{id}', 'DetailController@index')->where('id', '[0-9]+');
Route::get('detailnew/{id}', 'DetailController@news')->where('id', '[0-9]+');
Route::get('news','NewsController@index');
Route::get('lienhe','ContactController@index');
Route::get('home2',function() {
	$users = DB::table('group_news')->select('name')->get();
	foreach ($users as $key => $value) {
		echo $value->name.'</br>';
	}
});


/*API*/

Route::group(['prefix' => 'api/v1', 'middleware' => 'auth'], function()
{	
	Route::controller('group_news'	, 'Api\GroupnewsController');
	Route::controller('category'	, 'Api\CategoryController');
	Route::controller('news'		, 'Api\NewsController');
	Route::controller('partner'		, 'Api\PartnerController');
	Route::controller('images'		, 'Api\ImagesController');
	Route::controller('album'		, 'Api\AlbumController');
	Route::controller('introduction', 'Api\IntroductionController');
	Route::controller('product'		, 'Api\ProductController');
	Route::controller('upload'		, 'Api\UploadController');

});

/*Admin*/

Route::group(['prefix' => 'admin', 'middleware' => 'auth'], function()
{	
	Route::controller('', 'Admin\MainController');

});

Route::controllers([
	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController',
]);
