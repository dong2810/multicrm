<?php

Route::group(['middleware' => 'web', 'prefix' => 'management', 'namespace' => 'Modules\Management\Http\Controllers'], function()
{
    Route::get('/', 'ManagementController@index');
});
