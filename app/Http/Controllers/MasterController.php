<?php

namespace App\Http\Controllers;

use DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;
use App\Models\City;
use App\Models\Loan_scheme;
use App\Models\Customer;
use App\Models\Loan_application;
use App\Models\Schedule;
use Carbon\Carbon;

class MasterController extends Controller
{
    public function index(request $request){
        $loanap= Schedule::where('schedules.due_date',Carbon::today())
       ->leftjoin('loan_application','loan_application.id','=','schedules.loan_id')  
       ->leftjoin('city','city.id','=','loan_application.id_of_city')
        ->leftjoin('loan_scheme','loan_scheme.id','=','loan_application.id_of_loan_scheme')
        ->leftjoin('customer','customer.id','=','loan_application.id_of_customer')
        // ->leftjoin('schedules','schedules.id','=','schedules.id') 
        ->select('schedules.*','city.city','loan_scheme.loan_scheme_name','customer.customer_name','loan_application.*')
        ->get();
    //    echo json_encode(Carbon::today());
    //    exit();
        $inst=City::all();
        $cust=Customer::all();
        $loan=Loan_scheme::all();
        // $shedu=Schedule::all();
        // $shedu=Schedule::
        // leftjoin('loan_application','loan_application.id','=','schedules.loan_id')
        // ->leftjoin('customer','customer.id','=','loan_application.id_of_customer') 
        // ->select('schedules.*','customer.customer_name')
        // ->get();
       
        // $custo=Customer::all();
        
        // echo json_encode($shedu);
        // exit();
        return view('dashboard',['customer_data'=>$inst,'dashboard'=>$loanap,'cust'=>$cust,'loan'=>$loan]);

    }

    public function paidemi(request $request){
        
        $emi = Schedule::
        where('loan_id',$request->loan_ids)
        ->where('due_date',Carbon::today())

        ->update([
         'status'=>'1',
        ]);
        // echo json_encode($emi);
        //      exit();
       // session()->flash('msg','successfull');
        return redirect()->route('dashboard');
    }


    public function unpaidemi(request $request){
        
        $emi = Schedule::
        where('loan_id',$request->loan_ids)
        //->where('loan_id',$request->loan_ids)
        ->update([
         'status'=>'2',
        ]);
        // echo json_encode($emi);
        //      exit();
       // session()->flash('msg','successfull');
        return redirect()->route('dashboard');
    }




// public function paidemi(Request $request)
//     {
//         $technician_master = Schedule::
//         where('id',$request->loan_ids)
//         ->update([
//          'status'=>'1',
//         ]);
//         session()->flash('msg','successfull');
//         return redirect()->back();
//     }
    public function destroydashboard(request $request)
    {

      $dash=Loan_application::where('id',$request->id)->delete();

      
     return redirect(route('dashboard'));
    }

//---------------------------------------------------loan_scheme_route_functions------------------------------------------------------//

    public function loan_scheme(request $request){
        $inst=Loan_scheme::all();
        return view('loan_scheme',['data'=>$inst]);

    }

    public function add_loan_scheme(request $request){

        Loan_scheme::create([
                            'loan_scheme_name'=>$request->get('loan_scheme_name'),
                            'type_of_value_in_intrest'=>$request->get('type_of_value_in_intrest'),
                            'value_of_intrest'=>$request->get('value_of_intrest'),
                            'application_fees'=>$request->get('application_fees'),
                            'processing_fees'=>$request->get('processing_fees'),
                            'valuation_fees'=>$request->get('valuation_fees')
                             ]);
        return redirect()->back();

    }

    public function delete_loan_scheme(request $request){
        Loan_scheme::find($request->id)->delete();
        return redirect(route('loan_scheme'));
 
     }

     public function edit_loan_scheme(request $request){
        $inst=Loan_scheme::all();
        $inst1=Loan_scheme::find($request->id);
        return view('edit_loan_scheme',['loan_scheme'=>$inst,'edit_data'=>$inst1]);
     }

