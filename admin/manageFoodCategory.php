<?php 
  $page= 'manageFoodCategory';include('adminIncludes/adminHeader.php');
?>

<div class="adminManageFoodCategory">
	<div class="col-md-12" >
		<nav aria-label="breadcrumb">
			<ol class="breadcrumb">
				<li class="breadcrumb-item"><a href="#">Home</a></li>
				<li class="breadcrumb-item"><a href="#">Food Category</a></li>
				<li class="breadcrumb-item active" aria-current="page"> Manage Food Category</li>
			</ol>
		</nav>
	</div>
</div>
<div class="container">
	<div class="row justify-content-center">
		<div class="card col-12 text-center">
				<h2 class="text-center">Manage Food Category </h2>
					<div class="card-body">
					    <div class="table-responsive-md">
							  	<table class="table table-hover table-bordered">
									<thead>
									    <tr>
									      <th scope="col">S.NO</th>
									      <th scope="col">Category Name</th>
									      <th scope="col">Creation Date</th>
									      <th scope="col">Action</th>
									    </tr>
									  </thead>
									  <tbody>

<?php  

	// $category_list = '';

	//getting the list of categories
	$query_cat = "SELECT * FROM category";
	$categories = mysqli_query($connection, $query_cat);

	if($categories){
		while ($cat = mysqli_fetch_assoc($categories)) {
			echo "<tr>";
			echo "<td>{$cat['categoryId']}</td>";
			echo "<td>{$cat['categoryName']}</td>";
			echo "<td>{$cat['creationDate']}</td>";
			echo "<td><a href=\"manageFoodCategoryEdit.php?categoryId={$cat['categoryId']}\">Edit</a></td>";
			echo "</tr>";


		}
	}

?>	  	

									  </tbody>
							  	</table>
						</div>
					</div>
			</div>	
	</div>
</div>
<?php 
  include('adminIncludes/adminFooter.php');
?>