<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MasterController;
use App\Http\Controllers\UserController;

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


Route::get('/',[UserController::class,'index'])->name('login');
Route::post('login_submit',[UserController::class,'login_submit'])->name('login_submit');
Route::get('logout',[UserController::class,'log_out'])->name('logout');

Route::get('dashboard',[MasterController::class,'index'])->name('dashboard');
Route::get('destroydashboardroute/{id}',[MasterController::class,'destroydashboard'])->name('destroydashboardroute');



Route::get('paidemis/{loan_ids}',[MasterController::class,'paidemi'])->name('update_emi');
Route::get('unpaidemis/{loan_ids}',[MasterController::class,'unpaidemi'])->name('unpaidemis');

//masters routes for the panal
Route::get('loan_scheme',[MasterController::class,'loan_scheme'])->name('loan_scheme');
Route::post('add_loan_scheme',[MasterController::class,'add_loan_scheme'])->name('add_loan_scheme');
Route::get('delete_loan_scheme/{id}',[MasterController::class,'delete_loan_scheme'])->name('delete_loan_scheme');
Route::get('edit_loan_scheme/{id}',[MasterController::class,'edit_loan_scheme'])->name('edit_loan_scheme');
Route::post('update_loan_scheme/{id}',[MasterController::class,'update_loan_scheme'])->name('update_loan_scheme');

Route::get('customer',[MasterController::class,'customer'])->name('customer');
Route::post('add_customer',[MasterController::class,'add_customer'])->name('add_customer');
Route::get('delete_customer/{id}',[MasterController::class,'delete_customer'])->name('delete_customer');
Route::get('edit_customer/{id}',[MasterController::class,'edit_customer'])->name('edit_customer');
Route::post('update_customer',[MasterController::class,'update_customer'])->name('update_customer');



Route::get('city',[MasterController::class,'city'])->name('city');
Route::post('add_city',[MasterController::class,'add_city'])->name('add_city');
Route::get('delete_city/{id}',[MasterController::class,'delete_city'])->name('delete_city');
Route::get('edit_city/{id}',[MasterController::class,'edit_city'])->name('edit_city');
Route::post('update_city/{id}',[MasterController::class,'update_city'])->name('update_city');

//loan-application routes
Route::get('loan_application',[MasterController::class,'loan_application'])->name('loan_application');
Route::get('disbursement',[MasterController::class,'loan_application'])->name('loan_application');
Route::post('add_loan',[MasterController::class,'create_loan_application'])->name('add_loan');
Route::get('delete_loanapp/{id}',[MasterController::class,'deleteloanapp'])->name('delete_loanapp');
Route::get('edit_loanapp/{id}',[MasterController::class,'loanappedit'])->name('edit_loanapp');
Route::post('update_loanapp',[MasterController::class,'loanappupdate'])->name('update_loanapp');
Route::post('addloanappmodal',[MasterController::class,'loanappmodal'])->name('addloanappmodal');

//for script
Route::get('get_intrest_app_val_pro_by_id',[MasterController::class,'get_intappvalpro'])->name('get_intrest_app_val_pro_by_id');

Route::get('get_cityaltno_by_id',[MasterController::class,'get_cityno'])->name('get_cityaltno_by_id');
Route::get('get_loanappdetailshedul',[MasterController::class,'loanapschedule'])->name('get_loanappdetailshedul');
Route::get('get_disbusrmenttable',[MasterController::class,'disbusrmenttable'])->name('get_disbusrmenttable');


//disbursementblade
Route::get('disburse',[MasterController::class,'disburseblade'])->name('disburse');
Route::post('updatedisburse',[MasterController::class,'disbursedeleteupdate'])->name('updatedisburse');


//report
Route::get('track_emi',[MasterController::class,'track_emi'])->name('track_emi');
Route::get('customer_with_emi',[MasterController::class,'customer_with_emi'])->name('customer_with_emi');
Route::get('total_emi_pending',[MasterController::class,'total_emi_pending'])->name('total_emi_pending');