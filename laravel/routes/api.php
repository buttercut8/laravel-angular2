<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});



Route::get('list-products',[
    'uses' => 'ProductController@getProducts',
    'as' => 'get.products',
]);

Route::post('add-products',[
    'uses' => 'ProductController@addProducts',
    'as' => 'add.products',
]);

Route::put('edit-products/{id}',[
    'uses' => 'ProductController@editProducts',
    'as' => 'edit.products',
]);

Route::delete('delete-products/{id}',[
    'uses' => 'ProductController@deleteProducts',
    'as' => 'delete.products',
]);



Route::get('list-category',[
    'uses' => 'CategoryController@getCategory',
    'as' => 'get.category',
]);


// Route::group(['prefix' => 'api-users'],function() use ($app){
//     Route::get('list',[
//         'uses' => 'ProductController@getProducts',
//         'as' => 'get.todo',
//     ]);
//     Route::post('add',[
//         'uses' => 'ProductController@addProducts',
//         'as' => 'add.products',
//     ]);
//     Route::put('edit/{id}',[
//         'uses' => 'ProductController@editProducts',
//         'as' => 'edit.products',
//     ]);
//     Route::delete('delete/{id}',[
//         'uses' => 'ProductController@deleteProducts',
//         'as' => 'delete.products',
//     ]);
// });
