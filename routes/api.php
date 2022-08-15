<?php

use App\Http\Controllers\API\CommonController;
use App\Http\Controllers\API\PaymentController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::post('/purchaseTicket',[CommonController::class,'purchaseTicket']);
Route::post('/totalSales',[CommonController::class,'totalSales']);
Route::post('/salesSummary',[CommonController::class,'salesSummary']);
Route::post('/withdraw',[CommonController::class,'withdraw']);
Route::get('/connect',[CommonController::class,'connect']);
Route::get('/tokenList',[PaymentController::class,'tokenList']);
Route::post('/userTokenCount',[PaymentController::class,'userTokenCount']);
Route::post('/litPoint',[PaymentController::class,'purchasePoint']);
Route::post('/signup',[PaymentController::class,'signup']);
Route::post('/vipEventCreate',[CommonController::class,'vipEventCreate']);

Route::get('/withdraw/url',function (Request $request) {
    return $request->all();
});

//withdraw/url