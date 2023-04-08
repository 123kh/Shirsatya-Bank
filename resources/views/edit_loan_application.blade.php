@extends('layout')
@section('content')
<div class="page-wrapper">
			<div class="page-content">
				<div class="row">
					<div class="col-md-12 mx-auto" >
						<div class="card">
							<div class="card-body">
								<div class="card-title d-flex align-items-center">
								
									<h5 class="mb-0 text-primary">Loan Application</h5>
								</div>
								<hr>
								
								<form class="row g-2" method="post" action="{{route('update_loanapp')}}">
									@csrf
									<input type="hidden"  name="id"  value="{{$editloanapp->id}}" >

									<div class="col-md-2">
										<label for="inputFirstName" >Loan Acount No</label>
										<input type="number" class="form-control" id="" placeholder="Loan Acount No" name="loan_acountno" value="{{$editloanapp->loan_account_no}}" >
									</div>
									<div class="col-md-2">
										<label>Select Loan Scheme*</label>
										<select class="form-select "
											aria-label="Default select example" name="loanscheme" id="loanscheme">
											<option value="">Select Loan Scheme</option>
                  							
                                           @foreach ($loan as $loans)
                                                    <option value="{{$loans->id }}"
                                                        @if($editloanapp->id_of_loan_scheme==$loans->id) selected @endif>{{ $loans->loan_scheme_name }}</option>
                                                @endforeach	
                                              						</select>
										

									</div>

									<div class="col-md-2">
										<label>Select Customer</label>
										<select class="form-select "
											aria-label="Default select example" id="customer" name="customer">
											<option selected>Select Customer</option>
											@foreach ($cust as $customer)
											<option value="{{$customer->id }}"   @if($editloanapp->id_of_customer==$customer->id) selected @endif>{{ $customer->customer_name }}</option>
										@endforeach									</select>

										</select>

									</div>

									{{-- <div class="col-md-2">
										<label>City</label>
											
                                            <input type="text" class="form-control" id="city" placeholder="City" name="city" value="{{$editloanapp->city}}" >
										
									</div> --}}

									<div class="col-md-2">
										<label for="inputFirstName" >City</label>
										<input type="text" class="form-control" id="city" placeholder="City" name="city" value="{{$editloanapp->id_of_city}}" >
									</div>
									
									<div class="col-md-2">
										<label for="inputFirstName" >Loan Amount*</label>
										<input type="text" class="form-control loanamount" id="loanamount" placeholder="Loan Amount" name="amount" value="{{$editloanapp->amount}}" >
									</div>

									<div class="col-md-2">
										<label>Select Tenure Type</label>
										<select class="form-select "
											aria-label="Default select example" id="" name="tenure" value="{{$editloanapp->tenure_type}}">
											<option selected>By Month</option>
											<option selected>By Day</option>

										</select>

									</div>

									

									<div class="col-md-2">
										<label for="inputFirstName" >Tenure</label>
										<input type="number" class="form-control" id="inputFirstName" placeholder="Tenure" name="tenure_for_days" value="{{$editloanapp->tenure_for_days}}">
									</div>

									<div class="col-md-2">
										<label for="inputFirstName" >WhatsApp Number</label>
										<input type="number" class="form-control loanamount" id="whatsapp" placeholder="WhatsApp Number" name="whatsapp" value="{{$editloanapp->whatsapp_number}}">
									</div>
									{{-- <div class="col-md-2">
										<label for="inputFirstName" >WhatsApp Number</label>
										<input type="number" class="form-control loanamount" id="whatsapp" placeholder="WhatsApp Number" name="whatsapp">
									</div> --}}
									<div class="col-md-2">
										<label for="inputFirstName" >Email</label>
										<input type="text" class="form-control loanamount" id="email" placeholder="Email" name="email" value="{{$editloanapp->email}}">
									</div>
									<div class="col-md-2">
										<label for="inputFirstName" >Intrest Amount*</label>
										<input type="number" class="form-control loanamount"  placeholder="Intrest" id="intrest" name="intrest" value="{{$editloanapp->intrest}}">
									</div>

											
									<div class="col-md-2">
										<label for="inputFirstName" >Application Fees*</label>
										<input type="number" class="form-control loanamount"  placeholder="Application fees" id="appfees" name="application_fees" value="{{$editloanapp->application_fees}}">
									</div>
									
									
									
									<div class="col-md-2">
										<label for="inputFirstName" >Processing Fees*</label>
										<input type="number" class="form-control loanamount"  placeholder="Processing fees" id="procfees" name="processing_fees" value="{{$editloanapp->processing_fees}}">
									</div>
									<div class="col-md-2">
										<label for="inputFirstName" >Valuation Fees*</label>
										<input type="number" class="form-control loanamount"  placeholder="Valuation Fees" id="valufees" name="valuation_fees" value="{{$editloanapp->valuation_fees}}">
									</div>
									<div class="col-md-2">
										<label for="inputFirstName" >Disburse Amount*</label>
										<input type="text" class="form-control loanamount" id="disburamount" placeholder="Disburse Amount" name="disburse_amount" value="{{$editloanapp->disburse_amount}}">
									</div>

									
									<div class="col-md-2">
										<label for="inputFirstName" >Repayment Amount*</label>
										<input type="text" class="form-control" id="repayment" placeholder="Repayment Amount" name="Repayment" value="{{$editloanapp->repayment}}">
									</div>
									<div class="col-md-3">
										<label for="inputFirstName" >Expected Date of Disbursment*</label>
										<input type="Date" class="form-control" id="inputFirstName" placeholder="Disburse Amount" name="date_of_disbursment"  value="{{$editloanapp->expected_date_of_disbursment}}">
									</div>
									<div class="col-md-2" style="padding:8px" ><br>
										<a href="{{route('edit_loanapp',$editloanapp->id)}}"></a>
										<button type="submit" class="btn btn-primary px-3 update"><i class="fadeIn animated bx bx-plus"></i>Update</button>
									</div>
								</form>
		
							</div>
		
						</div>
					</div> 
				
					<hr />

