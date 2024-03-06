<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

/* ROUTE HEADER */
Route::get('/', function () {

    $title = 'Naviga tra le pagine';
    $home_page = 'Home';
    $contacts = 'Contatti';
    $information = 'Info' ;

    $header = compact('title', 'home_page', 'contacts', 'information');

    return view('header', $header);
}) -> name('header') ;


/* ROUTE HOME_PAGE */
Route::get('/home_page', function () {

    $description = 'Hello World';

    return view('header.home_page', compact('description'));
}) -> name('home_page');


/* ROUTE CONTACTS */
Route::get('/contacts', function () {

    $title = 'Contatti';
    $contacts = [
        [ 'name' => 'Marco', 'surname' => 'Fonti', 'number' => '3349023490' ],
        [ 'name' => 'Matteo', 'surname' => 'Conti', 'number' => '3349023487' ],
        [ 'name' => 'Jennifer', 'surname' => 'Fonti', 'number' => '3349023456' ],
        [ 'name' => 'Patrizia', 'surname' => 'Canella', 'number' => '3349023234' ],
    ];

    return view('header.contacts', compact('contacts', 'title'));
}) -> name('contacts');


/* ROUTE INFORMATION */
Route::get('/information', function () {

    $title = 'Impara con noi:';
    $information = ['Html', 'CSS', 'JS', 'Vue', 'PHP', 'Laravel'];

    return view('header.information', compact('title','information'));
}) -> name('information');