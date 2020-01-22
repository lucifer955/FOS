<?php 
  $page= 'orders';include('adminIncludes/adminHeader.php');
?>

<div class="adminViewOrder">
	<div class="col-md-12" >
		<nav aria-label="breadcrumb">
			<ol class="breadcrumb">
				<li class="breadcrumb-item"><a href="#">Home</a></li>
				<li class="breadcrumb-item"><a href="#">Order</a></li>
				<li class="breadcrumb-item active" aria-current="page">View Order Details</li>
			</ol>
		</nav>
	</div>
</div>

<div class="container">
	<div class="card">
		<div class="row justify-content-center">
			<div class="col-12 col-sm-12 col-md-5">
				<h2 class="text-center">User Details</h2>
					<div class="card-body">
					    <div class="table-responsive-md">
							  	<table class="table table-hover table-bordered table-sm">
									<tr>
										<th>Order Number</th>
										<td>12312312313</td>
									</tr>
									<tr>
										<th>First Name</th>
										<td>xdvsdfsdfsdf</td>
									</tr>
									<tr>
										<th>last Name</th>
										<td>sdfsdfdsfs</td>
									</tr>
									<tr>
										<th>Email</th>
										<td>sdfsdfsdf</td>
									</tr>
									<tr>
										<th>Mobile Number</th>
										<td>sfsdfsdfsd</td>
									</tr>
									<tr>
										<th>Flat Number or Building Number</th>
										<td></td>
									</tr>
									<tr>
										<th>Street Name</th>
										<td></td>
									</tr>
									<tr>
										<th>Area</th>
										<td></td>
									</tr>
									<tr>
										<th>Land Mark</th>
										<td></td>
									</tr>
									<tr>
										<th>City</th>
										<td></td>
									</tr>
									<tr>
										<th>Order Date</th>
										<td></td>
									</tr>
									<tr>
										<th>Order Final Status</th>
										<td></td>
									</tr>
							  	</table>
						</div>
					</div>
			</div>	

			<div class="col-12 col-sm-12 col-md-5 text-center" style="margin-left: 10px;">
					<h2 class="text-center">Order Details</h2>
						<div class="card-body">
						    <div class="table-responsive-md">
								  	<table class="table table-hover table-bordered table-sm">
										<tr>
											<th>#</th>
											<th>Food Name</th>
											<th>Price</th>
										</tr>
										<tr>
											<td>1</td>
											<td>Chees</td>
											<td>344</td>
										</tr>
										<tr>
											<td colspan="2">Grand Total</td>
											<td>344</td>
										</tr>
								  	</table>
							</div>
						</div>
				</div>
				<div class="col-12 col-sm-12 col-md-12 text-center">
						<div class="card-body">
						    <form>
							    <div class="form-group">
								    <label for="resturantStatus" class="col-sm-2 col-form-label">Resturant Remark:</label>
								    <textarea class="form-control" id="resturantStatus" rows="3"></textarea>
								</div>
								<div class="form-group">
								    <label for="exampleFormControlSelect2">Resturant Status:</label>
								    <select class="form-control" id="exampleFormControlSelect2">
								      <option>Confirm the Order</option>
								      <option>Cancel the Order</option>
<!-- 								      <option>Food B</option>
								      <option>Order Pickup</option>
								      <option>Food Delivered</option> -->
								    </select>
								  </div>							  
							  <button type="submit" class="btn btn-primary">Update</button>
							</form>
						</div>
				</div>

				<div class="col-12 text-center">
					<h2 class="text-center">Resturant Confirmation</h2>
						<div class="card-body">
						    <div class="table-responsive-md">
								  	<table class="table table-hover table-bordered table-sm">
										<tr>
											<th>#</th>
											<th>Order Number</th>
											<th>Remark</th>
											<th>Status</th>
											<th>Time</th>
										</tr>
										<tr>
											<td>1</td>
											<td>resturant remark here</td>
											<td>Order Confirmed</td>
											<td>344</td>
										</tr>
								  	</table>
							</div>
						</div>
				</div>
		</div>
	</div>

</div>

<?php 
  include('adminIncludes/adminFooter.php');
?>