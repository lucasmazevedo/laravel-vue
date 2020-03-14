<?php

use App\Models\Modality;
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

Route::get('modalities', function (Request $request){
    return Modality::all();
});

Route::get('modalities/{id}', function (Request $request, $modalityId){
    return Modality::findOrFail($modalityId);
});