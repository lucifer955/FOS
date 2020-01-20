<!-- include the header files -->
<?php 
  $page= 'cart';include('../includes/loggedHeader.php');

?>

<?php  
	// $category_list = '';
	$usr_id = $_SESSION['user_id'];
	// $foodMenuId = $_SESSION['foodMenuId'];
	$foodMenuId = $_GET['foodMenuId'];

	//getting the list of categories
	$query_cart = "SELECT * FROM foodmenu where foodMenuId = $foodMenuId";

	$categories = mysqli_query($connection, $query_cart);


	if($categories){
		while ($cart = mysqli_fetch_assoc($categories)) {
			$query = "INSERT INTO cart (foodMenuId,itemName,foodImage,itemPrice) VALUES ('{$cart['foodMenuId']}','{$cart['itemName']}','{$cart['foodImage']}','{$cart['itemPrice']}')";

      		$result = mysqli_query($connection,$query);
      		$message = "New Category Added";

      		if ($result) {
      				$foodMenuId =  $cart['foodMenuId'];
      			echo "<script type='text/javascript'>alert('$message');</script>";	
      		}		
		}
	}


?>

<?php  
	$errors_cart = array();
	$food_id = '';
	$flatOrBuildingNumber = '';
	$streetName = '';
	$area = '';
	$city = '';
	$deliver_type = '';
	$food_qty = '';

	$ordergroup = 0;

	if (isset($_POST['orderAnother'])) {
		
			$flatOrBuildingNumber = $_POST['flatOrBuildingNumber'];
			$streetName = $_POST['streetName'];
			$area = $_POST['area'];
			$landmark = $_POST['landmark'];
			$city = $_POST['city'];
			$deliver_type = $_POST['deliver_type'];
			$food_qty = $_POST['food_qty'];
			$food_id = $_POST['food_id'];


			// $usr = ($_SESSION['user_id']);



			$req_fields = array('food_id','flatOrBuildingNumber','streetName','area','landmark', 'city','deliver_type','food_qty');
			
			//checking required fields
			// if (empty(trim($_POST['new_item']))) {
			// 	$errors_foodmenu[] = 'newsakdas';
			// }
			foreach ($req_fields as $field) {
				if (empty(trim($_POST[$field]))) {
							$errors_foodmenu[] = $field . ' is required';
				}
			}
			//if category name is already exists

			if (empty($errors_foodmenu)) {
				//no errors adding new food menu record
				$flatOrBuildingNumber =  mysqli_real_escape_string($connection,$_POST['flatOrBuildingNumber']);
				$streetName =  mysqli_real_escape_string($connection,$_POST['streetName']);
				$area =  mysqli_real_escape_string($connection,$_POST['area']);
				$landmark =  mysqli_real_escape_string($connection,$_POST['landmark']);
				$city =  mysqli_real_escape_string($connection,$_POST['city']);
				$deliver_type =  mysqli_real_escape_string($connection,$_POST['deliver_type']);
				$food_qty =  mysqli_real_escape_string($connection,$_POST['food_qty']);
				$food_id =  mysqli_real_escape_string($connection,$_POST['food_id']);



				$query = "INSERT INTO 
				orderdetails(orderNo, flatBuildingNo, area, landMark, streetName, city,orderType, quantity,customerId,foodMenuId) 
						VALUES('' , '{$flatOrBuildingNumber}' ,'{$area}' ,'{$landmark}','{$streetName}','{$city}', '{$deliver_type}', '{$food_qty}','{$usr_id}','{$food_id}')";

				$result = mysqli_query($connection, $query);

		      	$message = "New order Added";
				if ($result) {
					echo "<script type='text/javascript'>alert('$message');</script>";
					header('Location: foodMenu.php');				
				}else{
      				$errors_foodmenu[] = 'Failed to add the new Food';
				}
			}
	}


	if (isset($_POST['orderNow'])) {
			$flatOrBuildingNumber = $_POST['flatOrBuildingNumber'];
			$streetName = $_POST['streetName'];
			$area = $_POST['area'];
			$landmark = $_POST['landmark'];
			$city = $_POST['city'];
			$deliver_type = $_POST['deliver_type'];
			$food_qty = $_POST['food_qty'];
			$food_id = $_POST['food_id'];

			// $usr = ($_SESSION['user_id']);

			$req_fields = array('food_id','flatOrBuildingNumber','streetName','area','landmark', 'city','deliver_type','food_qty');
			
			//checking required fields
			// if (empty(trim($_POST['new_item']))) {
			// 	$errors_foodmenu[] = 'newsakdas';
			// }
			foreach ($req_fields as $field) {
				if (empty(trim($_POST[$field]))) {
							$errors_foodmenu[] = $field . ' is required';
				}
			}
			//if category name is already exists

			if (empty($errors_foodmenu)) {
				//no errors adding new food menu record
				$flatOrBuildingNumber =  mysqli_real_escape_string($connection,$_POST['flatOrBuildingNumber']);
				$streetName =  mysqli_real_escape_string($connection,$_POST['streetName']);
				$area =  mysqli_real_escape_string($connection,$_POST['area']);
				$landmark =  mysqli_real_escape_string($connection,$_POST['landmark']);
				$city =  mysqli_real_escape_string($connection,$_POST['city']);
				$deliver_type =  mysqli_real_escape_string($connection,$_POST['deliver_type']);
				$food_qty =  mysqli_real_escape_string($connection,$_POST['food_qty']);
				$food_id =  mysqli_real_escape_string($connection,$_POST['food_id']);


				$query = "INSERT INTO 
				orderdetails(orderNo, flatBuildingNo, area, landMark, streetName, city,orderType, quantity,customerId,foodMenuId) 
						VALUES('' , '{$flatOrBuildingNumber}' ,'{$area}' ,'{$landmark}','{$streetName}','{$city}', '{$deliver_type}', '{$food_qty}','{$usr_id}','{$food_id}')";

				$result = mysqli_query($connection, $query);

		      	$message = "New order Added";
				if ($result) {
					
					echo "<script type='text/javascript'>alert('$message');</script>";
					header('Location: orders.php');
				}else{
      				$errors_foodmenu[] = 'Failed to add the new Food';
				}
			}
	}

