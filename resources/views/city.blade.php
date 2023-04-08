@extends("layout")
@section("content")
<div class="page-wrapper">
			<div class="page-content">
				<div class="row">
					<div class="col-md-6 mx-auto" >
						<div class="card">
							<div class="card-body">
								<div class="card-title d-flex align-items-center">
								
									<h5 class="mb-0 text-primary">Add City</h5>
								</div>
								<hr>
								<form class="row g-2" method="post" action="{{route('add_city')}}">
									@csrf
							<div class="col-md-2"></div>
									<div class="col-md-4">
										<label for="inputFirstName" class="form-label">City*</label>
										<input type="text" name='city' class="form-control" id="inputFirstName" placeholder="City" required>
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
												<th>City</th>  
												<th>Action</th>
											</tr>
										</thead>
										<tbody>
											@foreach($citys as $city)
											<tr>
												<td>{{$loop->index+1}}</td>
												<td>{{$city->city}}</td>
											
												<td><a href="{{route('edit_city',$city->id)}}">
												<button type="button" class="btn1 btn-outline-success"><i class='bx bx-edit-alt me-0'></i></button> </a>
												<a href="{{route('delete_city',$city->id)}}">
												<button type="button" class="btn1 btn-outline-danger"><i class='bx bx-trash me-0'></i></button> </a>
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