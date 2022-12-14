<?php

use Illuminate\Support\Facades\Route;

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
    $pageTitle = "Welcome to Laravel";
    $classNumber = 73;
    return view('home', compact("pageTitle", "classNumber"));
})->name("main");

Route::get('/team', function () {
    $data = [
        "pageTitle" => "About class 73",
        "description" => "lorem ipsum",
        "students" => [
            "Giovanni",
            "Leonardo",
            "Andrea",
            "Sara"
        ],
        "teachers" => []
    ];
    return view('about', $data);
})->name("about");
