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
									<h5 class="mb-0">Energy Consumption</h5>
								</div>
							</div>
						   <div class="chart-container-1">
						   <div id="containermaps"></div>
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
									<h5 class="mb-0">Total Consumption</h5>
								</div>
								<div class="font-22 ms-auto text-white"><i class="bx bx-dots-horizontal-rounded"></i>
								</div>
							</div>
							<div class="chart-container-2 my-3">
							  <!-- <canvas id="chart2"></canvas> -->
							  <div id="circlebar" style="width: 100%; height: 100%; position: absolute; margin: 0 auto;">
								</div>
								
							  
							 </div>
						  </div>
						  <div class="table-responsive">
							<table class="table align-items-center mb-0">
							  <tbody>
								<tr>
								  <td><i class="bx bxs-circle me-1" style="color: rgba(124,181,236, 0.8)"></i>Solar Generation</td>
								  <td>52.36 GWh</td>
								  
								</tr>
								<tr>
								  <td><i class="bx bxs-circle me-1" style="color: rgba(144,237,125, 0.8)"></i>This Month (2 Apr)</td>
								  <td>63.21 GWh</td>
								  
								</tr>
								<tr>
								  <td><i class="bx bxs-circle me-1" style="color: rgba(242,44,107, 0.8)"></i>This Month (Forecast)</td>
								  <td>83.51 GWh</td>
								  
								  
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

				   
				   <div class="row" style="margin-top: 7px">
					<div class="col-12 col-lg-6 col-xl-6">
					<h5 class="mb-0" style="padding-bottom:10px">Renewable Energy Certificate (REC)</h5>
					   <div class="card radius-10">
						 <div class="card-body">
						   <div class="d-flex align-items-center">
							 <div class="me-3 pt-2"><h3 class="ms-1" style>4</h3></div>
							 <div class="me-auto row">
							   <h6 class="mb-0">This Month</h6><small class="mb-0">REC</small>
							 </div>
						   </div>
						 </div>
						 <div class="card-body">
						   <div class="d-flex align-items-center">
							 <div class="me-3 pt-2"><h3 class="ms-1" style>24</h3></div>
							 <div class="me-auto row">
							   <h6 class="mb-0">Last Month</h6>
							   <small class="mb-0">REC</small>
							 </div>
						   </div>
						 </div>
						 <div class="card-body">
						   <div class="d-flex align-items-center">
							 <div class="me-3 pt-2"><h3 class="ms-1" style>102</h3></div>
							 <div class="me-auto row">
							   <h6 class="mb-0">Accumulative</h6>
							   <small class="mb-0">REC</small>
							 </div>
						   </div>
						 </div>
					   </div>
					 </div>
					
					 <div class="col-12 col-lg-3 col-xl-3">
					 <h5 class="mb-0" style="padding-bottom:10px">Total Carbon Emmission</h5>
					   <div class="card radius-10">
						 <div class="card-body">
						   <div class="d-flex align-items-center">
							 <div class="me-3 pt-2"><h3 class="ms-1" style>46.0</h3></div>
							 <div class="me-auto row">
							   <h6 class="mb-0">This Month (Day 2)</h6>
							   <small class="mb-0">t CO<sup>2</sup> / kWh</small>
							 </div>
						   </div>
						 </div>
						 <div class="card-body">
						   <div class="d-flex align-items-center">
							 <div class="me-3 pt-2"><h3 class="ms-1" style>723.6</h3></div>
							 <div class="me-auto row">
							   <h6 class="mb-0">This Month (Forcast)</h6>
							   <small class="mb-0">t CO<sup>2</sup> / kWh</small>
							 </div>
						   </div>
						 </div>
						 <div class="card-body">
						   <div class="d-flex align-items-center">
							 <div class="me-3 pt-2"><h3 class="ms-1" style>725.1</h3></div>
							 <div class="me-auto row">
							   <h6 class="mb-0">This Month</h6>
							   <small class="mb-0">t CO<sup>2</sup> / kWh</small>
							 </div>
						   </div>
						 </div>
					   </div>
					 </div>

					 <div class="col-12 col-lg-3 col-xl-3">
					 <h5 class="mb-0" style="padding-bottom:10px">Building Energy Index (BEI)</h5>
					   <div class="card radius-10">
						 <div class="card-body">
						   <div class="d-flex align-items-center">
							 <div class="me-3 pt-2"><h3 class="ms-1" style>28.1</h3></div>
							 <div class="me-auto row">
							   <h6 class="mb-0">This Month</h6>
							   <small class="mb-0">Wh / m<sup>2</sup></small>
							 </div>
						   </div>
						 </div>
						 <div class="card-body">
						   <div class="d-flex align-items-center">
							 <div class="me-3 pt-2"><h3 class="ms-1" style>111.3</h3></div>
							 <div class="me-auto row">
							 	<h6 class="mb-0">This Year</h6>
							   <small class="mb-0">Wh / m<sup>2</sup></small>
							 </div>
						   </div>
						 </div>
						 <div class="card-body">
						   <div class="d-flex align-items-center">
							 <div class="me-3 pt-2"><h3 class="ms-1" style>97.1</h3></div>
							 <div class="me-auto row">
							 	<h6 class="mb-0">This Month</h6>
							   <small class="mb-0">Wh / m<sup>2</sup></small>
							 </div>
						   </div>
						 </div>
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
<script src="https://code.highcharts.com/maps/modules/exporting.js"></script>
<script src="https://code.highcharts.com/maps/modules/offline-exporting.js"></script>
<script src="https://code.highcharts.com/maps/modules/accessibility.js"></script>
<script src="https://code.highcharts.com/maps/highmaps.js"></script>
<script src="https://code.highcharts.com/maps/modules/exporting.js"></script>
<script src="https://code.highcharts.com/mapdata/countries/my/my-all.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/proj4js/2.3.6/proj4.js"></script>

	<script src="https://code.highcharts.com/highcharts.js"></script>
	<script src="https://code.highcharts.com/highcharts-more.js"></script>
	<script src="https://code.highcharts.com/modules/solid-gauge.js"></script>
	  <script>
		  $(function() {
			  $(".knob").knob();
		  });
	  </script>
	  <script src="{{ asset('assets/js/index.js') }}"></script>
	  <script src="{{ asset('assets/js/circlebar.js') }}"></script>
	  <script src="{{ asset('assets/js/dashboard-map.js') }}"></script>
	@endsection