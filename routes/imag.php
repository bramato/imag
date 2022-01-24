<?php

use Illuminate\Support\Facades\Route;

Route::name('imag.')->group(function () {

    /*Media*/
    Route::get('/'.config('imag.routePrefix').'/{id}', 'imageController@show')->name('show');
    Route::get('/'.config('imag.routePrefix').'/{id}/-/{command}', function ($id,$command) {
        return App::call('App\Http\Controllers\imageController@imageShop',[$id,$command]);
    })->where('command', '.*');

//IMAGE
    Route::get('/'.config('imag.routePrefix').'/{id}/cover/{size?}/{r?}/{schoolId?}', 'Api\mediaController@cover')->name('api.cover');
    Route::get('/'.config('imag.routePrefix').'/{id}/avatar/{size?}/{schoolId?}', 'Api\mediaController@avatar')->name('api.avatar');
    Route::get('/'.config('imag.routePrefix').'/{id}/bravatar/{size?}/{schoolId?}', 'Api\mediaController@bravatar')->name('api.bravatar');
});
