<?php 
  $page= 'regUsers';include('cashierIncludes/cashierHeader.php');
?>

<!-- update and delete user  -->
<?php  



if (isset($_POST['updateButton'])) {
    	
    	$customerId = $_POST['customId'];
        $first_name = $_POST['first_name'];
        $last_name = $_POST['last_name'];
        $email = $_POST['email'];
        $mobile_number = $_POST['mobile_number'];


		$query =  "UPDATE customer 
		SET customerFirstName = '{$first_name}',
		customerLastName = '{$last_name}',
		customerContactNo = '{$mobile_number}',
		customerEmail = '{$email}'
		WHERE customerId =  {$customerId}";
        $rs = mysqli_query($connection,$query);

        if ($rs) {
        	$msg = "User Details Updated";
          	echo "<script type='text/javascript'>alert('$msg');</script>";
        }else{

        	// $msg = "Error Updated";
         //  	echo "<script type='text/javascript'>alert('$msg');</script>";
        }


} else if (isset($_POST['deleteButton'])) {

		$customerId = $_POST['customId'];
    	$query = "DELETE FROM customer WHERE customerId = {$customerId}";
		$rs = mysqli_query($connection,$query);

		if ($rs) {
        	$msg = "User Deleted";
          	echo "<script type='text/javascript'>alert('$msg');</script>";
          	echo "<script type='text/javascript'>window.location = 'regUsers.php';</script>";
          			
		}
} else {
    //invalid action!
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



						<form action="cashierUserDetail.php" method="POST">

<?php  

if (isset($_GET['x'])) {
	$customerId = $_GET['x'];
}

	$query_reg = "SELECT * FROM customer where customerId = {$customerId}";
	$users = mysqli_query($connection, $query_reg);

  		// $first_name  = '';
  		// $last_name = '';
  		// $email = '';
  		// $mobile_number = '';
  		// $regDate = '';

  		if($users){
			while ($user = mysqli_fetch_assoc($users)) {

			// $first_name = $user['customerFirstName'];
			// $last_name = $user['customerLastName'];
			// $customerEmail = $user['customerEmail'];
			// $customerContactNo = $user['customerContactNo'];
			// $customerRegDate = $user['customerRegDate'];
		
echo "



						  <div class=\"form-group row\">
						    <label for=\"inputFirstName\" class=\"col-sm-2 col-form-label\">First Name:</label>
						    <div class=\"col-sm-10\">
						      <input type=\"text\" class=\"form-control\" id=\"inputFirstName\" value={$user['customerFirstName']} name=\"first_name\" value\"\">
						    </div>
						  </div>
						  <div class=\"form-group row\">
						    <label for=\"inputLastName\" class=\"col-sm-2 col-form-label\">Last Name:</label>
						    <div class=\"col-sm-10\">
						      <input type=\"text\" class=\"form-control\" id=\"inputLastName\" value={$user['customerLastName']}  name=\"last_name\">
						    </div>
						  </div>
						  <div class=\"form-group row\">
						    <label for=\"inputEmail\" class=\"col-sm-2 col-form-label\">Email:</label>
						    <div class=\"col-sm-10\">
						      <input type=\"email\" class=\"form-control\" id=\"inputEmail\" value={$user['customerEmail']} name=\"email\">
						    </div>
						  </div>
						  <div class=\"form-group row\">
						    <label for=\"inputMobileNumber\" class=\"col-sm-2 col-form-label\">Mobile Number:</label>
						    <div class=\"col-sm-10\">
						      <input type=\"text\" class=\"form-control\" id=\"inputMobileNumber\" value={$user['customerContactNo']} name=\"mobile_number\">
						    </div>
						  </div>
						  <div class=\"form-group row\">
						    <label for=\"inputRegDate\" class=\"col-sm-2 col-form-label\">Registered Date:</label>
						    <div class=\"col-sm-10\">
						      <input type=\"text\" class=\"form-control\" id=\"inputRegDate\" value={$user['customerRegDate']} name=\"customerRegDate\" disabled >
						    </div>
						  </div>



						  <div class=\"row justify-content-center\">
						  	<input type=\"submit\" class=\"btn btn-primary mr-2\" name=\"updateButton\" value=\"Update\" onclick/>
						  	<input type=\"submit\" class=\"btn btn-danger\" name=\"deleteButton\" value=\"Delete\" />	
						  </div>

					<input type='hidden' value={$user['customerId']} name='customId' id=''>


";



		}

	}

?>




						  
						</form>
					</div>
			</div>	
	</div>
</div>

<script type="text/javascript">
	

</script>

<?php 
  include('cashierIncludes/cashierFooter.php');
?>