@extends("layout")
@section("content")
<div class="page-wrapper">
			<div class="page-content">
				<div class="row">
					<div class="col-md-12 mx-auto" >
						<div class="card">
							<div class="card-body">
								<div class="card-title d-flex align-items-center">
								
									<h5 class="mb-0 text-primary">Loan Scheme</h5>
								</div>
								<hr>
								<form class="row g-2" method="post" action="{{route('update_loan_scheme',$edit_data->id)}}">
									@csrf
									<!-- <div class="col-md-3">
										<label class="form-label">
											Date of Sale</label>
										<input class="result form-control" type="text" id="date" placeholder="">
									</div> -->
									<div class="col-md-2">
										<label for="inputFirstName" class="form-label">Loan Scheme Name*</label>
										<input type="text" name="loan_scheme_name" value='{{$edit_data->loan_scheme_name}}' class="form-control" id="inputFirstName" placeholder="Loan Scheme Name" Required>
									</div>
									
									
									<div class="col-md-2">
										<label class="form-label">Type of Intrest*</label>
										<select class="form-select " name="type_of_value_in_intrest" value='{{$edit_data->type_of_value_in_intrest}}'  aria-label="Default select example" >
											<option value="">select--</option>
											<option value="2" @if ($edit_data->type_of_value_in_intrest == '2') selected @endif>%</option>
											<option value="1"  @if ($edit_data->type_of_value_in_intrest == '1') selected @endif>₹</option>

										</select>
									</div>


									<div class="col-md-2">
										<label for="inputFirstName" class="form-label">Value of Intrest*</label>
										<input type="text" name="value_of_intrest"  value='{{$edit_data->value_of_intrest}}'  class="form-control" id="inputFirstName" placeholder="Value of Intrest" Required>
									</div>

									
									<div class="col-md-2">
										<label for="inputFirstName" class="form-label">Application Fees*</label>
										<input type="text" name="application_fees" value='{{$edit_data->application_fees}}'  class="form-control" id="inputFirstName" placeholder="Application Fees" Required>
									</div>

									<div class="col-md-2">
										<label for="inputFirstName" class="form-label">Processing Fees*</label>
										<input type="text" name="processing_fees"  value='{{$edit_data->processing_fees}}'  class="form-control" id="inputFirstName" placeholder="Processing Fees" Required>
									</div>
									<div class="col-md-2">
										<label for="inputFirstName" class="form-label">Valuation Fees*</label>
										<input type="text" name='valuation_fees' value='{{$edit_data->valuation_fees}}'  class="form-control" id="inputFirstName" placeholder="Valuation Fees" Required>
									</div>

									

<!-- 
									<div class="col-md-3">
										<label for="inputFirstName" class="form-label">Description*</label>
										<input type="text" class="form-control" id="inputFirstName" placeholder="Enter Description">
									</div>

									<div class="col-md-3">
										<label for="inputFirstName" class="form-label">Upload Image</label>
										<input class="form-control" id="fancy-file-upload" type="file" name="files" accept=".jpg, .png, image/jpeg, image/png" multiple>
									</div>

								 -->

									<div class="col-md-1" style="padding:2px; text-align:center;" ><br>
										<button type="submit" class="btn btn-primary px-3">UPDATE</button>
									</div>
								</form>
		
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
												<th>Loan Scheme Name</th>  
												<th>Type of intrest % ₹</th> 
												<th>Value of Intrest</th>
												<th>Application Fees</th>
												<th>Processing Fees</th>
												<th>Valuation Fees</th>
												<th>Action</th>
																					</tr>
										</thead>
										<tbody>
										@foreach($loan_scheme as $dt)
											<tr>
												<td>{{$loop->index+1}}</td>
												<td>{{$dt->loan_scheme_name}}</td>
												<td>
													@if($dt->type_of_value_in_intrest == 1) ₹
													@else
													%
													@endif
												</td>
												<td>{{$dt->value_of_intrest}}</td>
												<td>{{$dt->application_fees}}</td>
												<td>{{$dt->processing_fees}}</td>
												<td>{{$dt->valuation_fees}}</td>
												<td>
												<a href="{{route('edit_loan_scheme',$dt->id)}}"><button type="button" class="btn1 btn-outline-success"><i class='bx bx-edit-alt me-0'></i></button> </a>
												<a href="{{route('delete_loan_scheme',$dt->id)}}"><button type="button" class="btn1 btn-outline-danger"><i class='bx bx-trash me-0'></i></button> </a>
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
		<hr/>
				
		<!--end page wrapper -->
		<!--start overlay-->
		<div class="overlay toggle-icon"></div>
		<!--end overlay-->
		<!--Start Back To Top Button--> <a href="javaScript:;" class="back-to-top"><i class='bx bxs-up-arrow-alt'></i></a>
		<!--End Back To Top Button-->
@stop