     public function update_loan_scheme(request $request){
        // dd($request->all());
       Loan_scheme::where('id',$request->id)->update([
        'loan_scheme_name'=>$request->get('loan_scheme_name'),
        'type_of_value_in_intrest'=>$request->get('type_of_value_in_intrest'),
        'value_of_intrest'=>$request->get('value_of_intrest'),
        'application_fees'=>$request->get('application_fees'),
        'processing_fees'=>$request->get('processing_fees'),
        'valuation_fees'=>$request->get('valuation_fees')
    ]);

        return redirect(route('loan_scheme'));
 
     }
//---------------------------------------------------end-loan_scheme------------------------------------------------------//



//---------------------------------------------------customer_route_function_start------------------------------------------------------//

public function customer(request $request){
    
    
    $cust= Customer::
    leftjoin('city','city.id','=','customer.select_city')
   
    ->select('customer.*','city.city')//,'additems.*','itemmaster.Item_Name'
    ->get();
    // $inst=City::all();
    $inst=City::all();

    return view('customer',['customer_data'=>$inst,'cust'=>$cust]);

}

public function add_customer(request $request){


    $customer= new Customer;

    $filename='';
    if($request->hasFile('imagess')){
        $file= $request->file('imagess');
        $filename= time().'.'.$file->getClientOriginalExtension();
        $file->move(public_path('pan_image/'), $filename);
        $customer->photo= 'pan_image/'.$filename;


}


    $filename='';
    if($request->hasFile('image')){
        $file= $request->file('image');
        $filename= time().'.'.$file->getClientOriginalExtension();
        $file->move(public_path('pan_image/'), $filename);
        $customer->pan= 'pan_image/'.$filename;
    }
        $filename='';
        if($request->hasFile('images')){
            $file= $request->file('images');
            $filename= time().'.'.$file->getClientOriginalExtension();
            $file->move(public_path('pan_image/'), $filename);
            $customer->adhar= 'pan_image/'.$filename;
    

    }
   
    $customer->customer_name=$request->get('customer_name');
    $customer->email=$request->get('email');
    $customer->whatsapp_number=$request->get('whatsapp_number');
    $customer->alternetive_number=$request->get('alternetive_number');
    $customer->address=$request->get('address');
    $customer->select_city=$request->get('city');
    $customer->save(); 
    
    return redirect()->back();

}

public function delete_customer($id){
   
    $customer=Customer::where('id',$id)->delete();
    return redirect(route('customer'));

 }

 public function edit_customer(request $request){
 
    $inst1=Customer::find($request->id);
    $cit= Customer::
    leftjoin('city','city.id','=','customer.select_city')
   
    ->select('customer.*','city.city')//,'additems.*','itemmaster.Item_Name'
    ->get();
    $inst=City::all();
    return view('edit_customer',['customers'=>$inst,'edit_data'=>$inst1,'cit'=>$cit]);
 }

 public function update_customer(request $request){


$customer=Customer::find($request->id);

$filename='';
if($request->hasFile('imagess')){
    $file= $request->file('imagess');
    $filename= time().'.'.$file->getClientOriginalExtension();
    $file->move(public_path('pan_image/'), $filename);
    $customer->photo= 'pan_image/'.$filename;


}

$filename='';
if($request->hasFile('image')){
    $file= $request->file('image');
    $filename= time().'.'.$file->getClientOriginalExtension();
    $file->move(public_path('pan_image/'), $filename);
    $customer->pan= 'pan_image/'.$filename;
}
    $filename='';
    if($request->hasFile('images')){
        $file= $request->file('images');
        $filename= time().'.'.$file->getClientOriginalExtension();
        $file->move(public_path('pan_image/'), $filename);
        $customer->adhar= 'pan_image/'.$filename;


}


$customer->customer_name=$request->get('customer_name');
$customer->email=$request->get('email');
$customer->whatsapp_number=$request->get('whatsapp_number');
$customer->alternetive_number=$request->get('alternetive_number');
$customer->address=$request->get('address');
$customer->select_city=$request->get('city');
$customer->save(); 

    return redirect(route('customer'));

 }


//---------------------------------------------------end-customer------------------------------------------------------//




//---------------------------------------------------city_route_functions------------------------------------------------------//

