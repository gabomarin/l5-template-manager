<?php
$route_name = config('template-manager.route');

Route::group(['prefix' => $route_name], function () use ($route_name) {
    Route::get('/', ['as' => $route_name.'.index', 'uses' => 'Corb\TemplateManager\TemplateManagerController@index']);
});

