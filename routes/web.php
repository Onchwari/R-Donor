<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Authentication;
use App\Http\Controllers\Addblooddrives;
use App\Http\Controllers\ViewUsers;



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
Route::get('/contact', function(){
    return view('contact', ['title'=>'Contact Page']);
});
Route::get('/about', function(){
    return view('about', ['title'=>'About Page']);
});

Route::get('/blooddrives',[Addblooddrives::class,'displayDrives']);

//donors side
Route::get('donor/recipients',[ViewUsers::class,'displayRecipient']);
Route::get('donor/bloodgroups/A+',[ViewUsers::class,'recipientAplus']);
Route::get('donor/bloodgroups/A-',[ViewUsers::class,'recipientAminus']);
Route::get('donor/bloodgroups/B+',[ViewUsers::class,'recipientBplus']);
Route::get('donor/bloodgroups/B-',[ViewUsers::class,'recipientBminus']);
Route::get('donor/bloodgroups/AB+',[ViewUsers::class,'recipientABplus']);
Route::get('donor/bloodgroups/AB-',[ViewUsers::class,'recipientABminus']);
Route::get('donor/bloodgroups/O+',[ViewUsers::class,'recipientOplus']);
Route::get('donor/bloodgroups/O-',[ViewUsers::class,'recipientOminus']);
Route::get('donor/profile',[Authentication::class,'edit2']);
Route::put('donor/update-data1',[Authentication::class,'update2']);
//sent requests
Route::get('donor/requests',[ViewUsers::class,'displayResponses']);
Route::get('donor/accept-request/{id}',[ViewUsers::class,'acceptRequest']);
Route::get('donor/reject-request/{id}',[ViewUsers::class,'rejectRequest']);



//recipients side
Route::get('recipients/donors',[ViewUsers::class,'displayDonors']);
//send request
Route::match(['get','post'],'recipients/send-request/{id}',[ViewUsers::class,'sendRequest']);
Route::get('recipients/requests',[ViewUsers::class,'displayRequests']);
// Route::get('requests1', function(){
//     return view('recipients/requests', ['title'=>'Requests Page']);
// });


Route::get('recipients/bloodgroups/A+',[ViewUsers::class,'donorAplus']);
Route::get('recipients/bloodgroups/A-',[ViewUsers::class,'donorAminus']);
Route::get('recipients/bloodgroups/B+',[ViewUsers::class,'donorBplus']);
Route::get('recipients/bloodgroups/B-',[ViewUsers::class,'donorBminus']);
Route::get('recipients/bloodgroups/AB+',[ViewUsers::class,'donorABplus']);
Route::get('recipients/bloodgroups/AB-',[ViewUsers::class,'donorABminus']);
Route::get('recipients/bloodgroups/O+',[ViewUsers::class,'donorOplus']);
Route::get('recipients/bloodgroups/O-',[ViewUsers::class,'donorOminus']);
Route::get('recipients/profile',[Authentication::class,'edit3']);
Route::put('recipients/update-data2',[Authentication::class,'update3']);





Route::get('requestshistory1', function(){
    return view('recipients/requestshistory', ['title'=>'Requests Page']);
});
Route::get('/login', function(){
    return view('login', ['title'=>'login Page']);
});
Route::post('login-user',[Authentication::class,'loginUser'])->name('login-user');
Route::get('/signup', function(){
    return view('signup', ['title'=>'Signup Page']);
});
Route::get('/logout',[Authentication::class,'logout']);
Route::post('register-user',[Authentication::class,'registerUser'])->name('register-user');

Route::get('/adminlogin', function(){
    return view('admin/login', ['title'=>'login Page']);
});
Route::post('register-admin',[Authentication::class,'registerAdmin'])->name('register-admin');
Route::post('login-admin',[Authentication::class,'loginAdmin'])->name('login-admin');


Route::get('/viewrequests', function(){
    return view('admin/requests', ['title'=>'Users Page']);
});

Route::post('add-drive',[Addblooddrives::class,'addDrive'])->name('add-drive');



Route::get('/viewrequests1', function(){
    return view('admin/mainadmin/requests', ['title'=>'Users Page']);
});


Route::get('/requestinfo', function(){
    return view('recipients/requestinfo', ['title'=>'Request Info Page']);
});
Route::get('/requestview', function(){
    return view('donors/requestview', ['title'=>'Request View Page']);
});
//admin views

Route::get('admin/donors',[ViewUsers::class,'viewDonors']);
Route::get('admin/requests',[ViewUsers::class,'viewRequests']);
Route::get('admin/requests/delete/{id}',[ViewUsers::class,'deletereq']);
Route::get('admin/recipients',[ViewUsers::class,'viewRecipients']);
Route::get('admin/blooddrives',[Addblooddrives::class,'viewDrives']);
Route::get('/admin/blooddrives/delete/{id}',[Addblooddrives::class,'delete']);
Route::get('/admin/edit/{id}',[Addblooddrives::class,'edit']);
Route::put('admin/update-data/{id}',[Addblooddrives::class,'update']);
// Route::put('admin/update-data1/{id}',[ViewUsers::class,'update']);
Route::get('admin/donors/delete/{id}',[ViewUsers::class,'delete']);
Route::get('admin/recipients/delete/{id}',[ViewUsers::class,'delete1']);
Route::get('/admin/profile/',[Authentication::class,'edit']);
Route::put('admin/update-data1',[Authentication::class,'update']);


//Main admin views
Route::get('admin/mainadmin/donors',[ViewUsers::class,'viewDonors1']);
Route::get('admin/mainadmin/requests',[ViewUsers::class,'viewRequests1']);
Route::get('admin/mainadmin/requests/delete/{id}',[ViewUsers::class,'deletereq1']);
Route::get('admin/mainadmin/recipients',[ViewUsers::class,'viewRecipients1']);
Route::get('admin/mainadmin/blooddrives',[Addblooddrives::class,'viewDrives1']);
 Route::get('/admin/mainadmin/blooddrives/delete/{id}',[Addblooddrives::class,'delete1']);
 Route::get('/admin/mainadmin/edit/{id}',[Addblooddrives::class,'edit1']);
Route::put('admin/mainadmin/update-data/{id}',[Addblooddrives::class,'update1']);
 Route::get('admin/mainadmin/donors/delete/{id}',[ViewUsers::class,'delete2']);
 Route::get('admin/mainadmin/recipients/delete/{id}',[ViewUsers::class,'delete3']);
 Route::get('admin/mainadmin/admin/delete/{id}',[ViewUsers::class,'delete4']);

Route::get('admin/mainadmin/admin',[ViewUsers::class,'viewAdmin']);
//Route::get('admin/mainadmin/profile1',[Authentication::class,'edit1']);

Route::get('admin/mainadmin/profile',[Authentication::class,'edit1']);
Route::put('admin/mainadmin/update-data1',[Authentication::class,'update1']);



