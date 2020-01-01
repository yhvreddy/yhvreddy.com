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

if(date('Y-m-d') == '2020-01-01'){
    Route::get('/', 'WebsiteController@indexWelcome');
    Route::get('/home', 'WebsiteController@index');
}else{
    //Route::get('/', 'WebsiteController@indexWelcome');
    Route::get('/', 'WebsiteController@index');
}

//Route::get('/', 'WebsiteController@indexWelcome');
Route::get('/home', 'WebsiteController@index');
Route::get('/aboutus', 'WebsiteController@aboutus');
Route::get('/services', 'WebsiteController@services');
Route::get('/portfolio', 'WebsiteController@portfolio');
Route::get('/contactus', 'WebsiteController@contactus');
Route::get('/portfolio/{id}/details', 'WebsiteController@portfoliodetails');


Route::post('/ajaxRequest', 'WebsiteController@ajaxRequestPost');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

/*
* Dashboard Links
* */
Route::get('/home/addskills','SkillsController@index');
Route::get('/home/skills/{id}/delete','SkillsController@deleteskills');
Route::post('/home/saveSkills','SkillsController@saveSkillsData');

Route::get('/home/services','ServiceController@index');
Route::get('/home/service/{id}/delete','ServiceController@deleteservicedetails');
Route::post('/home/saveServiceData','ServiceController@saveServiceData');

Route::get('/home/aboutus','AboutusController@index');
Route::post('/home/saveAboutusData','AboutusController@saveAboutusData');

Route::get('/home/education','AboutusController@education');
Route::get('/home/education/{id}/delete','AboutusController@deleteducation');
Route::post('/home/educationsave','AboutusController@educationsave');

Route::get('/home/experence','AboutusController@experence');
Route::get('/home/experence/{id}/delete','AboutusController@deletexperence');
Route::post('/home/experencesave','AboutusController@experencesave');

Route::get('/home/addproject','PortfolioController@index');
Route::get('/home/projectlist','PortfolioController@projectlist');
Route::get('/home/project/{id}/delete','PortfolioController@deleteproject');
Route::post('/home/saveprojectdetails','PortfolioController@saveprojectdetails');