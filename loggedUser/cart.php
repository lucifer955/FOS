<!-- include the header files -->
<?php 
  $page= 'cart';include('../includes/loggedHeader.php');
?>

<?php  
	
	// $category_list = '';
	$usr_id = $_SESSION['user_id'];

	//getting the list of categories
	$query_cart = "SELECT * FROM foodmenu where foodMenuId = '$usr_id'";
	$categories = mysqli_query($connection, $query_cart);

	$query_cart1 = "SELECT * FROM orderdetails where foodMenuId = '$usr_id'";
	$categories1 = mysqli_query($connection, $query_cart);


?>

<?php  
	$errors_cart = array();
	$flatOrBuildingNumber = '';
	$streetName = '';
	$area = '';
	$city = '';
	$deliver_type = '';
	$food_size = '';
	$food_qty = '';

	if (isset($_POST['orderNow'])) {
		
			$flatOrBuildingNumber = $_POST['flatOrBuildingNumber'];
			$streetName = $_POST['streetName'];
			$area = $_POST['area'];
			$landmark = $_POST['landmark'];
			$city = $_POST['city'];
			$deliver_type = $_POST['deliver_type'];
			$food_size = $_POST['food_size'];
			$food_qty = $_POST['food_qty'];
			// $usr = ($_SESSION['user_id']);



			$req_fields = array('flatOrBuildingNumber','streetName','area','landmark', 'city','deliver_type','food_size','food_qty');
			
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
				$food_size =  mysqli_real_escape_string($connection,$_POST['food_size']);
				$food_qty =  mysqli_real_escape_string($connection,$_POST['food_qty']);


				$query = "INSERT INTO 
				orderdetails(orderNo, flatBuildingNo, area, landMark, streetName, city, foodSize ,orderType, quantity, customerId, netPrice) 
						VALUES('' , '{$flatOrBuildingNumber}' ,'{$area}' ,'{$landmark}','{$streetName}','{$city}','{$food_size}', '{$deliver_type}', '{$food_qty}', '{$usr_id}', '{$food_price}')";

// '{$food_image}' foodImage, ,itemPrice,itemDescription,itemQuantity
//,'{$food_desc}','{$food_quantity} ,'{$food_price}' // , '{$_SESSION['user_id']}' 
				//orderType, quantity, ,'{$deliver_type}'  , ,  '{$food_qty}'


				$result = mysqli_query($connection, $query);

		      	$message = "New order Added";
				if ($result) {
					echo "<script type='text/javascript'>alert('$message');</script>";
						$flatOrBuildingNumber = '';					
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

	// $usr_id = $_GET['foodMenuId'];
	// $food_price = $_GET['itemPrice'];

	$usr = $usr_id;
	$price = $food_price;

	if($categories){
		while ($cart = mysqli_fetch_assoc($categories)) {
			echo "<tr class=\"text-center\">";
			echo "<td class=\"align-middle\">{$cart['foodMenuId']}</td>";
			echo "<td class=\"align-middle\">{$cart['itemName']}</td>";
			echo "<td class=\"align-middle\" style=\"width:200px;height:200px;\"><img class=\"card-img-top\" src=\"../images/{$cart['foodImage']}\" alt=\"Card image cap\"></td>";
			echo "<td class=\"align-middle\">{$cart['itemPrice']}</td>";
			echo "</tr>";
		}
	}

?>
<!-- 						    <tr class="text-center">
							  <td class="align-middle">1</td>
							  <td class="align-middle"></td>
						      <td class="align-middle" ><img src="..\images\bg2.png" alt="..." class="img-thumbnail"><br>Cheese Pizza</td>
						      <td class="align-middle">Rs.499</td>
						    </tr> -->
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
						        		
						    <div class="row justify-content-center" style="margin-top: 10px;">
						     <label class="col-12 control-label" ><strong>Size</strong></label>
							    <div class="col-8">
							     <select name="food_size" class="form-control">
							      <option>Medium</option>
							      <option>Large</option>
							      <option>Small</option>
							     </select>
							    </div>
						    </div>
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