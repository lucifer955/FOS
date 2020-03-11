<?php 
  $page= 'orders';include('cashierIncludes/cashierHeader.php');
?>

<?php  

	if (isset($_GET['orderId']) && isset($_GET['cutomerId'])) {
		$orderId = $_GET['orderId'];
		$customerId = $_GET['cutomerId'];


?>
<?php 

	$selectOrderType = '';
	$confirmed = 1;
	$canceled = 2;

	if (isset($_POST['submitStatus'])) {
		
			$selectOrderType = $_POST['selectOrderType'];
			$orderId = $_POST['orderIdHidden'];

			if ( $confirmed == $selectOrderType) {
				$queryStatus = "UPDATE orderdetails SET orderStatus=1 WHERE orderId=$orderId";
				mysqli_query($connection,$queryStatus);
				$msg = "Order Confirmed";
				echo "<script type='text/javascript'>alert('$msg');</script>";
							     //send mail
        		$to = $email;
        		$subject = "Pizza Mart Order Confirmed";
        		$txt = "Your Order '{$email}' is Confimed!";
        		$headers = "From: pizzamart.badulla@gmail.com";
        		mail($to,$subject,$txt,$headers);
		
			}else if ($canceled == $selectOrderType) {
				$queryStatus = "UPDATE orderdetails SET orderStatus=2 WHERE orderId=$orderId";
				mysqli_query($connection,$queryStatus);				
				$msg = "Order Canceled!";
				echo "<script type='text/javascript'>alert('$msg');</script>";
							     //send mail
        		$to = $email;
        		$subject = "Pizza Mart Order Canceled";
        		$txt = "Your Order '{$email}' is Confimed!";
        		$headers = "From: pizzamart.badulla@gmail.com";
        		mail($to,$subject,$txt,$headers);
			}



	}


?>

<div class="adminViewOrder">
	<div class="col-md-12" >
		<nav aria-label="breadcrumb">
			<ol class="breadcrumb">
				<li class="breadcrumb-item"><a href="#">Home</a></li>
				<li class="breadcrumb-item"><a href="#">Not Confirmed Order Details</a></li>
				<li class="breadcrumb-item active" aria-current="page">View Not Confirmed Order Details</li>
			</ol>
		</nav>
	</div>
</div>

<div class="container">
	<div class="card">
		<div class="row justify-content-center">
			<div class="col-12 col-sm-12 col-md-5">
				<h2 class="text-center">Not Confirmed Order Details</h2>
					<div class="card-body">
					    <div class="table-responsive-md">
							  	<table class="table table-hover table-bordered table-sm">


<?php  

	$sub = 1;

	$queryView = 	"SELECT *
					FROM orderdetails 
					INNER JOIN customer 
					ON orderdetails.customerId=customer.customerId where customer.customerId = '{$customerId}' and orderdetails.orderId='{$orderId}'
					 and orderdetails.orderStatus = 0";

	$view = mysqli_query($connection, $queryView);
    if($view){
		while ($fm = mysqli_fetch_assoc($view)){




?>


									<tr>
										<th>Order Id</th>
										<td>0000<?php echo "{$fm['orderId']}"; ?></td>
									</tr>
									<tr>
										<th>First Name</th>
										<td><?php echo "{$fm['customerFirstName']}"; ?></td>
									</tr>
									<tr>
										<th>last Name</th>
										<td><?php echo "{$fm['customerLastName']}"; ?></td>
									</tr>
									<tr>
										<th>Email</th>
										<td><?php echo "{$fm['customerEmail']}"; ?></td>
									</tr>
									<tr>
										<th>Mobile Number</th>
										<td><?php echo "{$fm['customerContactNo']}"; ?></td>
									</tr>
									<tr>
										<th>Flat Number or Building Number</th>
										<td><?php echo "{$fm['flatBuildingNo']}"; ?></td>
									</tr>
									<tr>
										<th>Street Name</th>
										<td><?php echo "{$fm['streetName']}"; ?></td>
									</tr>
									<tr>
										<th>Area</th>
										<td><?php echo "{$fm['area']}"; ?></td>
									</tr>
									<tr>
										<th>Land Mark</th>
										<td><?php echo "{$fm['landMark']}"; ?></td>
									</tr>
									<tr>
										<th>City</th>
										<td><?php echo "{$fm['city']}"; ?></td>
									</tr>
									<tr>
										<th>Order Date</th>
										<td><?php echo "{$fm['orderDate']}"; ?></td>
									</tr>
									<tr>
										<th>Order Final Status</th>
										<td><?php echo "{$fm['orderStatus']}"; ?></td>
									</tr>
							  	</table>
						</div>
					</div>
			</div>	
		<div class="col-12 col-sm-12 col-md-5 text-center" style="margin-left: 10px;">
					<h2 class="text-center">Not Confirmed Order Details</h2>
						<div class="card-body">
						    <div class="table-responsive-md">
								  	<table class="table table-hover table-bordered table-sm">
										<tr>
											<th>Food MenuId</th>
											<th>Food Name</th>
											<th>Quantity</th>
											<th>Sub Total</th>
										</tr>


<?php  

					$query2 = "SELECT * from cart where customerId = '{$customerId}'";					
					$view2 = mysqli_query($connection, $query2);
    				if($view2){
        				while ($fm2 = mysqli_fetch_assoc($view2)) {

        					$sub = $fm2['itemPrice']*$fm2['foodQuantity'];
?>
	



										<tr>
											<td><?php echo "{$fm2['foodMenuId']}"; ?></td>
											<td><?php echo "{$fm2['itemName']}"; ?></td>
											<td><?php echo "{$fm2['foodQuantity']}"; ?></td>
											<td>Rs.<?php echo $sub; ?>/=</td>
										</tr>

<?php  
	}
}


?>
										<tr>
											<td colspan="3">Grand Total</td>
											<td>Rs.<?php echo "{$fm['total']}"; ?>/=</td>
										</tr>
								  	</table>
							</div>
						</div>
				</div>




				<div class="col-12 col-sm-12 col-md-12 text-center">
						<div class="card-body">
						    <form action="viewNotConfirmedOrderDetail.php" method="post">
							   <!--  <div class="form-group">
								    <label for="resturantStatus" class="col-sm-2 col-form-label">Resturant Remark:</label>
								    <textarea class="form-control" id="resturantStatus" rows="3"></textarea>
								</div> -->
								<!-- <div class="form-group"> -->
								    <!-- <label for="exampleFormControlSelect2">Resturant Status:</label> -->
								    <!-- <select class="form-control" id="exampleFormControlSelect2" name="selectOrderType"> -->
								      <!-- <option value="1">Confirm the Order</option> -->
								      <!-- <option value="2">Cancel the Order</option> -->
<!-- 								      <option>Food B</option>
								      <option>Order Pickup</option>
								      <option>Food Delivered</option> -->
								    <!-- </select> -->
								  </div>
								  <input type="hidden" name="orderIdHidden" value="<?php echo "{$fm['orderId']}"; ?>">							  
							  <!-- <button type="submit" class="btn btn-primary" name="submitStatus">Update</button> -->
							</form>
						</div>
				</div>
<?php		
		}
    }

}

?>

	<div class="col-12 text-center">
		<h2 class="text-center">Resturant Confirmation</h2>
			<div class="card-body">
						 <div class="table-responsive-md">
								<table class="table table-hover table-bordered table-sm">
							<tr>
								<th>Order Id</th>
								<th>Customer Id</th>
								<th>Total</th>
								<th>Status</th>
								<th>Time</th>
							</tr>




<?php

	$query3 = "SELECT * from orderdetails";					
	$view3 = mysqli_query($connection, $query3);
    if($view3){
        while ($fm3 = mysqli_fetch_assoc($view3)) {



?>


										<tr>
											<td><?php echo "{$fm3['orderId']}"; ?></td>
											<td><?php echo "{$fm3['customerId']}"; ?></td>
											<td>Rs.<?php echo "{$fm3['total']}"; ?>/=</td>
											<td><?php echo "{$fm3['orderStatus']}"; ?></td>
											<td><?php echo "{$fm3['orderDate']}"; ?></td>
										</tr>
<?php 	 

		}
	}	

?>


										
								  	</table>
							</div>
						</div>
				</div>
		</div>
	</div>

</div>

<?php 
  include('cashierIncludes/cashierFooter.php');
?>