    public function city(request $request){
          $inst=City::get();
        return view('city',['citys'=>$inst]);

    }

    public function add_city(request $request){

       $inst=new City;
       $inst->city=$request->get('city');
       $inst->save();
        return redirect()->back();

    }

    public function delete_city(request $request){
        City::find($request->id)->delete();
        return redirect(route('city'));
 
     }

     public function edit_city(request $request){
        $inst=City::all();
        $inst1=City::find($request->id);
        return view('edit_city',['citys'=>$inst,'edit_data'=>$inst1]);
     }

     public function update_city(request $request){
        City::find($request->id)->update(['city'=>$request->get('city')]);
        return redirect(route('city'));
 
     }
//---------------------------------------------------end-city------------------------------------------------------//
    public function loan_application(request $request){

        $loanap= Loan_application::
    leftjoin('city','city.id','=','loan_application.id_of_city')
    ->leftjoin('loan_scheme','loan_scheme.id','=','loan_application.id_of_loan_scheme')
    ->leftjoin('customer','customer.id','=','loan_application.id_of_customer')
    ->where('disburse_status','0')//datatable ki jo record disburse kiya wo show nh hoge status 0 kiya to jiska status 0 hai wohi show hoga

    ->select('loan_application.*','city.city','loan_scheme.loan_scheme_name','customer.customer_name')//,'additems.*','itemmaster.Item_Name'
    ->get();
    $inst=City::all();
    $cust=Customer::all();
    $loan=Loan_scheme::all();


    return view('loan_application',['customer_data'=>$inst,'loanap'=>$loanap,'cust'=>$cust,'loan'=>$loan]);
       

    }

    public function create_loan_application(request $request){
        $loan=Loan_application::create([
            'loan_account_no'=>$request->get('loan_accountno'),
                            'id_of_loan_scheme'=>$request->get('loanscheme'),
                            'id_of_customer'=>$request->get('customer'),
                            'id_of_city'=>$request->get('city'),
                            'amount'=>$request->get('amount'),
                            'tenure_type'=>$request->get('tenure'),
                            'tenure_for_days'=>$request->get('tenure_for_days'),
                            'whatsapp_number'=>$request->get('whatsapp'),
                            'email'=>$request->get('email'),
                            'intrest'=>$request->get('intrest'),
                            'application_fees'=>$request->get('application_fees'),
                            'processing_fees'=>$request->get('processing_fees'),
                            'valuation_fees'=>$request->get('valuation_fees'),
                            'disburse_amount'=>$request->get('disburse_amount'),
                            'repayment'=>$request->get('Repayment'),
                            'expected_date_of_disbursment'=>$request->get('date_of_disbursment'),
                            ]);

                            $tenure = $request->tenure_for_days;
                        
                                for($i=1;$i<=$tenure; $i++){
                                    $dateObject = Carbon::createFromFormat('Y-m-d', $request->date_of_disbursment);
                                    if($request->tenure=='By Day'){
                                        $disbursment_date=$dateObject->addDays($i);
                                    }else{
                                        $disbursment_date=$dateObject->addMonths($i);
                                        $disbursment_date=$dateObject->addDays(1);
                                    }
                                     $lmodal=new Schedule;
                                     $lmodal->loan_id=$loan->id;
                                    $lmodal->installment_number=$i;
                                    $lmodal->due_date=$disbursment_date->format('Y-m-d');
                                    $lmodal->installment_amount=$request->Repayment/$request->tenure_for_days;
                                    $lmodal->save();
                                    }   
                          
        return redirect()->back();

    }
    public function loanappedit(request $request){
         $editloanapp=Loan_application::find($request->id);
       $loanap= Loan_application::
    leftjoin('city','city.id','=','loan_application.id_of_city')
    ->leftjoin('loan_scheme','loan_scheme.id','=','loan_application.id_of_loan_scheme')
    ->leftjoin('customer','customer.id','=','loan_application.id_of_customer')
    ->select('loan_application.*','city.city','loan_scheme.loan_scheme_name','customer.customer_name')//,'additems.*','itemmaster.Item_Name'
    ->get();
    $inst=City::all();
    $cust=Customer::all();
    $loan=Loan_scheme::all();

    return view('edit_loan_application',['customer_data'=>$inst,'loanap'=>$loanap,'cust'=>$cust,'loan'=>$loan,'editloanapp'=>$editloanapp]);
     }

