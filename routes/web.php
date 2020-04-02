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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/avisos', function () {

    return view('avisos', [
        'nome' => 'Walter', 'mostrar' => true,
        'avisos' => [
            ['id' => 1, 'texto' => 'Aviso A'],
            ['id' => 2, 'texto' => 'Aviso B'],
            ['id' => 3, 'texto' => 'Aviso C']
        ]
    ]);

});
