<?php

Route::get('usuarios', ['as' => 'users.index', 'uses' => 'UsersController@index']);
Route::get('mimimi', ['as' => 'users.index', 'uses' => 'UsersController@mimimi']);

Route::get('api/usuarios/listar', ['as' => 'users.listar', 'uses' => 'UsersController@listar']);


Route::get('/', function () {
    return redirect()->route('users.index');
});
