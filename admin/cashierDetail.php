<?php 
  $page= 'cashier';include('adminIncludes/adminHeader.php');
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


		<div class="col-12 text-center m-2">
			<a href="cashieradd.php" class="btn btn-primary" role="button" aria-pressed="true"><i class="fa fa-plus"></i>Add Cashier</a>
		</div>

	</div>


	<div class="row justify-content-center">
		<div class="card col-12 text-center">
				<h2 class="text-center">Cashier Details</h2>
					<div class="card-body">
					    <div class="table-responsive-md">
							  	<table class="table table-hover table-bordered">
									<thead>
									    <tr>
									      <th scope="col">CID</th>
									      <th scope="col">Name</th>
									      <th scope="col">Mobile Number</th>
									      <th scope="col">Email</th>
									      <th scope="col">Reg Date</th>
									      <th scope="col">Edit</th>
									    </tr>
									  </thead>
									  <tbody>

<?php  

	// $category_list = '';
	$x = '';
	//getting the list of categories
	$query_reg = "SELECT * FROM cashier";
	$users = mysqli_query($connection, $query_reg);

	if($users){
		while ($user = mysqli_fetch_assoc($users)) {
			echo "<tr>";
			echo "<td>{$user['cashierId']}</td>";
			echo "<td>{$user['cashierName']}</td>";
			echo "<td>{$user['cashierContactNo']}</td>";
			echo "<td>{$user['cashierEmail']}</td>";
			echo "<td>{$user['cashierRegDate']}</td>";
			echo "<td><a href=\"cashier.php?cashId={$user['cashierId']}\">Edit</a></td>";
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