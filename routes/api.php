<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Bookable;

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

// Route::get('bookables/{id}/{optional?}', function(Request $request, $id, $optional = null){
//     dd($id, $optional);
//     return Bookable::find($id);
// });

Route::get('bookables', 'Api\BookableController@index');

Route::get('bookables/{id}', 'Api\BookableController@show');