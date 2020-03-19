<!-- include the header files -->
<?php 
  $page= 'myOrders';include('../includes/loggedHeader.php');
?>

<?php  
	// $category_list = '';
	$usr_id = $_SESSION['user_id'];
		
?>

<!-- cancel order -->
<?php
		if(isset($_GET['orderId'])) {
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

	<div class="container" >
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
				    	<div class="col-12 col-md-6">
				    		
				<table class="table">
							 
					  <tbody>						
<?php

	$queryView = 	"SELECT *
					FROM orderdetails 
					INNER JOIN customer 
					ON orderdetails.customerId=customer.customerId where customer.customerId = '{$usr_id}' and orderdetails.orderId='{$orderId}'";

 				$view = mysqli_query($connection, $queryView);
    				if($view){
        				while ($fm = mysqli_fetch_assoc($view)) {

					echo "


							    <tr>
							      <th>Customer Name</th>
							      <td class='text-secondary'>{$fm['customerFirstName']} {$fm['customerLastName']}</td>
							    </tr>
							    <tr>
							      <th>Customer Reg Date</th>
							      <td class='text-secondary'>{$fm['customerRegDate']}</td>
							    </tr>
							    <tr>
							      <th>Customer Id</th>
							      <td class='text-secondary'>0000{$fm['customerId']}</td>
							    </tr>
							    <tr>
							      <th>Customer Mobile Number</th>
							      <td class='text-secondary'>{$fm['customerContactNo']}</td>
							    </tr>
							    <tr>
							      <th>Customer Email</th>
							      <td class='text-secondary'>{$fm['customerEmail']}</td>
							    </tr>
							  </tbody>
							</table>

				    	</div>
				    	<div class=\"col-6\">
				    		<table class=\"table\">
							 
							  <tbody>
							  	<tr>
							      <th>Order Id</th>
							      <td class='text-secondary'>0000{$fm['orderId']}</td>
							    </tr>
							    <tr>
							      <th>Flat/Buidlding No</th>
							      <td class='text-secondary'>{$fm['flatBuildingNo']}</td>
							    </tr>
							    <tr>
							      <th>Street Name</th>
							      <td class='text-secondary'>{$fm['streetName']}</td>
							    </tr>
							    <tr>
							      <th>City</th>
							      <td class='text-secondary'>{$fm['city']}</td>
							    </tr>
							    <tr>
							      <th>Order Type</th>
							      <td class='text-secondary'>{$fm['orderType']}</td>
							    </tr>
							    <tr>
							      <th>Order Date</th>
							      <td class='text-secondary'>{$fm['orderDate']}</td>
							    </tr>
							    <tr>
							      <th>Total</th>
							      <td>Rs.<span class='text-success'>{$fm['total']}</span>/=</td>
							    </tr>							    
							  </tbody>
							</table>
</div>
				    </div>
				    <!-- cancel order -->
				    <div class=\"text-center\">
				    	<a href=\"cancelOrder.php?orderId={$fm['orderId']}\" class=\"btn btn-danger\" name=\"cancelOrder\" id=\"disableCancel\" >Cancel Order</a>
				    	<a href=\"invoice.php?orderId={$fm['orderId']}&customerId={$fm['customerId']}\" class=\"btn btn-primary\" name=\"printInvoice\" target='_blank'>Print</a>
				    </div>
";
		if (0 == $fm['orderStatus']) {
			echo "<p class='text-center text-warning mt-2'>Order Not Confirmed</p>";
		}else if(1 == $fm['orderStatus']){
			echo "<p class='text-center text-success  mt-2'>Order Confirmed</p>";
		}else if(2 == $fm['orderStatus']){
			echo "<p class='text-center text-danger  mt-2'>Order Cancelled</p>";			
		}


				    // <p class='text-center'>asgg</p>
						
				}
			}
?>
<!-- <button type=\"submit"  name="cancelOrder" class="btn btn-danger">Cancel Order</button> -->
				    	

				    	
				  </div>
				</div>
			</div>

			
		</div>
	</div>
</div>
<script type="text/javascript">
			function disableButton() {
 			 // document.getElementById("disableCancel").classList.add("btn btn-danger disabled");
 			 document.getElementById("disableCancel").className += " disabled";
			}		
</script>
<!-- include the footer files -->
<?php
	// $qw = "truncate table orderdetails";
	// $rs = mysqli_query($connection,$qw);
  include('../includes/loggedFooter.php');
?>