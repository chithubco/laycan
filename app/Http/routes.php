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

Route::get('/', function () {
    return view('welcome');
});

Route::auth();

Route::get('/home', 'HomeController@index');

Route::get('/test',function(){

	$arrayName = array("Escravos","EGTL","Agbami");

	return is_string($arrayName[array_rand($arrayName)]);
});

Route::resource('/production/create','DailyProductionController');
Route::resource('/export','ExportController');
Route::resource('/terminal','TerminalController');
Route::resource('/upload','UploadDocumentController');
Route::resource('/documentcategory','DocumentCategoryController');
Route::resource('/lifter','LifterController');
Route::resource('/cargotype','CargoTypeController');
Route::resource('/consignee','ConsigneeController');
Route::resource('/doctemplate','DocumentTemplateController');
Route::resource('/exportmap','ExportMapController');
Route::resource('/exportmap/node/comment','NodeCommentController');
