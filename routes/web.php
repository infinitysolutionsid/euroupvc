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

Route::get('/', 'HomepageController@index');
Route::get('/blog/{judul}', 'HomepageController@blogview');
Route::get('/projects', 'HomepageController@projectsview');
Route::post('/kirim-pesan', 'DashboardController@kirimpesan');
Route::get('/contact-us', function () {
    return view('homepage.contact');
});
Route::get('/pesan', function () {
    return view('receivedemails');
});
Route::get('/about-us', function () {
    return view('homepage.aboutus');
});
Route::get('/dash', function () {
    return view('dashboard');
});
Route::prefix('admin')->group(function () {
    Route::get('/', 'DashboardController@loginshow')->name('login.show');
    Route::post('/', 'DashboardController@loginproses')->name('login.proses');
});
Route::get('logout', function () {
    session()->flush();
    return redirect('/admin/dashboard');
});

Route::group(['prefix' => 'admin', 'middleware' => 'isLogin'], function () {
    Route::get('/dashboard', 'DashboardController@index');
    Route::get('/blog', 'DashboardController@showblog');
    Route::get('/user', 'DashboardController@showuser');
    Route::get('/gallery', 'DashboardController@showgallery');
    Route::get('/products', 'DashboardController@showproducts');
    Route::get('/emails', 'DashboardController@showemails');
});

Route::group(['prefix' => 'admin/user', 'middleware' => 'isLogin'], function () {
    Route::post('/addnewuser', 'DashboardController@prosesaaddnew');
    Route::get('/trash/{id}', 'DashboardController@trashuser');
    Route::post('/update/{id}', 'DashboardController@updateuser');
});
Route::group(['prefix' => 'admin/products', 'middleware' => 'isLogin'], function () {
    Route::post('/addnewproduct', 'DashboardController@prosesaddproduct');
    Route::get('/trash/{id}', 'DashboardController@trashproduct');
    Route::post('/update/{id}', 'DashboardController@updateproduct');
});
Route::group(['prefix' => 'admin/blog', 'middleware' => 'isLogin'], function () {
    Route::post('/addnewblog', 'DashboardController@prosesaddblog');
    Route::get('/trash/{id}', 'DashboardController@trashblog');
    Route::post('/update/{id}', 'DashboardController@updateblog');
});
Route::group(['prefix' => 'admin/gallery', 'middleware' => 'isLogin'], function () {
    Route::post('/addnewgallery', 'DashboardController@prosesaddgallery');
    Route::get('/trash/{id}', 'DashboardController@trashgallery');
});
