<!doctype html>
<html lang="en">

<head>
	<!-- Required meta tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!--favicon-->
	<!-- <link rel="icon" href="assets/images/favicon-32x32.png" type="image/png" /> -->
	<!--plugins-->
	<link href="{{asset('public/plugins/simplebar/css/simplebar.css')}}" rel="stylesheet" />
	<link href="{{asset('public/plugins/perfect-scrollbar/css/perfect-scrollbar.css')}}" rel="stylesheet" />
	<link href="{{asset('public/plugins/metismenu/css/metisMenu.min.css')}}" rel="stylesheet" />
	<link href="{{asset('public/plugins/datatable/css/dataTables.bootstrap5.min.css')}}" rel="stylesheet" />
	<link href="{{asset('plugins/fullcalendar/css/main.min.css')}}" rel="stylesheet" />
	<!-- loader-->
	<link href="{{asset('public/css/pace.min.css')}}" rel="stylesheet" />
	<script src="{{asset('public/js/pace.min.js')}}"></script>
	<!-- Bootstrap CSS -->
	<link href="{{asset('public/css/bootstrap.min.css')}}" rel="stylesheet">
	<link href="{{asset('public/css/bootstrap-extended.css')}}" rel="stylesheet">
	<link href="{{asset('public/css/app.css')}}" rel="stylesheet">
	<link href="{{asset('public/css/icons.css')}}" rel="stylesheet">
	<!-- Theme Style CSS -->
	<link rel="stylesheet" href="{{asset('public/css/dark-theme.css')}}" />
	<link rel="stylesheet" href="{{asset('public/css/semi-dark.css')}}" />
	<link rel="stylesheet" href="{{asset('public/css/header-colors.css')}}" />
	<title>Shrisatya</title>
</head>

