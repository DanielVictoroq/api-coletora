<?php

use Illuminate\Http\Request;

Route::group(['middleware' => ['api_token']], function () {
    Route::post('/inserir', 'EventoController@inserirDado');
});

