<?php

Route::group(['middleware' => 'web', 'prefix' => 'managementfactory', 'namespace' => 'Modules\ManagementFactory\Http\Controllers'], function()
{
    Route::get('/', 'ManagementFactoryController@index');
});