     public function loanappupdate(request $request){
        Loan_application::find($request->id)
        ->update([
                           'loan_account_no'=>$request->get('loan_accountno'),
                           'id_of_loan_scheme'=>$request->get('loanscheme'),
                            'id_of_customer'=>$request->get('customer'),
                            'id_of_city'=>$request->get('city'),
                            'amount'=>$request->get('amount'),
                            'tenure_type'=>$request->get('tenure'),
                            'tenure_for_days'=>$request->get('tenure_for_days'),
                            'whatsapp_number'=>$request->get('whatsapp'),
                            'email'=>$request->get('email'),
                            'intrest'=>$request->get('intrest'),
                            'application_fees'=>$request->get('application_fees'),
                            'processing_fees'=>$request->get('processing_fees'),
                            'valuation_fees'=>$request->get('valuation_fees'),
                            'disburse_amount'=>$request->get('disburse_amount'),
                            'repayment'=>$request->get('Repayment'),
                            'expected_date_of_disbursment'=>$request->get('date_of_disbursment'),
                                   ]);
                                   Schedule::where('loan_id',$request->id)
                                   ->delete();   
                                $tenure = $request->tenure_for_days;
                        
                                for($i=1;$i<=$tenure; $i++){
                                    $dateObject = Carbon::createFromFormat('Y-m-d', $request->date_of_disbursment);
                                    if($request->tenure=='By Day'){
                                        $disbursment_date=$dateObject->addDays($i);
                                    }else{
                                        $disbursment_date=$dateObject->addMonths($i);
                                        $disbursment_date=$dateObject->addDays(1);
                                    }
                                     $lmodal=new Schedule;
                                     $lmodal->loan_id=$request->id;
                                    $lmodal->installment_number=$i;
                                    $lmodal->due_date=$disbursment_date->format('Y-m-d');
                                    $lmodal->installment_amount=$request->Repayment/$request->tenure_for_days;
                                    $lmodal->save();
                                    }  
        return redirect()->route('loan_application');
 
     }



    public function deleteloanapp($id)
    {
        $loan=Loan_application::where('id',$id)->delete();
        return redirect()->back();
    }

    public function get_intappvalpro(Request $request)
    {
        $loan=DB::table('loan_scheme')
        ->where([

            'loan_scheme.id'=>$request->intapproval_id //doctor_id=script me jo data me hai wo id
        ])
        ->select('loan_scheme.value_of_intrest','loan_scheme.application_fees','loan_scheme.processing_fees','loan_scheme.valuation_fees','loan_scheme.type_of_value_in_intrest')
        ->first();//agar hume sirf ek hi value dikhani hai to first

        return response()->json($loan);
    } 


    public function get_cityno(Request $request)
    {

        
        $customer=DB::table('customer')
        ->leftjoin('city','city.id','=','customer.select_city')
        ->where([

            'customer.id'=>$request->id 
        ])
        ->select('city.city','customer.whatsapp_number','customer.email')
        ->first();//agar hume sirf ek hi value dikhani hai to first

        return response()->json($customer);
    } 


