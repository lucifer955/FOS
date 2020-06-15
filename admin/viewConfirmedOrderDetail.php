<?php 
  $page= 'orders';include('adminIncludes/adminHeader.php');
?>
<?php  

	if (isset($_GET['orderId']) && isset($_GET['cutomerId'])) {
		$orderId = $_GET['orderId'];
		$customerId = $_GET['cutomerId'];


?>
<div class="adminViewOrder">
	<div class="col-md-12" >
		<nav aria-label="breadcrumb">
			<ol class="breadcrumb">
				<li class="breadcrumb-item"><a href="#">Home</a></li>
				<li class="breadcrumb-item"><a href="#">Confirmed Order Details</a></li>
				<li class="breadcrumb-item active" aria-current="page">View Confirmed Order Details</li>
			</ol>
		</nav>
	</div>
</div>

<div class="container">
	<div class="card">
		<div class="row justify-content-center">
			<div class="col-12 col-sm-12 col-md-5">
				<h2 class="text-center">Confirmed Order Details</h2>
					<div class="card-body">
					    <div class="table-responsive-md">
							  	<table class="table table-hover table-bordered table-sm">


<?php  

	$sub = 1;

	$queryView = 	"SELECT *
					FROM orderdetails 
					INNER JOIN customer 
					ON orderdetails.customerId=customer.customerId where customer.customerId = '{$customerId}' and orderdetails.orderId='{$orderId}'
					 and orderdetails.orderStatus = 1";

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
										<th>Delivery Type</th>
										<td><?php echo "{$fm['orderType']}"; ?></td>
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
					<h2 class="text-center">Confirmed Order Details</h2>
						<div class="card-body">
						    <div class="table-responsive-md">
								  	<table class="table table-hover table-bordered table-sm">
<!-- statasdahsdjasd -->

<!-- foreach ($order->lineItems as $line) or some such thing here -->
<tr>
                    <td class="thick-line text-left">Food Item</td>
                    <td class="thick-line text-center">Unit Price</td>
                    <td class="thick-line text-center">Quantity</td>
                    <td class="thick-line text-right">Total</td>
                  </tr>

<?php  
$med = 1;
$tot1 = 0;
          $query2 = "


          SELECT * FROM `orderdetails` 
          INNER JOIN checkout ON orderdetails.orderId = checkout.orderId 
          where orderdetails.orderId = $orderId
          ";          
          $view2 = mysqli_query($connection, $query2);
            if($view2){
                while ($fm2 = mysqli_fetch_assoc($view2)) {
                          $med = $fm2['itemPrice']*$fm2['foodQuantity'];
                          $tot1= $tot1+$med;

echo "
                  <tr>
                    <td>{$fm2['itemName']}</td>
                    <td class=\"text-center\">Rs.{$fm2['itemPrice']}.00</td>
                    <td class=\"text-center\">{$fm2['foodQuantity']}</td>
                    <td class=\"text-right\">Rs.$med.00</td>
                  </tr>



";


                }
              }

?>

                  <tr>
                    <td class="thick-line text-center" colspan="3"><strong>Subtotal</strong></td>
                    <td class="thick-line text-right">Rs.<?php echo $tot1; ?>.00</td>
                  </tr>
                  <tr>
                    <td class="no-line text-center" colspan="3"><strong>Delivering</strong></td>
                    <td class="no-line text-right">Rs.0.00</td>
                  </tr>
                  <tr>
                    <td class="no-line text-center" colspan="3"><strong>Total</strong></td>
                    <td class="no-line text-right">Rs.<?php echo $tot1; ?>.00</td>
                  </tr>





<!-- enddddd -->
								  	</table>
							</div>
						</div>
				</div>

<?php	


echo "
<div class=\"col-12 text-center mb-2\">
<a href=\"../loggedUser/invoice.php?orderId={$fm['orderId']}&customerId={$fm['customerId']}\" class=\"btn btn-primary\" name=\"printInvoice\" target='_blank'>Preview the Bill</a>
</div>

";
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