@extends("layout")
@section("content")
<div class="page-wrapper">
			<div class="page-content">
				<div class="row">
					<div class="col-md-12 mx-auto" >
						<div >
							<div >
								<div class="card-title d-flex align-items-center">
								
									<h5 class="mb-0 text-primary">Track Loan</h5>
								</div>
							
								<!-- <form class="row g-2">
						
									<div class="col-md-3">
										<label for="inputFirstName" class="form-label">Customer Name*</label>
										<input type="text" class="form-control" id="inputFirstName" placeholder="Customer Name">
									</div>

									
									<div class="col-md-3">
										<label for="inputFirstName" class="form-label">Email*</label>
										<input type="text" class="form-control" id="inputFirstName" placeholder="Email">
									</div>

									<div class="col-md-3">
										<label for="inputFirstName" class="form-label">Contact Number*</label>
										<input type="text" class="form-control" id="inputFirstName" placeholder="Contact Number">
									</div>

									
									<div class="col-md-3">
										<label for="inputFirstName" class="form-label">Address*</label>
										<input type="text" class="form-control" id="inputFirstName" placeholder="Address">
									</div>

											
									<div class="col-md-3">
										<label for="inputFirstName" class="form-label">City*</label>
										<input type="text" class="form-control" id="inputFirstName" placeholder="City">
									</div>



									<div class="col-md-3" style="padding:8px" ><br>
										<button type="submit" class="btn btn-primary px-3"><i class="fadeIn animated bx bx-plus"></i>Add</button>
									</div>
								</form> -->
		
							</div>
		
						</div>
					</div>

					<hr/>

					<div class="col-md-12">
						<div class="card">
							<div class="card-body">
								<div class="table-responsive">
									<table id="example" class="table table-striped table-bordered">
										<thead>
											<tr>
												<th>Sr. No.</th>
												{{-- <th>EMI</th>   --}}
												<th>Date</th> 
												<th>EMI Amount</th>
												<th>Transcation Status</th>
												<th>Action</th>
											</tr>
										</thead>
										<tbody>
											@foreach ($track as $trck)
											
									
											<tr>
												<td>{{$loop->index+1}}</td>
												{{-- <td></td> --}}
												<td>{{$trck->due_date}}</td>
												<td>{{$trck->installment_amount}}</td>
												<td>{{$trck->status}}</td>
												<td> 
													<button type="button" class="btn1 btn-outline-dark schedule" >
													   View</button>
													<button type="button" class="btn1 btn-outline-danger"><i class='bx bx-trash me-0'></i></button> 
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
	
				
		<!--end page wrapper -->
		<!--start overlay-->
		<div class="overlay toggle-icon"></div>
		<!--end overlay-->
		<!--Start Back To Top Button--> <a href="javaScript:;" class="back-to-top"><i class='bx bxs-up-arrow-alt'></i></a>
		<!--End Back To Top Button-->
@stop        