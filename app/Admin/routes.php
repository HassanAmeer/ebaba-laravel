<?php

use Illuminate\Routing\Router;

Admin::routes();

Route::group([
    'prefix'        => config('admin.route.prefix'),
    'namespace'     => config('admin.route.namespace'),
    'middleware'    => config('admin.route.middleware'),
    'as'            => config('admin.route.prefix') . '.',
], function (Router $router) {

    $router->get('/', 'HomeController@index')->name('home');
    $router->resource('categoriesmodels', categoriescontroller::class);
    $router->resource('products', productsController::class);
    $router->resource('contactUs', contactUsController::class);
    $router->resource('settings', settingsController::class);
    $router->resource('bannerImages', bannerImagesOnlyController::class);
    $router->resource('promotionBanners', PromotionBannerController::class); 
    $router->resource('bannerDesigns', bannerDesignController::class);
    $router->resource('top-slide-texts', topSlideTextController::class);
    $router->resource('toast-messages', toastMessageController::class);
    $router->resource('design-code-lists', designCodeListController::class);


    
    


});
