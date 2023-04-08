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
								<form class="row g-2" method="post" action="{{route('add_loan')}}">
								@csrf
								{{-- <div class="col-md-2">
									<label class="form-label">Loan Acount No</label><br>
									<label style="color: black;" id=""></label>
								
								</div> --}}
								<div class="col-md-2">
									<label for="inputFirstName" >Loan Acount No</label>
									<input type="text" class="form-control" id="" placeholder="Loan Acount No" name="loan_accountno">
								</div>
									<div class="col-md-2">
										<label>Select Loan Scheme*</label>
										<select class="form-select "
											aria-label="Default select example" name="loanscheme" id="loanscheme">
											<option value="">Select Loan Scheme</option>
                  							
                                           @foreach ($loan as $loans)
                                                    <option value="{{$loans->id }}">{{ $loans->loan_scheme_name }}</option>
                                                @endforeach									</select>
										

									</div>

									<div class="col-md-2">
										<label>Select Customer*</label>
										<select class="form-select "
											aria-label="Default select example" id="customer" name="customer">
											<option selected>Select Customer</option>
											@foreach ($cust as $customer)
											<option value="{{$customer->id }}">{{ $customer->customer_name }}</option>
										@endforeach									</select>

										</select>

									</div>

									{{-- <div class="col-md-2">
										<label>City</label> --}}
										{{-- <select class="form-select "
											aria-label="Default select example" id="city" name="city"> --}}
											{{-- <option selected>Select City</option> --}}
											{{-- <input type="text" class="form-control" id="city" placeholder="Loan Amount" name="city"> --}}
											

											<div class="col-md-2">
												<label for="inputFirstName" >City</label>
												<input type="text" class="form-control" id="city" placeholder="City" name="city">
											</div>

									

									
									<div class="col-md-2">
										<label for="inputFirstName" >Loan Amount*</label>
										<input type="text" class="form-control loanamount" id="loanamount" placeholder="Loan Amount" name="amount"  >
									</div>

									<div class="col-md-2">
										<label>Select Tenure Type</label>
										<select class="form-select "
											aria-label="Default select example" id="" name="tenure">
											<option selected>By Month</option>
											<option selected>By Day</option>

										</select>

									</div>

									

									<div class="col-md-2">
										<label for="inputFirstName" >Tenure</label>
										<input type="number" class="form-control" id="inputFirstName" placeholder="Tenure" name="tenure_for_days">
									</div>

									<div class="col-md-2">
										<label for="inputFirstName" >WhatsApp Number</label>
										<input type="number" class="form-control loanamount" id="whatsapp" placeholder="WhatsApp Number" name="whatsapp">
									</div>
									<div class="col-md-2">
										<label for="inputFirstName" >Email</label>
										<input type="text" class="form-control loanamount" id="email" placeholder="Email" name="email">
									</div>

									<div class="col-md-2">
										<label for="inputFirstName" >Intrest Amount</label>
										<input type="number" class="form-control loanamount"  placeholder="Intrest" id="intrest" name="intrest">
									</div>

											
									<div class="col-md-2">
										<label for="inputFirstName" >Application Fees*</label>
										<input type="number" class="form-control loanamount"  placeholder="Application fees" id="appfees" name="application_fees">
									</div>
									
									
									
									<div class="col-md-2">
										<label for="inputFirstName" >Processing Fees*</label>
										<input type="number" class="form-control loanamount"  placeholder="Processing fees" id="procfees" name="processing_fees">
									</div>
									<div class="col-md-2">
										<label for="inputFirstName" >Valuation Fees*</label>
										<input type="number" class="form-control loanamount"  placeholder="Valuation Fees" id="valufees" name="valuation_fees">
									</div>
									<div class="col-md-2">
										<label for="inputFirstName" >Disburse Amount*</label>
										<input type="text" class="form-control loanamount " id="disburamount" placeholder="Disburse Amount" name="disburse_amount"  readonly>
									</div>

									
									<div class="col-md-2">
										<label for="inputFirstName" >Repayment Amount*</label>
										<input type="text" class="form-control" id="repayment" placeholder="Repayment Amount" name="Repayment" readonly> 
										
										{{-- jo field user chANGE NAHI KARSAKTA USKE LIYE READONLY --}}
									
									</div>
									<div class="col-md-3">
										<label for="inputFirstName" >Expected Date of Disbursment*</label>
										<input type="Date" class="form-control" id="datepicker" placeholder="Disburse Amount" name="date_of_disbursment"  [min]="todayDate | date:'dd-MM-yyyy'">
									</div>
									<div class="col-md-2" style="padding:8px" ><br>
										<button type="submit" class="btn btn-primary px-3"><i class="fadeIn animated bx bx-plus schedule"></i>Add</button>
									</div>
								</form>
		
							</div>
		
						</div>
					</div> 
				
					<hr />

					<div class="col-md-12" >
						<div class="card">
							<div class="card-body">
								<div class="table-responsive">
									<table id="example" class="table table-striped table-bordered">
										<thead>
											<tr>
												<th>Sr. No.</th>
												<th>Loan Scheme</th>  
												{{-- <th>Loan Amount</th> --}}
												<th>Customer</th>
												<th>City</th>
												<th>Loan Amount</th>
												<th>Select Tenure Type</th>
												<th>Tenure</th>
												<th>WhatsApp Number</th>
												<th>Email</th>
												<th>Intrest</th>
												<th>Application Fees</th>
												<th>Processing Fees</th>
												<th>Valuation Fees</th>
												<th>Disburse Amount</th>
											
												<th>Repayment</th>
												<th>Expected Date of Disbursment</th>
												<th>Action</th>
											</tr>
										</thead>
										<tbody>
											@foreach ($loanap as $loanaps)
												
											
											<tr>
												<td>{{$loop->index+1}}</td>
												<td >{{$loanaps->loan_scheme_name}}</td>
												<td>{{$loanaps->customer_name}}</td>
												<td>{{$loanaps->id_of_city}}</td>
												<td>{{$loanaps->amount}}</td>
												<td>{{$loanaps->tenure_type}}</td>
												<td>{{$loanaps->tenure_for_days}}</td>
												<td>{{$loanaps->whatsapp_number}}</td>
												<td>{{$loanaps->email}}</td>
												<td>{{$loanaps->intrest}}</td>
												<td>{{$loanaps->application_fees}}</td>
												<td>{{$loanaps->processing_fees}}</td>
												<td>{{$loanaps->valuation_fees}}</td>
												<td>{{$loanaps->disburse_amount}}</td>
												<td>{{$loanaps->repayment}}</td>
												<td>{{$loanaps->expected_date_of_disbursment}}</td>
												<td>
													<a href="{{route('edit_loanapp',$loanaps->id)}}">
													<button type="button" class="btn1 btn-outline-success"><i class='bx bx-edit-alt me-0'></i></button></a>
													<a href="{{route('delete_loanapp',$loanaps->id)}}">
													 <button type="button" class="btn1 btn-outline-danger"><i class='bx bx-trash me-0'></i></button> </a>
													 <button type="button" class="btn1 btn-outline-dark schedule" 
													 id="{{$loanaps->id}}"
													 data-bs-toggle="modal" data-bs-target="#exampleLargeModal"
													 loan_amount="{{$loanaps->amount}}" date_of_disbursment="{{$loanaps->expected_date_of_disbursment}}" tenure="{{$loanaps->tenure_for_days}}" tenure_type="{{$loanaps->tenure_type}}"
													>
														View Scheduled</button>
														{{-- <a href="{{route('disburse',$loanaps->id)}}">  --}}
													 {{-- <button type="button" class="btn1 btn-outline-primary disburse">Disbursement</button> --}}
													 <button id="{{$loanaps->id}}" type="button" class="btn1 btn-outline-primary disbursment_btn" data-bs-toggle="modal" data-bs-target="#exampleSmallModal">Disbursement</button>
												</td>
									
											</tr>
											@endforeach
											
										
											
										</tbody>
									</table>
								</div>
							</div>
						</div>


				</div>
				
			</div>
		</div>
														
		<div class="col">
			<!-- Button trigger modal -->
			<!-- <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleLargeModal">Large Modal</button> -->
			<!-- Modal -->
			<div class="modal fade" id="exampleLargeModal" tabindex="-1" aria-hidden="true">
				<div class="modal-dialog modal-lg">
					<div class="modal-content">
						<div class="modal-header">
							<h5 class="modal-title">Schedule</h5>
							<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
						</div>
						<form action="{{ route('addloanappmodal') }}"
										method="post">
										@csrf
										{{-- <input type="hidden" id="instalno"
											name="id">
											<input type="hidden" id="duedate"
											name="id">
											<input type="hidden" id="instalamount"
											name="id"> --}}
											<input type="hidden" id="loan_id" name="loan_id"> 
											{{-- loan_id forenkey hai dusre table ki jisme multiple record add horahe hai loan ki emi 1 se zda hoti hai to --}}
						<div class="modal-body">
							<div class="row g-2">
							<hr/>
							<div class="col-md-2">
								<label class="form-label">Loan Acount No</label><br>
								<label style="color: black;" id="loanaccountno"></label>
							
							</div>
							<div class="col-md-2">
								<label class="form-label">Loan Scheme*</label><br>
								<label style="color: black;" id="loanschemelable"></label>
							
							</div>
							<div class="col-md-2">
								<label for="inputFirstName" class="form-label">Customer</label><br>
								<label style="color: black;" id="loancustomer"></label>

							</div>

							{{-- <div class="col-md-2">
								<label for="inputFirstName" class="form-label">City</label><br>
								<label style="color: black;" id="loancitymodal"></label>
					
							</div> --}}

							<div class="col-md-2">
								<label for="inputFirstName" class="form-label">
									Loan Amount</label><br>
								<label style="color: black;" id="loanamountmodal"></label>
							
							</div>
						
							<div class="col-md-2">
								<label for="inputFirstName" class="form-label">Tenure Type</label><br>
								<label style="color: black;" id="loantenuretype"></label>
							</div>
							<div class="col-md-2">
								<label for="inputFirstName" class="form-label"> Tenure</label><br>
								<label style="color: black;" id="loantenure"></label>
					
							</div>

							<div class="col-md-2">
								<label for="inputFirstName" class="form-label">WhatsApp Number</label><br>
								<label style="color: black;" id="whtsappnumber"></label>
							
							</div>
						
							<div class="col-md-2">
								<label for="inputFirstName" class="form-label">Email</label><br>
								<label style="color: black;" id="loanemail"></label>
							</div>
							<div class="col-md-2">
								<label for="inputFirstName" class="form-label">Intrest Amount</label><br>
								<label style="color: black;" id="loanintrestamount"></label>
							
							</div>
						
							<div class="col-md-2">
								<label for="inputFirstName" class="form-label">Application Fees</label><br>
								<label style="color: black;" id="loanappfees"></label>
							</div>
							<div class="col-md-2">
								<label for="inputFirstName" class="form-label">
									Processing Fees</label><br>
								<label style="color: black;" id="loanprocesfees"></label>
							
							</div>
						
							<div class="col-md-2">
								<label for="inputFirstName" class="form-label">
									Valuation Fees</label><br>
								<label style="color: black;" id="loanvaluefees"></label>
							</div>
							<div class="col-md-2">
								<label for="inputFirstName" class="form-label">
									Disburse Amount</label><br>
								<label style="color: black;" id="loandisburseamount"></label>
							</div>
							<div class="col-md-2">
								<label for="inputFirstName" class="form-label">
									Repayment Amount</label><br>
								<label style="color: black;" id="loanrepaymentamount"></label>
							</div>
							<div class="col-md-2">
								<label for="inputFirstName" class="form-label">
								Expected Date of Disbursment</label><br>
								<label style="color: black;" id="loandatedisburse"></label>
							</div>
							</div>

							<div class="card">
								<div class="card-body">
									<table class="table mb-0 table-striped">
										<thead>
											
											<tr>
												
												<th scope="col">Installment Number</th>
												<th scope="col">Due Date</th>
												<th scope="col">Installment Amount</th>
												<th scope="col">Status</th>
											</tr>
										</thead>
										<tbody id="sheduletable">
											
										
											
										</tbody>
									</table>
								</div>
							</div></div>
						<div class="modal-footer">
							<button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
							{{-- <input type="button" onclick="save($('#title').val());" value="Save"> --}}
							{{-- <button type="submit" class="btn btn-primary">Save changes</button> --}}
						</div>
						</form>
					</div>
				</div>
			</div>
		</div>

		<div class="col">
			<!-- Button trigger modal -->
			{{-- <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleSmallModal">Small Modal</button> --}}
			<!-- Modal -->
			<div class="modal fade" id="exampleSmallModal" tabindex="-1" aria-hidden="true">
				<div class="modal-dialog modal-sm">
					<div class="modal-content">
						<div class="modal-header">
							<h5 class="modal-title">Disbursement</h5>
							<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
						</div>
						<form action="{{ route('updatedisburse') }}"
										method="post">
										@csrf
										<input type="hidden" id="loan_id2" name="loan_id">

						<div class="modal-body">
							{{-- <div class="col-md-2">
								<label class="form-label" >Disbursement Date</label><br>
								<label style="color: black;" id="datemodal"></label>
							
							</div> --}}
							<div class="col-md-12">
								<label for="inputFirstName" >Disbursement Date</label>
								<br>
								<input type="Date" class="form-control" id="datepicker" placeholder="Disburse Date" name="date" [min]="todayDate | date:'dd-MM-yyyy'" >
							</div>
						</div>
						<div class="modal-footer">
							<button type="button" class="btn btn-secondary recorddisburse" data-bs-dismiss="modal">Close</button>
							<button type="submit" class="btn btn-primary" data-bs-dismiss="modal" 
							>Disburse</button>
						</div>
						</form>
					</div>
				</div>
			</div>
		</div>

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

<script>

    $(document).ready(function()
    {    
// $(".schedule").on('click',function(){

$(".schedule").on('click',function(){
		$.ajax({
url: "{{route('get_loanappdetailshedul')}}",
type:'get',
data:{ 
id:$(this).attr('id')

},

cache: false,
success: function(result){
	var loan=result.loan;
	var schedule=result.shedule;

	$("#loanaccountno").text(loan.loan_account_no);
$("#loanschemelable").text(loan.loan_scheme_name);
$("#loancustomer").text(loan.customer_name);
$("#loanamountmodal").text(loan.amount);
$("#loantenuretype").text(loan.tenure_type);
$("#loantenure").text(loan.tenure_for_days);
$("#whtsappnumber").text(loan.whatsapp_number);
$("#loanemail").text(loan.email);
$("#loanintrestamount").text(loan.intrest);
$("#loanappfees").text(loan.application_fees);
$("#loanprocesfees").text(loan.processing_fees);
$("#loanvaluefees").text(loan.valuation_fees);
$("#loandisburseamount").text(loan.disburse_amount);
$("#loanrepaymentamount").text(loan.repayment);
$("#loandatedisburse").text(loan.expected_date_of_disbursment);

$("#sheduletable").empty();
$.each(schedule,function(a,b)

          {
			let status='pending';
			if(b.status=='1'){
				status='paid';
			}
			if(b.status=='2'){
				status='unpaid';
			}
              $("#sheduletable").append('<tr><td>'+b.installment_number+'</td><td>'+b.due_date+'</td><td>'+b.installment_amount+'</td><td>'+status+'</td></tr>');
              
          })

}
});
})

	})

</script>
	{{-- <script>
$(document).ready(function()
{    
$(".disburse").on('click',function(){
		$.ajax({
url: "{{route('get_disbusrmenttable')}}",
type:'get',
data:{ 
id:$(this).attr('id')

},

cache: false,
success: function(result){
	$("#disbursetable").empty();
$.each(result,function(a,b)

          {
			let status='pending';
			if(b.status=='1'){
				status='disburse';
			}
			
              $("#sheduletable").append('<tr><td>'+b.loan_scheme_name+'</td><td>'+b.customer_name+'</td><td>'+b.city+'</td><td>'+b.amount+'</td><td>'+b.tenure_type+'</td><td>'+b.tenure_for_days+'</td><td>'+b.whatsapp_number+'</td><td>'+b.email+'</td><td>'+b.intrest+'</td><td>'+b.application_fees+'</td><td>'+b.processing_fees+'</td><td>'+b.valuation_fees+'</td><td>'+b.disburse_amount+'</td><td>'+b.repayment+'</td><td>'+b.expected_date_of_disbursment+'</td></tr>');
              
          })
	

}
});
})

}) --}}

<script>

    $(document).ready(function()
    {    
	



$(".disbursment_btn").on('click',function(){
	$("#loan_id2").val($(this).attr('id'));//loan_id2 input field me jo id hai

})
	})

	</script>
	
@stop 

 {{-- // 	var loanamount=$(this).attr('loan_amount');
// 	var date_of_disbursment=$(this).attr('date_of_disbursment');

// 	 var tenure=$(this).attr('tenure');

// 	 var tenure_type=$(this).attr('tenure_type');
//  var loantenure=loanamount/tenure;
 
// 	$("#instdateem").empty();
// 	$("#loan_id").val($(this).attr('id'));
	
// 	for (i=1; i<=tenure; i++)
// 	{ 	
// 	 if(tenure_type=="By Day"){

// 	var new_date = moment(date_of_disbursment, "YYYY-MM-DD").add('days', i);
// }
// 	else{
// 		var new_date = moment(date_of_disbursment, "YYYY-MM-DD").add('month', i);
// 	}

// 	new_date=moment(new_date).format("YYYY-MM-DD");
// 	// var new_date = moment(date_of_disbursment, "YYYY-MM-DD").add('month', i);
// 	// new_date=moment(new_date).format("YYYY-MM-DD");

	
  
//     $("#instdateem").append(' <tr><td><input type="hidden" name="installment_number[]" value="'+i+'">'+i+'</td><td><input type="hidden" name="due_date[]" value="'+new_date+'">'+new_date+'</td><td><input type="hidden" name="installment_amount[]" value="'+loantenure+'">'+loantenure+'</td></tr> ');//modal table print karne ke liye append kiya hai +i+ se 10 time print hoga i ki value
// 	//input field data save krne ke liye
	
// }

// } ) --}}




	


    