<body>
	<!--wrapper-->
	<div class="wrapper">

		<!--sidebar wrapper -->
		<div class="sidebar-wrapper" data-simplebar="true">
			<div class="sidebar-header">
				<div>
					<img src="{{asset('public/images/logo-icon.png')}}" class="logo-icon" alt="logo icon">
				</div>
				<div>
					<h6 class="logo-text">
						Shrisatya Multipurpose Nidhi Limited
					</h6>
				</div>
				<div class="toggle-icon ms-auto">
				</div>
			</div>
			<!--navigation-->
			<ul class="metismenu" id="menu">
				<li>

					<a href="{{route('dashboard')}}">
						<div class="parent-icon"><i class='bx bx-home-circle' style="font-size: 17px;"></i>
						</div>
						<div class="menu-title">Dashboard</div>
					</a>
				</li>

				<li>
					<a href="javascript:;" class="has-arrow">
						<div class="parent-icon"><i class="lni lni-menu" style="font-size: 17px;"></i>
						</div>
						<div class="menu-title">Master</div>
					</a>
					<ul>
						<li> <a href="{{route('city')}}"><i class="bx bx-right-arrow-alt"></i>Add City</a>
						</li>
						<li> <a href="{{route('loan_scheme')}}"><i class="bx bx-right-arrow-alt"></i>Loan Scheme </a>
						</li>
						 <li> <a href="{{route('customer')}}"><i class="bx bx-right-arrow-alt"></i>Customer</a>
						</li>
						
				

					</ul>
				</li>


				<li>
					<a href="{{route('loan_application')}}">
						<div class="parent-icon"><i class="lni lni-remove-file" style="font-size: 17px;"></i>
						</div>
						<div class="menu-title">Loan Application</div>
					</a>
				</li> 

				<li>
					<a href="{{route('disburse')}}">
						<div class="parent-icon"><i class='bx bx-check-square' style="font-size: 17px;"></i>
						</div>
						<div class="menu-title">Disbursement</div>
					</a>
				</li> 

				<li>
					<a href="javascript:;" class="has-arrow">
						<div class="parent-icon"><i class="lni lni-list" style="font-size: 17px;"></i>
						</div>
						<div class="menu-title">Reports</div>
					</a>
					<ul>
						<li> <a href="{{route('track_emi')}}"><i class="bx bx-right-arrow-alt"></i>Track Loan </a>
						</li>
						
						<li> <a href="{{route('customer_with_emi')}}"><i class="bx bx-right-arrow-alt"></i>Customer With EMI </a>
						</li>
						<li> <a href="{{route('total_emi_pending')}}"><i class="bx bx-right-arrow-alt"></i>Total EMI Pendings </a>
						</li>
						
					
					</ul>
				</li>

		

			</ul>
			
		</div>
		<!--end sidebar wrapper -->
		<!--start header -->
		<!--start header -->
		<header>
			<div class="topbar d-flex align-items-center">
				<nav class="navbar navbar-expand">
					<div class="mobile-toggle-menu"><i class='bx bx-menu'></i>
					</div>

					<div class="collapse navbar-collapse" id="navbarSupportedContent2">

					</div>
					<div class="top-menu ms-auto">
						<ul class="navbar-nav align-items-center">

							<li class="nav-item dropdown dropdown-large">

								<div class="dropdown-menu dropdown-menu-end">
									<div class="row row-cols-3 g-3 p-3">
										<div class="col text-center">
											<div class="app-box mx-auto bg-gradient-cosmic text-white"><i
													class='bx bx-group'></i>
											</div>
											<div class="app-title">Teams</div>
										</div>
										<div class="col text-center">
											<div class="app-box mx-auto bg-gradient-burning text-white"><i
													class='bx bx-atom'></i>
											</div>
											<div class="app-title">Projects</div>
										</div>
										<div class="col text-center">
											<div class="app-box mx-auto bg-gradient-lush text-white"><i
													class='bx bx-shield'></i>
											</div>
											<div class="app-title">Tasks</div>
										</div>
										<div class="col text-center">
											<div class="app-box mx-auto bg-gradient-kyoto text-dark"><i
													class='bx bx-notification'></i>
											</div>
											<div class="app-title">Feeds</div>
										</div>
										<div class="col text-center">
											<div class="app-box mx-auto bg-gradient-blues text-dark"><i
													class='bx bx-file'></i>
											</div>
											<div class="app-title">Files</div>
										</div>
										<div class="col text-center">
											<div class="app-box mx-auto bg-gradient-moonlit text-white"><i
													class='bx bx-filter-alt'></i>
											</div>
											<div class="app-title">Alerts</div>
										</div>
									</div>
								</div>
							</li>
							<li class="nav-item dropdown dropdown-large">
							
								<div class="dropdown-menu dropdown-menu-end">
								
									<div class="header-notifications-list">
										<a class="dropdown-item" href="javascript:;">
											<div class="d-flex align-items-center">
												<div class="notify bg-light-primary text-primary"><i
														class="bx bx-group"></i>
												</div>
												<div class="flex-grow-1">
													<h6 class="msg-name">New Customers<span
															class="msg-time float-end">14 Sec
															ago</span></h6>
													<p class="msg-info">5 new user registered</p>
												</div>
											</div>
										</a>
										<a class="dropdown-item" href="javascript:;">
											<div class="d-flex align-items-center">
												<div class="notify bg-light-danger text-danger"><i
														class="bx bx-cart-alt"></i>
												</div>
												<div class="flex-grow-1">
													<h6 class="msg-name">New Orders <span class="msg-time float-end">2
															min
															ago</span></h6>
													<p class="msg-info">You have recived new orders</p>
												</div>
											</div>
										</a>
										<a class="dropdown-item" href="javascript:;">
											<div class="d-flex align-items-center">
												<div class="notify bg-light-success text-success"><i
														class="bx bx-file"></i>
												</div>
												<div class="flex-grow-1">
													<h6 class="msg-name">24 PDF File<span class="msg-time float-end">19
															min
															ago</span></h6>
													<p class="msg-info">The pdf files generated</p>
												</div>
											</div>
										</a>
										<a class="dropdown-item" href="javascript:;">
											<div class="d-flex align-items-center">
												<div class="notify bg-light-warning text-warning"><i
														class="bx bx-send"></i>
												</div>
												<div class="flex-grow-1">
													<h6 class="msg-name">Time Response <span
															class="msg-time float-end">28 min
															ago</span></h6>
													<p class="msg-info">5.1 min avarage time response</p>
												</div>
											</div>
										</a>
										<a class="dropdown-item" href="javascript:;">
											<div class="d-flex align-items-center">
												<div class="notify bg-light-info text-info"><i
														class="bx bx-home-circle"></i>
												</div>
												<div class="flex-grow-1">
													<h6 class="msg-name">New Product Approved <span
															class="msg-time float-end">2 hrs ago</span></h6>
													<p class="msg-info">Your new product has approved</p>
												</div>
											</div>
										</a>
										<a class="dropdown-item" href="javascript:;">
											<div class="d-flex align-items-center">
												<div class="notify bg-light-danger text-danger"><i
														class="bx bx-message-detail"></i>
												</div>
												<div class="flex-grow-1">
													<h6 class="msg-name">New Comments <span class="msg-time float-end">4
															hrs
															ago</span></h6>
													<p class="msg-info">New customer comments recived</p>
												</div>
											</div>
										</a>
										<a class="dropdown-item" href="javascript:;">
											<div class="d-flex align-items-center">
												<div class="notify bg-light-success text-success"><i
														class='bx bx-check-square'></i>
												</div>
												<div class="flex-grow-1">
													<h6 class="msg-name">Your item is shipped <span
															class="msg-time float-end">5 hrs
															ago</span></h6>
													<p class="msg-info">Successfully shipped your item</p>
												</div>
											</div>
										</a>
										<a class="dropdown-item" href="javascript:;">
											<div class="d-flex align-items-center">
												<div class="notify bg-light-primary text-primary"><i
														class='bx bx-user-pin'></i>
												</div>
												<div class="flex-grow-1">
													<h6 class="msg-name">New 24 authors<span
															class="msg-time float-end">1 day
															ago</span></h6>
													<p class="msg-info">24 new authors joined last week</p>
												</div>
											</div>
										</a>
										<a class="dropdown-item" href="javascript:;">
											<div class="d-flex align-items-center">
												<div class="notify bg-light-warning text-warning"><i
														class='bx bx-door-open'></i>
												</div>
												<div class="flex-grow-1">
													<h6 class="msg-name">Defense Alerts <span
															class="msg-time float-end">2 weeks
															ago</span></h6>
													<p class="msg-info">45% less alerts last 4 weeks</p>
												</div>
											</div>
										</a>
									</div>
									<a href="javascript:;">
										<div class="text-center msg-footer">View All Notifications</div>
									</a>
								</div>
							</li>
							<li class="nav-item dropdown dropdown-large">
						
								<div class="dropdown-menu dropdown-menu-end">
									<a href="javascript:;">
										<div class="msg-header">
											<p class="msg-header-title">Messages</p>
											<p class="msg-header-clear ms-auto">Marks all as read</p>
										</div>
									</a>
									<div class="header-message-list">
										<a class="dropdown-item" href="javascript:;">
											<div class="d-flex align-items-center">
												<div class="user-online">
													<img src="{{asset('public/images/avatars/avatar-1.png')}}" class="msg-avatar"
														alt="user avatar">
												</div>
												<div class="flex-grow-1">
													<h6 class="msg-name">Daisy Anderson <span
															class="msg-time float-end">5 sec
															ago</span></h6>
													<p class="msg-info">The standard chunk of lorem</p>
												</div>
											</div>
										</a>
										<a class="dropdown-item" href="javascript:;">
											<div class="d-flex align-items-center">
												<div class="user-online">
													<img src="{{asset('public/images/avatars/avatar-2.png')}}" class="msg-avatar"
														alt="user avatar">
												</div>
												<div class="flex-grow-1">
													<h6 class="msg-name">Althea Cabardo <span
															class="msg-time float-end">14
															sec ago</span></h6>
													<p class="msg-info">Many desktop publishing packages</p>
												</div>
											</div>
										</a>
										<a class="dropdown-item" href="javascript:;">
											<div class="d-flex align-items-center">
												<div class="user-online">
													<img src="{{asset('public/images/avatars/avatar-3.png')}}" class="msg-avatar"
														alt="user avatar">
												</div>
												<div class="flex-grow-1">
													<h6 class="msg-name">Oscar Garner <span class="msg-time float-end">8
															min
															ago</span></h6>
													<p class="msg-info">Various versions have evolved over</p>
												</div>
											</div>
										</a>
										<a class="dropdown-item" href="javascript:;">
											<div class="d-flex align-items-center">
												<div class="user-online">
													<img src="{{asset('public/images/avatars/avatar-4.png')}}" class="msg-avatar"
														alt="user avatar">
												</div>
												<div class="flex-grow-1">
													<h6 class="msg-name">Katherine Pechon <span
															class="msg-time float-end">15
															min ago</span></h6>
													<p class="msg-info">Making this the first true generator</p>
												</div>
											</div>
										</a>
										<a class="dropdown-item" href="javascript:;">
											<div class="d-flex align-items-center">
												<div class="user-online">
													<img src="assets/images/avatars/avatar-5.png" class="msg-avatar"
														alt="user avatar">
												</div>
												<div class="flex-grow-1">
													<h6 class="msg-name">Amelia Doe <span class="msg-time float-end">22
															min
															ago</span></h6>
													<p class="msg-info">Duis aute irure dolor in reprehenderit</p>
												</div>
											</div>
										</a>
										<a class="dropdown-item" href="javascript:;">
											<div class="d-flex align-items-center">
												<div class="user-online">
													<img src="{{asset('public/images/avatars/avatar-5.png')}}" class="msg-avatar"
														alt="user avatar">
												</div>
												<div class="flex-grow-1">
													<h6 class="msg-name">Cristina Jhons <span
															class="msg-time float-end">2 hrs
															ago</span></h6>
													<p class="msg-info">The passage is attributed to an unknown</p>
												</div>
											</div>
										</a>
										<a class="dropdown-item" href="javascript:;">
											<div class="d-flex align-items-center">
												<div class="user-online">
													<img src="{{asset('public/images/avatars/avatar-6.png')}}" class="msg-avatar"
														alt="user avatar">
												</div>
												<div class="flex-grow-1">
													<h6 class="msg-name">James Caviness <span
															class="msg-time float-end">4 hrs
															ago</span></h6>
													<p class="msg-info">The point of using Lorem</p>
												</div>
											</div>
										</a>
										<a class="dropdown-item" href="javascript:;">
											<div class="d-flex align-items-center">
												<div class="user-online">
													<img src="{{asset('public/images/avatars/avatar-8.png')}}" class="msg-avatar"
														alt="user avatar">
												</div>
												<div class="flex-grow-1">
													<h6 class="msg-name">Peter Costanzo <span
															class="msg-time float-end">6 hrs
															ago</span></h6>
													<p class="msg-info">It was popularised in the 1960s</p>
												</div>
											</div>
										</a>
										<a class="dropdown-item" href="javascript:;">
											<div class="d-flex align-items-center">
												<div class="user-online">
													<img src="{{asset('public/images/avatars/avatar-9.png')}}" class="msg-avatar"
														alt="user avatar">
												</div>
												<div class="flex-grow-1">
													<h6 class="msg-name">David Buckley <span
															class="msg-time float-end">2 hrs
															ago</span></h6>
													<p class="msg-info">Various versions have evolved over</p>
												</div>
											</div>
										</a>
										<a class="dropdown-item" href="javascript:;">
											<div class="d-flex align-items-center">
												<div class="user-online">
													<img src="{{asset('public/images/avatars/avatar-10.png')}}" class="msg-avatar"
														alt="user avatar">
												</div>
												<div class="flex-grow-1">
													<h6 class="msg-name">Thomas Wheeler <span
															class="msg-time float-end">2 days
															ago</span></h6>
													<p class="msg-info">If you are going to use a passage</p>
												</div>
											</div>
										</a>
										<a class="dropdown-item" href="javascript:;">
											<div class="d-flex align-items-center">
												<div class="user-online">
													<img src="{{asset('public/images/avatars/avatar-11.png')}}" class="msg-avatar"
														alt="user avatar">
												</div>
												<div class="flex-grow-1">
													<h6 class="msg-name">Johnny Seitz <span class="msg-time float-end">5
															days
															ago</span></h6>
													<p class="msg-info">All the Lorem Ipsum generators</p>
												</div>
											</div>
										</a>
									</div>
									<a href="javascript:;">
										<div class="text-center msg-footer">View All Messages</div>
									</a>
								</div>
							</li>
						</ul>
					</div>
					<div class="user-box dropdown">
						<a class="d-flex align-items-center nav-link dropdown-toggle dropdown-toggle-nocaret" href="#"
							role="button" data-bs-toggle="dropdown" aria-expanded="false">
							<img src="{{asset('public/images/avatars/user.png')}}" class="user-img" alt="user avatar">
							<div class="user-info ps-3">
								<p class="user-name mb-0">Admin</p>
								<p class="designattion mb-0"></p>
							</div>
						</a>
						<ul class="dropdown-menu dropdown-menu-end">
							{{-- <li><a class="dropdown-item" href="javascript:;"><i
										class="bx bx-user"></i><span>Profile</span></a>
							</li>
							<li><a class="dropdown-item" href="javascript:;"><i
										class="bx bx-cog"></i><span>Settings</span></a>
							</li>
							<li><a class="dropdown-item" href="javascript:;"><i
										class='bx bx-home-circle'></i><span>Dashboard</span></a>
							</li>
							<li><a class="dropdown-item" href="javascript:;"><i
										class='bx bx-dollar-circle'></i><span>Earnings</span></a>
							</li>
							<li><a class="dropdown-item" href="javascript:;"><i
										class='bx bx-download'></i><span>Downloads</span></a>
							</li>
							<li>
								<div class="dropdown-divider mb-0"></div>
							</li> --}}
							<li><a class="dropdown-item" href="{{route('logout')}}"><i
										class='bx bx-log-out-circle'></i><span>Logout</span></a>
							</li>
						</ul>
					</div>
				</nav>
			</div>
		</header>
		<!--end header -->
		<!--end header -->
		@yield('content')

		<!--end page wrapper -->
		<!--start overlay-->

	</div>
	<!-- <div class="row row-cols-lg-12"> -->
	<!-- <footer class="page-footer">
		<div style="margin-left: 200px;">
			<img src="assets/images/legend.png" style="max-width: 450px;">
		</div>
	</footer> -->
	<!-- </div> -->
	<!--end wrapper-->
	<!--start switcher-->
	<!-- <div class="switcher-wrapper"> -->
		<!-- <div class="switcher-btn"> <i class='bx bx-cog bx-spin'></i>
		</div> -->
		<!-- <div class="switcher-body">
			<div class="d-flex align-items-center">
				<h5 class="mb-0 text-uppercase">Theme Customizer</h5>
				<button type="button" class="btn-close ms-auto close-switcher" aria-label="Close"></button>
			</div>
			<hr />
			<h6 class="mb-0">Theme Styles</h6>
			<hr />
			<div class="d-flex align-items-center justify-content-between">
				<div class="form-check">
					<input class="form-check-input" type="radio" name="flexRadioDefault" id="lightmode" checked>
					<label class="form-check-label" for="lightmode">Light</label>
				</div>
				<div class="form-check">
					<input class="form-check-input" type="radio" name="flexRadioDefault" id="darkmode">
					<label class="form-check-label" for="darkmode">Dark</label>
				</div>
				<div class="form-check">
					<input class="form-check-input" type="radio" name="flexRadioDefault" id="semidark">
					<label class="form-check-label" for="semidark">Semi Dark</label>
				</div>
			</div>
			<hr />
			<div class="form-check">
				<input class="form-check-input" type="radio" id="minimaltheme" name="flexRadioDefault">
				<label class="form-check-label" for="minimaltheme">Minimal Theme</label>
			</div>
			<hr />
			<h6 class="mb-0">Header Colors</h6>
			<hr />
			<div class="header-colors-indigators">
				<div class="row row-cols-auto g-3">
					<div class="col">
						<div class="indigator headercolor1" id="headercolor1"></div>
					</div>
					<div class="col">
						<div class="indigator headercolor2" id="headercolor2"></div>
					</div>
					<div class="col">
						<div class="indigator headercolor3" id="headercolor3"></div>
					</div>
					<div class="col">
						<div class="indigator headercolor4" id="headercolor4"></div>
					</div>
					<div class="col">
						<div class="indigator headercolor5" id="headercolor5"></div>
					</div>
					<div class="col">
						<div class="indigator headercolor6" id="headercolor6"></div>
					</div>
					<div class="col">
						<div class="indigator headercolor7" id="headercolor7"></div>
					</div>
					<div class="col">
						<div class="indigator headercolor8" id="headercolor8"></div>
					</div>
				</div>
			</div>
			<hr />
			<h6 class="mb-0">Sidebar Backgrounds</h6>
			<hr />
			<div class="header-colors-indigators">
				<div class="row row-cols-auto g-3">
					<div class="col">
						<div class="indigator sidebarcolor1" id="sidebarcolor1"></div>
					</div>
					<div class="col">
						<div class="indigator sidebarcolor2" id="sidebarcolor2"></div>
					</div>
					<div class="col">
						<div class="indigator sidebarcolor3" id="sidebarcolor3"></div>
					</div>
					<div class="col">
						<div class="indigator sidebarcolor4" id="sidebarcolor4"></div>
					</div>
					<div class="col">
						<div class="indigator sidebarcolor5" id="sidebarcolor5"></div>
					</div>
					<div class="col">
						<div class="indigator sidebarcolor6" id="sidebarcolor6"></div>
					</div>
					<div class="col">
						<div class="indigator sidebarcolor7" id="sidebarcolor7"></div>
					</div>
					<div class="col">
						<div class="indigator sidebarcolor8" id="sidebarcolor8"></div>
					</div>
				</div>
			</div>
		</div> -->
	
	<!--end switcher-->
	<!-- Bootstrap JS -->
	<script src="{{asset('public/js/bootstrap.bundle.min.js')}}"></script>


	<!--plugins-->
	<script src="{{asset('public/js/jquery.min.js')}}"></script>
	<script src="{{asset('public/plugins/simplebar/js/simplebar.min.js')}}"></script>
	<script src="{{asset('public/plugins/metismenu/js/metisMenu.min.js')}}"></script>
	<script src="{{asset('public/plugins/perfect-scrollbar/js/perfect-scrollbar.js')}}"></script>
	<script src="{{asset('public/plugins/chartjs/js/Chart.min.js')}}"></script>
	<script src="{{asset('public/plugins/chartjs/js/chartjs-custom.js')}}"></script>

	<script src="{{asset('public/plugins/apexcharts-bundle/js/apexcharts.min.js')}}"></script>

	<script src="{{asset('public/plugins/apexcharts-bundle/js/apex-custom.js')}}"></script>

	<!-- <script src="assets/plugins/datatable/js/jquery.dataTables.min.js"></script> -->
	<script src="{{asset('public/plugins/datatable/js/dataTables.bootstrap5.min.js')}}"></script>
	<script src="{{asset('public/js/widgets.js')}}"></script>
	<!--app JS--><!-- Vector map JavaScript -->
	<script src="{{asset('public/plugins/vectormap/jquery-jvectormap-2.0.2.min.js')}}"></script>
	<script src="{{asset('public/plugins/vectormap/jquery-jvectormap-world-mill-en.js')}}"></script>
	<script src="{{asset('public/plugins/datatable/js/jquery.dataTables.min.js')}}"></script>
	<script src="{{asset('public/plugins/datatable/js/dataTables.bootstrap5.min.js')}}"></script>
	<script src="{{asset('public/js/table-datatable.js')}}"></script>
	<!-- highcharts js -->
	<!-- <script src="assets/plugins/highcharts/js/highcharts.js"></script> -->

	<script src="{{asset('plugins/fullcalendar/js/main.min.js')}}"></script>
	<script src="{{asset('public/js/app.js')}}"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.29.4/moment.min.js"></script>
	@yield('js')
</body>



</html>