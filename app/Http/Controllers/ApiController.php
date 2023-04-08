<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Customer;
use App\Models\Schedule;
use App\Models\Loan_application;
use PhpParser\Builder\Function_;

class ApiController extends Controller
{
    
      public function send_mobile_verify_otp(Request $request)
    {
      //Customer::where('whatsapp_number', '=', $request->mobile_no)->exists();
        $check = Customer::where('whatsapp_number', '=', $request->contact_no)->first() ;
        if (isset($check) && $check != null) {
           // $otp = rand(1000, 9999);
           $otp = 1234;//default otp
        return response()->json(['user'=>$check,'otp'=>$otp]);

            $name = 'Sir/Mam';
            $msg = 'Dear ' . $name . ', Your OTP is ' . $otp . '. Send
               by WEBMEDIA';
            $msg = urlencode($msg);
            $to = $request->contact_no;
            //$user->mobile;
            // $request->mobile;
            $data1 = "uname=habitm1&pwd=habitm1&senderid=WMEDIA&to=" .
                $to . "&msg=" . $msg .
                "&route=T&peid=1701159196421355379&tempid=1707161527969328476";
            $ch = curl_init('http://bulksms.webmediaindia.com/sendsms?');
            curl_setopt($ch, CURLOPT_POST, true);
            curl_setopt($ch, CURLOPT_POSTFIELDS, $data1);
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
            $result = curl_exec($ch);
        return response()->json(['user'=>$check,'otp'=>$otp]);
        curl_close($ch);
        }
        else {
            $data = [
                'status' => false,
                'error_message' => 'connection error',
            ];
        }
    }


    public function post_customer_register(Request $request)
    {
       
            // dd(1);
            $insert = Customer::create([
                // 'user_id' => $request->user_id,
                'customer_name' => $request->customer_name,
                'email' => $request->email,
                'whatsapp_number' => $request->whatsapp_number,
                'alternetive_number' => $request->alternetive_number,
                'address' => $request->address,
                'select_city' => $request->select_city,
                'pan' => $request->pan,
                'adhar' => $request->adhar,
                'adharno' => $request->adharno,
             'panno'=>$request->panno
            ]);
            if($insert) {
                return response()->json(['status' => true, 'message' => 'Data Has Been Submitted']);
            } else {
                return response()->json(['status' => false, 'message' => 'data not found']);
            
            }
            // return response()->json($insert);
        }
       
        public function post_status(Request $request){
 
       $status = Customer::where('id', $request->id)->first();
       if ($status) {
           $status->update([
            
               'status' => '1'
             
           ]);
       }
       if ($status->id) {
           return response()->json(['status' => true, 'message' => 'Data Updated Successfully']);
       } else {
           return response()->json(['status' => false, 'message' => 'Something Error Occure At Server']);
       }
    }

     //track your loan
    public function get_repayment_schedule(Request $request){
        // dd($request->all());
        $tech=Schedule::join('loan_application','loan_application.id','=','schedules.loan_id')
        ->where('loan_application.id_of_customer',$request->user_id)
        ->orderby('schedules.id','asc')
        ->select('schedules.installment_number','schedules.due_date','schedules.installment_amount')
        ->get();
        // echo json_encode($tech);
        // exit();
        if($tech){
            return response()->json(['status'=>true,'data'=>$tech]);
        }else{
            return response()->json(['status'=>false,'message'=>'data not found']);
        }
    }
    public function get_profile(Request $request){
        // dd($request->all());
        $tech=Customer::where('customer.id',$request->user_id)
        ->leftjoin('city','city.id','customer.select_city')
        // ->orderby('customer.id','asc')
        ->select('customer.*','city.city')
         ->first();
        // echo json_encode($tech);
        // exit();
        if($tech){
            return response()->json(['status'=>true,'data'=>$tech]);
        }else{
            return response()->json(['status'=>false,'message'=>'data not found']);
        }
    }

    public function get_loan_summary(Request $request){
        // dd($request->all());
        $tech=Schedule::join('loan_application','loan_application.id','=','schedules.loan_id')
        ->where('loan_application.id_of_customer',$request->user_id)
        ->orderby('schedules.id','asc')
        ->select('loan_application.amount','loan_application.tenure_for_days','schedules.installment_amount')
        ->first();
        // echo json_encode($tech);
        // exit();
        if($tech){
            return response()->json(['status'=>true,'data'=>$tech]);
        }else{
            return response()->json(['status'=>false,'message'=>'data not found']);
        }
    }
	
	
	public function get_transcation_history(Request $request){
        // dd($request->all());
        $tech=Schedule::join('loan_application','loan_application.id','=','schedules.loan_id')
        ->where('loan_application.id_of_customer',$request->user_id)
        ->where('schedules.status','1')
        ->orderby('schedules.id','asc')
        ->select('schedules.status','schedules.due_date','schedules.installment_amount')
         ->get();
        // echo json_encode($tech);
        // exit();
        if($tech){
            return response()->json(['status'=>true,'data'=>$tech]);
        }else{
            return response()->json(['status'=>false,'message'=>'data not found']);
        }
    }

    public function get_unpaid(Request $request){
        // dd($request->all());
        $tech=Schedule::join('loan_application','loan_application.id','=','schedules.loan_id')
        ->where('loan_application.id_of_customer',$request->user_id)
        ->where('schedules.status','2')
        ->orderby('schedules.id','asc')
        ->select('schedules.status','schedules.due_date','schedules.installment_amount')
         ->get();
        // echo json_encode($tech);
        // exit();
        if($tech){
            return response()->json(['status'=>true,'data'=>$tech]);
        }else{
            return response()->json(['status'=>false,'message'=>'data not found']);
        }
    }
    public function get_paid(Request $request){
        // dd($request->all());
        $tech=Schedule::join('loan_application','loan_application.id','=','schedules.loan_id')
        ->where('loan_application.id_of_customer',$request->user_id)
        ->where('schedules.status','1')
        ->orderby('schedules.id','asc')
        ->select('schedules.status','schedules.due_date','schedules.installment_amount')
         ->get();
        // echo json_encode($tech);
        // exit();
        if($tech){
            return response()->json(['status'=>true,'data'=>$tech]);
        }else{
            return response()->json(['status'=>false,'message'=>'data not found']);
        }
    }
}

