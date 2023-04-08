<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ApiController;
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


// Route::post('add_customer',[ApiController::class,'add_customer']);
// Route::get('show_customer',[ApiController::class,'show_customer']);
// Route::post('otp_send',[ApiController::class,'otp_send']);


 Route::post('send_mobile_verify_otp',[ApiController::class,'send_mobile_verify_otp']);
 Route::post('post_customer_register',[ApiController::class,'post_customer_register']);
 Route::post('post_status',[ApiController::class,'post_status']);
 Route::get('get_repayment_schedule',[ApiController::class,'get_repayment_schedule']);
 Route::get('get_profile',[ApiController::class,'get_profile']);
 Route::get('get_loan_summary',[ApiController::class,'get_loan_summary']);
  Route::get('get_transcation_history',[ApiController::class,'get_transcation_history']);
 Route::get('get_unpaid',[ApiController::class,'get_unpaid']);
 Route::get('get_paid',[ApiController::class,'get_paid']);
 