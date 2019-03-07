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

Route::get('/', 'PagesController@home');
Route::get('/about', 'PagesController@about');
Route::get('/contact', 'PagesController@contact');

/*Route::get('/deneme', function() {
    return view('deneme');
});
*/
Route::get('/deneme', 'HomeController@get_deneme');

Route::get('/form', 'HomeController@get_form');
Route::post('/form', 'HomeController@post_form');
Route::get('/haberler', 'HomeController@get_haberler');
Route::post('/haberler', 'HomeController@post_haberler');

#Route::get('/deneme/{isim}', 'HomeController@get_deneme_isim');

// Midleware olmadan
//Route::group(['prefix'=>'deneme'], function() {
//
Route::group(['prefix' => 'admin', 'middleware'=>'admin'], function () { // Middleware için
    Route::get('/{forum}', 'HomeController@get_deneme');
    Route::get('/{blog}', 'HomeController@get_deneme');
    Route::group(['prefix' => 'haber', 'middleware'=>'yazar'], function () {
        Route::get('/{haber-ekle}', 'HomeController@get_deneme');
        Route::get('/{haberler}', 'HomeController@get_deneme');
    });
    Route::get('/{galeri}', 'HomeController@get_deneme');
});


Route::get('/deneme/{forum}/{php}/{framework}/{sorular}', 'HomeController@get_kategori');


// Welcome.blade2.php için
/*Route::get('/', function () {
    $tasks = [
        'Go to the store',
        'Go to the market',
        'Go to work',
        'Go to concert'
    ];


    return view('welcome')->withTasks($tasks)->withFoo('foo');

    /*return view('welcome', [
        'tasks' => $tasks,
        'foo' => 'foobar',
        'istek' => request('title')
    ]);
});
*/
/*
Route::get('/about', function () {
    return view('about');
});

Route::get('/contact', function () {
    return view('contact');
});
*/
