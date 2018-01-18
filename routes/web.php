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

// Route::get('/', function () {
//     return view('home');
// });

// Route::get('/home', function () {
//     return view('home');
// });

// Route::get('/login', function () {
//     return view('login');
// });

// Route::get('logout', array('as' => 'logout', 'uses' => 'HomeController@doLogout'));

Route::get('{page?}', function($page = null)
{
    switch($page) {
        case "":
            return view('home');
            break;
        case "login":
            return view('login');
            break;
        default:
            return abort(404);
            break;
    }
});
Route::auth();
Route::get('login', array('as' => 'login', 'uses' => 'HomeController@showLogin'));
Route::post('login', array('as' => 'login', 'uses' => 'HomeController@doLogin'));