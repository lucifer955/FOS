<!-- include the header files -->
<?php 
  $page= 'myOrders';include('../includes/loggedHeader.php');
?>
<?php

	$usr_id = $_SESSION['user_id'];
$med = 1;
$tot=0;
$query_cart3 = "SELECT * FROM cart where customerId= '{$usr_id}'";
	$categories1 = mysqli_query($connection, $query_cart3);

		if($categories1){

			while ($cart1 = mysqli_fetch_assoc($categories1)) {		

				$med = $cart1['itemPrice']*$cart1['foodQuantity'];
				$tot = $tot + $med;
			}
		}



?>
<?php  

?>

<?php 

	// $category_list = '';
	$usr_id = $_SESSION['user_id']; 
	$errors_foodmenu = array();
	$food_id = '';
	$flatOrBuildingNumber = '';
	$streetName = '';
	$area = '';
	$city = '';
	$deliver_type = '';



	if (isset($_POST['orderNow'])) {
			$flatOrBuildingNumber = $_POST['flatOrBuildingNumber'];
			$streetName = $_POST['streetName'];
			$area = $_POST['area'];
			$landmark = $_POST['landmark'];
			$city = $_POST['city'];
			$deliver_type = $_POST['deliver_type'];


			// $usr = ($_SESSION['user_id']);

			$req_fields = array('flatOrBuildingNumber','streetName','area','landmark', 'city','deliver_type');

			foreach ($req_fields as $field) {
				if (empty(trim($_POST[$field]))) {
							$errors_foodmenu[] = $field . ' is required';
				}
			}

			//if there is no any errors
			if (empty($errors_foodmenu)) {
				//no errors adding new food menu record
				$flatOrBuildingNumber =  mysqli_real_escape_string($connection,$_POST['flatOrBuildingNumber']);
				$streetName =  mysqli_real_escape_string($connection,$_POST['streetName']);
				$area =  mysqli_real_escape_string($connection,$_POST['area']);
				$landmark =  mysqli_real_escape_string($connection,$_POST['landmark']);
				$city =  mysqli_real_escape_string($connection,$_POST['city']);
				$deliver_type =  mysqli_real_escape_string($connection,$_POST['deliver_type']);


				$query = "INSERT INTO 
				orderdetails(
				orderId, 
				flatBuildingNo, 
				area, 
				landMark, 
				streetName, 
				city,
				orderType, 
				customerId,
				orderDate,
				total)

				VALUES(
				'', 
				'{$flatOrBuildingNumber}',
				'{$area}',
				'{$landmark}',
				'{$streetName}',
				'{$city}',
				'{$deliver_type}',
				'{$usr_id}',
				NOW(),
				'$tot'
			)";

				$result = mysqli_query($connection, $query);


				if ($result) {
		      		$message = "New order Added";					
					echo "<script type='text/javascript'>alert('$message');</script>";
					header('Location: orders.php');
				}else{
      				$errors_foodmenu[] = 'Failed to add the new Food';
				}
			}


	}
?>

<div class="loggedOrders">
	<div class="container">
		<div class="col-md-12"> <!-- style="margin-top: 50px;" -->
			<nav aria-label="breadcrumb">
			    <ol class="breadcrumb">
			        <li class="breadcrumb-item"><a href="#">Home</a></li>
			        <li class="breadcrumb-item"><a href="#">Orders</a></li>
			        <li class="breadcrumb-item active" aria-current="page">Order Details</li>
			    </ol>
	    	</nav>
		</div>
	</div>

	<div class="container">
		<div class="row justify-content-around">
			<div class="col-8 text-center">
				
				<table class="table table-hover table-responsive-sm table-sm">
				  <thead>
				    <tr>
				  <!--     <th scope="col">Cart  Id</th> -->
				      <th class=" p-3 mb-2 bg-info text-white" scope="col">Food Id</th>
				      <th class=" p-3 mb-2 bg-info text-white" scope="col"></th>
				      <th class=" p-3 mb-2 bg-info text-white" scope="col">Food Name</th>
				      <th class=" p-3 mb-2 bg-info text-white"scope="col">Price</th>
				      <th class=" p-3 mb-2 bg-info text-white" scope="col">Quantity</th>
				      <th class=" p-3 mb-2 bg-info text-white" scope="col">Sub Total</th>
				      <th class=" p-3 mb-2 bg-info text-white" scope="col"></th>

				    </tr>
				  </thead>
				  <tbody>

