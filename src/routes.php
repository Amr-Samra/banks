<?php

Route::group(['middleware' => ['auth', 'web'] ,"namespace" => "Bdwey\Banks\Http"],function () {

    Route::get('/importbanks', 'BanksController@importing');
});