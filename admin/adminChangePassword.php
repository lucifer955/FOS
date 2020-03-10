<?php 
  $page= 'myAccount';include('adminIncludes/adminHeader.php');
?>

<?php 
	$adminId = $_SESSION['admin_id'];
	$password = '';
	$repeat_password = '';


    //check for form subbmission
    if (isset($_POST['changeAdminPassword'])) {

      $errors = array();

    //check if usename and password has been entered
      if (!isset($_POST['currentPassword']) || strlen(trim($_POST['currentPassword'])) < 1) {
        
        $errors[] = 'Current Password is missing / invalid';
      }

      if (!isset($_POST['newPassword']) || strlen(trim($_POST['newPassword'])) < 1) {
        
        $errors[] = 'Password is missing / invalid';
      }

      if (!isset($_POST['repeatPassword']) || strlen(trim($_POST['repeatPassword'])) < 1) {
        
        $errors[] = 'Password is Not Mactching';
      }

      $password = $_POST['newPassword'];
      $repeat_password = $_POST['repeatPassword'];

      if ($password != $repeat_password) {
        $errors[] = 'Two passwords are not matching';
      }

      //check if there are any errors in the file
      if(empty($errors)){

        // save username and password into variables
        $password = mysqli_real_escape_string($connection, $_POST['newPassword']);
        $repeat_password = mysqli_real_escape_string($connection, $_POST['repeatPassword']);
        $password_hash = md5($password);

        $query =  "UPDATE admin SET adminPassword = '{$password_hash}' WHERE adminId=$adminId";
        $rs = mysqli_query($connection,$query);

        if($rs){
          //send mail
          // $to = $email;
          // $subject = "Pizza Mart";
          // $txt = "You have successfully registered!";
          // $headers = "From: pizzamart.badulla@gmail.com";
          // mail($to,$subject,$txt,$headers);

          $msg = "Password Changed successfully";
          echo "<script type='text/javascript'>alert('$msg');</script>";          
        
      }else{
        $errors[] = 'Failed to change the password';
      }        

       
      }
    }

?>








<div class="adminViewOrder">
	<div class="col-md-12" >
		<nav aria-label="breadcrumb">
			<ol class="breadcrumb">
				<li class="breadcrumb-item"><a href="#">Home</a></li>
				<li class="breadcrumb-item active" aria-current="page">Change Password</li>
			</ol>
		</nav>
	</div>
</div>
<div class="container">
		<div class="row justify-content-center">
			<div class="card col-12 col-sm-12 col-md-6">
				<h2 class="text-center">Update Password</h2>
				<div class="text-center">
<!-- 					  <h5 class="card-header">Search</h5> -->
					<div class="card-body">
						 <form action="adminChangePassword.php" method="POST">
					        <div class="form-row">
					            <div class="col-12 col-sm-12">
					              <label for="password">Current Password</label>
					              <input type="password" class="form-control" placeholder="Current Password" id="currentPassword" name="currentPassword">
					            </div>
					            <div class="col-12 col-sm-12">
					              <label for="newPassword">New Password</label>
					              <input type="password" class="form-control" placeholder=" New Password" id="newPassword" name="newPassword">
					            </div>
					            <div class="col-12 col-sm-12">
					              <label for="repeatNewPassword">Repeat Password</label>
					              <input type="password" class="form-control" placeholder="Repeat Password" id="repeatNewPassword" name="repeatPassword">
					            </div>
					      </div>
					      <br>
					        <button type="submit" class="btn btn-primary" name="changeAdminPassword">Update</button>
					    </form>   
				  	</div>
				</div>
			</div>
	</div>
</div>
<div class="container">
  <div class="row align-items-center">
    <div class="col-12 col-md-7 col-sm-12 ">
            
    </div>
  </div>
</div>   
<?php 
  include('adminIncludes/adminFooter.php');
?>