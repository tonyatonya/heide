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
Route::controller('admin/Slide', 'SlideController');
Route::controller('admin/Media', 'MediaController');
Route::controller('admin/Concept', 'ConceptController');
Route::controller('admin/News', 'NewsController');
Route::controller('admin/Executive', 'ExecutiveController');
Route::controller('admin/MediaBanner', 'MediaBannerController');
Route::controller('admin/Contactus', 'ContactusController');
Route::controller('admin/Gallery', 'GalleryController');
Route::controller('admin/FoodType', 'FoodTypeController');
Route::controller('admin/Social', 'SocialController');
Route::controller('admin/User', 'UserController');
Route::controller('admin/ChangePassword', 'ChangePasswordController');
Route::controller('admin', 'SlideController');
Route::controller('Lang', 'LangController');
Route::controller('/', 'WelcomeController');
Route::controllers([
	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController',
]);