<?php  
	$query_cart1 = "SELECT * FROM cart where customerId= '{$usr_id}'";
	$categories1 = mysqli_query($connection, $query_cart1);

			if($categories1){
				$x=0;
					while ($cart1 = mysqli_fetch_assoc($categories1)) {
						$x=$x+1;
			echo "		<form method='post' action='cart.php'>		  		
						<tr>
						  <td  class=\"align-middle\" id=\"menuId\">{$cart1['foodMenuId']}</td>
					      <td  class=\"align-middle\"><img src=\"../images/{$cart1['foodImage']}\" height=\"50px\" width=\"70px\"></td>
					      <td class=\"align-middle\">{$cart1['itemName']}</td>
					      <td class=\"align-middle\" id=\"unitPrice$x\">{$cart1['itemPrice']}.00</td>
					      <td class=\"align-middle\">{$cart1['foodQuantity']}</td>
					     ";
					     $med = $cart1['itemPrice']*$cart1['foodQuantity'];
			echo " 
					      <td class=\"align-middle\"  id=\"subTotal$x\">".$med.".00</td>

					      <td class=\"align-middle\"><i class=\"fa fa-window-close\" style=\"color: red\" onclick=\"dltfunc(document.getElementById('del$x'))\"></i></td>
					      
					      <input type='hidden' value='1' name='subData$x' id='IDsubData$x'> 
					      <input type='hidden' id='del$x' name='foodmID$x' value={$cart1['foodMenuId']}>


					    </tr>	";

			

					}
					echo "<input type='hidden' name='counter' value=$x>";
}
	echo "

			<tr>
				<td class='text-middle  p-2 mb-2  text-primary' colspan='5'><b>Total</b></td>
				<td class='align-middle p-2 mb-2 bg-success text-white' colspan='2'>Rs.".$tot."/=</td>
			</tr>
			
			";
?>
		    		
				  </tbody>
				</table>
				<div class="row">
					<div class="col-auto mr-auto"><button type="button" class="btn btn-primary btn-sm">Continue shopping</button></div>
<!-- 				  	<div class="col-auto"><button type="submit" name="updateCart" class="btn btn-success btn-sm">OrderNow</button></div> -->
				  </form>
				</div>
				<div class="row">
					

				</div>
			</div>

			<div class="col-3">

				<div class="card">
				  <div class="card-body text-center">
				<h5 class="card-title"><strong>Enter Your Location Here</strong></h5>
<?php  

	if (!empty($errors_foodmenu)) {
		echo '<div class="text-danger">';
		echo '<b>*There were missing field(s)</b><br>';
		// foreach ($errors_foodmenu as $error) {
		// 	echo '- ' . $error . '<br>';
		// }
		echo '</div>';
	}

?>
				    <form action="orderdetails.php" method="post">

				    	<div class="form-group loc">
				    		<input class="text-center" type="text" name="flatOrBuildingNumber" placeholder="Flat or Building Number" style="margin: 2px 0 2px 0; border-radius: 0.4rem;">
					    	<input class="text-center" type="text" name="streetName" placeholder="Street Name" style="margin: 2px 0 2px 0; border-radius: 0.4rem;">
					    	<input class="text-center" type="text" name="area" placeholder="Area" style="margin: 2px 0 2px 0; border-radius: 0.4rem;"
					    	>
					    	<input class="text-center" type="text" name="landmark" placeholder="If any Landmark" style="margin: 2px 0 2px 0; border-radius: 0.4rem;"
					    	>
					    	<input  class="text-center" type="text" name="city" placeholder="City" style="margin: 2px 0 2px 0; border-radius: 0.4rem;"
					    	>
				    	</div>
						    <div class="row justify-content-center">
						     <label class="col-12 control-label" ><strong>Choose</strong></label>
							    <div class="col-8">
							     <select name="deliver_type" class="form-control form-control-sm">
							      <option>Delivery</option>
							      <option>Take Away</option>
							     </select>
							    </div>
						    </div>
						    <div class="row justify-content-center" >
						    	<button type="submit" class="btn btn-success btn-sm btn-block" name="orderNow" style="margin: 20px 0 10px 0;"  onclick="orderdata()">Order Now</button>
						    	
						    </div>


				    	</form>

				    <div>
				    </div>	

				    </div>

				  </div>
				</div>

			</div>
		</div>
	</div>

	
</div>

<script type="text/javascript">
	function dltfunc(m){
		var x = parseInt(m.value);
		// alert(x);

		$.ajax({
			method : "post",
			url : "delete.php",
			data : {foodid: x},
			success:function(result){

				alert(result);
				location.reload(true);
			}
		})


	}

	function orderdata(){
		alert("Order Added");
	}
</script>

<!-- include the footer files -->
<?php
	// $qw = "truncate table orderdetails";
	// $rs = mysqli_query($connection,$qw);
  include('../includes/loggedFooter.php');
?>