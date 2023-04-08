@extends("layout")
@section("content")
<div class="page-wrapper">
			<div class="page-content">
				<div class="row">
					<div class="col-md-12 mx-auto" >
						<div class="card">
							<div class="card-body">
								<div class="card-title d-flex align-items-center">
								
									<h5 class="mb-0 text-primary">Customer with EMI</h5>
								</div>
								<hr>
								<form class="row g-2">
									<!-- <div class="col-md-3">
										<label class="form-label">
											Date of Sale</label>
										<input class="result form-control" type="text" id="date" placeholder="">
									</div> -->
								
									<div class="col-md-3">
										<label class="form-label">Select Customer*</label>
										<select class="single-select">
											<option value="United States">Jhon</option>
											<option value="United Kingdom">Yash</option>
											<option value="United Kingdom">Chandan</option>

										</select>
									</div>

								 	
									<div class="col-md-3">
										<label class="form-label">
										From Date*</label>
										<input class=" form-control" type="date" id="date" placeholder="">
									</div> 
									
									
									<div class="col-md-3">
										<label class="form-label">
										To Date*</label>
										<input class=" form-control" type="date" id="date" placeholder="">
									</div> 
									
									


									<div class="col-md-3" style="padding:8px" ><br>
										<button type="submit" class="btn btn-primary px-3"><i class="fadeIn animated bx bx-plus"></i>Add</button>
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
												<th>EMI</th>  
												<th>Date</th> 
												<th>EMI Amount</th>
												<th>Transcation Status</th>
												<th>Action</th>
											</tr>
										</thead>
										<tbody>
											<tr>
												<td>1</td>
												<td></td>
												<td></td>
												<td></td>
												<td></td>
												<td><button type="button" class="btn1 btn-outline-success"><i class='bx bx-edit-alt me-0'></i></button> <button type="button" class="btn1 btn-outline-danger"><i class='bx bx-trash me-0'></i></button> 
												</td>
									
											</tr>
											
										
											
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
		