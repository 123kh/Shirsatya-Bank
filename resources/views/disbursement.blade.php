@extends('layout')
@section('content')

<div class="page-wrapper">
			<div class="page-content">
				<div class="row">
					<h5 class="mb-0 text-primary" >Disbursement</h5>
					<hr style="margin-top: -5%;">

					<div class="col-md-12" style="margin-top: -3%;">
						<div class="card">
							<div class="card-body">
								<div class="table-responsive">
									<table id="example" class="table table-striped table-bordered">
										<thead>
											<tr>
												
												<th>Sr. No.</th>
												<th>Customer Details</th>  
												<th>Loan Details</th> 
												{{-- <th>EMI Amount</th>
												<th>EMI Pendings</th> --}}
												<th>Action</th>
											</tr>
										</thead>
										<tbody>
											@foreach ($loanapss as $loanaps)
											<tr>
												<td>{{$loop->index+1}}</td>
												<td data-bs-toggle="tooltip" data-bs-placement="top" title="Customer Name :- {{$loanaps->customer_name}} 
City :- {{$loanaps->city}}
WhatsApp Number :- {{$loanaps->whatsapp_number}}
Email :- {{$loanaps->email}} ">{{$loanaps->customer_name}}</td>

												<td data-bs-toggle="tooltip" data-bs-placement="top" title="Loan Scheme :- {{$loanaps->loan_scheme_name}}
Loan Amount :- {{$loanaps->amount}}
Tenure Type :-{{$loanaps->tenure_type}}            
Tenure :- {{$loanaps->tenure_for_days}}
Intrest :- {{$loanaps->intrest}}
Application Fees :-{{$loanaps->application_fees}}
Valuation Fees :- {{$loanaps->valuation_fees}}
Processing Fees :-{{$loanaps->processing_fees}}
Disburse Amount :- {{$loanaps->disburse_amount}}
Repayment :- {{$loanaps->repayment}}
Expected Date :- {{$loanaps->expected_date_of_disbursment}}">{{$loanaps->loan_scheme_name}}</td>
												{{-- <td></td>
												<td></td> --}}
											
												<td><a href="{{route('edit_loanapp',$loanaps->id)}}">
													<button type="button" class="btn1 btn-outline-success"><i class='bx bx-edit-alt me-0'></i></button></a>
													<a href="{{route('delete_loanapp',$loanaps->id)}}">
													 <button type="button" class="btn1 btn-outline-danger"><i class='bx bx-trash me-0'></i></button> </a>
													 <button type="button" class="btn1 btn-outline-dark schedule" 
													 id="{{$loanaps->id}}"
													 data-bs-toggle="modal" data-bs-target="#exampleLargeModal"
													 loan_amount="{{$loanaps->amount}}" date_of_disbursment="{{$loanaps->expected_date_of_disbursment}}" tenure="{{$loanaps->tenure_for_days}}" tenure_type="{{$loanaps->tenure_type}}"
													>
														View Scheduled</button>
													

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
								Expected Date Of Disbursment</label><br>
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

        @stop
		@section('js')
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
		
		$("#loanschemelable").text(loan.loan_scheme_name);
		$("#loancustomer").text(loan.customer_name);
		// $("#loancitymodal").text(loan.city);
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
		@stop