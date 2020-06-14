<?php 
  $page= 'search';include('adminIncludes/adminHeader.php');
?>

	<div class="adminSearch">
		<div class="col-md-12" > <!-- style="margin-top: 50px;" -->
			<nav aria-label="breadcrumb">
				<ol class="breadcrumb">
					<li class="breadcrumb-item"><a href="#">Home</a></li>
					<li class="breadcrumb-item active" aria-current="page">Search</li>
				</ol>
			</nav>
		</div>
	</div>

	<div class="container">
		<div class="row justify-content-center">
			<div class="card col-12 col-sm-12 col-md-6">
				<h2 class="text-center">Search </h2>
				<div class="text-center">
<!-- 					  <h5 class="card-header">Search</h5> -->
					  <div class="card-body">
						<form action="search.php" method="POST">
							<div class="form-group">
								<input class="form-control buttonSearch1" placeholder="Search for Registered Users" aria-label="Search" type="text" name="searchFood2" id="searchFood" autocomplete="off">	
							</div>
				            <button class="btn btn-primary buttonSearch" type="submit" name="searchSubmitadmin" id="buttonSearch1">Search</button>
				          </form>
				  </div>
				</div>
			</div>
	</div>
</div>

<div class="container" style="margin-top: 30px;">
	<div class="row justify-content-center">
		<div class="card col-12 text-center">
				<h2 class="text-center">Registered User Details</h2>
					<div class="card-body">
					    <div class="table-responsive-md">
							  	<table class="table table-hover table-bordered">
									<thead>
									    <tr>
									      <th scope="col">Customer Id</th>
									      <th scope="col">First Name</th>
									      <th scope="col">Last Name</th>
									      <th scope="col">Email</th>
									      <th scope="col">Mobile Number</th>
									      <!-- <th scope="col">Password</th> -->
									      <th scope="col">Edit</th>
									    </tr>
									  </thead>
									  <tbody>
	<?php

  $searchFood1 = '';
  $x = '';

  if (isset($_POST['searchSubmitadmin'])) {
      $searchFood2 = $_POST['searchFood2'];
    $query3 = "SELECT * FROM customer where customerFirstName = '$searchFood2'";
    $fms13 = mysqli_query($connection, $query3);
    if($fms13){
        while ($fm4 = mysqli_fetch_assoc($fms13)) {
			echo "<tr>";
			echo "<td>{$fm4['customerId']}</td>";
			echo "<td>{$fm4['customerFirstName']}</td>";
			echo "<td>{$fm4['customerLastName']}</td>";
			echo "<td>{$fm4['customerEmail']}</td>";
			echo "<td>{$fm4['customerContactNo']}</td>";
			// echo "<td>{$fm4['customerPassword']}</td>";
			echo "<td><a href=\"adminUserDetail.php?x={$fm4['customerId']}\">Edit</a></td>";
			echo "</tr>";
        }   
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