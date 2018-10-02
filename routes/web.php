<?php

use App\PavluvQuestionnaire;

//Public Routes, HTML Views
Route::get('/', 'HomeController@index');
Route::get('/home', 'HomeController@index')->name('home');
Route::get('/legal', 'HomeController@legal')->name('legal');
//Guest, Accounts
Route::get('/signup', 'Auth\RegisterController@choose');

//Private Routes, HTML Views
////Dashboard
Route::get('/dashboard', 'DashboardController@index');
Route::get('/dashboard/notifications', 'DashboardController@showNotifications');
Route::get('/dashboard/profile', 'DashboardController@showProfile');
Route::get('/dashboard/siredam', 'DashboardController@showSiredam');
Route::get('/dashboard/waitlist', 'DashboardController@showWaitlist');
Route::get('/dashboard/applications', 'DashboardController@showApplications');
Route::get('/dashboard/kennel', 'DashboardController@showKennel');
Route::get('/dashboard/billing', 'DashboardController@showBilling');
Route::get('/dashboard/questionnaire', 'DashboardController@showQuestionnaire');
Route::get('/dashboard/new-litter', 'DashboardController@showLitterWizard');
Route::get('/dashboard/puppies', 'DashboardController@showPuppyManager');

Route::resource('/users', 'UserController');
Route::resource('/litters', 'LitterController');
Route::resource('/puppies', 'PuppyController');
Route::resource('/kennel', 'KennelController');
Route::resource('/siredam', 'SiredamController');

////Wikibreedia

////Search

////Buyer Registration Walkthrough

////Breeder Registration Walkthrough

Auth::routes();
