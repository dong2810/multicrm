<?php

Route::group(['middleware' => 'web', 'prefix' => 'factory', 'namespace' => 'Modules\Factory\Http\Controllers'], function()
{
    Route::get('/', 'FactoryController@index');
});
