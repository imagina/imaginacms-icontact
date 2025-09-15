<?php

use Illuminate\Support\Facades\Route;
use Modules\Icontact\Http\Controllers\Api\ItemApiController;

// add-use-controller


Route::prefix('/icontact/v1')->group(function () {
  Route::apiCrud([
    'module' => 'icontact',
    'prefix' => 'items',
    'controller' => ItemApiController::class,
    'permission' => 'icontact.items',
    //'middleware' => ['create' => [], 'index' => [], 'show' => [], 'update' => [], 'delete' => [], 'restore' => []],
    // 'customRoutes' => [ // Include custom routes if needed
    //  [
    //    'method' => 'post', // get,post,put....
    //    'path' => '/some-path', // Route Path
    //    'uses' => 'ControllerMethodName', //Name of the controller method to use
    //    'middleware' => [] // if not set up middleware, auth:api will be the default
    //  ]
    // ]
  ]);
  Route::apiCrud([
    'module' => 'icontact',
    'prefix' => 'item-types',
    'staticEntity' => 'Modules\Icontact\Models\ItemType',
    'middleware' => ['index' => [], 'show' => []]
  ]);
// append

});
