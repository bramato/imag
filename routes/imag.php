<?php

use Illuminate\Support\Facades\Route;

Route::name('imag.')->group(function () {

    /*Media*/
    Route::get('/image/{id}', 'imageController@show')->name('show');
    Route::get('/image/{id}/-/{command}', function ($id,$command) {
        return App::call('App\Http\Controllers\imageController@imageShop',[$id,$command]);
    })->where('command', '.*');

//IMAGE
    Route::get('/imageStorage/{id}/cover/{size?}/{r?}/{schoolId?}', 'Api\mediaController@cover')->name('api.cover');
    Route::get('/imageStorage/{id}/avatar/{size?}/{schoolId?}', 'Api\mediaController@avatar')->name('api.avatar');
    Route::get('/imageStorage/{id}/bravatar/{size?}/{schoolId?}', 'Api\mediaController@bravatar')->name('api.bravatar');
}
