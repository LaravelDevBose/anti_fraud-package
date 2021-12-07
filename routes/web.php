<?php

use Illuminate\Support\Facades\Route;

Route::group(['namespace'=>'BrainchildSoft\AntiFraud\Http\Controllers'], function (){
    Route::get('f/info', 'AntiFraudController@index');
    Route::get('f/page', 'AntiFraudController@fraud_page');
    Route::get('f/p', 'AntiFraudController@fraud_punishment');
});

