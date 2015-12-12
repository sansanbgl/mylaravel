<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
 */

Route::get('/', function () {
    return view('welcome');
});

Route::get('/bahan', 'bahanController@index');
Route::get('/bahan/create', 'bahanController@create');
Route::post('/bahan/create', array('before' => 'csrf', 'uses' => 'bahanController@create'));
Route::get('/bahan/update/{id}', 'bahanController@update');
Route::post('/bahan/update/{id}', array('before' => 'csrf', 'uses' => 'bahanController@update'));
Route::get('/bahan/delete/{id}', 'bahanController@delete');

Route::get('/koki', 'KokiController@index');
Route::get('/koki/create', 'KokiController@create');
Route::post('/koki/create', array('before' => 'csrf', 'uses' => 'KokiController@create'));
Route::get('/koki/update/{id}', 'KokiController@update');
Route::post('/koki/update/{id}', array('before' => 'csrf', 'uses' => 'KokiController@update'));
Route::get('/koki/delete/{id}', 'KokiController@delete');
Route::get('/koki/detail/{id}', 'KokiController@detail');

Route::get('/resep', 'ResepController@index');
Route::get('/resep/create', 'ResepController@create');
Route::post('/resep/create', array('before' => 'csrf', 'uses' => 'ResepController@create'));
Route::get('/resep/update/{id}', 'ResepController@update');
Route::post('/resep/update/{id}', array('before' => 'csrf', 'uses' => 'ResepController@update'));
Route::get('/resep/delete/{id}', 'ResepController@delete');
Route::get('/resep/detail/{id}', 'ResepController@detail');

Route::get('/somerouteshere', 'ResepController@index');
Route::get('/somerouteshere/create', 'ResepController@create');
Route::post('/somerouteshere/create', array('before' => 'csrf', 'uses' => 'ResepController@create'));
Route::get('/somerouteshere/update/{id}', 'ResepController@update');
Route::post('/somerouteshere/update/{id}', array('before' => 'csrf', 'uses' => 'ResepController@update'));
Route::get('/somerouteshere/delete/{id}', 'ResepController@delete');
Route::get('/koki-auto-create', function () {
    for ($i = 0; $i < 10; $i++) {
        \App\Models\Koki::create([
            'nama' => 'koki' . $i, 'kode' => 'ko' . $i]);
    }
});

Route::get('/koki-resep-auto', function () {
    for ($i = 0; $i < 10; $i++) {
        for ($j = 0; $j < 5; $j++) {
            \App\Models\Resep::create([
                'koki_id' => $i + 1, 'nama' => 'resepmilikkoki_' . $i . 'nomer' . $j]);
        }
    }
});

Route::get('/generate-bahan', function () {
    $bahans = [
        'tepung', 'gula', 'telur', 'garam', 'mentega', 'ayam',
    ];
    foreach ($bahans as $bahan) {
        \App\Models\Bahan::create([
            'nama' => $bahan]);
    }
});

Route::get('drop-create-database', function () {
    $db = DB::connection()->getDatabaseName();;

    DB::statement('DROP DATABASE `' . $db . '`');

    DB::statement('CREATE DATABASE `' . $db . '`');

});
