
<?php 
  $page= 'foodCategory';include('adminIncludes/adminHeader.php');
?>

<?php  
  $errors_category = array();

  if (isset($_POST['submit_category'])) {
      
      //checking requirement fields
      if (empty(trim($_POST['category_name']))) {
        $errors_category[] = 'Enter a category name';
      }

      //if category name is already exists
      $category_name = mysqli_real_escape_string($connection,$_POST['category_name']);
      $query_category = "SELECT * FROM category WHERE categoryName = '{$category_name}' LIMIT 1";
      $result_set = mysqli_query($connection, $query_category);

      if ($result_set) {
      	if (mysqli_num_rows($result_set) == 1) {
      		$errors_category[] = 'Category name is already exists';      		
      	}
      }

      if (empty($errors_category)) {
      	//adding new category

      	$query = "INSERT INTO category (categoryId,categoryName,creationDate) VALUES ('','{$category_name}',NOW())";

      	$result = mysqli_query($connection,$query);
      	$message = "New Category Added";


      	if ($result) {
      		echo "<script type='text/javascript'>alert('$message');</script>";	
      	}
      	else{
      		$errors_category[] = 'Failed to add the new category';
      	}
      }
    } 

?>
<div class="adminFoodCategory">
			<div class="col-md-12" >
				<nav aria-label="breadcrumb">
				    <ol class="breadcrumb">
				        <li class="breadcrumb-item"><a href="#">Home</a></li>
				        <li class="breadcrumb-item active" aria-current="page">Food Category</li>
				    </ol>
		    	</nav>
			</div>

	<<div class="container">
		<div class="row justify-content-center">
			<div class="card col-12 col-sm-12 col-md-6">

				<h2 class="text-center">Manage Food Category</h2>
						<br>
					  	<br>

						<?php  

					  		if (!empty($errors_category)) {
					  			echo '<div class="errmsg">';
					  			echo '<b>There were error(s)</b><br>';
					  			foreach ($errors_category as $error) {
					  				echo $error . '<br>';
					  			}
					  			echo '</div>';
					  		}

					  	?>
					  	<br>
					  	<br>
				<div class="text-center">
<!-- 					  <h5 class="card-header">Search</h5> -->
					  <div class="card-body">

					  	
					    <form action="foodCategory.php" method="POST">
							  <div class="form-group">
							    <input type="text" class="form-control" id="exampleInputFoodCategory" aria-describedby="foodCategoryHelp" placeholder="Add a food category" name="category_name">
							  </div>

							  <button type="submit" name="submit_category" class="btn btn-primary">Add</button>
						</form>
				  </div>
				</div>
			</div>
		</div>
	</div>
</div>

<?php 
  include('adminIncludes/adminFooter.php');
?>