	@extends("layouts.app")

	@section("style")
	<link href="{{ asset('assets/plugins/vectormap/jquery-jvectormap-2.0.2.css') }}" rel="stylesheet"/>
	
	@endsection

		@section("wrapper")
		<!--start page wrapper -->
		<div class="page-wrapper">
			<div class="page-content">

				<div hidden class="card radius-10">
					<div class="row row-cols-1 row-cols-md-2 row-cols-xl-4 row-group g-0">
						<div class="col">
							<div class="card-body">
								<div class="d-flex align-items-center">
									<h5 class="mb-0">9526</h5>
									<div class="ms-auto">
                                        <i class='bx bx-cart fs-3 text-white'></i>
									</div>
								</div>
								<div class="progress my-3" style="height:3px;">
									<div class="progress-bar" role="progressbar" style="width: 55%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
								</div>
								<div class="d-flex align-items-center text-white">
									<p class="mb-0">Total Orders</p>
									<p class="mb-0 ms-auto">+4.2%<span><i class='bx bx-up-arrow-alt'></i></span></p>
								</div>
							</div>
						</div>
						<div class="col">
							<div class="card-body">
								<div class="d-flex align-items-center">
									<h5 class="mb-0">$8323</h5>
									<div class="ms-auto">
                                        <i class='bx bx-dollar fs-3 text-white'></i>
									</div>
								</div>
								<div class="progress my-3" style="height:3px;">
									<div class="progress-bar" role="progressbar" style="width: 55%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
								</div>
								<div class="d-flex align-items-center text-white">
									<p class="mb-0">Total Revenue</p>
									<p class="mb-0 ms-auto">+1.2%<span><i class='bx bx-up-arrow-alt'></i></span></p>
								</div>
							</div>
						</div>
						<div class="col">
							<div class="card-body">
								<div class="d-flex align-items-center">
									<h5 class="mb-0">6200</h5>
									<div class="ms-auto">
                                        <i class='bx bx-group fs-3 text-white'></i>
									</div>
								</div>
								<div class="progress my-3" style="height:3px;">
									<div class="progress-bar" role="progressbar" style="width: 55%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
								</div>
								<div class="d-flex align-items-center text-white">
									<p class="mb-0">Visitors</p>
									<p class="mb-0 ms-auto">+5.2%<span><i class='bx bx-up-arrow-alt'></i></span></p>
								</div>
							</div>
						</div>
						<div class="col">
							<div class="card-body">
								<div class="d-flex align-items-center">
									<h5 class="mb-0">5630</h5>
									<div class="ms-auto">
                                        <i class='bx bx-envelope fs-3 text-white'></i>
									</div>
								</div>
								<div class="progress my-3" style="height:3px;">
									<div class="progress-bar" role="progressbar" style="width: 55%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
								</div>
								<div class="d-flex align-items-center text-white">
									<p class="mb-0">Messages</p>
									<p class="mb-0 ms-auto">+2.2%<span><i class='bx bx-up-arrow-alt'></i></span></p>
								</div>
							</div>
						</div>
					</div><!--end row-->
				</div>

				<div class="row">
					<div class="col-12 col-lg-8 col-xl-8 d-flex">
					   <div class="card radius-10 w-100">
						<div class="card-body">
							<div class="d-flex align-items-center">
								<div>
									<h6 class="mb-0">Average Active Power</h6>
								</div>
								<div class="font-22 ms-auto text-white"><i class="bx bx-dots-horizontal-rounded"></i>
								</div>
							</div>
							<div class="d-flex align-items-center ms-auto font-13 gap-2 my-3">
								<span class="border px-1 rounded cursor-pointer"><i class="bx bxs-circle me-1" style="color: rgba(235, 64, 52, 0.8)"></i>Active Power A</span>
								<span class="border px-1 rounded cursor-pointer"><i class="bx bxs-circle me-1" style="color: rgba(235, 229, 52, 0.8)"></i>Active Power B</span>
								<span class="border px-1 rounded cursor-pointer"><i class="bx bxs-circle me-1" style="color: rgba(71, 209, 237, 0.8)"></i>Active Power C</span>
							</div>
						   <div class="chart-container-1">
							 <canvas id="chart1"></canvas>
						   </div>
						</div>
						<div hidden class="row row-cols-1 row-cols-md-3 row-cols-xl-3 g-0 row-group text-center border-top">
						  <div class="col">
							<div class="p-3">
							  <h5 class="mb-0">45.87M</h5>
							  <small class="mb-0">Overall Visitor <span> <i class="bx bx-up-arrow-alt align-middle"></i> 2.43%</span></small>
							</div>
						  </div>
						  <div class="col">
							<div class="p-3">
							  <h5 class="mb-0">15:48</h5>
							  <small class="mb-0">Visitor Duration <span> <i class="bx bx-up-arrow-alt align-middle"></i> 12.65%</span></small>
							</div>
						  </div>
						  <div class="col">
							<div class="p-3">
							  <h5 class="mb-0">245.65</h5>
							  <small class="mb-0">Pages/Visit <span> <i class="bx bx-up-arrow-alt align-middle"></i> 5.62%</span></small>
							</div>
						  </div>
						</div>
					   </div>
					</div>
			   
					<div class="col-12 col-lg-4 col-xl-4 d-flex">
					   <div class="card radius-10 overflow-hidden w-100">
						  <div class="card-body">
							<div class="d-flex align-items-center">
								<div>
									<h6 class="mb-0">Total Consumption</h6>
								</div>
								<div class="font-22 ms-auto text-white"><i class="bx bx-dots-horizontal-rounded"></i>
								</div>
							</div>
							<div class="chart-container-2 my-3">
							  <canvas id="chart2"></canvas>
							 </div>
						  </div>
						  <div class="table-responsive">
							<table class="table align-items-center mb-0">
							  <tbody>
								<tr>
								  <td><i class="bx bxs-circle text-white me-2"></i>This Month</td>
								  <td>0.08</td>
								  <td>GWh</td>
								  <td>Apr (Day 2)</td>
								</tr>
								<tr>
								  <td><i class="bx bxs-circle text-light-2 me-2"></i>This Month (Forecast)</td>
								  <td>1.22</td>
								  <td>GWh</td>
								  <td>Apr</td>
								</tr>
								<tr>
								  <td><i class="bx bxs-circle text-light-3 me-2"></i>Last Month</td>
								  <td>1.22</td>
								  <td>GWh</td>
								  <td>Mar</td>
								</tr>
								<tr hidden>
								  <td><i class="bx bxs-circle text-light-4 me-2"></i>Other</td>
								  <td>$1105</td>
								  <td>+5%</td>
								</tr>
							  </tbody>
							</table>
						  </div>
						</div>
					</div>
				   </div><!--End Row-->

				   <h6 class="mb-0" >Total Carbon Emmission</h6>
				   <div class="row row-cols-1 row-cols-lg-3" style="margin-top: 7px">
					<div class="col">
					   <div class="card radius-10">
						 <div class="card-body">
						   <div class="d-flex align-items-center">
							 <div hidden class="w_chart easy-dash-chart" data-percent="100">
							   <span class="w_percent"></span>
							 </div>
							 <div class="me-3 pt-2"><h3 class="ms-1" style>46.0</h3></div>
							 <div class="me-auto">
							   <h6 class="mb-0">This Month</h6>
							   <small class="mb-0">Day 2</small>
							   <br>
							   <small class="mb-0">t CO<sup>2</sup> / kWh</small>
							 </div>
							 
						   </div>
						 </div>
					   </div>
					 </div>
					 <div class="col">
					   <div class="card radius-10">
						 <div class="card-body">
						   <div class="d-flex align-items-center">
							 <div hidden class="w_chart easy-dash-chart" data-percent="100">
							   <span class="w_percent"></span>
							 </div>
							 <div class="me-3 pt-2"><h3 class="ms-1" style>723.6</h3></div>
							 <div class="me-auto">
							   <h6 class="mb-0">This Month</h6>
							   <small class="mb-0">Forecast</small>
							   <br>
							   <small class="mb-0">t CO<sup>2</sup> / kWh</small>
							 </div>
							 
						   </div>
						 </div>
					   </div>
					 </div>
					 <div class="col">
					   <div class="card radius-10">
						 <div class="card-body">
						   <div class="d-flex align-items-center">
							 <div hidden class="w_chart easy-dash-chart" data-percent="100">
							   <span class="w_percent"></span>
							 </div>
							 <div class="me-3 pt-2"><h3 class="ms-1" style>725.1</h3></div>
							 <div class="me-auto">
							   <h6 class="mb-0">Last Month</h6>
							   <small class="mb-0">Mar</small>
							   <br>
							   <small class="mb-0">t CO<sup>2</sup> / kWh</small>
							 </div>
							 
						   </div>
						 </div>
					   </div>
					 </div>
					</div><!--End Row-->

					<h6 class="mb-0" >Building Energy Index (BEI)</h6>
				   <div class="row row-cols-1 row-cols-lg-3" style="margin-top: 7px">
					<div class="col">
					   <div class="card radius-10">
						 <div class="card-body">
						   <div class="d-flex align-items-center">
							 <div hidden class="w_chart easy-dash-chart" data-percent="100">
							   <span class="w_percent"></span>
							 </div>
							 <div class="me-3 pt-2"><h3 class="ms-1" style>28.1</h3></div>
							 <div class="me-auto">
							   <h6 class="mb-0">This Month</h6>
							   <small class="mb-0">Month 4</small>
							   <br>
							   <small class="mb-0">Wh / m<sup>2</sup></small>
							 </div>
							 
						   </div>
						 </div>
					   </div>
					 </div>
					 <div class="col">
					   <div class="card radius-10">
						 <div class="card-body">
						   <div class="d-flex align-items-center">
							 <div hidden class="w_chart easy-dash-chart" data-percent="100">
							   <span class="w_percent"></span>
							 </div>
							 <div class="me-3 pt-2"><h3 class="ms-1" style>111.3</h3></div>
							 <div class="me-auto">
							   <h6 class="mb-0">This Year</h6>
							   <small class="mb-0">Forecast</small>
							   <br>
							   <small class="mb-0">Wh / m<sup>2</sup></small>
							 </div>
							 
						   </div>
						 </div>
					   </div>
					 </div>
					 <div class="col">
					   <div class="card radius-10">
						 <div class="card-body">
						   <div class="d-flex align-items-center">
							 <div hidden class="w_chart easy-dash-chart" data-percent="100">
							   <span class="w_percent"></span>
							 </div>
							 <div class="me-3 pt-2"><h3 class="ms-1" style>0.0</h3></div>
							 <div class="me-auto">
							   <h6 class="mb-0">Last Year</h6>
							   <small class="mb-0">2019</small>
							   <br>
							   <small class="mb-0">Wh / m<sup>2</sup></small>
							 </div>
							 
						   </div>
						 </div>
					   </div>
					 </div>
					</div><!--End Row-->

					<div class="row">
						<div class="col-12 col-lg-12 col-xl-6">
						  <div class="card radius-10">
							<div class="card-body">
								<div class="d-flex align-items-center mb-3">
									<div>
										<h6 class="mb-0">Energy Consumption</h6>
									</div>
									<div class="font-22 ms-auto text-white"><i class="bx bx-dots-horizontal-rounded"></i>
									</div>
								</div>
							   <div id="dashboard-map" style="height: 330px;"></div>
							</div>
							<div class="table-responsive">
							   <table class="table table-hover align-items-center">
								  <thead class="table-light">
									 <tr>
										 <th>State</th>
										 <th>Total Energy Consumption (MWh)</th>
										 <!-- <th>Trend</th> -->
									 </tr>
								 </thead>
								 <tbody>
									 <tr>
										 <td><i class="flag-icon flag-icon-ca me-2"></i> Johor</td>
										 <td>7.5</td>
										 <!-- <td><span id="trendchart1"></span></td> -->
									 </tr>
									 <tr>
										 <td><i class="flag-icon flag-icon-us me-2"></i> Kedah</td>
										 <td>17.3</td>
										 <!-- <td><span id="trendchart2"></span></td> -->
									 </tr>
				   
									 <tr>
										 <td><i class="flag-icon flag-icon-in me-2"></i> Kelantan</td>
										 <td>22.6</td>
										 <!-- <td><span id="trendchart3"></span></td> -->
									 </tr>
				   
									 <tr>
										 <td><i class="flag-icon flag-icon-gb me-2"></i> Malacca</td>
										 <td>9.0</td>
										 <!-- <td><span id="trendchart4"></span></td> -->
									 </tr>
				   
									 <tr>
										 <td><i class="flag-icon flag-icon-de me-2"></i> Negeri Sembilan</td>
										 <td>24.5</td>
										 <!-- <td><span id="trendchart5"></span></td> -->
									 </tr>

									 <tr>
										 <td><i class="flag-icon flag-icon-ca me-2"></i> Pahang</td>
										 <td>16.0</td>
										 <!-- <td><span id="trendchart1"></span></td> -->
									 </tr>
									 <tr>
										 <td><i class="flag-icon flag-icon-us me-2"></i> Penang</td>
										 <td>13.1</td>
										 <!-- <td><span id="trendchart2"></span></td> -->
									 </tr>
				   
									 <tr>
										 <td><i class="flag-icon flag-icon-in me-2"></i> Putrajaya</td>
										 <td>12.1</td>
										 <!-- <td><span id="trendchart3"></span></td> -->
									 </tr>
				   
									 <tr>
										 <td><i class="flag-icon flag-icon-gb me-2"></i> Perak</td>
										 <td>13.2</td>
										 <!-- <td><span id="trendchart4"></span></td> -->
									 </tr>
				   
									 <tr>
										 <td><i class="flag-icon flag-icon-de me-2"></i> Perlis</td>
										 <td>19.2</td>
										 <!-- <td><span id="trendchart5"></span></td> -->
									 </tr>
									 <tr>
										 <td><i class="flag-icon flag-icon-ca me-2"></i> Sabah</td>
										 <td>11.2</td>
										 <!-- <td><span id="trendchart1"></span></td> -->
									 </tr>
									 <tr>
										 <td><i class="flag-icon flag-icon-us me-2"></i>Sarawak</td>
										 <td>10.4</td>
										 <!-- <td><span id="trendchart2"></span></td> -->
									 </tr>
				   
									 <tr>
										 <td><i class="flag-icon flag-icon-in me-2"></i>Selangor</td>
										 <td>15.0</td>
										 <!-- <td><span id="trendchart3"></span></td> -->
									 </tr>
				   
									 <tr>
										 <td><i class="flag-icon flag-icon-gb me-2"></i> Terengganu</td>
										 <td>11.1</td>
										 <!-- <td><span id="trendchart4"></span></td> -->
									 </tr>
				   
									 <tr>
										 <td><i class="flag-icon flag-icon-de me-2"></i> WP Labuan</td>
										 <td>5.3</td>
										 <!-- <td><span id="trendchart5"></span></td> -->
									 </tr>
									 <tr>
										 <td><i class="flag-icon flag-icon-de me-2"></i> Kuala Lumpur</td>
										 <td>17.2</td>
										 <!-- <td><span id="trendchart5"></span></td> -->
									 </tr>
									 
								 </tbody>
							 </table>
							 </div>
						  </div>
						</div>
						
						<div class="col-12 col-lg-12 col-xl-6">
						   <div class="row">
							 <div class="col-12 col-lg-6">
							   <div class="card radius-10 overflow-hidden">
								<div class="card-body">
								   <p>Page Views</p>
								   <h4 class="mb-0">8,293 <small class="font-13">5.2% <i class="zmdi zmdi-long-arrow-up"></i></small></h4>
								</div>
								<div class="chart-container-2">
								  <canvas id="chart3"></canvas>
								</div>
							  </div>
							 </div>
							 <div class="col-12 col-lg-6">
							   <div class="card radius-10 overflow-hidden">
								<div class="card-body">
								   <p>Total Clicks</p>
								   <h4 class="mb-0">7,493 <small class="font-13">1.4% <i class="zmdi zmdi-long-arrow-up"></i></small></h4>
								</div>
								<div class="chart-container-2">
								 <canvas id="chart4"></canvas>
								 </div>
							  </div>
							 </div>
							 <div class="col-12 col-lg-6">
							   <div class="card radius-10">
								<div class="card-body text-center">
								   <p class="mb-4">Total Downloads</p>
								   <input class="knob" data-width="190" data-height="190" data-readOnly="true" data-thickness=".2" data-angleoffset="90" data-linecap="round" data-bgcolor="rgba(255, 255, 255, 0.14)" data-fgcolor="#fff" data-max="15000" value="8550"/>
								   <hr>
								   <p class="mb-0 small-font text-center">3.4% <i class="zmdi zmdi-long-arrow-up"></i> since yesterday</p>
								</div>
							  </div>
							 </div>
							 <div class="col-12 col-lg-6">
							   <div class="card radius-10">
								<div class="card-body">
								   <p>Device Storage</p>
								   <h4 class="mb-3">42620/50000</h4>
								   <hr>
								   <div class="progress-wrapper mb-4">
									  <p>Documents <span class="float-right">12GB</span></p>
									  <div class="progress" style="height:5px;">
										  <div class="progress-bar" style="width:80%"></div>
									  </div>
								   </div>
								   
								   <div class="progress-wrapper mb-4">
									  <p>Images <span class="float-right">10GB</span></p>
									  <div class="progress" style="height:5px;">
										  <div class="progress-bar" style="width:60%"></div>
									  </div>
								   </div>
								   
								   <div class="progress-wrapper mb-4">
									   <p>Mails <span class="float-right">5GB</span></p>
									  <div class="progress" style="height:5px;">
										  <div class="progress-bar" style="width:40%"></div>
									  </div>
								   </div>
								   
								</div>
							  </div>
							 </div>
						   </div>
						</div>
					 </div>
					 <!-- End Row -->

					 <div hidden class="row">
						<div class="col-12 col-lg-6 col-xl-4 d-flex">
						  <div class="card radius-10 overflow-hidden w-100">
							 <div class="card-body">
							   <p>Total Earning</p>
							   <h4 class="mb-0">287,493$</h4>
							   <small>1.4% <i class="zmdi zmdi-long-arrow-up"></i> Since Last Month</small>
							   <hr>
							   <p>Total Sales</p>
							   <h4 class="mb-0">87,493</h4>
							   <small>5.43% <i class="zmdi zmdi-long-arrow-up"></i> Since Last Month</small>
							   <div class="mt-5">
							   <div class="chart-container-4">
								 <canvas id="chart5"></canvas>
								</div>
							  </div>
							 </div>
						  </div>
						</div>
				  
						<div class="col-12 col-lg-6 col-xl-8 d-flex">
						   <div class="card radius-10 w-100">
							   <div class="card-header border-bottom">
								<div class="d-flex align-items-center">
									<div>
										<h6 class="mb-0">Customer Review</h6>
									</div>
									<div class="font-22 ms-auto text-white"><i class="bx bx-dots-horizontal-rounded"></i>
									</div>
								</div>
							</div>
							 <ul class="list-group list-group-flush">
								<li class="list-group-item bg-transparent">
								  <div class="d-flex align-items-center">
									<img src="{{ asset('assets/images/avatars/avatar-1.png') }}" alt="user avatar" class="rounded-circle" width="55" height="55">
								  <div class="ms-3">
									<h6 class="mb-0">iPhone X <small class="ms-4">08.34 AM</small></h6>
									<p class="mb-0 small-font">Sara Jhon : This is svery Nice phone in low budget.</p>
								  </div>
								  <div class="ms-auto star">
									<i class='bx bxs-star text-white'></i>
									<i class='bx bxs-star text-white'></i>
									<i class='bx bxs-star text-white'></i>
									<i class='bx bxs-star text-light-4'></i>
									<i class='bx bxs-star text-light-4'></i>
								  </div>
								</div>
								</li>
								<li class="list-group-item bg-transparent">
								  <div class="d-flex align-items-center">
									<img src="{{ asset('assets/images/avatars/avatar-2.png') }}" alt="user avatar" class="rounded-circle" width="55" height="55">
								  <div class="ms-3">
									<h6 class="mb-0">Airpod <small class="ml-4">05.26 PM</small></h6>
									<p class="mb-0 small-font">Danish Josh : The brand apple is original !</p>
								  </div>
								  <div class="ms-auto star">
									<i class='bx bxs-star text-white'></i>
									<i class='bx bxs-star text-white'></i>
									<i class='bx bxs-star text-white'></i>
									<i class='bx bxs-star text-light-4'></i>
									<i class='bx bxs-star text-light-4'></i>
								  </div>
								</div>
								</li>
								<li class="list-group-item bg-transparent">
								  <div class="d-flex align-items-center">
									<img src="{{ asset('assets/images/avatars/avatar-3.png') }}" alt="user avatar" class="rounded-circle" width="55" height="55">
								  <div class="ms-3">
									<h6 class="mb-0">MacBook Pro <small class="ml-4">06.45 AM</small></h6>
									<p class="mb-0 small-font">Jhon Doe : Excllent product and awesome quality</p>
								  </div>
								  <div class="ms-auto star">
									<i class='bx bxs-star text-white'></i>
									<i class='bx bxs-star text-white'></i>
									<i class='bx bxs-star text-white'></i>
									<i class='bx bxs-star text-light-4'></i>
									<i class='bx bxs-star text-light-4'></i>
								  </div>
								</div>
								</li>
								<li class="list-group-item bg-transparent">
								  <div class="d-flex align-items-center">
									<img src="{{ asset('assets/images/avatars/avatar-4.png') }}" alt="user avatar" class="rounded-circle" width="55" height="55">
								  <div class="ms-3">
									<h6 class="mb-0">Airpod <small class="ml-4">08.34 AM</small></h6>
									<p class="mb-0 small-font">Christine : The brand apple is original !</p>
								  </div>
								  <div class="ms-auto star">
									<i class='bx bxs-star text-white'></i>
									<i class='bx bxs-star text-white'></i>
									<i class='bx bxs-star text-white'></i>
									<i class='bx bxs-star text-light-4'></i>
									<i class='bx bxs-star text-light-4'></i>
								  </div>
								</div>
								</li>
								<li class="list-group-item bg-transparent">
								  <div class="d-flex align-items-center">
									<img src="{{ asset('assets/images/avatars/avatar-5.png') }}" alt="user avatar" class="rounded-circle" width="55" height="55">
								  <div class="ms-3">
									<h6 class="mb-0">MacBook <small class="ml-4">08.34 AM</small></h6>
									<p class="mb-0 small-font">Michle : The brand apple is original !</p>
								  </div>
								  <div class="ms-auto star">
									<i class='bx bxs-star text-white'></i>
									<i class='bx bxs-star text-white'></i>
									<i class='bx bxs-star text-white'></i>
									<i class='bx bxs-star text-light-4'></i>
									<i class='bx bxs-star text-light-4'></i>
								  </div>
								</div>
								</li>
							  </ul>
						   </div>
						</div>
					  </div><!--End Row-->


					  <div hidden class="card radius-10">
						<div class="card-body">
							<div class="d-flex align-items-center">
								<div>
									<h5 class="mb-0">Order Summary</h5>
								</div>
								<div class="font-22 ms-auto"><i class="bx bx-dots-horizontal-rounded"></i>
								</div>
							</div>
							<hr>
							<div class="table-responsive">
								<table class="table align-middle mb-0">
									<thead class="table-light">
										<tr>
											<th>Order id</th>
											<th>Product</th>
											<th>Customer</th>
											<th>Date</th>
											<th>Price</th>
											<th>Status</th>
											<th>Action</th>
										</tr>
									</thead>
									<tbody>
										<tr>
											<td>#897656</td>
											<td>
												<div class="d-flex align-items-center">
													<div class="recent-product-img">
														<img src="{{ asset('assets/images/icons/chair.png') }}" alt="">
													</div>
													<div class="ms-2">
														<h6 class="mb-1 font-14">Light Blue Chair</h6>
													</div>
												</div>
											</td>
											<td>Brooklyn Zeo</td>
											<td>12 Jul 2020</td>
											<td>$64.00</td>
											<td>
												<div class="badge rounded-pill bg-light w-100">In Progress</div>
											</td>
											<td>
												<div class="d-flex order-actions">	<a href="javascript:;" class=""><i class="bx bx-cog"></i></a>
													<a href="javascript:;" class="ms-4"><i class="bx bx-down-arrow-alt"></i></a>
												</div>
											</td>
										</tr>
										<tr>
											<td>#987549</td>
											<td>
												<div class="d-flex align-items-center">
													<div class="recent-product-img">
														<img src="{{ asset('assets/images/icons/shoes.png') }}" alt="">
													</div>
													<div class="ms-2">
														<h6 class="mb-1 font-14">Green Sport Shoes</h6>
													</div>
												</div>
											</td>
											<td>Martin Hughes</td>
											<td>14 Jul 2020</td>
											<td>$45.00</td>
											<td>
												<div class="badge rounded-pill bg-light w-100">Completed</div>
											</td>
											<td>
												<div class="d-flex order-actions">	<a href="javascript:;" class=""><i class="bx bx-cog"></i></a>
													<a href="javascript:;" class="ms-4"><i class="bx bx-down-arrow-alt"></i></a>
												</div>
											</td>
										</tr>
										<tr>
											<td>#685749</td>
											<td>
												<div class="d-flex align-items-center">
													<div class="recent-product-img">
														<img src="{{ asset('assets/images/icons/headphones.png') }}" alt="">
													</div>
													<div class="ms-2">
														<h6 class="mb-1 font-14">Red Headphone 07</h6>
													</div>
												</div>
											</td>
											<td>Shoan Stephen</td>
											<td>15 Jul 2020</td>
											<td>$67.00</td>
											<td>
												<div class="badge rounded-pill bg-light w-100">Cancelled</div>
											</td>
											<td>
												<div class="d-flex order-actions">	<a href="javascript:;" class=""><i class="bx bx-cog"></i></a>
													<a href="javascript:;" class="ms-4"><i class="bx bx-down-arrow-alt"></i></a>
												</div>
											</td>
										</tr>
										<tr>
											<td>#887459</td>
											<td>
												<div class="d-flex align-items-center">
													<div class="recent-product-img">
														<img src="{{ asset('assets/images/icons/idea.png') }}" alt="">
													</div>
													<div class="ms-2">
														<h6 class="mb-1 font-14">Mini Laptop Device</h6>
													</div>
												</div>
											</td>
											<td>Alister Campel</td>
											<td>18 Jul 2020</td>
											<td>$87.00</td>
											<td>
												<div class="badge rounded-pill bg-light w-100">Completed</div>
											</td>
											<td>
												<div class="d-flex order-actions">	<a href="javascript:;" class=""><i class="bx bx-cog"></i></a>
													<a href="javascript:;" class="ms-4"><i class="bx bx-down-arrow-alt"></i></a>
												</div>
											</td>
										</tr>
										<tr>
											<td>#335428</td>
											<td>
												<div class="d-flex align-items-center">
													<div class="recent-product-img">
														<img src="{{ asset('assets/images/icons/user-interface.png') }}" alt="">
													</div>
													<div class="ms-2">
														<h6 class="mb-1 font-14">Purple Mobile Phone</h6>
													</div>
												</div>
											</td>
											<td>Keate Medona</td>
											<td>20 Jul 2020</td>
											<td>$75.00</td>
											<td>
												<div class="badge rounded-pill bg-light w-100">In Progress</div>
											</td>
											<td>
												<div class="d-flex order-actions">	<a href="javascript:;" class=""><i class="bx bx-cog"></i></a>
													<a href="javascript:;" class="ms-4"><i class="bx bx-down-arrow-alt"></i></a>
												</div>
											</td>
										</tr>
										<tr>
											<td>#224578</td>
											<td>
												<div class="d-flex align-items-center">
													<div class="recent-product-img">
														<img src="{{ asset('assets/images/icons/watch.png') }}" alt="">
													</div>
													<div class="ms-2">
														<h6 class="mb-1 font-14">Smart Hand Watch</h6>
													</div>
												</div>
											</td>
											<td>Winslet Maya</td>
											<td>22 Jul 2020</td>
											<td>$80.00</td>
											<td>
												<div class="badge rounded-pill bg-light w-100">Cancelled</div>
											</td>
											<td>
												<div class="d-flex order-actions">	<a href="javascript:;" class=""><i class="bx bx-cog"></i></a>
													<a href="javascript:;" class="ms-4"><i class="bx bx-down-arrow-alt"></i></a>
												</div>
											</td>
										</tr>
										<tr>
											<td>#447896</td>
											<td>
												<div class="d-flex align-items-center">
													<div class="recent-product-img">
														<img src="{{ asset('assets/images/icons/tshirt.png') }}" alt="">
													</div>
													<div class="ms-2">
														<h6 class="mb-1 font-14">T-Shirt Blue</h6>
													</div>
												</div>
											</td>
											<td>Emy Jackson</td>
											<td>28 Jul 2020</td>
											<td>$96.00</td>
											<td>
												<div class="badge rounded-pill bg-light w-100">Completed</div>
											</td>
											<td>
												<div class="d-flex order-actions">	<a href="javascript:;" class=""><i class="bx bx-cog"></i></a>
													<a href="javascript:;" class="ms-4"><i class="bx bx-down-arrow-alt"></i></a>
												</div>
											</td>
										</tr>
									</tbody>
								</table>
							</div>
						</div>
					</div>

			</div>
		</div>
		<!--end page wrapper -->
		@endsection
		
	@section("script")
	<script src="{{ asset('assets/plugins/chartjs/js/Chart.min.js') }}"></script>
	<script src="{{ asset('assets/plugins/vectormap/jquery-jvectormap-2.0.2.min.js') }}"></script>
    <script src="{{ asset('assets/plugins/vectormap/jquery-jvectormap-world-mill-en.js') }}"></script>
	<script src="{{ asset('assets/plugins/jquery.easy-pie-chart/jquery.easypiechart.min.js') }}"></script>
	<script src="{{ asset('assets/plugins/sparkline-charts/jquery.sparkline.min.js') }}"></script>
	<script src="{{ asset('assets/plugins/jquery-knob/excanvas.js') }}"></script>
	<script src="{{ asset('assets/plugins/jquery-knob/jquery.knob.js') }}"></script>
	<script src="https://code.highcharts.com/maps/highmaps.js"></script>
	<script src="https://code.highcharts.com/maps/modules/exporting.js"></script>
	  <script>
		  $(function() {
			  $(".knob").knob();
		  });
	  </script>
	  <script src="{{ asset('assets/js/index.js') }}"></script>
	@endsection