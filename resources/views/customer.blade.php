@extends("layout")
@section("content")
<div class="page-wrapper">
			<div class="page-content">
				<div class="row">
					<div class="col-md-12 mx-auto" >
						<div class="card">
							<div class="card-body">
								<div class="card-title d-flex align-items-center">
								
									<h5 class="mb-0 text-primary">Add Customer</h5>
								</div>
								<hr>
								<form class="row g-2" method='post' action="{{route('add_customer')}}" enctype="multipart/form-data">
									@csrf
									
									<!-- <div class="col-md-3">
										<label class="form-label">
											Date of Sale</label>
										<input class="result form-control" type="text" id="date" placeholder="">
									</div> -->
									<div class="col-md-2">
					     				<label for="inputFirstName" class="form-label">Customer Name*</label>
										<input type="text" name="customer_name" class="form-control" id="inputFirstName" placeholder="Customer Name" required>
									</div>

									
									<div class="col-md-2">
										<label for="inputFirstName" class="form-label">Email*</label>
										<input type="text" name="email" class="form-control" id="inputFirstName" placeholder="Email" required>
									</div>

									<div class="col-md-2">
										<label for="inputFirstName" class="form-label">WhatsApp Number*</label>
										<input type="text" name="whatsapp_number" class="form-control" id="inputFirstName" placeholder="WhatsApp Number" required>
									</div>
									<div class="col-md-2">
										<label for="inputFirstName" class="form-label">Alternative Number*</label>
										<input type="text" name="alternetive_number" class="form-control" id="inputFirstName" placeholder="Alternative Number" required>
									</div>

									
									<div class="col-md-2">
										<label for="inputFirstName" class="form-label">Address*</label>
										<input type="text" name="address" class="form-control" id="inputFirstName" placeholder="Address" required>
									</div>

											
									<div class="col-md-2">
										<label for="inputFirstName" class="form-label">City*</label>
										<select class="form-select mb-3" aria-label="Default select example" name="city">
											
											<option value="">Select City</option>
		                                                 							
                                                @foreach ($customer_data as $citys)
                                                    <option value="{{$citys->id }}">{{ $citys->city }}</option>
                                                @endforeach									</select>
									</div>

									
									
								
									<div class="col-md-3">
										<label for="inputFirstName" class="form-label">Photo</label>
										<input class="form-control" id="fancy-file-upload" type="file" name="imagess" accept=".jpg, .png, image/jpeg, image/png" required>
									</div>
									<div class="col-md-3">
										<label for="inputFirstName" class="form-label">PAN</label>
										<input class="form-control" id="fancy-file-upload" type="file" name="image" accept=".jpg, .png, image/jpeg, image/png" required>
									</div>
									<div class="col-md-3">
										<label for="inputFirstName" class="form-label">Aadhar</label>
										<input class="form-control" name="images" id="fancy-file-upload" type="file" accept=".jpg, .png, image/jpeg, image/png" required>
									</div>
									<div class="col-md-3" style="padding:10px; margin-top: 2%">
									{{-- <div class="col-md-3" style="padding:8px; margin-left: 45%;" > --}}
										<button type="submit" class="btn btn-primary px-3"><i class="fadeIn animated bx bx-plus"></i>Add</button>
									</div>
									<br>
								</form>
		
							</div>
		
						</div>
					</div>

					<hr/>

					<div class="col-md-12" >
						<div class="card">
							<div class="card-body">
								<div class="table-responsive">
									<table id="example" class="table table-striped table-bordered">
										<thead>
											<tr>
												<th>Sr. No.</th>
												<th> Name</th>  
												<th>Email</th> 
												<th>WhatsApp Number</th>
												<th>Alternative Number</th>
												<th>Address</th>
												<th>City</th>
												<th>Photo</th>
												<th>PAN</th>
												<th>Aadhar</th>
												<th>Action</th>
											</tr>
										</thead>
										<tbody>
											@foreach($cust as $c_dt)
											<tr>
												<td>{{$loop->index+1}}</td>
						     					<td>{{$c_dt->customer_name}}</td>
												<td>{{$c_dt->email}}</td>
												<td>{{$c_dt->whatsapp_number}}</td>
												<td>{{$c_dt->alternetive_number}}</td>
												<td>{{$c_dt->address}}</td>
												<td>{{$c_dt->city}}</td>
												{{-- <td>{{$c_dt->aadhar}}</td> --}}
												{{-- <td>{{$c_dt->pan}}</td> --}}
												<td><a href="{{asset('/')}}{{$c_dt->photo}}"> 
													<img height="50px" width="50px" src="{{asset('/')}}{{$c_dt->photo}}" alt="" /></a>
												</td>
												<td><a href="{{asset('/')}}{{$c_dt->pan}}"> 
													<img height="50px" width="50px" src="{{asset('/')}}{{$c_dt->pan}}" alt="" /></a>
												</td>
							<td><a href="{{asset('/')}}{{$c_dt->adhar}}"> 
													<img height="50px" width="50px" src="{{asset('/')}}{{$c_dt->adhar}}" alt="" /></a>
												</td>
											
												<td>
												<a href="{{route('edit_customer',$c_dt)}}">
													<button type="button" class="btn1 btn-outline-success"><i class='bx bx-edit-alt me-0'></i></button> </a>
												<a href="{{route('delete_customer',$c_dt)}}"><button type="button" class="btn1 btn-outline-danger"><i class='bx bx-trash me-0'></i></button> </a>
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