    public function loanappmodal(request $request){
        // echo json_encode($request->all());
        // exit();
        
        for($i=0;$i<count($request->installment_number); $i++){
        $lmodal=new Schedule;
        $lmodal->loan_id=$request->loan_id;
        // $promotormedicine->select_stokist_id=$request->stockist[$i];
        
        $lmodal->installment_number=$request->installment_number[$i];
        $lmodal->due_date=$request->due_date[$i];
        $lmodal->installment_amount=$request->installment_amount[$i];
        $lmodal->save();
        }   
  
     return redirect()->back();
}
public function loanapschedule(request $request){
    // dd($request->all());
    $loan=DB::table('loan_application')
    ->leftjoin('loan_scheme','loan_scheme.id','=','loan_application.id_of_loan_scheme')
    ->leftjoin('customer','customer.id','=','loan_application.id_of_customer')
    ->leftjoin('city','city.id','=','loan_application.id_of_city')
    ->where([
        
        'loan_application.id'=>$request->id 
    ])
    ->orderby('loan_application.id','asc')
    ->select('loan_application.*','loan_scheme.loan_scheme_name','customer.customer_name','city.city')
    ->first();//agar hume sirf ek hi value dikhani hai to first
$schedule=DB::table('schedules')
->where([
    'schedules.loan_id'=>$request->id//ajax me data me jo id hai wo id
])
// ->select('schedules.*')
->orderby('schedules.id','asc')
->get();
    return response()->json(['loan'=>$loan,'shedule'=>$schedule]);//shedule script me jo var read kiya hai sme ressult.shedule hai
    }   

 
    public function disbusrmenttable(request $request){
        // dd($request->all());
        $loan=DB::table('loan_application')
        ->leftjoin('loan_scheme','loan_scheme.id','=','loan_application.id_of_loan_scheme')
        ->leftjoin('customer','customer.id','=','loan_application.id_of_customer')
        ->leftjoin('city','city.id','=','loan_application.id_of_city')
        
        ->where([
            
            'loan_application.id'=>$request->id 
            
        ])
        ->orderby('loan_application.id','desc')
        ->select('loan_application.*','loan_scheme.loan_scheme_name','customer.customer_name','city.city')
        ->first();//agar hume sirf ek hi value dikhani hai to first
   
        return redirect()->json(['loan'=>$loan]);//shedule script me jo var read kiya hai sme ressult.shedule hai
        }   
    
public function disburseblade(request $request){
    $loanapss= Loan_application::where('disburse_status', '1')
    ->leftjoin('city','city.id','=','loan_application.id_of_city')
    ->leftjoin('loan_scheme','loan_scheme.id','=','loan_application.id_of_loan_scheme')
    ->leftjoin('customer','customer.id','=','loan_application.id_of_customer')
    ->orderby('loan_application.id','desc')
    ->select('loan_application.*','city.city','loan_scheme.loan_scheme_name','customer.customer_name')
    ->get();
    $inst=City::all();
    $cust=Customer::all();
    $loan=Loan_scheme::all();

    return view('disbursement',['customer_data'=>$inst,'loanapss'=>$loanapss,'cust'=>$cust,'loan'=>$loan]);
       

 
}

public function disbursedeleteupdate(request $request){
//    dd($request->all());
    Loan_application:: where(['id'=>$request->loan_id ])//loan_id jo blade me input hidden ki name hai
    ->update([
        'expected_date_of_disbursment'=>date('y-m-d',strtotime($request->get('date'))),
        'disburse_status'=>'1',
    ]);
        Schedule::where('loan_id',$request->id)
        ->delete();   
     $tenure = $request->tenure_for_days;

     for($i=1;$i<=$tenure; $i++){
         $dateObject = Carbon::createFromFormat('Y-m-d', $request->date_of_disbursment);
         if($request->tenure=='By Day'){
             $disbursment_date=$dateObject->addDays($i);
         }else{
             $disbursment_date=$dateObject->addMonths($i);
             $disbursment_date=$dateObject->addDays(1);
         }
          $lmodal=new Schedule;
          $lmodal->loan_id=$request->id;
         $lmodal->installment_number=$i;
         $lmodal->due_date=$disbursment_date->format('Y-m-d');
         $lmodal->installment_amount=$request->Repayment/$request->tenure_for_days;
         $lmodal->save();
         }  


// echo json_encode(date('y-m-d',strtotime($request->get('date'))));
// exit();
    return redirect()->back();

 }

public function track_emi(Request $request){
    $track=Schedule::all();
    return view('track-loan',['track'=>$track]);
}
public function customer_with_emi(Request $request){
    return view('customer_with-emi');
}
public function total_emi_pending(Request $request){
    return view('total-emi-pending');
}
}

     
