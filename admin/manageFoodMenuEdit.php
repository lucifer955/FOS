<?php 
  $page= 'manageFoodMenu';include('adminIncludes/adminHeader.php');
?>
<?php  

if (isset($_POST['UpdateMenu'])) {
    	
    	$foodNameId = $_POST['foodNameId'];
    	$namefoodMenu = $_POST['namefoodMenu'];
    	$foodQuantity = $_POST['food_quantity'];
    	$foodPrice = $_POST['food_price'];    	
		$query =  "UPDATE foodmenu 
		SET itemName = '{$namefoodMenu}',
		itemQuantity = '{$foodQuantity}',
		itemPrice = '{$foodPrice}'
		WHERE foodMenuId =  {$foodNameId}";
        $rs = mysqli_query($connection,$query);

        if ($rs) {
        	$msg = "Food Menu Details Updated";
          	echo "<script type='text/javascript'>alert('$msg');</script>";
          	echo "<script type='text/javascript'>window.location.href =\"manageFoodMenu.php\";</script>";
        }else{

        	// $msg = "Error Updated";
         //  	echo "<script type='text/javascript'>alert('$msg');</script>";
        }


} else if (isset($_POST['DeleteMenu'])) {

		$foodMenuId = $_POST['foodNameId'];

    	$query = "DELETE FROM foodmenu WHERE foodMenuId = {$foodMenuId}";
		$rs = mysqli_query($connection,$query);

		if ($rs) {
        	$msg = "Food Item deleted Deleted";
          	echo "<script type='text/javascript'>alert('$msg');</script>";
          	echo "<script type='text/javascript'>window.location = 'manageFoodMenu.php';</script>";
          			
		}
} else {
    //invalid action!
}




?>
<div class="adminFoodCategory">
			<div class="col-md-12" > <!-- style="margin-top: 50px;" -->
				<nav aria-label="breadcrumb">
				    <ol class="breadcrumb">
				        <li class="breadcrumb-item"><a href="#">Home</a></li>
				        <li class="breadcrumb-item"><a href="#">Manage Food Menu</a></li>
				        <li class="breadcrumb-item active" aria-current="page">Food Menu Update & Delete</li>
				    </ol>
		    	</nav>
			</div>
		</div>
	<div class="container">
		<div class="row justify-content-center">
			<div class="card col-12 col-sm-12 col-md-6">
				<h2 class="text-center">Manage Food Items</h2>
				<div class="text-center">
					  <div class="card-body">
<?php  
		if(isset($_GET['foodMenuId'])) {
			$foodMenuId = $_GET['foodMenuId'];



		$query_reg = "SELECT * FROM foodmenu where foodMenuId = {$foodMenuId}";
		$users = mysqli_query($connection, $query_reg);

  		if($users){
			while ($user = mysqli_fetch_assoc($users)) {
			$foodName = $user['itemName'];
			$foodMenuId = $user['foodMenuId'];
			$foodDesc = $user['itemDescription'];
			$foodQuantity = $user['itemQuantity'];
			$foodImage = $user['foodImage'];
			$foodPrice = $user['itemPrice'];
			}
		}	  	
?>

			<form action='manageFoodMenuEdit.php' method='POST'>
				<div class="form-group">
					<input type="text" class="form-control" id="exampleInputFoodMenu" aria-describedby="foodMenuHelp" value="<?php echo $foodName; ?>" name='namefoodMenu'>
				</div>
				<div class="form-group">
					<label for="exampleFormControlInput1">Add Quantity</label>
					<input type="text" class="form-control" id="exampleFormControlInput1" placeholder="add new food item" name="food_quantity" value="<?php echo $foodQuantity; ?>">
				</div>
				<div class="form-group">
					<label for="exampleFormControlInput1">Add Price</label>
					<input type="text" class="form-control" id="exampleFormControlInput1" placeholder="add new food item" name="food_price" value="<?php echo $foodPrice; ?>">
				</div>
		
				<div class="row justify-content-center">
				<div class="text-center">
					<button type="submit" class="btn btn-primary" name="UpdateMenu">Update</button>
					<button type="submit" class="btn btn-danger" name="DeleteMenu">Delete</button>
				</div>

				<input type='hidden' id='' name='foodNameId' value="<?php echo $foodMenuId; ?>" >
			</div>
			</form>




<?php
}
?>							
				  </div>
				</div>
			</div>
	</div>
	

<?php 
  include('adminIncludes/adminFooter.php');
?>