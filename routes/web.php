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
    return view('index');
});
Route::get('/bloodtypes', function(){
    return view('bloodtypes', ['title'=>'Bloodtypes Page']);
});
Route::get('/whocandonate', function(){
    return view('whocandonate', ['title'=>'Whocandonate Page']);
});
Route::get('/blooddrives', function(){
    return view('blooddrives', ['title'=>'Blooddrives Page']);
});
Route::get('/contact', function(){
    return view('contact', ['title'=>'Contact Page']);
});
Route::get('/about', function(){
    return view('about', ['title'=>'About Page']);
});
Route::get('recipients', function(){
    return view('donor/recipients', ['title'=>'Recipients Page']);
});
Route::get('A+', function(){
    return view('donor/bloodgroups/A+', ['title'=>'A+ Recipients Page']);
});
Route::get('A-', function(){
    return view('donor/bloodgroups/A-', ['title'=>'A- Recipients Page']);
});
Route::get('B+', function(){
    return view('donor/bloodgroups/B+', ['title'=>'B+ Recipients Page']);
});
Route::get('B-', function(){
    return view('donor/bloodgroups/B-', ['title'=>'B- Recipients Page']);
});
Route::get('AB+', function(){
    return view('donor/bloodgroups/AB+', ['title'=>'AB+ Recipients Page']);
});
Route::get('AB-', function(){
    return view('donor/bloodgroups/AB-', ['title'=>'AB- Recipients Page']);
});
Route::get('O+', function(){
    return view('donor/bloodgroups/O+', ['title'=>'O+ Recipients Page']);
});
Route::get('O-', function(){
    return view('donor/bloodgroups/O-', ['title'=>'O- Recipients Page']);
});
Route::get('profile', function(){
    return view('donor/profile', ['title'=>'Profile Page']);
});
Route::get('requests', function(){
    return view('donor/requests', ['title'=>'Requests Page']);
});
Route::get('requestshistory', function(){
    return view('donor/requestshistory', ['title'=>'Requests Page']);
});

Route::get('donors', function(){
    return view('recipients/donors', ['title'=>'Recipients Page']);
});
Route::get('Aplus', function(){
    return view('recipients/bloodgroups/A+', ['title'=>'A+ Recipients Page']);
});
Route::get('Aminus', function(){
    return view('recipients/bloodgroups/A-', ['title'=>'A- Recipients Page']);
});
Route::get('Bplus', function(){
    return view('recipients/bloodgroups/B+', ['title'=>'B+ Recipients Page']);
});
Route::get('Bminus', function(){
    return view('recipients/bloodgroups/B-', ['title'=>'B- Recipients Page']);
});
Route::get('ABplus', function(){
    return view('recipients/bloodgroups/AB+', ['title'=>'AB+ Recipients Page']);
});
Route::get('ABminus', function(){
    return view('recipients/bloodgroups/AB-', ['title'=>'AB- Recipients Page']);
});
Route::get('Oplus', function(){
    return view('recipients/bloodgroups/O+', ['title'=>'O+ Recipients Page']);
});
Route::get('Ominus', function(){
    return view('recipients/bloodgroups/O-', ['title'=>'O- Recipients Page']);
});
Route::get('profile1', function(){
    return view('recipients/profile', ['title'=>'Profile Page']);
});
Route::get('requests1', function(){
    return view('recipients/requests', ['title'=>'Requests Page']);
});
Route::get('requestshistory1', function(){
    return view('recipients/requestshistory', ['title'=>'Requests Page']);
});