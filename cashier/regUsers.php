<?php 
  $page= 'regUsers';include('cashierIncludes/cashierHeader.php');
?>

<div class="adminRegUsers">
	<div class="col-md-12" > <!-- style="margin-top: 50px;" -->
		<nav aria-label="breadcrumb">
			<ol class="breadcrumb">
				<li class="breadcrumb-item"><a href="#">Home</a></li>
				<li class="breadcrumb-item active" aria-current="page">User Details</li>
			</ol>
		</nav>
	</div>
</div>

<div class="container">
	<div class="row justify-content-center">
		<div class="card col-12 text-center">
				<h2 class="text-center">Registerded User Details</h2>
					<div class="card-body">
					    <div class="table-responsive-md">
							  	<table class="table table-hover table-bordered">
									<thead>
									    <tr>
									      <th scope="col">Customer Id</th>
									      <th scope="col">First Name</th>
									      <th scope="col">Last Name</th>
									      <th scope="col">Email</th>
									      <th scope="col">Contact No</th>
									      <!-- <th scope="col">Edit</th> -->
									    </tr>
									  </thead>
									  <tbody>

<?php  

	// $category_list = '';
	$x = '';
	//getting the list of categories
	$query_reg = "SELECT * FROM customer";
	$users = mysqli_query($connection, $query_reg);

	if($users){
		while ($user = mysqli_fetch_assoc($users)) {
			echo "<tr>";
			echo "<td>{$user['customerId']}</td>";
			echo "<td>{$user['customerFirstName']}</td>";
			echo "<td>{$user['customerLastName']}</td>";
			echo "<td>{$user['customerEmail']}</td>";
			echo "<td>{$user['customerContactNo']}</td>";
			// echo "<td><a href=\"adminUserDetail.php?x={$user['customerId']}\">Edit</a></td>";
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
  include('cashierIncludes/cashierFooter.php');
?>