?>


<div class="loggedCart">
	<div class="container">
		<div class="col-md-12"> <!-- style="margin-top: 50px;" -->		
			<nav aria-label="breadcrumb">
			    <ol class="breadcrumb">
			        <li class="breadcrumb-item"><a href="#">Home</a></li>
			        <li class="breadcrumb-item active" aria-current="page">Cart</li>
			    </ol>
	    	</nav>
		</div>
		<div class="row">
			<div class="col-md-8 col-lg-8">
				<div class="card">
				  <div class="card-header">
				    Cart Items
				  </div>
				  <div class="card-body">
				      <table class="table table-hover table-bordered">
						  <thead>
						    <tr class="text-center">
						      <th scope="col">Food ID</th>
						      <th scope="col">Name</th>
						      <th scope="col">Image</th>
						      <th scope="col">Unit<br>Price</th>
						    </tr>
						  </thead>
						  <tbody>
<?php  

	$query_cart1 = "SELECT * FROM cart";
	$categories1 = mysqli_query($connection, $query_cart1);
	if($categories1){
		while ($cart1 = mysqli_fetch_assoc($categories1)) {
			echo "<tr class=\"text-center\">";
			echo "<td class=\"align-middle\">{$cart1['foodMenuId']}</td>";
			echo "<td class=\"align-middle\">{$cart1['itemName']}</td>";
			echo "<td class=\"align-middle\" style=\"width:200px;height:200px;\"><img class=\"card-img-top\" src=\"../images/{$cart1['foodImage']}\" alt=\"Card image cap\"></td>";
			echo "<td class=\"align-middle\">{$cart1['itemPrice']}</td>";
			echo "</tr>";
		}
	}



?>
						  </tbody>
						</table>
				  </div>
				</div>
			</div>
			<div class="col-md-4 col-lg-4 " id="shoppingCart">
				<div class="card text-center">
				  <div class="card-header">
				   	Your Shopping Cart
				  </div>

				  <?php  

					  		if (!empty($errors_foodmenu)) {
					  			echo '<div class="errmsg">';
					  			echo '<b>There were error(s)</b><br>';
					  			foreach ($errors_foodmenu as $error) {
					  				echo '- ' . $error . '<br>';
					  			}
					  			echo '</div>';
					  		}

					  	?>
				  <div class="card-body">
				    <h5 class="card-title"><strong>Enter Your Location Here</strong></h5>

				    <form action="cart.php" method="post">

				    	<div class="form-group loc">
				    		<label class="col-12 control-label text-center">Enter the Food Id</label>
				    		<input type="text" name="food_id" placeholder="Food Id" style="margin: 2px 0 2px 0;">
				    		<br>
				    		<br>
				    		<label class="col-12 control-label text-center" >Enter the Location Details</label>
				    		<input type="text" name="flatOrBuildingNumber" placeholder="Flat or Building Number" style="margin: 2px 0 2px 0;">
					    	<input type="text" name="streetName" placeholder="Street Name" style="margin: 2px 0 2px 0;">
					    	<input type="text" name="area" placeholder="Area" style="margin: 2px 0 2px 0;">
					    	<input type="text" name="landmark" placeholder="If any Landmark" style="margin: 2px 0 2px 0;">
					    	<input type="text" name="city" placeholder="City" style="margin: 2px 0 2px 0;">
				    	</div>
						    <div class="row justify-content-center">
						     <label class="col-12 control-label" ><strong>Choose</strong></label>
							    <div class="col-8">
							     <select name="deliver_type" class="form-control">
							      <option>Delivery</option>
							      <option>Take Away</option>
							     </select>
							    </div>
						    </div>
						        		
<!-- 						    <div class="row justify-content-center" style="margin-top: 10px;">
						     <label class="col-12 control-label" ><strong>Size</strong></label>
							    <div class="col-8">
							     <select name="food_size" class="form-control">
							      <option>Medium</option>
							      <option>Large</option>
							      <option>Small</option>
							     </select>
							    </div>
						    </div> -->
						    <div class="row justify-content-center" style="margin-top: 10px;">
						     <label class="col-12 control-label" ><strong>Quantity</strong></label>
							    <div class="col-8 text-center">
							     <select name="food_qty" class="form-control">
							      <option>1</option>
							      <option>2</option>
							      <option>3</option>
							      <option>4</option>
							      <option>5</option>
							      <option>6</option>
							      <option>7</option>
							      <option>8</option>
							      <option>9</option>
							      <option>10</option>
							     </select>
							    </div>
						    </div>
						    <button type="submit" class="btn btn-primary" name="orderAnother" style="margin: 20px 0 10px 0;">Order another</button><br>
						    <button type="submit" class="btn btn-primary" name="orderNow" style="margin: 20px 0 10px 0;">Order Now</button>

				    	</form>

				    </div>
				</div>
			 <!--  -->
				  <div class="card-footer text-center">
				    <h3>Total</h3>
				    <h4>Rs.499/=</h4>
				    <h5 style="margin-top: 5px;">Free Delivery</h5>
				  </div>
			</div>	
		</div>
	</div>	
</div>

<!-- include the footer files -->
<?php 
  include('../includes/loggedFooter.php');
?>


