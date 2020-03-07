<!-- include the header files -->
<?php 
  $page= 'myOrders';include('../includes/loggedHeader.php');
?>

<?php  
	// $category_list = '';
	$usr_id = $_SESSION['user_id'];

	if (isset($_GET['orderId'])) {
		$orderId = $_GET['orderId'];
	}	




?>

<div class="loggedOrders">
	<div class="container">
		<div class="col-md-12"> <!-- style="margin-top: 50px;" -->
			<nav aria-label="breadcrumb">
			    <ol class="breadcrumb">
			        <li class="breadcrumb-item"><a href="#">Home</a></li>
			        <li class="breadcrumb-item" aria-current="page">Orders</li>

			        <li class="breadcrumb-item active" aria-current="page">Order Details</li>
			    </ol>
	    	</nav>
		</div>
	</div>

	<div class="container">
		<div class="row justify-content-center">
			<div class="col-9">
				<div class="card" style="
border-left: 10px solid black;
border-right: 10px solid black;
/*	           border-right: 3px solid #cc0000;*/
	           border-radius: 1rem !important;
	           margin-bottom: 40px;

				">
				<div class="card-header text-center">
					<b class="text-info">
						Order Details
					</b>
				</div>
				  <div class="card-body">
				    <div class="row">
				    	<div class="col-6">
				    		
							<table class="table">
							 
							  <tbody>
							    <tr>
							      <th>Customer Name</th>
							      <td>Mark</td>
							    </tr>
							    <tr>
							      <th>Customer Id</th>
							      <td>Jacob</td>
							    </tr>
							    <tr>
							      <th>Customer Mobile Number</th>
							      <td>Larry</td>
							    </tr>
							    <tr>
							      <th>Customer Email</th>
							      <td>Larry</td>
							    </tr>
							  </tbody>
							</table>

				    	</div>
				    	<div class="col-6">
				    		<table class="table">
							 
							  <tbody>
							    <tr>
							      <th>Flat/Buidlding No</th>
							      <td>Mark</td>
							    </tr>
							    <tr>
							      <th>Street Name</th>
							      <td>Jacob</td>
							    </tr>
							    <tr>
							      <th>City</th>
							      <td>Larry</td>
							    </tr>
							    <tr>
							      <th>Order Type</th>
							      <td>Larry</td>
							    </tr>
							    <tr>
							      <th>Order Date</th>
							      <td>Larry</td>
							    </tr>
							    <tr>
							      <th>Total</th>
							      <td>Larry</td>
							    </tr>							    
							  </tbody>
							</table>
				    	</div>
				    </div>
				    <!-- cancel order -->
				    <div class="text-center">
				    	<form>
							<button type="button" class="btn btn-danger">Cancel Order</button>
						</form>
				    </div>
				  </div>
				</div>
			</div>

			
		</div>
	</div>
</div>



<!-- include the footer files -->
<?php
	// $qw = "truncate table orderdetails";
	// $rs = mysqli_query($connection,$qw);
  include('../includes/loggedFooter.php');
?>