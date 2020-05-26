<?php

//\URL::forceScheme('https');

/***************LOGIN-LOGOUT******************************/

/*Esta ruta entra dentro del LoginController y no utiliza un metodo de ahi, sino que de una vez ahi llama un TRAIT (showLoginForm) porque dentro del controlador llame al TRAIT AuthenticatesUser*/
/*Entonces se puede mencionar el controlador y directamente un trait*/
/*El name se lo pongo en caso de que ocupe el codigo. Lo llamaria con un route('login.form')*/
/* Desde el TRAIT AuthenticateUsers llamo return view (auth.login)*/
Route::get('/login', 'Auth\LoginController@showLoginForm')->name('login.form');

Route::post('/login', 'Auth\LoginController@login')->name('login');


Route::get('/logout', 'Auth\LoginController@logout')->name('logout');
/*************** /LOGIN-LOGOUT /******************************/
/*
/*
/*
*/
/*************** INDEX/******************************/
Route::get('/', 'Dashboard\HomeController@index')->name('index');

/*
/*
/*
*/
/*************** RESET-PASSWORD ******************************/
/**/
/******   1  *****/
/*Esta es la ruta cuando el USER hace click en el 'Forgot Password', me lleva a la vista 'email'*/
/*Dentro el controlador 'ForgotPasswordController' solo hay una referencia hacia el TRAIT de 'SendsPasswordresetEmails'*/
/*Dentro de ese TRAIT utilizo el metodo de 'showLinkRequestForm'*/
Route::get('/password/reset', 'Auth\ForgotPasswordController@showLinkRequestForm')->name('password.reset');

/******   2   *****/
/*Una vez dentro de la vista 'email' se envia el POST del formulario de reset password*/
/*Dentro el controlador 'ForgotPasswordController' solo hay una referencia hacia el TRAIT de 'SendsPasswordresetEmails'*/
/*Dentro de ese TRAIT utilizo el metodo de 'sendResetLinkEmail'*/
Route::post('/password/email', 'Auth\ForgotPasswordController@sendResetLinkEmail')->name('password.email');


/******   3   *****/
/* Dentro del controlador de 'ResetPasswordController' solo hace referencia a el TRAIT de 'ResetPasswords' ubicado en'Illuminate/Foundation/Auth/ResetPasswords'*/
/*Dentro de ese TRAIT llamo al metodo 'showResetForm'*/
Route::get('/password/reset/{token} ', 'Auth\ResetPasswordController@showResetForm')->name('password.change');


/******   4   *****/
/* Dentro del controlador de 'ResetPasswordController' solo hace referencia a el TRAIT de 'ResetPasswords' ubicado en'Illuminate/Foundation/Auth/ResetPasswords'*/
/*Dentro de ese TRAIT llamo al metodo 'reset'*/
Route::post('/password/reset', 'Auth\ResetPasswordController@reset')->name('password.request');
/**********/

/**/

/*************** RESET-PASSWORD ******************************/
/*
/*
/*
*/

Route::group(['prefix' => 'dashboard', 'namespace' => 'Dashboard', 'as' => 'dashboard::'], function () {


  Route::group(['middleware' => ['auth']], function () {

    Route::get('/', 'HomeController@index')->name('index');

    Route::resource('/users', 'UserController', ['except' => ['show']]);
    Route::get('/users/{user}/access', 'UserController@toggleAccess')->name('users.toggleAccess');
    Route::get('/users/export', 'UserController@export')->name('users.export');

    Route::resource('/roles', 'RoleController', ['except' => ['show']]);
    Route::resource('/permissions', 'PermissionController', ['except' => ['show']]);
    Route::get('/common/slug/{name}', 'CommonController@slug')->name('common.slug');

    Route::get('/pdfs', 'PdfController@index')->name('pdfs.index');
    Route::post('/pdfs/generate', 'PdfController@export_document_generate')->name('pdfs.export_document_generate');
    Route::post('/pdfs/url', 'PdfController@export_document_url')->name('pdfs.export_document_url');
    Route::get('/pdfs/view', 'PdfController@export_by_view')->name('pdfs.export_by_view');


  });



});


/*
|--------------------------------------------------------------------------
| Ruta especifica para visualizar paginas estáticas.
|--------------------------------------------------------------------------
|
| Esta ruta permite visualizar paginas estáticas siempre que se las pida
| a través de la extensión "html".
|
*/