@stop
@section('js')
<script>

    $(document).ready(function()
    {    
		var intrest_type=1;
	var intrest_value=0;

        $("#loanscheme").on('change',function(){
			
            $.ajax({
url: "{{route('get_intrest_app_val_pro_by_id')}}",
type:'get',
data:{ 
intapproval_id:$(this).val()
},
cache: false,
success: function(result){
    console.log(result);
	let int=0;
	if(result.type_of_value_in_intrest=="2")
	{
		intrest_type=2;
		int=($("#loanamount").val()/100)*result.value_of_intrest;
	}
	else{
		intrest_type=1;
		int=result.value_of_intrest;
	}
	intrest_value=result.value_of_intrest;
    $("#intrest").val(int);
	$("#appfees").val(result.application_fees);
	$("#procfees").val(result.processing_fees);
	$("#valufees").val(result.valuation_fees);

}
});
        })
	 
	
	$("#customer").on('change',function(){
		$.ajax({
url: "{{route('get_cityaltno_by_id')}}",
type:'get',
data:{ 
id:$(this).val()
},
cache: false,
success: function(result){

$("#whatsapp").val(result.whatsapp_number);
$("#email").val(result.email);
$("#city").val(result.city);
}
});
})
	
      $(".loanamount").on('keyup',function(){
      
     var  loan_amount= parseFloat($('#loanamount').val());
     var  intrest = parseFloat($('#intrest').val());
     var  application_fees=parseFloat($('#appfees').val());
	 var  processing_fees= parseFloat($('#procfees').val());
     var  valuation_fees=parseFloat($('#valufees').val());
	let int=0;
	 if(intrest_type=="2")
	{
		int=($("#loanamount").val()/100)*intrest_value;
	}
	else{
		int=intrest_value;
	}
    $("#intrest").val(int);

      $('#disburamount').val(loan_amount - intrest - application_fees - processing_fees - valuation_fees); 
	  $('#repayment').val(loan_amount);
    
     
  
       } )


	  
	   $(function() {
        $( "#datepicker" ).datepicker({  minDate: new Date() });
    });

	     });
      
     </script> 


@stop 

    




