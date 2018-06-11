<?php

use Illuminate\Routing\Router;

Admin::registerAuthRoutes();

Route::group([
    'prefix'        => config('admin.route.prefix'),
    'namespace'     => config('admin.route.namespace'),
    'middleware'    => config('admin.route.middleware'),
], function (Router $router) {

    $router->get('/', 'HomeController@index');
    $router->resource('case','CaseController');
    $router->resource('case_type','CaseTypeController');
    $router->resource('banner/set','BannerControllers');
    $router->resource('about/set','WebSetController');
    $router->resource('partner/set','PartnerController');
    $router->resource('contact/set','WebSetController');
    $router->resource('jobs/set','JobsController');
    $router->resource('contact/set','ContactController');
    $router->resource('news/list','NewsController');

});
