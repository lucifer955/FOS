<?php 
  $page= 'orders';include('adminIncludes/adminHeader.php');
?>

<?php  

	if (isset($_GET['orderId'])) {
		$orderId = $_GET['orderId'];
		$customerId = $_GET['cutomerId'];


?>
<div class="adminViewOrder">
	<div class="col-md-12" >
		<nav aria-label="breadcrumb">
			<ol class="breadcrumb">
				<li class="breadcrumb-item"><a href="#">Home</a></li>
				<li class="breadcrumb-item"><a href="#">canceled Order Details</a></li>
				<li class="breadcrumb-item active" aria-current="page">View canceled Order Details</li>
			</ol>
		</nav>
	</div>
</div>

<div class="container">
	<div class="card">
		<div class="row justify-content-center">
			<div class="col-12 col-sm-12 col-md-5">
				<h2 class="text-center">Canceled Order Details</h2>
					<div class="card-body">
					    <div class="table-responsive-md">
							  	<table class="table table-hover table-bordered table-sm">


<?php  

	$sub = 1;

	$queryView = 	"SELECT *
					FROM orderdetails 
					INNER JOIN customer 
					ON orderdetails.customerId=customer.customerId where customer.customerId = '{$customerId}' and orderdetails.orderId='{$orderId}'
					 and orderdetails.orderStatus = 2";

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
					<h2 class="text-center">Canceled Order Details</h2>
						<div class="card-body">
						    <div class="table-responsive-md">
								  	<table class="table table-hover table-bordered table-sm">
<!-- 										<tr>
											<th>Food MenuId</th>
											<th>Food Name</th>
											<th>Quantity</th>
											<th>Sub Total</th>
										</tr>
 -->

<?php  

					$query2 = "SELECT * from cart where customerId = '{$customerId}'";					
					$view2 = mysqli_query($connection, $query2);
    				if($view2){
        				while ($fm2 = mysqli_fetch_assoc($view2)) {

        					$sub = $fm2['itemPrice']*$fm2['foodQuantity'];
?>
	



<!-- 										<tr>
											<td><?php echo "{$fm2['foodMenuId']}"; ?></td>
											<td><?php echo "{$fm2['itemName']}"; ?></td>
											<td><?php echo "{$fm2['foodQuantity']}"; ?></td>
											<td>Rs.<?php echo $sub; ?>/=</td>
										</tr> -->

<?php  
	}
}


?>
										<tr>
											<td colspan="3"><b>Grand Total</b></td>
											<td>Rs.<?php echo "{$fm['total']}"; ?>/=</td>
										</tr>
								  	</table>
							</div>
						</div>
				</div>

<?php		
		}
    }

}

?>
		</div>
	</div>
</div>

<?php 
  include('adminIncludes/adminFooter.php');
?>