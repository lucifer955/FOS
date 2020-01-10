<?php 
  $page= 'manageFoodMenu';include('adminIncludes/adminHeader.php');
?>

<div class="adminManageFoodMenuCategory">
	<div class="col-md-12" >
		<nav aria-label="breadcrumb">
			<ol class="breadcrumb">
				<li class="breadcrumb-item"><a href="#">Home</a></li>
				<li class="breadcrumb-item"><a href="#">Food Category</a></li>
				<li class="breadcrumb-item active" aria-current="page">Manage Food Menu</li>
			</ol>
		</nav>
	</div>
</div>

<div class="container">
	<div class="row justify-content-center">
		<div class="card col-12 text-center">
				<h2 class="text-center">Manage Food Item</h2>
					<div class="card-body">
					    <div class="table-responsive-md">
							  	<table class="table table-hover table-bordered">
									<thead>
									    <tr>
									      <th scope="col">FoodMenu ID </th>
									      <th scope="col">Category Name</th>
									      <th scope="col">Item Name</th>
									      <th scope="col">Item Desc.</th>
									      <th scope="col">Item Quantity</th>
									      <th scope="col">Food Price</th>
									      <th scope="col">Action</th>
									    </tr>
									  </thead>
									  <tbody>
<?php  

	// $category_list = '';

	//getting the list of categories
	$query_food = "SELECT * FROM foodmenu";
	$fdmenus = mysqli_query($connection, $query_food);

	if($fdmenus){
		while ($fdmenu = mysqli_fetch_assoc($fdmenus)) {
			echo "<tr>";
			echo "<td>{$fdmenu['foodMenuId']}</td>";
			echo "<td>{$fdmenu['categoryName']}</td>";
			echo "<td>{$fdmenu['itemName']}</td>";
			echo "<td>{$fdmenu['itemDescription']}</td>";
			echo "<td>{$fdmenu['itemQuantity']}</td>";
			echo "<td>{$fdmenu['itemPrice']}</td>";
			echo "<td><a href=\"manageFoodMenuEdit.php\">Edit</a></td>";
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