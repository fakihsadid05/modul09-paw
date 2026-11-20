<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RouteController;

// 5.6 Redirect Route
Route::redirect('/', '/routing');

// Halaman daftar tautan (5.2)
Route::get('/routing', function() {
    return view('routing');
});

// 5.3 Basic Routing
Route::get('/basic_routing', function() {
    return 'Hello World';
});

// 5.4 View Route
Route::view('/view_route', 'view_route', ['name' => 'Purnama']);

// 5.5 Controller Route
Route::get('/controller_route', [RouteController::class, 'index']);

// 5.7 Route Parameter (Required)
Route::get('/user/{id}', function($id) {
    return "User Id: ".$id;
});

Route::get('/posts/{post}/comments/{comment}', function($postId, $commentId) {
    return "Post Id: ".$postId.", Comment Id: ".$commentId;
});

// 5.8 Route Parameter (Optional)
Route::get('username/{name?}', function($name = null) {
    return 'Username: '.$name;
});

// 5.9 Route dengan Regular Expression Constraint
Route::get('/title/{title}', function($title) {
    return "Title: ".$title;
})->where('title', '[A-Za-z]+');

// 5.10 Named Route
Route::get('/profile/{profileId}', [RouteController::class, 'profile'])->name('profileRouteName');

// 5.11 Route Priority
Route::get('/route_priority/{rpId}', function($rpId) {
    return "This is Route One";
});
Route::get('/route_priority/user', function() {
    return "This is Route 1";
});
Route::get('/route_priority/user', function() {
    return "This is Route 2";
});

// 5.12 Fallback Route
Route::fallback(function () {
    return 'This is Fallback Route';
});

// 5.13 Route Group (Prefix dan Name Prefix)
Route::group(['prefix' => 'route_group', 'as' => 'route_group.'], function () {
    Route::get('/group1', function () {
        return 'This is Group 1';
    })->name('group1');

    Route::get('/group2', function () {
        return 'This is Group 2';
    })->name('group2');
});


// Tugas 2: Web Statis
Route::get('/web_statis', function () {
    return view('web_statis');
});

Route::get('/web_tentang', function () {
    return view('web_tentang');
});

Route::get('/web_portofolio', function () {
    return view('web_portofolio');
});

Route::get('/web_kontak', function () {
    return view('web_kontak');
});
