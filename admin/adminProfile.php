<?php 
  $page= 'myAccount';include('adminIncludes/adminHeader.php');
?>
<?php  

	$adminId = $_SESSION['admin_id'];

	// $msg = "User Details {$_SESSION['admin_id']} Updated";
 //    echo "<script type='text/javascript'>alert('$msg');</script>";
	$query_reg = "SELECT * FROM admin where adminId = $adminId";
	$users = mysqli_query($connection, $query_reg);

  		$admin_name  = '';
  		$user_name = '';
  		$adminEmail = '';
  		$adminContactNo = '';
  		$adminRegDate = '';

  		if($users){
				while ($user = mysqli_fetch_assoc($users)) {

			$admin_name = $user['adminName'];
			$user_name = $user['userName'];
			$adminEmail = $user['adminEmail'];
			$adminContactNo = $user['adminContactNo'];
			$adminRegDate = $user['adminRegDate'];
				}
	}
?>


<?php  


if (isset($_POST['adminHidId'])) {
    	

    	$adminId1 = $_POST['adminHidId'];
    	$username1 = $_POST['user_name'];
        $full_name1 = $_POST['full_name'];
        $email1 = $_POST['email'];
        $mobile_number1 = $_POST['mobile_number'];


		$query =  "UPDATE admin 
		SET userName = '{$username1}',
		adminName = '{$full_name1}',
		adminContactNo = '{$mobile_number1}',
		adminEmail = '{$email1}'
		WHERE adminId =  {$adminId1}";
        $rs = mysqli_query($connection,$query);

        if ($rs) {
        	$msg = "admin Details Updated";
          	echo "<script type='text/javascript'>alert('$msg');</script>";
        }else{

        	// $msg = "Error Updated";
         //  	echo "<script type='text/javascript'>alert('$msg');</script>";
        }


}

?>
<div class="adminViewOrder">
	<div class="col-md-12" >
		<nav aria-label="breadcrumb">
			<ol class="breadcrumb">
				<li class="breadcrumb-item"><a href="#">Home</a></li>
				<li class="breadcrumb-item active" aria-current="page">My Account</li>
			</ol>
		</nav>
	</div>
</div>
<div class="container">
	<div class="row justify-content-center">
		<div class="card col-12 text-center">
				<h2 class="text-center">Update</h2>
					<div class="card-body">
			<form action="adminProfile.php" method="POST">

<?php  

	$queryAdmin = "SELECT * FROM admin where adminId = {$adminId}";
	$adminrs = mysqli_query($connection, $queryAdmin);

	if($adminrs){
		while ($user = mysqli_fetch_assoc($adminrs)) {

echo "


						  <div class=\"form-group row\">
						    <label for=\"inputFirstName\" class=\"col-sm-2 col-form-label\">Admin Name:</label>
						    <div class=\"col-sm-10\">
						      <input type=\"text\" class=\"form-control\" id=\"inputFirstName\" value={$user['userName']} name=\"user_name\">
						    </div>
						  </div>
						  <div class=\"form-group row\">
						    <label for=\"inputLastName\" class=\"col-sm-2 col-form-label\">User Name:</label>
						    <div class=\"col-sm-10\">
						      <input type=\"text\" class=\"form-control\" id=\"inputLastName\" value={$user['adminName']} name=\"full_name\">
						    </div>
						  </div>
						  <div class=\"form-group row\">
						    <label for=\"inputEmail\" class=\"col-sm-2 col-form-label\">Email:</label>
						    <div class=\"col-sm-10\">
						      <input type=\"email\" class=\"form-control\" id=\"inputEmail\" value={$user['adminEmail']} name=\"email\">
						    </div>
						  </div>
						  <div class=\"form-group row\">
						    <label for=\"inputMobileNumber\" class=\"col-sm-2 col-form-label\">Mobile Number:</label>
						    <div class=\"col-sm-10\">
						      <input type=\"text\" class=\"form-control\" id=\"inputMobileNumber\" value={$user['adminContactNo']}  name=\"mobile_number\">
						    </div>
						  </div>
						  <div class=\"form-group row\">
						    <label for=\"inputRegDate\" class=\"col-sm-2 col-form-label\">Registered Date:</label>
						    <div class=\"col-sm-10\">
						      <input type=\"text\" class=\"form-control\" id=\"inputRegDate\" value={$user['adminRegDate']} disabled name=\"customerRegDate\">
						    </div>
						  </div>
						  <button type=\"submit\" class=\"btn btn-primary\" name=\"adminUserDetailButton\">Update</button>
					

					<input type='hidden' value={$user['adminId']} name='adminHidId' id=''>


"; 
		}
	}


?>
						</form>



					</div>
			</div>	
	</div>
</div>

<?php 
  include('adminIncludes/adminFooter.php');
?>