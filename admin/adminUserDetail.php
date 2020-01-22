<?php 
  $page= 'regUsers';include('adminIncludes/adminHeader.php');
?>
<?php  

	$customerId = $_GET['x'];
	$query_reg = "SELECT * FROM customer where customerId = $customerId";
	$users = mysqli_query($connection, $query_reg);

  		$first_name  = '';
  		$last_name = '';
  		$email = '';
  		$mobile_number = '';
  		$regDate = '';

  		if($users){
				while ($user = mysqli_fetch_assoc($users)) {

			$first_name = $user['customerFirstName'];
			$last_name = $user['customerLastName'];
			$customerEmail = $user['customerEmail'];
			$customerContactNo = $user['customerContactNo'];
			$customerRegDate = $user['customerRegDate'];
				}
	}
?>

<div class="adminUserDetails">
	<div class="col-md-12" > <!-- style="margin-top: 50px;" -->
		<nav aria-label="breadcrumb">
			<ol class="breadcrumb">
				<li class="breadcrumb-item"><a href="#">Home</a></li>
				<li class="breadcrumb-item"><a href="#">User Details</a></li>
				<li class="breadcrumb-item active" aria-current="page">Update</li>
			</ol>
		</nav>
	</div>
</div>

<div class="container">
	<div class="row justify-content-center">
		<div class="card col-12 text-center">
				<h2 class="text-center">Update</h2>
					<div class="card-body">
						<form action="adminUserDetail.php" method="POST">
						  <div class="form-group row">
						    <label for="inputFirstName" class="col-sm-2 col-form-label">First Name:</label>
						    <div class="col-sm-10">
						      <input type="text" class="form-control" id="inputFirstName" placeholder="First Name" <?php echo 'value ="' . $first_name . '"'; ?> name="first_name">
						    </div>
						  </div>
						  <div class="form-group row">
						    <label for="inputLastName" class="col-sm-2 col-form-label">Last Name:</label>
						    <div class="col-sm-10">
						      <input type="text" class="form-control" id="inputLastName" placeholder="Last Name" <?php echo 'value ="' . $last_name . '"'; ?> name="last_name">
						    </div>
						  </div>
						  <div class="form-group row">
						    <label for="inputEmail" class="col-sm-2 col-form-label">Email:</label>
						    <div class="col-sm-10">
						      <input type="email" class="form-control" id="inputEmail" placeholder="user@test.com" <?php echo 'value ="' . $customerEmail . '"'; ?> name="email">
						    </div>
						  </div>
						  <div class="form-group row">
						    <label for="inputMobileNumber" class="col-sm-2 col-form-label">Mobile Number:</label>
						    <div class="col-sm-10">
						      <input type="text" class="form-control" id="inputMobileNumber" placeholder="0123123456" <?php echo 'value ="' . $customerContactNo. '"'; ?> name="mobile_number">
						    </div>
						  </div>
						  <div class="form-group row">
						    <label for="inputRegDate" class="col-sm-2 col-form-label">Registered Date:</label>
						    <div class="col-sm-10">
						      <input type="text" class="form-control" id="inputRegDate" placeholder="2019-04-08 13:11:22" disabled <?php echo 'value ="' . $customerRegDate . '"'; ?> name="customerRegDate">
						    </div>
						  </div>
						  <button type="submit" class="btn btn-primary" name="adminUserDetailButton">Update</button>
						</form>
					</div>
			</div>	
	</div>
</div>

<?php 
  include('adminIncludes/adminFooter.php');
?>