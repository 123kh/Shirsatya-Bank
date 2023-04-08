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
								<form class="row g-2" method="POST" action="{{route('update_customer')}}" enctype="multipart/form-data">
									{{csrf_field()}}
									<input type="hidden"  name="id"  value="{{$edit_data->id}}" >
									<!-- <div class="col-md-3">
										<label class="form-label">
											Date of Sale</label>
										<input class="result form-control" type="text" id="date" placeholder="">
									</div> -->
									<div class="col-md-2">
										<label for="inputFirstName" class="form-label">Customer Name*</label>
										<input type="text" class="form-control" value="{{$edit_data->customer_name}}" id="" placeholder="Customer Name" name="customer_name">
									</div>

									
									<div class="col-md-3">
										<label for="inputFirstName" class="form-label">Email*</label>
										<input type="text" class="form-control"  value="{{$edit_data->email}}" id="inputFirstName" placeholder="Email" name="email">
									</div>

									<div class="col-md-2">
										<label for="inputFirstName" class="form-label">WhatsApp Number*</label>
										<input type="text" class="form-control" value="{{$edit_data->whatsapp_number}}" id="inputFirstName" placeholder="WhatsApp Number" name="whatsapp_number">
									</div>
									<div class="col-md-2">
										<label for="inputFirstName" class="form-label">Alternative Number*</label>
										<input type="text" class="form-control" value="{{$edit_data->alternetive_number}}" id="inputFirstName" placeholder="Alternative Number" name="alternetive_number">
									</div>

									
									<div class="col-md-3">
										<label for="inputFirstName" class="form-label">Address*</label>
										<input type="text" class="form-control" value="{{$edit_data->address}}" id="inputFirstName" placeholder="Address" name="address">
									</div>

											
									<div class="col-md-3">
										<label for="inputFirstName" class="form-label">City*</label>
										<select class="form-select mb-3" aria-label="Default select example" name="city">
											<option value="">Select</option>
													@foreach ($customers as $citys)
											 <option value="{{ $citys->id }}"  @if($edit_data->select_city==$citys->id) selected @endif>
												{{$citys->city}} </option>
											 @endforeach
											</select>         
									</div>
									<div class="col-md-3">
										<label for="inputFirstName" class="form-label">Photo</label>
										<input class="form-control" value="" id="fancy-file-upload" type="file" name="imagess" accept=".jpg, .png, image/jpeg, image/png"><img height="50px" width="50px" src="{{asset('/'.$edit_data->photo)}}" alt="">
									</div>


									<div class="col-md-3">
										<label for="inputFirstName" class="form-label">PAN</label>
										<input class="form-control" value="" id="fancy-file-upload" type="file" name="image" accept=".jpg, .png, image/jpeg, image/png"><img height="50px" width="50px" src="{{asset('/'.$edit_data->pan)}}" alt="">
									</div>

									
									<div class="col-md-3">
										<label for="inputFirstName" class="form-label">Aadhar</label>
										<input class="form-control" value="" id="fancy-file-upload" type="file" name="images" accept=".jpg, .png, image/jpeg, image/png"><img height="50px" width="50px" src="{{asset('/'.$edit_data->adhar)}}" alt="">
									</div>

								

									<div class="col-md-1" style="padding:2px; text-align:center;" ><br>
										<button type="submit" class="btn btn-primary px-3">UPDATE</button>
									</div>
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
                                        @foreach($cit as $c_dt)
											<tr>
												<td>{{$loop->index+1}}</td>
						     					<td>{{$c_dt->customer_name}}</td>
												<td>{{$c_dt->email}}</td>
												<td>{{$c_dt->whatsapp_number}}</td>
												<td>{{$c_dt->alternetive_number}}</td>
												<td>{{$c_dt->address}}</td>
												<td>{{$c_dt->city}}</td>
												{{-- <td>{{$c_dt->pan}}</td>
												<td>{{$c_dt->aadhar}}</td> --}}
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
												<a href="{{route('edit_customer',$c_dt)}}"><button type="button" class="btn1 btn-outline-success"><i class='bx bx-edit-alt me-0'></i></button> </a>
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