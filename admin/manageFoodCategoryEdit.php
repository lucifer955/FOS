<?php 
  $page= 'foodCategory';include('adminIncludes/adminHeader.php');
?>
<?php  

if (isset($_POST['Update'])) {
    	
    	$categoryId = $_POST['categoryIdx'];
    	$categoryName = $_POST['nameCategory'];
		$query =  "UPDATE category 
		SET categoryName = '{$categoryName}'
		WHERE categoryId =  {$categoryId}";
        $rs = mysqli_query($connection,$query);

        if ($rs) {
        	$msg = "Category Details Updated";
          	echo "<script type='text/javascript'>alert('$msg');</script>";
          	echo "<script type='text/javascript'>window.location.href = \"manageFoodCategory.php\";</script>";
        }else{

        	// $msg = "Error Updated";
         //  	echo "<script type='text/javascript'>alert('$msg');</script>";
        }


} else if (isset($_POST['Delete'])) {

		$categoryId = $_POST['categoryIdx'];
		$categoryName = $_POST['nameCategory'];

    	$query = "DELETE FROM category WHERE categoryId = {$categoryId}";
		$rs = mysqli_query($connection,$query);

		if ($rs) {
        	$msg = "Category Deleted";
          	echo "<script type='text/javascript'>alert('$msg');</script>";
          	echo "<script type='text/javascript'>window.location = 'manageFoodCategory.php';</script>";
          			
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
				        <li class="breadcrumb-item"><a href="#">Manage Food Category</a></li>
				        <li class="breadcrumb-item active" aria-current="page">Food Category Update & Delete</li>
				    </ol>
		    	</nav>
			</div>
		</div>
	<div class="container">
		<div class="row justify-content-center">
			<div class="card col-12 col-sm-12 col-md-6">
				<h2 class="text-center">Manage Food Category</h2>
				<div class="text-center">
					  <div class="card-body">
<?php  
		if(isset($_GET['categoryId'])) {
			$categoryId = $_GET['categoryId'];



		$query_reg = "SELECT * FROM category where categoryId = {$categoryId}";
		$users = mysqli_query($connection, $query_reg);

  		if($users){
			while ($user = mysqli_fetch_assoc($users)) {
			$categoryName = $user['categoryName'];
			$categoryId = $user['categoryId'];
			}
		}	  	
?>

			<form action='manageFoodCategoryEdit.php' method='POST'>
				<div class="form-group">
					<input type="text" class="form-control" id="exampleInputFoodCategory" aria-describedby="foodCategoryHelp" value="<?php echo $categoryName; ?>" name='nameCategory'>
				</div>
				<div class="row justify-content-center">
				<div class="text-center">
					<button type="submit" class="btn btn-primary" name="Update">Update</button>
					<button type="submit" class="btn btn-danger" name="Delete">Delete</button>
				</div>

				<input type='hidden' id='' name='categoryIdx' value="<?php echo $categoryId; ?>" >
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