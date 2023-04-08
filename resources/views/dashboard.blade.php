@extends('layout')
@section('content')
<div class="page-wrapper">
			<div class="page-content">

				<h6 class="mb-0 text-uppercase" >Dashboard</h6> 
		 <!-- <div class="row align-items-center" >
					<div class="col-md-2">
						<h6 class="mb-0 text-uppercase" style="font-weight: bold;"></h4>
					</div>
					<div class="col-md-12">
						<form class="">
							<div class="row row-cols-md-auto g-lg-3">
								<div class="col-md-3">
									<label for="inputFromDate" class=" col-form-label text-md-end">From Date</label>

									<input type="date" class="form-control" id="inputFromDate">
								</div>
								<div class="col-md-3">
									<label for="inputToDate" class=" col-form-label text-md-end">To Date</label>

									<input type="date" class="form-control" id="inputToDate">
								</div>

								<div class="col-md-4" style="padding:8px; margin-top:2%;"><br>
									<button type="submit" class="btn btn-primary px-3"><i class="lni lni-search-alt"></i> Search</a></button>	
									</div>

							</div>
						</form>
					</div>
				</div>  -->
				 <!-- <div style="margin-left: 200px;">
					<img src="assets/images/legend.png" style="max-width: 450px;">
				</div> -->
				 <hr>
				<div class="row row-cols-1 row-cols-md-2 row-cols-xl-4" >
					<div class="col">
						<div class="card radius-10">
							<div class="card-body">
								<div class="d-flex align-items-center">
									<div>
										<p class="mb-0 text-secondary" style="color: rgb(62, 59, 59) !important;">
											Customer</p>
										{{-- <h4 class="my-1" style="color: black;">4805</h4> --}}
										<!-- <p class="mb-0 font-13 text-success"><i class="bx bxs-up-arrow align-middle"></i>$34 from last week</p> -->
										@php
									$count = DB::table('customer')->count();
									echo '<h3>' . $count . '</h3>';
									@endphp
									</div>
									<div class="widgets-icons bg-light-success text-success ms-auto"><i
											class="bx bx-list-ol"></i>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="col">
						<div class="card radius-10">
							<div class="card-body">
								<div class="d-flex align-items-center">
									<div>
										<p class="mb-0 text-secondary">Loan Disburse</p>
										{{-- <h4 class="my-1" style="color: black;">8455</h4>
										<!-- <p class="mb-0 font-13 text-success"><i class='bx bxs-up-arrow align-middle'></i>$24 from last week</p> --> --}}
										<?php
									$count = DB::table('loan_application')
									->where('disburse_status', '1')
									->count();

									echo '<h3>' . $count . '</h3>';
									?>
									</div>
									<div class="widgets-icons bg-light-info text-info ms-auto"><i
											class='bx bx-menu'></i>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="col">
						<div class="card radius-10">
							<div class="card-body">
								<div class="d-flex align-items-center">
									<div>
										<p class="mb-0 text-secondary">EMI Pendings</p>
										{{-- <h4 class="my-1" style="color: black;">3456</h4> --}}
										<!-- <p class="mb-0 font-13 text-danger"><i class='bx bxs-down-arrow align-middle'></i>$34 from last week</p> -->
										<?php
										$count = DB::table('schedules')
										->where('status', '0')
										->count();
	
										echo '<h3>' . $count . '</h3>';
										?>
									</div>
									<div class="widgets-icons bg-light-danger text-danger ms-auto"><i
											class='bx bx-note'></i>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="col">
						<div class="card radius-10">
							<div class="card-body">
								<div class="d-flex align-items-center">
									<div>
										<p class="mb-0 text-secondary">EMI Collect</p>
										{{-- <h4 class="my-1" style="color: black;">34.46%</h4> --}}
										<?php
										$count = DB::table('schedules')
										->where('status', '1')
										->count();
	
										echo '<h3>' . $count . '</h3>';
										?>
									</div>
									<div class="widgets-icons bg-light-warning text-warning ms-auto"><i
											class='bx bx-line-chart-down'></i>
									</div>
								</div>
							</div>
						</div>
					</div>
					<!-- <div class="col">
						<div class="card radius-10">
							<div class="card-body">
								<div class="d-flex align-items-center">
									<div>
										<p class="mb-0 text-secondary">Doctor</p>
										<h4 class="my-1" style="color: black;">422</h4>
									</div>
									<div class="text-primary ms-auto font-35"><i class='bx bxl-chrome'></i>
									</div>
								</div>
							</div>
						</div>
					</div> -->
					<!-- <div class="col">
						<div class="card radius-10">
							<div class="card-body">
								<div class="d-flex align-items-center">
									<div>
										<p class="mb-0 text-secondary"> City</p>
										<h4 class="my-1" style="color: black;">56M</h4>
									</div>
									<div class="text-danger ms-auto font-35"><i class='bx bx-repost'></i>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="col">
						<div class="card radius-10">
							<div class="card-body">
								<div class="d-flex align-items-center">
									<div>
										<p class="mb-0 text-secondary">No of Medicine </p>
										<h4 class="my-1" style="color: black;">4245</h4>
									</div>
									<div class="text-warning ms-auto font-35"><i class='bx bx-poll'></i>
									</div>
								</div>
							</div>
						</div>
					</div> -->
					<!-- 					
					<div class="col">
						<div class="card radius-10">
							<div class="card-body">
								<div class="d-flex align-items-center">
									<div>
										<p class="mb-0 text-secondary">% OPD Cancellation</p>
										<h4 class="my-1" style="color: black;">4805</h4>
									</div>
									<div class="widgets-icons bg-light-success text-success ms-auto"><i class="bx bx-plus"></i>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="col">
						<div class="card radius-10">
							<div class="card-body">
								<div class="d-flex align-items-center">
									<div>
										<p class="mb-0 text-secondary">% OT Cancellation</p>
										<h4 class="my-1" style="color: black;"> 8455</h4>
									
									</div>
									<div class="widgets-icons bg-light-info text-info ms-auto"><i class='bx bx-rupee'></i>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="col">
						<div class="card radius-10">
							<div class="card-body">
								<div class="d-flex align-items-center">
									<div>
										<p class="mb-0 text-secondary">Advice</p>
										<h4 class="my-1" style="color: black;">3456</h4>
									</div>
									<div class="widgets-icons bg-light-danger text-danger ms-auto"><i class='bx bxs-detail'></i>
									</div>
								</div>
							</div>
						</div>
					</div>
				<div class="col">
						<div class="card radius-10">
							<div class="card-body">
								<div class="d-flex align-items-center">
									<div>
										<p class="mb-0 text-secondary">Online Appointment</p>
										<h4 class="my-1" style="color: black;">34.46%</h4>
									
									</div>
									<div class="widgets-icons bg-light-warning text-warning ms-auto"><i class='bx bx-laptop'></i>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="col">
						<div class="card radius-10">
							<div class="card-body">
								<div class="d-flex align-items-center">
									<div>
										<p class="mb-0 text-secondary">Cancel Appointment</p>
										<h4 class="my-1" style="color: black;">4805</h4>
									
									</div>
									<div class="widgets-icons bg-light-success text-success ms-auto"><i class="bx bxs-x-circle"></i>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="col">
						<div class="card radius-10">
							<div class="card-body">
								<div class="d-flex align-items-center">
									<div>
										<p class="mb-0 text-secondary">Birthday</p>
										<h4 class="my-1 " style="color: black;">85M</h4>
									</div>
									<div class="text-success ms-auto font-35"><i class='bx bx-calendar'></i>
									</div>
								</div>
							</div>
						</div>
					</div> -->
					<!-- <div class="col">
						<div class="card radius-10">
							<div class="card-body">
								<div class="d-flex align-items-center">
									<div>
										<p class="mb-0 text-secondary">Doctor</p>
										<h4 class="my-1">8455</h4>
									
									</div>
									<div class="widgets-icons bg-light-info text-info ms-auto"><i class='bx bxs-group'></i>
									</div>
								</div>
							</div>
						</div>
					</div> -->

				</div>
				<!-- 
				<h6 class="mb-0 text-uppercase" style="font-weight: bold;">Doctor</h6>
				<hr/>
				<div class="row row-cols-1 row-cols-md-2 row-cols-xl-4">
					<div class="col">
						<div class="card radius-10">
							<div class="card-body">
								<div class="d-flex align-items-center">
									<div>
										<p class="mb-0 text-secondary">Pharmacy Approval</p>
										<h4 class="my-1" style="color: black;">3456</h4>
									</div>
									<div class="widgets-icons bg-light-danger text-danger ms-auto"><i class='bx bxs-check-circle'></i>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="col">
						<div class="card radius-10">
							<div class="card-body">
								<div class="d-flex align-items-center">
									<div>
										<p class="mb-0 text-secondary">Inventory Approval</p>
										<h4 class="my-1" style="color: black;">34.46%</h4>
									
									</div>
									<div class="widgets-icons bg-light-warning text-warning ms-auto"><i class='bx bx-badge-check'></i>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="col">
						<div class="card radius-10">
							<div class="card-body">
								<div class="d-flex align-items-center">
									<div>
										<p class="mb-0 text-secondary">No. of Prescription</p>
										<h4 class="my-1">4805</h4>
									</div>
									<div class="widgets-icons bg-light-success text-success ms-auto"><i class="bx bx-list-ul"></i>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="col">
						<div class="card radius-10">
							<div class="card-body">
								<div class="d-flex align-items-center">
									<div>
										<p class="mb-0 text-secondary">No. of Glass Prescription</p>
										<h4 class="my-1" style="color: black;">8455</h4>
									</div>
									<div class="widgets-icons bg-light-info text-info ms-auto"><i class='bx bx-menu'></i>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="col">
						<div class="card radius-10">
							<div class="card-body">
								<div class="d-flex align-items-center">
									<div>
										<p class="mb-0 text-secondary">Favorite Patient</p>
										<h4 class="my-1" style="color: black;">3456</h4>
									</div>
									<div class="widgets-icons bg-light-danger text-danger ms-auto"><i class='bx bx-star'></i>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="col">
						<div class="card radius-10">
							<div class="card-body">
								<div class="d-flex align-items-center">
									<div>
										<p class="mb-0 text-secondary">Issued Certificate</p>
										<h4 class="my-1">45</h4>
									
									</div>
									<div class="widgets-icons bg-light-warning text-warning ms-auto"><i class='lni lni-certificate'></i>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="col">
						<div class="card radius-10">
							<div class="card-body">
								<div class="d-flex align-items-center">
									<div>
										<p class="mb-0 text-secondary">Procedure Adviced</p>
										<h4 class="my-1">4805</h4>
									
									</div>
									<div class="widgets-icons bg-light-success text-success ms-auto"><i class="bx bxs-detail"></i>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="col">
						<div class="card radius-10">
							<div class="card-body">
								<div class="d-flex align-items-center">
									<div>
										<p class="mb-0 text-secondary">No. of Occular</p>
										<h4 class="my-1">3456</h4>
									
									</div>
									<div class="widgets-icons bg-light-danger text-danger ms-auto"><i class='bx bxs-detail'></i>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="col">
						<div class="card radius-10">
							<div class="card-body">
								<div class="d-flex align-items-center">
									<div>
										<p class="mb-0 text-secondary">% of Conversion (OT)</p>
										<h4 class="my-1">8455</h4>
									
									</div>
									<div class="widgets-icons bg-light-info text-info ms-auto"><i class='bx bxs-group'></i>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="col">
						<div class="card radius-10">
							<div class="card-body">	
								<div class="d-flex align-items-center">
									<div>
										<p class="mb-0 text-secondary">NI(OT) Patient</p>
										<h4 class="my-1">3456</h4>
									
									</div>
									<div class="widgets-icons bg-light-danger text-danger ms-auto"><i class='bx bx-user'></i>
									</div>
								</div>
							</div>
						</div>
					</div>-->
				<!-- <div class="col">
						<div class="card radius-10">
							<div class="card-body">
								<div class="d-flex align-items-center">
									<div>
										<p class="mb-0 text-secondary">Visual Acuity</p>
										<h4 class="my-1">45</h4>
									
									</div>
									<div class="widgets-icons bg-light-warning text-warning ms-auto"><i class='bx bx-line-chart-down'></i>
									</div>
								</div>
							</div>
						</div>
					</div> -->
				<!--	<div class="col">
						<div class="card radius-10">
							<div class="card-body">
								<div class="d-flex align-items-center">
									<div>
										<p class="mb-0 text-secondary">Auto Refractometer</p>
										<h4 class="my-1">48</h4>
									</div>
									<div class="widgets-icons bg-light-success text-success ms-auto"><i class="bx bxs-wallet"></i>
									</div>
								</div>
							</div>
						</div>
					</div>
					
				
					<div class="col">
						<div class="card radius-10">
							<div class="card-body">
								<div class="d-flex align-items-center">
									<div>
										<p class="mb-0 text-secondary">Keratometry</p>
										<h4 class="my-1">8455</h4>
								
									</div>
									<div class="widgets-icons bg-light-info text-info ms-auto"><i class='bx bxs-layer'></i>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="col">
						<div class="card radius-10">
							<div class="card-body">
								<div class="d-flex align-items-center">
									<div>
										<p class="mb-0 text-secondary">Schirmers Test</p>
										<h4 class="my-1">3456</h4>
									
									</div>
									<div class="widgets-icons bg-light-danger text-danger ms-auto"><i class='bx bx-star'></i>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="col">
						<div class="card radius-10">
							<div class="card-body">
								<div class="d-flex align-items-center">
									<div>
										<p class="mb-0 text-secondary">Tonometry</p>
										<h4 class="my-1">45</h4>
									
									</div>
									<div class="widgets-icons bg-light-warning text-warning ms-auto"><i class='bx bx-left-indent'></i>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="col">
						<div class="card radius-10">
							<div class="card-body">
								<div class="d-flex align-items-center">
									<div>
										<p class="mb-0 text-secondary">Gonioscopy</p>
										<h4 class="my-1">48</h4>
								
									</div>
									<div class="widgets-icons bg-light-success text-success ms-auto"><i class="bx bx-border-all"></i>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="col">
						<div class="card radius-10">
							<div class="card-body">
								<div class="d-flex align-items-center">
									<div>
										<p class="mb-0 text-secondary">Slit Lamp</p>
										<h4 class="my-1">8455</h4>
								
									</div>
									<div class="widgets-icons bg-light-info text-info ms-auto"><i class='bx bxs-package'></i>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="col">
						<div class="card radius-10">
							<div class="card-body">
								<div class="d-flex align-items-center">
									<div>
										<p class="mb-0 text-secondary">Dialated</p>
										<h4 class="my-1">3456</h4>
									
									</div>
									<div class="widgets-icons bg-light-danger text-danger ms-auto"><i class='bx bxs-detail'></i>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="col">
						<div class="card radius-10">
							<div class="card-body">
								<div class="d-flex align-items-center">
									<div>
										<p class="mb-0 text-secondary">Fundus</p>
										<h4 class="my-1">45</h4>
									
									</div>
									<div class="widgets-icons bg-light-warning text-warning ms-auto"><i class='bx bx-buoy'></i>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div> -->
				<!-- <h6 class="mb-0 text-uppercase" style="font-weight: bold;">Inventory / Pharmacy / Optical</h6>
				<hr/>
				<div class="row row-cols-1 row-cols-md-2 row-cols-xl-4">
					<div class="col">
						<div class="card radius-10">
							<div class="card-body">
								<div class="d-flex align-items-center">
									<div>
										<p class="mb-0 text-secondary">All Medicine</p>
										<h4 class="my-1">3456</h4>
									
									</div>
									<div class="widgets-icons bg-light-danger text-danger ms-auto"><i class='bx bx-capsule'></i>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="col">
						<div class="card radius-10">
							<div class="card-body">
								<div class="d-flex align-items-center">
									<div>
										<p class="mb-0 text-secondary">PO- Pharmacy</p>
										<h4 class="my-1">34.46%</h4>
									
									</div>
									<div class="widgets-icons bg-light-warning text-warning ms-auto"><i class='bx bxs-chevron-left-square'></i>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="col">
						<div class="card radius-10">	
							<div class="card-body">
								<div class="d-flex align-items-center">
									<div>
										<p class="mb-0 text-secondary">R&R (Pharmacy)</p>
										<h4 class="my-1">4805</h4>
									</div>
									<div class="widgets-icons bg-light-success text-success ms-auto"><i class="bx bxs-capsule"></i>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="col">
						<div class="card radius-10">
							<div class="card-body">
								<div class="d-flex align-items-center">
									<div>
										<p class="mb-0 text-secondary">Purchase (Pharmacy)</p>
										<h4 class="my-1">09</h4>
										
									</div>
									<div class="widgets-icons bg-light-info text-info ms-auto"><i class='lni lni-cart-full'></i>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="col">
						<div class="card radius-10">
							<div class="card-body">
								<div class="d-flex align-items-center">
									<div>
										<p class="mb-0 text-secondary">Purchase Amt</p>
										<h4 class="my-1">3456</h4>
										
									</div>
									<div class="widgets-icons bg-light-danger text-danger ms-auto"><i class='bx bxs-coin'></i>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="col">
						<div class="card radius-10">
							<div class="card-body">
								<div class="d-flex align-items-center">
									<div>
										<p class="mb-0 text-secondary">Sale Amt</p>
										<h4 class="my-1">45</h4>
									
									</div>
									<div class="widgets-icons bg-light-warning text-warning ms-auto"><i class='bx bxs-coin'></i>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="col">
						<div class="card radius-10">
							<div class="card-body">
								<div class="d-flex align-items-center">
									<div>
										<p class="mb-0 text-secondary">P. Return Amt</p>
										<h4 class="my-1">4805</h4>
									
									</div>
									<div class="widgets-icons bg-light-success text-success ms-auto"><i class="lni lni-spinner-arrow"></i>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="col">
						<div class="card radius-10">
							<div class="card-body">
								<div class="d-flex align-items-center">
									<div>
										<p class="mb-0 text-secondary">Sale Return Amt.</p>
										<h4 class="my-1">8455</h4>
									
									</div>
									<div class="widgets-icons bg-light-info text-info ms-auto"><i class='bx bx-rupee'></i>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="col">
						<div class="card radius-10">
							<div class="card-body">
								<div class="d-flex align-items-center">
									<div>
										<p class="mb-0 text-secondary">Transfer (Pharmacy)</p>
										<h4 class="my-1">3456</h4>
									
									</div>
									<div class="widgets-icons bg-light-danger text-danger ms-auto"><i class='bx bx-transfer-alt'></i>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="col">
						<div class="card radius-10">
							<div class="card-body">
								<div class="d-flex align-items-center">
									<div>
										<p class="mb-0 text-secondary">Naer Expiry</p>
										<h4 class="my-1">45</h4>
									
									</div>
									<div class="widgets-icons bg-light-warning text-warning ms-auto"><i class='bx bx-checkbox-square'></i>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="col">
						<div class="card radius-10">
							<div class="card-body">
								<div class="d-flex align-items-center">
									<div>
										<p class="mb-0 text-secondary">Expired</p>
										<h4 class="my-1">48</h4>
								
									</div>
									<div class="widgets-icons bg-light-success text-success ms-auto"><i class="bx bxs-message-square-x"></i>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="col">
						<div class="card radius-10">
							<div class="card-body">
								<div class="d-flex align-items-center">
									<div>
										<p class="mb-0 text-secondary">Need Approval</p>
										<h4 class="my-1">8455</h4>
								
									</div>
									<div class="widgets-icons bg-light-info text-info ms-auto"><i class='lni lni-checkbox'></i>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="col">
						<div class="card radius-10">
							<div class="card-body">
								<div class="d-flex align-items-center">
									<div>
										<p class="mb-0 text-secondary">Adv. Collection</p>
										<h4 class="my-1">3456</h4>
									
									</div>
									<div class="widgets-icons bg-light-danger text-danger ms-auto"><i class='bx bx-coin-stack'></i>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="col">
						<div class="card radius-10">
							<div class="card-body">
								<div class="d-flex align-items-center">
									<div>
										<p class="mb-0 text-secondary">Refund</p>
										<h4 class="my-1">45</h4>
									
									</div>
									<div class="widgets-icons bg-light-warning text-warning ms-auto"><i class='fadeIn animated bx bx-rotate-right'></i>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="col">
						<div class="card radius-10">
							<div class="card-body">
								<div class="d-flex align-items-center">
									<div>
										<p class="mb-0 text-secondary">OPD Collection</p>
										<h4 class="my-1">48</h4>
								
									</div>
									<div class="widgets-icons bg-light-success text-success ms-auto"><i class="bx bxs-coin"></i>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="col">
						<div class="card radius-10">
							<div class="card-body">
								<div class="d-flex align-items-center">
									<div>
										<p class="mb-0 text-secondary">OT Collection</p>
										<h4 class="my-1">8455</h4>
								
									</div>
									<div class="widgets-icons bg-light-info text-info ms-auto"><i class='bx bx-rupee'></i>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="col">
						<div class="card radius-10">
							<div class="card-body">
								<div class="d-flex align-items-center">
									<div>
										<p class="mb-0 text-secondary">Cash Receipt</p>
										<h4 class="my-1">3456</h4>
									
									</div>
									<div class="widgets-icons bg-light-danger text-danger ms-auto"><i class='bx bx-news'></i>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="col">
						<div class="card radius-10">
							<div class="card-body">
								<div class="d-flex align-items-center">
									<div>
										<p class="mb-0 text-secondary">Estimate Bills</p>
										<h4 class="my-1">45</h4>
									</div>
									<div class="widgets-icons bg-light-warning text-warning ms-auto"><i class='bx bxs-detail'></i>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="col">
						<div class="card radius-10">
							<div class="card-body">
								<div class="d-flex align-items-center">
									<div>
										<p class="mb-0 text-secondary">Credit Amt(Pharma)</p>
										<h4 class="my-1">45</h4>
									</div>
									<div class="widgets-icons bg-light-warning text-warning ms-auto"><i class='fadeIn animated bx bx-credit-card-front'></i>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="col">
						<div class="card radius-10">
							<div class="card-body">
								<div class="d-flex align-items-center">
									<div>
										<p class="mb-0 text-secondary">Credit Amt(Optical)</p>
										<h4 class="my-1">48</h4>
								
									</div>
									<div class="widgets-icons bg-light-success text-success ms-auto"><i class="bx bx-rupee"></i>
									</div>
								</div>
							</div>
						</div>
					</div>
					
					
					
					
					<div class="col">
						<div class="card radius-10">
							<div class="card-body">
								<div class="d-flex align-items-center">
									<div>
										<p class="mb-0 text-secondary">Credit Bills</p>
										<h4 class="my-1">48</h4>
								
									</div>
									<div class="widgets-icons bg-light-success text-success ms-auto"><i class="bx bxs-wallet"></i>
									</div>
								</div>
							</div>
						</div>
					</div>

					
				</div> -->
				<!-- <div class="col-12 col-xl-12 d-flex">
					<div class="card radius-10 w-100">
						<div class="card-body" style="position: relative;">
						
							<div class="row m-0 row-cols-1 row-cols-md-4">
								<div class="col border-end" style="position: relative;">
									<div id="chart16" style="min-height: 174.55px;">
										<div id="apexcharts2qbpuhl5" class="apexcharts-canvas apexcharts2qbpuhl5 apexcharts-theme-light" style="width: 204px; height: 174.55px;">
											<svg id="SvgjsSvg7119" width="204" height="174.55" xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.com/svgjs" class="apexcharts-svg" xmlns:data="ApexChartsNS" transform="translate(0, 0)" style="background: transparent;"><g id="SvgjsG7121" class="apexcharts-inner apexcharts-graphical" transform="translate(25, 0)"><defs id="SvgjsDefs7120"><clipPath id="gridRectMask2qbpuhl5"><rect id="SvgjsRect7123" width="1565004" height="1785" x="-4.5" y="-2.5" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fff"></rect></clipPath><clipPath id="gridRectMarkerMask2qbpuhl5"><rect id="SvgjsRect7124" width="160" height="182" x="-2" y="-2" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fff"></rect></clipPath><linearGradient id="SvgjsLinearGradient7130" x1="0" y1="1" x2="1" y2="1"><stop id="SvgjsStop7131" stop-opacity="1" stop-color="rgba(242,242,242,1)" offset="0"></stop><stop id="SvgjsStop7132" stop-opacity="1" stop-color="rgba(23,160,14,1)" offset="1"></stop><stop id="SvgjsStop7133" stop-opacity="1" stop-color="rgba(23,160,14,1)" offset="1"></stop></linearGradient><linearGradient id="SvgjsLinearGradient7141" x1="0" y1="1" x2="1" y2="1"><stop id="SvgjsStop7142" stop-opacity="1" stop-color="rgba(23,160,14,1)" offset="0"></stop><stop id="SvgjsStop7143" stop-opacity="1" stop-color="rgba(23,160,14,1)" offset="1"></stop><stop id="SvgjsStop7144" stop-opacity="1" stop-color="rgba(23,160,14,1)" offset="1"></stop></linearGradient></defs><g id="SvgjsG7126" class="apexcharts-radialbar"><g id="SvgjsG7127"><g id="SvgjsG7128" class="apexcharts-tracks"><g id="SvgjsG7129" class="apexcharts-radialbar-track apexcharts-track" rel="1"><path id="apexcharts-radialbarTrack-0" d="M 78 24.012560975609745 A 64.98743902439026 64.98743902439026 0 1 1 77.98865755222343 24.012561965425036" fill="none" fill-opacity="1" stroke="rgba(242,242,242,0.85)" stroke-opacity="1" stroke-linecap="round" stroke-width="8.30438292682927" stroke-dasharray="0" class="apexcharts-radialbar-area" data:pathOrig="M 78 24.012560975609745 A 64.98743902439026 64.98743902439026 0 1 1 77.98865755222343 24.012561965425036"></path></g></g><g id="SvgjsG7135"><g id="SvgjsG7140" class="apexcharts-series apexcharts-radial-series" seriesName="NIH" rel="1" data:realIndex="0"><path id="SvgjsPath7145" d="M 78 24.012560975609745 A 64.98743902439026 64.98743902439026 0 1 1 19.10137795262564 116.46487851546752" fill="none" fill-opacity="0.85" stroke="url(#SvgjsLinearGradient7141)" stroke-opacity="1" stroke-linecap="round" stroke-width="8.561219512195123" stroke-dasharray="0" class="apexcharts-radialbar-area apexcharts-radialbar-slice-0" data:angle="245" data:value="68" index="0" j="0" data:pathOrig="M 78 24.012560975609745 A 64.98743902439026 64.98743902439026 0 1 1 19.10137795262564 116.46487851546752"></path></g><circle id="SvgjsCircle7136" r="60.83524756097562" cx="78" cy="89" class="apexcharts-radialbar-hollow" fill="#ceffca"></circle><g id="SvgjsG7137" class="apexcharts-datalabels-group" transform="translate(0, 0) scale(1)" style="opacity: 1;"><text id="SvgjsText7138" font-family="Helvetica, Arial, sans-serif" x="78" y="81" text-anchor="middle" dominant-baseline="auto" font-size="13px" font-weight="400" fill="#6c757d" class="apexcharts-text apexcharts-datalabel-label" style="font-family: Helvetica, Arial, sans-serif;"></text><text id="SvgjsText7139" font-family="Helvetica, Arial, sans-serif" x="78" y="115" text-anchor="middle" dominant-baseline="auto" font-size="25px" font-weight="400" fill="#000000" class="apexcharts-text apexcharts-datalabel-value" style="font-family: Helvetica, Arial, sans-serif;">68%</text></g></g></g></g><line id="SvgjsLine7146" x1="0" y1="0" x2="156" y2="0" stroke="#b6b6b6" stroke-dasharray="0" stroke-width="1" class="apexcharts-ycrosshairs"></line><line id="SvgjsLine7147" x1="0" y1="0" x2="156" y2="0" stroke-dasharray="0" stroke-width="0" class="apexcharts-ycrosshairs-hidden"></line></g><g id="SvgjsG7122" class="apexcharts-annotations"></g></svg><div class="apexcharts-legend"></div></div></div>
								<div class="resize-triggers"><div class="expand-trigger"><div style="width: 229px; height: 182px;"></div></div><div class="contract-trigger"></div></div></div>
								<div class="col border-end" style="position: relative;">
									<div id="chart17" style="min-height: 180.7px;"><div id="apexcharts52t932ob" class="apexcharts-canvas apexcharts52t932ob apexcharts-theme-light" style="width: 204px; height: 180.7px;"><svg id="SvgjsSvg7148" width="204" height="180.70000000000002" xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.com/svgjs" class="apexcharts-svg" xmlns:data="ApexChartsNS" transform="translate(0, 0)" style="background: transparent;"><g id="SvgjsG7150" class="apexcharts-inner apexcharts-graphical" transform="translate(25, 0)"><defs id="SvgjsDefs7149"><clipPath id="gridRectMask52t932ob"><rect id="SvgjsRect7152" width="162" height="180" x="-3" y="-1" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fff"></rect></clipPath><clipPath id="gridRectMarkerMask52t932ob"><rect id="SvgjsRect7153" width="160" height="182" x="-2" y="-2" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fff"></rect></clipPath><linearGradient id="SvgjsLinearGradient7159" x1="0" y1="1" x2="1" y2="1"><stop id="SvgjsStop7160" stop-opacity="1" stop-color="rgba(242,242,242,1)" offset="0"></stop><stop id="SvgjsStop7161" stop-opacity="1" stop-color="rgba(244,17,39,1)" offset="1"></stop><stop id="SvgjsStop7162" stop-opacity="1" stop-color="rgba(244,17,39,1)" offset="1"></stop></linearGradient><linearGradient id="SvgjsLinearGradient7170" x1="0" y1="1" x2="1" y2="1"><stop id="SvgjsStop7171" stop-opacity="1" stop-color="rgba(244,17,39,1)" offset="0"></stop><stop id="SvgjsStop7172" stop-opacity="1" stop-color="rgba(244,17,39,1)" offset="1"></stop><stop id="SvgjsStop7173" stop-opacity="1" stop-color="rgba(244,17,39,1)" offset="1"></stop></linearGradient></defs><g id="SvgjsG7155" class="apexcharts-radialbar"><g id="SvgjsG7156"><g id="SvgjsG7157" class="apexcharts-tracks"><g id="SvgjsG7158" class="apexcharts-radialbar-track apexcharts-track" rel="1"><path id="apexcharts-radialbarTrack-0" d="M 78 21.50756097560975 A 67.49243902439025 67.49243902439025 0 1 1 77.98822034724802 21.50756200357837" fill="none" fill-opacity="1" stroke="rgba(242,242,242,0.85)" stroke-opacity="1" stroke-linecap="round" stroke-width="8.62448292682927" stroke-dasharray="0" class="apexcharts-radialbar-area" data:pathOrig="M 78 21.50756097560975 A 67.49243902439025 67.49243902439025 0 1 1 77.98822034724802 21.50756200357837"></path></g></g><g id="SvgjsG7164"><g id="SvgjsG7169" class="apexcharts-series apexcharts-radial-series" seriesName="% Repeat Patient" rel="1" data:realIndex="0"><path id="SvgjsPath7174" d="M 78 21.50756097560975 A 67.49243902439025 67.49243902439025 0 1 1 38.32893970021443 143.6025301625466" fill="none" fill-opacity="0.85" stroke="url(#SvgjsLinearGradient7170)" stroke-opacity="1" stroke-linecap="round" stroke-width="8.891219512195123" stroke-dasharray="0" class="apexcharts-radialbar-area apexcharts-radialbar-slice-0" data:angle="216" data:value="60" index="0" j="0" data:pathOrig="M 78 21.50756097560975 A 67.49243902439025 67.49243902439025 0 1 1 38.32893970021443 143.6025301625466"></path></g><circle id="SvgjsCircle7165" r="63.180197560975614" cx="78" cy="89" class="apexcharts-radialbar-hollow" fill="#ffd6da"></circle><g id="SvgjsG7166" class="apexcharts-datalabels-group" transform="translate(0, 0) scale(1)" style="opacity: 1;"><text id="SvgjsText7167" font-family="Helvetica, Arial, sans-serif" x="78" y="81" text-anchor="middle" dominant-baseline="auto" font-size="13px" font-weight="400" fill="#6c757d" class="apexcharts-text apexcharts-datalabel-label" style="font-family: Helvetica, Arial, sans-serif;"></text><text id="SvgjsText7168" font-family="Helvetica, Arial, sans-serif" x="78" y="115" text-anchor="middle" dominant-baseline="auto" font-size="25px" font-weight="400" fill="#000000" class="apexcharts-text apexcharts-datalabel-value" style="font-family: Helvetica, Arial, sans-serif;">60%</text></g></g></g></g><line id="SvgjsLine7175" x1="0" y1="0" x2="156" y2="0" stroke="#b6b6b6" stroke-dasharray="0" stroke-width="1" class="apexcharts-ycrosshairs"></line><line id="SvgjsLine7176" x1="0" y1="0" x2="156" y2="0" stroke-dasharray="0" stroke-width="0" class="apexcharts-ycrosshairs-hidden"></line></g><g id="SvgjsG7151" class="apexcharts-annotations"></g></svg><div class="apexcharts-legend"></div></div></div>
								<div class="resize-triggers"><div class="expand-trigger"><div style="width: 229px; height: 182px;"></div></div><div class="contract-trigger"></div></div></div>
								<div class="col col border-end" style="position: relative;">
									<div id="chart18" style="min-height: 180.7px;"><div id="apexcharts6tdpi29g" class="apexcharts-canvas apexcharts6tdpi29g apexcharts-theme-light" style="width: 205px; height: 180.7px;"><svg id="SvgjsSvg7177" width="205" height="180.70000000000002" xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.com/svgjs" class="apexcharts-svg" xmlns:data="ApexChartsNS" transform="translate(0, 0)" style="background: transparent;"><g id="SvgjsG7179" class="apexcharts-inner apexcharts-graphical" transform="translate(25.5, 0)"><defs id="SvgjsDefs7178"><clipPath id="gridRectMask6tdpi29g"><rect id="SvgjsRect7181" width="162" height="180" x="-3" y="-1" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fff"></rect></clipPath><clipPath id="gridRectMarkerMask6tdpi29g"><rect id="SvgjsRect7182" width="160" height="182" x="-2" y="-2" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fff"></rect></clipPath><linearGradient id="SvgjsLinearGradient7188" x1="0" y1="1" x2="1" y2="1"><stop id="SvgjsStop7189" stop-opacity="1" stop-color="rgba(242,242,242,1)" offset="0"></stop><stop id="SvgjsStop7190" stop-opacity="1" stop-color="rgba(255,193,7,1)" offset="1"></stop><stop id="SvgjsStop7191" stop-opacity="1" stop-color="rgba(255,193,7,1)" offset="1"></stop></linearGradient><linearGradient id="SvgjsLinearGradient7199" x1="0" y1="1" x2="1" y2="1"><stop id="SvgjsStop7200" stop-opacity="1" stop-color="rgba(255,193,7,1)" offset="0"></stop><stop id="SvgjsStop7201" stop-opacity="1" stop-color="rgba(255,193,7,1)" offset="1"></stop><stop id="SvgjsStop7202" stop-opacity="1" stop-color="rgba(255,193,7,1)" offset="1"></stop></linearGradient></defs><g id="SvgjsG7184" class="apexcharts-radialbar"><g id="SvgjsG7185"><g id="SvgjsG7186" class="apexcharts-tracks"><g id="SvgjsG7187" class="apexcharts-radialbar-track apexcharts-track" rel="1"><path id="apexcharts-radialbarTrack-0" d="M 78 21.50756097560975 A 67.49243902439025 67.49243902439025 0 1 1 77.98822034724802 21.50756200357837" fill="none" fill-opacity="1" stroke="rgba(242,242,242,0.85)" stroke-opacity="1" stroke-linecap="round" stroke-width="8.62448292682927" stroke-dasharray="0" class="apexcharts-radialbar-area" data:pathOrig="M 78 21.50756097560975 A 67.49243902439025 67.49243902439025 0 1 1 77.98822034724802 21.50756200357837"></path></g></g><g id="SvgjsG7193"><g id="SvgjsG7198" class="apexcharts-series apexcharts-radial-series" seriesName="InxProgress" rel="1" data:realIndex="0"><path id="SvgjsPath7203" d="M 78 21.50756097560975 A 67.49243902439025 67.49243902439025 0 0 1 98.85631065035149 153.18912393479968" fill="none" fill-opacity="0.85" stroke="url(#SvgjsLinearGradient7199)" stroke-opacity="1" stroke-linecap="round" stroke-width="8.891219512195123" stroke-dasharray="0" class="apexcharts-radialbar-area apexcharts-radialbar-slice-0" data:angle="162" data:value="45" index="0" j="0" data:pathOrig="M 78 21.50756097560975 A 67.49243902439025 67.49243902439025 0 0 1 98.85631065035149 153.18912393479968"></path></g><circle id="SvgjsCircle7194" r="63.180197560975614" cx="78" cy="89" class="apexcharts-radialbar-hollow" fill="#ffedb9"></circle><g id="SvgjsG7195" class="apexcharts-datalabels-group" transform="translate(0, 0) scale(1)" style="opacity: 1;"><text id="SvgjsText7196" font-family="Helvetica, Arial, sans-serif" x="78" y="81" text-anchor="middle" dominant-baseline="auto" font-size="13px" font-weight="400" fill="#6c757d" class="apexcharts-text apexcharts-datalabel-label" style="font-family: Helvetica, Arial, sans-serif;"></text><text id="SvgjsText7197" font-family="Helvetica, Arial, sans-serif" x="78" y="115" text-anchor="middle" dominant-baseline="auto" font-size="25px" font-weight="400" fill="#000000" class="apexcharts-text apexcharts-datalabel-value" style="font-family: Helvetica, Arial, sans-serif;">45%</text></g></g></g></g><line id="SvgjsLine7204" x1="0" y1="0" x2="156" y2="0" stroke="#b6b6b6" stroke-dasharray="0" stroke-width="1" class="apexcharts-ycrosshairs"></line><line id="SvgjsLine7205" x1="0" y1="0" x2="156" y2="0" stroke-dasharray="0" stroke-width="0" class="apexcharts-ycrosshairs-hidden"></line></g><g id="SvgjsG7180" class="apexcharts-annotations"></g></svg><div class="apexcharts-legend"></div></div></div>
								<div class="resize-triggers"><div class="expand-trigger"><div style="width: 230px; height: 182px;"></div></div><div class="contract-trigger"></div></div></div>
							
								<div class="col" style="position: relative;">
									<div id="chart19" style="min-height: 174.55px;"><div id="apexcharts2qbpuhl5" class="apexcharts-canvas apexcharts2qbpuhl5 apexcharts-theme-light" style="width: 204px; height: 174.55px;"><svg id="SvgjsSvg7119" width="204" height="174.55" xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.com/svgjs" class="apexcharts-svg" xmlns:data="ApexChartsNS" transform="translate(0, 0)" style="background: transparent;"><g id="SvgjsG7121" class="apexcharts-inner apexcharts-graphical" transform="translate(28, 0)"><defs id="SvgjsDefs7120"><clipPath id="gridRectMask2qbpuhl5"><rect id="SvgjsRect7123" width="1565004" height="1785" x="-4.5" y="-2.5" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fff"></rect></clipPath><clipPath id="gridRectMarkerMask2qbpuhl5"><rect id="SvgjsRect7124" width="160" height="182" x="-2" y="-2" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fff"></rect></clipPath><linearGradient id="SvgjsLinearGradient7130" x1="0" y1="1" x2="1" y2="1"><stop id="SvgjsStop7131" stop-opacity="1" stop-color="rgba(242,242,242,1)" offset="0"></stop><stop id="SvgjsStop7132" stop-opacity="1" stop-color="rgba(23,160,14,1)" offset="1"></stop><stop id="SvgjsStop7133" stop-opacity="1" stop-color="rgba(23,160,14,1)" offset="1"></stop></linearGradient><linearGradient id="SvgjsLinearGradient7141" x1="0" y1="1" x2="1" y2="1"><stop id="SvgjsStop7142" stop-opacity="1" stop-color="rgba(25,180,14,1)" offset="0"></stop><stop id="SvgjsStop7143" stop-opacity="1" stop-color="rgba(23,160,14,1)" offset="1"></stop><stop id="SvgjsStop7144" stop-opacity="1" stop-color="rgba(23,160,14,1)" offset="1"></stop></linearGradient></defs><g id="SvgjsG7126" class="apexcharts-radialbar"><g id="SvgjsG7127"><g id="SvgjsG7128" class="apexcharts-tracks"><g id="SvgjsG7129" class="apexcharts-radialbar-track apexcharts-track" rel="1"><path id="apexcharts-radialbarTrack-0" d="M 78 24.012560975609745 A 64.98743902439026 64.98743902439026 0 1 1 77.98865755222343 24.012561965425036" fill="none" fill-opacity="1" stroke="rgba(242,242,242,0.85)" stroke-opacity="1" stroke-linecap="round" stroke-width="8.30438292682927" stroke-dasharray="0" class="apexcharts-radialbar-area" data:pathOrig="M 78 24.012560975609745 A 64.98743902439026 64.98743902439026 0 1 1 77.98865755222343 24.012561965425036"></path></g></g><g id="SvgjsG7135"><g id="SvgjsG7140" class="apexcharts-series apexcharts-radial-series" seriesName="Completed" rel="1" data:realIndex="0"><path id="SvgjsPath7145" d="M 78 24.012560975609745 A 64.98743902439026 64.98743902439026 0 1 1 19.10137795262564 116.46487851546752" fill="none" fill-opacity="0.85" stroke="url(#SvgjsLinearGradient7141)" stroke-opacity="1" stroke-linecap="round" stroke-width="8.561219512195123" stroke-dasharray="0" class="apexcharts-radialbar-area apexcharts-radialbar-slice-0" data:angle="245" data:value="68" index="0" j="0" data:pathOrig="M 78 24.012560975609745 A 64.98743902439026 64.98743902439026 0 1 1 19.10137795262564 116.46487851546752"></path></g><circle id="SvgjsCircle7136" r="60.83524756097562" cx="78" cy="89" class="apexcharts-radialbar-hollow" fill=" #99e6ff"></circle><g id="SvgjsG7137" class="apexcharts-datalabels-group" transform="translate(0, 0) scale(1)" style="opacity: 1;"><text id="SvgjsText7138" font-family="Helvetica, Arial, sans-serif" x="78" y="81" text-anchor="middle" dominant-baseline="auto" font-size="13px" font-weight="400" fill="#6c757d" class="apexcharts-text apexcharts-datalabel-label" style="font-family: Helvetica, Arial, sans-serif;"></text><text id="SvgjsText7139" font-family="Helvetica, Arial, sans-serif" x="78" y="115" text-anchor="middle" dominant-baseline="auto" font-size="25px" font-weight="400" fill="#000000" class="apexcharts-text apexcharts-datalabel-value" style="font-family: Helvetica, Arial, sans-serif;">58%</text></g></g></g></g><line id="SvgjsLine7146" x1="0" y1="0" x2="156" y2="0" stroke="#b6b6b6" stroke-dasharray="0" stroke-width="1" class="apexcharts-ycrosshairs"></line><line id="SvgjsLine7147" x1="0" y1="0" x2="156" y2="0" stroke-dasharray="0" stroke-width="0" class="apexcharts-ycrosshairs-hidden"></line></g><g id="SvgjsG7122" class="apexcharts-annotations"></g></svg><div class="apexcharts-legend"></div></div></div>
								<div class="resize-triggers"><div class="expand-trigger"><div style="width: 229px; height: 182px;"></div></div><div class="contract-trigger"></div></div></div>
							
							</div>
							
						<div class="resize-triggers"><div class="expand-trigger"><div style="width: 720px; height: 567px;"></div></div><div class="contract-trigger"></div></div></div>
					</div>
				</div> -->
				
			
			<!-- <div class="card">
				<div class="card-body">
					<div id="chart5"></div>
				</div>
			</div> -->
			
			<!-- <div class="col-12 col-xl-12 d-flex" > -->
				<!-- <div class="col d-flex col-md-6">
					<div class="card radius-10 w-100">
						<div class="card-body">
							<div class="d-flex align-items-center">
								
								<div class="font-22 ms-auto"><i class="bx bx-dots-horizontal-rounded"></i>
								</div>
							</div>
							<div class="mt-1" id="chart13"></div>
						</div>
					</div>
					
				</div> -->
				<!-- <div class="card ">
					<div class="card-body">
						<div id="chart8"></div>
					</div>
				</div> -->
				<!-- <div class="col d-flex col-md-6" style="padding: 3PX;">
					<div class="card radius-10 w-100">
						<div class="card-body">
							<div class="d-flex align-items-center">
								
								<div class="font-22 ms-auto"><i class="bx bx-dots-horizontal-rounded"></i>
								</div>
							</div>
							<div class="mt-1" id="chart8"></div>
						</div>
					</div>
					
				</div> -->

				<div class="col">
					<!-- <h6 class="mb-0 text-uppercase">Primary Nav Tabs</h6> -->
					<hr/>
					<div class="card">
						<div class="card-body">
							<ul class="nav nav-tabs nav-primary" role="tablist">
								<li class="nav-item" role="presentation">
									<a class="nav-link active" data-bs-toggle="tab" href="#primaryhome" role="tab" aria-selected="true">
										<div class="d-flex align-items-center">
											<div class="tab-icon">
											</div>
											<div class="tab-title">Today's EMI</div>
										</div>
									</a>
								</li>
								<li class="nav-item" role="presentation">
									<a class="nav-link" data-bs-toggle="tab" href="#primarypro" role="tab" aria-selected="false">
										<div class="d-flex align-items-center">
											<div class="tab-icon">
											</div>
											<div class="tab-title">Customer Payments</div>
										</div>
									</a>
								</li>
								<li class="nav-item" role="presentation">
									<a class="nav-link" data-bs-toggle="tab" href="#primaryprofile" role="tab" aria-selected="false">
										<div class="d-flex align-items-center">
											<div class="tab-icon">
											</div>
											<div class="tab-title">Failed EMI</div>
										</div>
									</a>
								</li>
								<li class="nav-item" role="presentation">
									<a class="nav-link" data-bs-toggle="tab" href="#primarypros" role="tab" aria-selected="false">
										<div class="d-flex align-items-center">
											<div class="tab-icon">
											</div>
											<div class="tab-title">EMI Collection</div>
										</div>
									</a>
								</li>
							
							</ul>
							<div class="tab-content py-3">
								<div class="tab-pane fade show active" id="primaryhome" role="tabpanel">

																
													<h5 class="mb-0 text-primary">Today's EMI</h5>
												<hr>
												<form class="row g-2">
													@csrf
													<input type="hidden" id="loan_id2" name="loan_ids">

												<div class="table-responsive">
													<table id="example" class="table table-striped table-bordered">
														<thead>
														
															<tr>
																<th>Sr. No.</th>
																<th>Loan Account No</th>  
																<th>Customer Name</th> 
																<th>Mobile Number</th>
																<th>Amount</th>
																{{-- <th>Loan Acount No</th> --}}
																<th>Customer Email</th>
																<th>Success Installment</th>
																<th>Failed Installment</th>
																{{-- <th>Action</th> --}}
															</tr>
														</thead>
														<tbody>
															@foreach ($dashboard as $dash)
																
															
															<tr>
																<td>{{$loop->index+1}}</td>
																{{-- <td></td> --}}
																<td>{{$dash->loan_account_no}}</td>
																<td>{{$dash->customer_name}}</td>
																<td>{{$dash->whatsapp_number}}</td>
																<td>{{$dash->disburse_amount}}</td>
																<td>{{$dash->email}}</td>
																<td>
																<?php
																	$count = DB::table('schedules')
																	->where('status', '1')
																	// ->where('status', '1')
																	->where('loan_id',$dash->loan_id)
																	->count();
								
																	echo  $count;
																	?></td>
																<td>
																<?php
																	$count = DB::table('schedules')
																	->where('status', '2')
																	->where('loan_id',$dash->loan_id)
																	->count();
								
																	echo  $count  ;
																	?>
																</td>
																{{-- <td> --}}
																	{{-- <button type="button" class="btn1 btn-outline-success"><i class='bx bx-edit-alt me-0'></i></button>  --}}
																	{{-- <a href="{{route('destroydashboardroute',$dash->loan_id)}}">
																	<button type="button" class="btn1 btn-outline-danger"><i class='bx bx-trash me-0'></i></button></a> --}}
																	{{-- <a href="{{route('update_emi',$dash->loan_id)}}"><button type="button" class="btn1 btn-outline-primary paid_btn" >Paid</button> --}}
																		{{-- <a href="{{route('unpaidemis',$dash->loan_id)}}"><button type="button" class="btn1 btn-outline-primary" >Unpaid</button></a> --}}
																{{-- </td> --}}
													
															</tr>
															
															@endforeach
															
														</tbody>
													</table>
												</div>
												</form>
											</div>
											
								<div class="tab-pane fade" id="primarypro" role="tabpanel">
									<div class="col-md-12 mx-auto" >
										<div class="card">
											<div class="card-body">
												<div class="card-title d-flex align-items-center">
												
													<h5 class="mb-0 text-primary"> Customer Payments</h5>
												</div>
												<hr>
												<form class="row g-2">
												{{-- <div class="col-md-3">
														<label>Select Customer*</label>
														<select class="form-select "
															aria-label="Default select example" id="customer" name="customer">
															<option selected>Select Customer</option>
															@foreach ($cust as $customer)
															<option value="{{$customer->id }}">{{ $customer->customer_name }}</option>
														@endforeach									</select>
				
														
				
													</div> --}}

													{{-- <div class="col-md-3" style="padding:8px; margin-top:1.8%;" >
														<button type="submit" class="btn btn-primary px-3"><i class="lni lni-eye"></i>Show</button>
													</div> --}}
												</form>
						
											</div>
						
										</div>
									</div>
									

									<div class="table-responsive">
										<table id="example4" class="table table-striped table-bordered">
											<thead>
											
												<tr>
													<th>Sr. No.</th>
													<th>Loan Account No</th>  
													<th>Customer Name</th> 
													{{-- <th>Mobile Number</th>
													<th>Amount</th> --}}
													{{-- <th>Loan Acount No</th> --}}
													{{-- <th>Customer Email</th> --}}
													<th>Success Installment</th>
													<th>Failed Installment</th>
													<th>Action</th>
												</tr>
											</thead>
											<tbody>
												@foreach ($dashboard as $dash)
													
												
												<tr>
													<td>{{$loop->index+1}}</td>
													{{-- <td></td> --}}
													<td data-bs-toggle="tooltip" data-bs-placement="top" title="Loan Amount :- {{$dash->amount}} 
Disburse Amount :- {{$dash->disburse_amount}}
Date of Disbursement :- {{$dash->expected_date_of_disbursment}}">{{$dash->loan_account_no}}</td>
													<td data-bs-toggle="tooltip" data-bs-placement="top" title="Mobile Number :- {{$dash->whatsapp_number}} 
Email :- {{$dash->email}}">{{$dash->customer_name}}</td>
													{{-- <td>{{$dash->whatsapp_number}}</td> --}}
													{{-- <td>{{$dash->disburse_amount}}</td>
													<td>{{$dash->email}}</td> --}}
													<td>
													<?php
															$count = DB::table('schedules')
																	->where('status', '1')
																	// ->where('status', '1')
																	->where('loan_id',$dash->loan_id)
																	->count();
								
																	echo  $count;
																	?></td>
																<td>
																<?php
																	$count = DB::table('schedules')
																	->where('status', '2')
																	->where('loan_id',$dash->loan_id)
																	->count();
								
																	echo  $count  ;
																						?>
													</td>
													<td>
														{{-- <button type="button" class="btn1 btn-outline-success"><i class='bx bx-edit-alt me-0'></i></button>  --}}
														<button type="button" class="btn1 btn-outline-dark schedule" >
															Payments Details</button>
														{{-- <a href="{{route('destroydashboardroute',$dash->loan_id)}}">
														<button type="button" class="btn1 btn-outline-danger"><i class='bx bx-trash me-0'></i></button></a> --}}
														{{-- <button type="button" class="btn1 btn-outline-primary paid_btn" id="{{$dash->id}}" >Paid</button>
														<button type="button" class="btn1 btn-outline-primary">Unpaid</button> --}}
													</td>
										
												</tr>
												
												@endforeach
												
											</tbody>
										</table>
									</div>

								</div>


								<div class="tab-pane fade" id="primarypros" role="tabpanel">
									<div class="col-md-12 mx-auto" >
										<div class="card">
											<div class="card-body">
												<div class="card-title d-flex align-items-center">
												
													<h5 class="mb-0 text-primary">EMI Collection</h5>
												</div>
												<hr>
												<form class="row g-2">
													{{-- <div class="col-md-3">
														<label>Due Date</label>
														<input type="date" class="form-control">
													</div> --}}

													
													{{-- <div class="col-md-3">
														<label>Date</label>
														<input type="date" class="form-control">
													</div> --}}

												
													<div class="col-md-3">
														<label>Select Customer*</label>
														<select class="form-select "
															aria-label="Default select example" id="customer" name="customer">
															<option selected>Select Customer</option>
															@foreach ($cust as $customer)
															<option value="{{$customer->id }}">{{ $customer->customer_name }}</option>
														@endforeach									</select>
				
														
				
													</div>

													<div class="col-md-3" style="padding:8px; margin-top:1.8%;" >
														<button type="submit" class="btn btn-primary px-3"><i class="lni lni-eye"></i>Show</button>
													</div>
												</form>
						
											</div>
						
										</div>
									</div>
									{{-- <div class="col-md-12" >
										<div class="card">
											<div class="card-body">
												<div class="table-responsive">
													<table id="example4" class="table table-striped table-bordered">
														<thead>
															<tr>
																<th>Sr. No.</th>
																<th>Name</th>  
																<th>EMI Number</th> 
																<th>Pendings EMI</th>
															
																<th>Action</th>
															</tr>
														</thead>
														<tbody>
															@foreach ($shedu as $shedule)
																
															
															<tr>
																<td>{{$loop->index+1}}</td>
																<td>{{$shedule->customer_name}}</td>
																<td>{{$shedule->installment_number}}</td>
																<td>{{$shedule->status}}</td>
																
																<td><button type="button" class="btn1 btn-outline-success"><i class='bx bx-edit-alt me-0'></i></button> <button type="button" class="btn1 btn-outline-danger"><i class='bx bx-trash me-0'></i></button> 
																</td>
													
															</tr>
															@endforeach
														
															
														</tbody>
													</table>
												</div>
											</div>
										</div>
									
									</div>							 --}}
								

									<div class="table-responsive">
										<table id="example4" class="table table-striped table-bordered">
											<thead>
											
												<tr>
													<th>Sr. No.</th>
													<th>Loan Account No</th>  
													<th>Customer Name</th> 
													<th>Mobile Number</th>
													<th>Amount</th>
													{{-- <th>Loan Acount No</th> --}}
													<th>Customer Email</th>
													<th>No. Success Installment</th>
													<th>Bounce Installment</th>
													<th>Action</th>
												</tr>
											</thead>
											<tbody>
												@foreach ($dashboard as $dash)
													
												
												<tr>
													<td>{{$loop->index+1}}</td>
													{{-- <td></td> --}}
													<td>{{$dash->loan_account_no}}</td>
													<td>{{$dash->customer_name}}</td>
													<td>{{$dash->whatsapp_number}}</td>
													<td>{{$dash->disburse_amount}}</td>
													<td>{{$dash->email}}</td>
													<td>
													<?php
															$count = DB::table('schedules')
																	->where('status', '1')
																	// ->where('status', '1')
																	->where('loan_id',$dash->loan_id)
																	->count();
								
																	echo  $count;
																	?></td>
																<td>
																<?php
																	$count = DB::table('schedules')
																	->where('status', '2')
																	->where('loan_id',$dash->loan_id)
																	->count();
								
																	echo  $count  ;
																						?>
													</td>
													<td>
														{{-- <button type="button" class="btn1 btn-outline-success"><i class='bx bx-edit-alt me-0'></i></button>  --}}
														<button type="button" class="btn1 btn-outline-dark schedule" >
															View</button>
														<a href="{{route('destroydashboardroute',$dash->loan_id)}}">
														<button type="button" class="btn1 btn-outline-danger"><i class='bx bx-trash me-0'></i></button></a>
														{{-- <button type="button" class="btn1 btn-outline-primary paid_btn" id="{{$dash->id}}" >Paid</button>
														<button type="button" class="btn1 btn-outline-primary">Unpaid</button> --}}
													</td>
										
												</tr>
												
												@endforeach
												
											</tbody>
										</table>
									</div>

								</div>
								<div class="tab-pane fade" id="primaryprofile" role="tabpanel">
									<div class="col-md-12 mx-auto" >
										<div class="card">
											<div class="card-body">
												<div class="card-title d-flex align-items-center">
												
													<h5 class="mb-0 text-primary">Failed EMI</h5>
												</div>
												<hr>
												<form class="row g-2">
												
													{{-- <div class="col-md-3">
														<label>Due Date</label>
														<input type="date" class="form-control">
													</div> --}}

{{-- 													
													<div class="col-md-3">
														<label>Due Date</label>
														<input type="date" class="form-control">
													</div> --}}

													<div class="col-md-3">
														<label>Select Customer*</label>
														<select class="form-select "
															aria-label="Default select example" id="customer" name="customer">
															<option selected>Select Customer</option>
															@foreach ($cust as $customer)
															<option value="{{$customer->id }}">{{ $customer->customer_name }}</option>
														@endforeach									</select>
				
														</select>
				
													</div>
													<div class="col-md-3" style="padding:8px; margin-top:1.8%;" >
														<button type="submit" class="btn btn-primary px-3"><i class="lni lni-eye"></i>Show</button>
													</div>
												</form>
						
											</div>
						
										</div>
									</div>

									{{-- <div class="col-md-12" >
										<div class="card">
											<div class="card-body">
												<div class="table-responsive">
													<table id="example5" class="table table-striped table-bordered">
														<thead>
															<tr>
																<th>Sr. No.</th>
																<th>Name</th>  
																<th>EMI Number</th> 
																<th>Pendings EMI</th>
															
																<th>Action</th>
															</tr>
														</thead>
														<tbody>
															@foreach ($shedu as $shedule)
																
															
															<tr>
																<td>{{$loop->index+1}}</td>
																<td>{{$shedule->customer_name}}</td>
																<td>{{$shedule->installment_number}}</td>
																<td>{{$shedule->status}}</td>
																
																<td><button type="button" class="btn1 btn-outline-success"><i class='bx bx-edit-alt me-0'></i></button> <button type="button" class="btn1 btn-outline-danger"><i class='bx bx-trash me-0'></i></button> 
																</td>
													
															</tr>
															@endforeach
														
														
															
														</tbody>
													</table>
												</div>
											</div>
										</div>
									
									</div>							 --}}
								

									<div class="table-responsive">
										<table id="example3" class="table table-striped table-bordered">
											<thead>
											
												<tr>
													<th>Sr. No.</th>
													<th>Loan Account No</th>  
													<th>Customer Name</th> 
													<th>Mobile Number</th>
													<th>Amount</th>
													{{-- <th>Loan Acount No</th> --}}
													<th>Customer Email</th>
													<th>No. Success Installment</th>
													<th>Bounce Installment</th>
													<th>Action</th>
												</tr>
											</thead>
											<tbody>
												@foreach ($dashboard as $dash)
													
												
												<tr>
													<td>{{$loop->index+1}}</td>
													{{-- <td></td> --}}
													<td>{{$dash->loan_account_no}}</td>
													<td>{{$dash->customer_name}}</td>
													<td>{{$dash->whatsapp_number}}</td>
													<td>{{$dash->disburse_amount}}</td>
													<td>{{$dash->email}}</td>
													<td>
													<?php
															$count = DB::table('schedules')
																	->where('status', '1')
																	// ->where('status', '1')
																	->where('loan_id',$dash->loan_id)
																	->count();
								
																	echo  $count;
																	?></td>
																<td>
																<?php
																	$count = DB::table('schedules')
																	->where('status', '2')
																	->where('loan_id',$dash->loan_id)
																	->count();
								
																	echo  $count  ;
								
														?>
													</td>
													<td>
														{{-- <button type="button" class="btn1 btn-outline-success"><i class='bx bx-edit-alt me-0'></i></button>  --}}
														<button type="button" class="btn1 btn-outline-dark schedule" >
															View</button>
														<a href="{{route('destroydashboardroute',$dash->loan_id)}}">
														<button type="button" class="btn1 btn-outline-danger"><i class='bx bx-trash me-0'></i></button></a>
														{{-- <button type="button" class="btn1 btn-outline-primary paid_btn" id="{{$dash->id}}" >Paid</button>
														<button type="button" class="btn1 btn-outline-primary">Unpaid</button> --}}
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
						</div>
				{{-- </div>
			</div>
			</div> --}}
@stop
@section('js')
{{-- <script>

    $(document).ready(function()
    {    
	
$(".paid_btn").on('click',function(){
	$("#loan_id2").val($(this).attr('id'));

})
	})

	</script> --}}
	
@stop