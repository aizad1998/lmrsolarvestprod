	@extends("layouts.app")

	@section("style")
	<link href="{{ asset('assets/plugins/vectormap/jquery-jvectormap-2.0.2.css') }}" rel="stylesheet"/>
	
	@endsection

		@section("wrapper")
		<!--start page wrapper -->
		<div class="page-wrapper">
			<div class="page-content">

				<div class="row">
					<div class="col-12 col-lg-12 col-xl-12 d-flex">
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
							 <canvas id="chartactpow"></canvas>
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

					<div class="col-12 col-lg-12 col-xl-12 d-flex">
					   <div class="card radius-10 w-100">
						<div class="card-body">
							<div class="d-flex align-items-center">
								<div>
									<h6 class="mb-0">Average Power Factor</h6>
								</div>
								<div class="font-22 ms-auto text-white"><i class="bx bx-dots-horizontal-rounded"></i>
								</div>
							</div>
							<div class="d-flex align-items-center ms-auto font-13 gap-2 my-3">
								<span class="border px-1 rounded cursor-pointer"><i class="bx bxs-circle me-1" style="color: rgba(124,181,236, 0.8)"></i>Power Factor</span>
								
							</div>
						   <div class="chart-container-1">
							 <canvas id="chartpowfac"></canvas>
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

					<div class="col-12 col-lg-12 col-xl-12 d-flex">
					   <div class="card radius-10 w-100">
						<div class="card-body">
							<div class="d-flex align-items-center">
								<div>
									<h6 class="mb-0">Maximum Present Demand (kW)</h6>
								</div>
								<div class="font-22 ms-auto text-white"><i class="bx bx-dots-horizontal-rounded"></i>
								</div>
							</div>
							<div class="d-flex align-items-center ms-auto font-13 gap-2 my-3">
								<span class="border px-1 rounded cursor-pointer"><i class="bx bxs-circle me-1" style="color: rgba(242,44,107, 0.8)"></i>Maximum Present Demand</span>
							</div>
						   <div class="chart-container-1">
							 <canvas id="chartmaxpresdem"></canvas>
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
	@endsection