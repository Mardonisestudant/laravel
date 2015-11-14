<?php



//--------Route---Home----
Route::get( '/',    'WelcomeController@index');

//--------Route---admin----
Route::get( 'home', 'HomeController@index');

//--------Route---registroUser----
Route::get( 'auth/register', 'HomeController@postResgister');

//--------Route---Formcontato-----------------------------------
Route::get( 'contato/cadastro', 'WelcomeController@cadastro');

//--------Route---insertFormContato------------------------------
Route::post('email',['as' =>'email','uses' => 'WelcomeController@email']);

//--------Route---SelectFormemail----------------------------------------------------------------
Route::get('email/responderEmail',['as' =>'responderEmail','uses' => 'HomeController@responderEmail']);

//--------Route---EditFormEmail-----------------------------------------------------------------------
Route::get('emails/emailcontato/{id}',['as' =>'responderedit','uses' => 'HomeController@edit']);

//--------Route---UpdateFormEmail-----------------------------------------------------------------
Route::put('emails/update/{id}',['as' =>'enviaremail','uses' => 'HomeController@update']);

//----------Route-------------get---------------------banners---------------------------------------
Route::get('modulo/FormBanner',['as' =>'bannerget','uses' => 'FileController@getbanner']);

//----------Route-------------post---------------------banners---------------------------------------
Route::post('modulo/FormBanner',['as' =>'bannerpost','uses' => 'FileController@postbanner']);





Route::controllers([
	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController',
]);

