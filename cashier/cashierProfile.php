<?php 
  $page= 'myAccount';include('cashierIncludes/cashierHeader.php');
?>
<?php  

	$cashierId = $_SESSION['cashier_id'];

	// $msg = "User Details {$_SESSION['admin_id']} Updated";
 //    echo "<script type='text/javascript'>alert('$msg');</script>";
	$query_reg = "SELECT * FROM cashier where cashierId = $cashierId";
	$users = mysqli_query($connection, $query_reg);

  		$cashier_name  = '';
  		$user_name = '';
  		$cashierEmail = '';
  		$cashierContactNo = '';
  		$cashierRegDate = '';

  		if($users){
				while ($user = mysqli_fetch_assoc($users)) {

			$cashier_name = $user['cashierName'];
			$user_name = $user['cashierName'];
			$cashierEmail = $user['cashierEmail'];
			$cashierContactNo = $user['cashierContactNo'];
			$cashierRegDate = $user['cashierRegDate'];
				}
	}
?>


<?php  


if (isset($_POST['cashierHidId'])) {
    	

    	$cashierId1 = $_POST['cashierHidId'];
    	$username1 = $_POST['user_name'];
        $full_name1 = $_POST['full_name'];
        $email1 = $_POST['email'];
        $mobile_number1 = $_POST['mobile_number'];


		$query =  "UPDATE cashier 
		SET userName = '{$username1}',
		cashierName = '{$full_name1}',
		cashierContactNo = '{$mobile_number1}',
		cashierEmail = '{$email1}'
		WHERE cashierId =  {$cashierId1}";
        $rs = mysqli_query($connection,$query);

        if ($rs) {
        	$msg = "cashier Details Updated";
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
			<form action="cashierProfile.php" method="POST">

<?php  

	$queryCashier = "SELECT * FROM cashier where cashierId = {$cashierId}";
	$cashierrs = mysqli_query($connection, $queryCashier);

	if($cashierrs){
		while ($user = mysqli_fetch_assoc($cashierrs)) {

echo "


						  <div class=\"form-group row\">
						    <label for=\"inputFirstName\" class=\"col-sm-2 col-form-label\">Cashier Name:</label>
						    <div class=\"col-sm-10\">
						      <input type=\"text\" class=\"form-control\" id=\"inputFirstName\" value={$user['cashierName']} name=\"user_name\">
						    </div>
						  </div>
						  <div class=\"form-group row\">
						    <label for=\"inputEmail\" class=\"col-sm-2 col-form-label\">Email:</label>
						    <div class=\"col-sm-10\">
						      <input type=\"email\" class=\"form-control\" id=\"inputEmail\" value={$user['cashierEmail']} name=\"email\">
						    </div>
						  </div>
						  <div class=\"form-group row\">
						    <label for=\"inputMobileNumber\" class=\"col-sm-2 col-form-label\">Mobile Number:</label>
						    <div class=\"col-sm-10\">
						      <input type=\"text\" class=\"form-control\" id=\"inputMobileNumber\" value={$user['cashierContactNo']}  name=\"mobile_number\">
						    </div>
						  </div>
						  <div class=\"form-group row\">
						    <label for=\"inputRegDate\" class=\"col-sm-2 col-form-label\">Registered Date:</label>
						    <div class=\"col-sm-10\">
						      <input type=\"text\" class=\"form-control\" id=\"inputRegDate\" value={$user['cashierRegDate']} disabled name=\"customerRegDate\">
						    </div>
						  </div>
						  <button type=\"submit\" class=\"btn btn-primary\" name=\"cashierUserDetailButton\">Update</button>
					

					<input type='hidden' value={$user['cashierId']} name='cashierHidId' id=''>


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
  include('cashierIncludes/cashierFooter.php');
?>