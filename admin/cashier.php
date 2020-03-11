<?php 
  $page= 'cashier';include('adminIncludes/adminHeader.php');
?>

<?php
if (isset($_POST['updateButton'])) {
    	
    	$cashierId = $_POST['cashierId'];
        $fullname = $_POST['fullname'];
        $email = $_POST['cashEmail'];
        $mobile_number = $_POST['mobile_number'];


		$query =  "UPDATE cashier
		SET cashierName = '{$fullname}',
		cashierEmail = '{$email}',
		cashierContactNo = '{$mobile_number}'
		
		WHERE cashierId =  {$cashierId}";

        $rs = mysqli_query($connection,$query);

        if ($rs) {
        	$msg = "cashier Details Updated";
          	echo "<script type='text/javascript'>alert('$msg');</script>";
        }else{

        	$msg = "Error Updated";
          	echo "<script type='text/javascript'>alert('$msg');</script>";
        }


} else if (isset($_POST['deleteButton'])) {

		$cashierId = $_POST['cashierId'];
    	$query = "DELETE FROM cashier WHERE cashierId = {$cashierId}";
		$rs = mysqli_query($connection,$query);

		if ($rs) {
        	$msg = "Cashier Deleted";
          	echo "<script type='text/javascript'>alert('$msg');</script>";
          	echo "<script type='text/javascript'>window.location = 'cashierDetail.php';</script>";
          			
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
				<li class="breadcrumb-item"><a href="#">Cashier Details</a></li>
				<li class="breadcrumb-item active" aria-current="page">Update & Delete</li>
			</ol>
		</nav>
	</div>
</div>

<div class="container">
	<div class="row justify-content-center">
		<div class="card col-12 text-center">
				<h2 class="text-center">Update</h2>
					<div class="card-body">



						<form action="cashier.php" method="POST">

<?php  

if (isset($_GET['cashId'])) {
	$cashierId = $_GET['cashId'];
}

	$query_reg = "SELECT * FROM cashier where cashierId = {$cashierId}";
	$users = mysqli_query($connection, $query_reg);

  		if($users){
			while ($user = mysqli_fetch_assoc($users)) {
		
echo "



						  <div class=\"form-group row\">
						    <label for=\"inputFirstName\" class=\"col-sm-2 col-form-label\">Full Name:</label>
						    <div class=\"col-sm-10\">
						      <input type=\"text\" class=\"form-control\" id=\"inputFirstName\" value={$user['cashierName']} name=\"fullname\">
						    </div>
						  </div>
						  <div class=\"form-group row\">
						    <label for=\"inputEmail\" class=\"col-sm-2 col-form-label\">Email:</label>
						    <div class=\"col-sm-10\">
						      <input type=\"email\" class=\"form-control\" id=\"inputEmail\" name=\"cashEmail\" value={$user['cashierEmail']}>
						    </div>
						  </div>
						  <div class=\"form-group row\">
						    <label for=\"inputMobileNumber\" class=\"col-sm-2 col-form-label\">Mobile Number:</label>
						    <div class=\"col-sm-10\">
						      <input type=\"text\" class=\"form-control\" id=\"inputMobileNumber\" value={$user['cashierContactNo']} name=\"mobile_number\">
						    </div>
						  </div>
						  <div class=\"form-group row\">
						    <label for=\"inputRegDate\" class=\"col-sm-2 col-form-label\">Registered Date:</label>
						    <div class=\"col-sm-10\">
						      <input type=\"text\" class=\"form-control\" id=\"inputRegDate\" value={$user['cashierRegDate']} name=\"customerRegDate\" disabled >
						    </div>
						  </div>



						  <div class=\"row justify-content-center\">
						  	<input type=\"submit\" class=\"btn btn-primary mr-2\" name=\"updateButton\" value=\"Update\"/>
						  	<input type=\"submit\" class=\"btn btn-danger\" name=\"deleteButton\" value=\"Delete\" />	
						  </div>

					<input type='hidden' value={$user['cashierId']} name='cashierId' id='cashierId'>


";



		}

	}

?>




						  
						</form>
					</div>
			</div>	
	</div>
</div>
