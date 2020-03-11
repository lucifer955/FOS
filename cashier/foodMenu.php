<?php 
  $page= 'foodMenu';include('adminIncludes/adminHeader.php');
?>

<?php  
	$errors_foodmenu = array();
	$new_item = '';
	$food_desc = '';
	$food_image = '';
	$food_quantity = 0;
	$food_price = 0.0;
	$category_name = '';

	if (isset($_POST['submit_foodmenu'])) {
		
			$category_name = $_POST['category_name'];
			$new_item = $_POST['new_item'];
			$food_desc = $_POST['food_desc'];
			$food_image = $_POST['food_image'];
			$food_quantity = $_POST['food_quantity'];
			$food_price = $_POST['food_price'];

			$req_fields = array('category_name','new_item','food_desc','food_image','food_quantity','food_price');
			
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
		    $new_item = mysqli_real_escape_string($connection,$_POST['new_item']);
		    $query_foodmenu = "SELECT * FROM foodmenu WHERE itemName = '{$new_item}' LIMIT 1";
		    $result_set = mysqli_query($connection, $query_foodmenu);

		    if ($result_set) {
		     	if (mysqli_num_rows($result_set) == 1) {
		      		$errors_foodmenu[] = 'Food Menu name is already exists';      		
	    		}
			}

			if (empty($errors_foodmenu)) {
				//no errors adding new food menu record
				$category_name = mysqli_real_escape_string($connection,$_POST['category_name']);				
				$food_desc = mysqli_real_escape_string($connection,$_POST['food_desc']);
				$food_image = mysqli_real_escape_string($connection,$_POST['food_image']);
				$food_quantity = mysqli_real_escape_string($connection,$_POST['food_quantity']);
				$food_price = mysqli_real_escape_string($connection,$_POST['food_price']);

				$query = "INSERT INTO foodmenu(foodMenuId, itemPrice , foodImage, itemName, itemDescription, itemQuantity, categoryName ) VALUES('','{$food_price}' ,'{$food_image}' ,'{$new_item}' ,'{$food_desc}' ,'{$food_quantity}','{$category_name}')";

// '{$food_image}' foodImage, ,itemPrice,itemDescription,itemQuantity
//,'{$food_desc}','{$food_quantity} ,'{$food_price}'
				$result = mysqli_query($connection, $query);

		      	$message = "New Food Added";
				if ($result) {
					echo "<script type='text/javascript'>alert('$message');</script>";
					$_SESSION["foodMenuId"] = $foodMenuId;						
				}else{
      				$errors_foodmenu[] = 'Failed to add the new Food';
				}
			}
	}
?>



	<div class="adminFoodMenu">
					<div class="col-md-12" > <!-- style="margin-top: 50px;" -->
						<nav aria-label="breadcrumb">
						    <ol class="breadcrumb">
						        <li class="breadcrumb-item"><a href="#">Home</a></li>
						        <li class="breadcrumb-item"><a href="#">Food Menu</a></li>
						        <li class="breadcrumb-item active" aria-current="page">Add Food</li>
						    </ol>
				    	</nav>
					</div>
				</div>

		<div class="container">
				<div class="row justify-content-center">
					<div class="card col-12 col-sm-12 col-md-6">
						<h2 class="text-center">Add Food Item</h2>
						<br>
					  	<br>

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
					  	<br>
					  	<br>						
						<div class="text-center">
							    <div class="card-body">
									<form action="foodMenu.php" method="POST">
									  
<!-- 									  	<form action="foodCategory.php" method="POST"> -->
											<div class="form-group">
											    <label for="exampleFormControlSelect1">Select Food Category</label>
											    <select class="form-control" id="exampleFormControlSelect1" name="category_name">
<?php  

	$option_list = '';

	//getting the list of users
	// $sql = mysqli_query($con, "SELECT categoryName From category");
	// $row = mysqli_num_rows($sql);
	// while ($row = mysqli_fetch_array($sql)){
	// echo "<option value='". $row['categoryName'] ."'>" .$row['categoryName'] ."</option>" ;
	// }

	$query = "SELECT * FROM  category ";	
	$opts = mysqli_query($connection, $query);
	

	if ($opts) {
		while ($opt = mysqli_fetch_assoc($opts)) {
			$option_list = "<option value='{$opt['categoryName']}'>{$opt['categoryName']}</option>";
			echo $option_list;
		}	
	}else{	
		echo 'Database Query Failed';	
	}

?>
<!-- 											      	<option>1</option>
											      	<option>2</option>
											      	<option>3</option>
											      	<option>4</option>
											     	<option>5</option> -->
											    </select>
											</div>  	
<!-- 									  	</form> -->
									  

<!-- 									<form action="foodMenu.php" method="POST"> -->
									  <div class="form-group">
									    <label for="exampleFormControlInput1">Add new food item</label>
									    <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="add new food item" name="new_item" <?php echo 'value="'.$new_item.'"'; ?>>
									  </div>
									  <div class="form-group">
									    <label for="exampleFormControlTextarea1">Description</label>
									    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="food_desc" <?php echo 'value="'.$food_desc.'"'; ?>></textarea>
									  </div>
									  <div class="form-group">
									    <label for="exampleFormControlFile1">Choose Image</label>
									    <input type="file" class="form-control-file" id="exampleFormControlFile1" name="food_image">
									  </div>
									  <div class="form-group">
									    <label for="exampleFormControlInput1">Add Quantity</label>
									    <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="add new food item" name="food_quantity" <?php echo 'value="'.$food_quantity.'"'; ?>>
									  </div>
									  <div class="form-group">
									    <label for="exampleFormControlInput1">Add Price</label>
									    <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="add new food item" name="food_price" <?php echo 'value="'.   $food_price.'"'; ?>>
									  </div>
									  <button type="submit" class="btn btn-primary" name="submit_foodmenu">Submit</button>

									</form>
							</div>
						</div>
					</div>
				</div>

<?php 
  include('adminIncludes/adminFooter.php');
?>