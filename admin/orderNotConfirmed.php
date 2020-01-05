<?php 
  $page= 'orders';include('adminIncludes/adminHeader.php');
?>
<div class="adminOrder">
	<div class="col-md-12" >
		<nav aria-label="breadcrumb">
			<ol class="breadcrumb">
				<li class="breadcrumb-item"><a href="#">Home</a></li>
				<li class="breadcrumb-item active" aria-current="page">Order Details</li>
			</ol>
		</nav>
	</div>
</div>

<div class="container">
	<div class="row justify-content-center">
		<div class="card col-12 text-center">
				<h2 class="text-center">Order Details</h2>
					<div class="card-body">
					    <div class="table-responsive-md">
							  	<table class="table table-hover table-bordered">
									<thead>
									    <tr>
									      <th scope="col">S.NO</th>
									      <th scope="col">Order Number</th>
									      <th scope="col">Order Date</th>
									      <th scope="col">Action</th>
									    </tr>
									  </thead>
									  <tbody>
									  	<tr>
									      <th>1</th>
									      <td>Mark</td>
									      <td>Otto</td>
									      <td><a href="viewNotConfirmedOrderDetail.php">View Details</a></td>
									    </tr>
									    <tr>
									      <th>2</th>
									      <td>Mark</td>
									      <td>Otto</td>
									      <td>Otto</td>
									    </tr>
									  </tbody>
							  	</table>
						</div>
					</div>
			</div>	
	</div>
</div>
<?php 
  include('adminIncludes/adminFooter.php');
?>