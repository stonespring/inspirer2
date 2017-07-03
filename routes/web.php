<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

use Illuminate\Routing\Router;
use App\Http\Controllers\{
    UserArea
};

/**
 * @var Router $router
 */

$router->group(['prefix' => 'private'], function (Router $router) {
    $router->get('content', UserArea\ContentsController::class . '@index')->name('private.content.index');
    $router->get('content/{id}', UserArea\ContentsController::class . '@show')->name('private.content.show');
    $router->post('content/{type}', UserArea\ContentsController::class . '@store')->name('private.user.content.store');
    $router->delete('content/{id}', UserArea\ContentsController::class . '@destroy')->name('private.content.destroy');
    $router->match(['put', 'patch'], 'content/{type}/{id}', UserArea\ContentsController::class . '@update')
           ->name('private.content.update');

    $router->get('category', UserArea\CategoriesController::class . '@index')->name('private.category.index');
});