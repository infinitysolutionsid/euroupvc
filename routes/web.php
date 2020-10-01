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

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redirect;

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
Route::get('/gallery', 'HomepageController@galleryview');
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

// Katalog katalog or PRODUK
Route::prefix('catalog')->group(function () {
    Route::get('/door-system', function () {
        $door = DB::table('gallerydbs')
            ->where('gallerydbs.status', '=', 'approved')
            ->where('gallerydbs.product_id', '=', '1')
            ->select('gallerydbs.*')
            ->orderBy('gallerydbs.created_at', 'DESC')
            ->get();
        return view('homepage.catalog.doorsystem', ['door' => $door]);
    });
    Route::get('/window-system', function () {
        $window = DB::table('gallerydbs')
            ->where('gallerydbs.status', '=', 'approved')
            ->where('gallerydbs.product_id', '=', '3')
            ->select('gallerydbs.*')
            ->orderBy('gallerydbs.created_at', 'DESC')
            ->get();
        return view('homepage.catalog.windowsystem', ['window' => $window]);
    });
    Route::get('/sliding-window-system', function () {
        $slidingwin = DB::table('gallerydbs')
            ->where('gallerydbs.status', '=', 'approved')
            ->where('gallerydbs.product_id', '=', '4')
            ->select('gallerydbs.*')
            ->orderBy('gallerydbs.created_at', 'DESC')
            ->get();
        return view('homepage.catalog.slidingwindowsystem', ['slidingwin' => $slidingwin]);
    });
    Route::get('/sliding-door-system', function () {
        $slidingdoor = DB::table('gallerydbs')
            ->where('gallerydbs.status', '=', 'approved')
            ->where('gallerydbs.product_id', '=', '2')
            ->select('gallerydbs.*')
            ->orderBy('gallerydbs.created_at', 'DESC')
            ->get();
        return view('homepage.catalog.slidingdoorsystem', ['slidingdoor' => $slidingdoor]);
    });
});

Route::get('/door-system', function () {
    return Redirect::to('/catalog/door-system');
});
Route::get('/window-system', function () {
    return Redirect::to('/catalog/window-system');
});
Route::get('/sliding-window-system', function () {
    return Redirect::to('/catalog/sliding-window-system');
});
Route::get('/sliding-door-system', function () {
    return Redirect::to('/catalog/sliding-door-system');
});

Route::prefix('product/details')->group(function () {
    Route::get('/{product_name}', 'HomepageControler@productdetails');
});

Route::group(['prefix' => 'admin', 'middleware' => 'isLogin'], function () {
    Route::get('/dashboard', 'DashboardController@index');
    Route::get('/blog', 'DashboardController@showblog');
    Route::get('/user', 'DashboardController@showuser');
    Route::get('/gallery', 'DashboardController@showgallery');
    Route::get('/products', 'DashboardController@showproducts');
    Route::get('/emails', 'DashboardController@showemails');
    Route::get('/announcement', 'DashboardController@showannounce');
    Route::get('/partner', 'DashboardController@showpartner');
});

Route::group(['prefix' => 'admin/user', 'middleware' => 'isLogin'], function () {
    Route::post('/addnewuser', 'DashboardController@prosesaaddnew');
    Route::get('/trash/{id}', 'DashboardController@trashuser');
    Route::post('/update/{id}', 'DashboardController@updateuser');
});
Route::group(['prefix' => 'admin/products', 'middleware' => 'isLogin'], function () {
    Route::post('/addnewproduct', 'DashboardController@prosesaddproduct');
    Route::post('/addnewkategorial', 'DashboardController@prosesaddkategori');
    Route::post('/addnewitemproduk', 'DashboardController@prosesadditem');
    Route::get('/trash/{id}', 'DashboardController@trashproduct');
    Route::get('/itemtrash/{id}', 'DashboardController@itemtrashproduct');
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
    Route::get('/verify/{id}', 'DashboardController@verifygallery');
    Route::get('/declined/{id}', 'DashboardController@declinedgallery');
});
Route::group(['prefix' => 'admin/partner', 'middleware' => 'isLogin'], function () {
    Route::post('/addnewpartner', 'DashboardController@prosesaddpartner');
    Route::get('/trash/{id}', 'DashboardController@trashpartner');
});
Route::group(['prefix' => 'admin/emails', 'middleware' => 'isLogin'], function () {
    Route::get('/read/{id}', 'DashboardController@changestatus');
});
Route::group(['prefix' => 'admin/announcement', 'middleware' => 'isLogin'], function () {
    Route::post('/addnewannouncement', 'DashboardController@addnewannouncement');
    Route::post('/editannouncement/{id}', 'DashboardController@editannounce');
});
