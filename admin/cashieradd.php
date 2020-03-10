<?php 
  $page= 'cashier';include('adminIncludes/adminHeader.php');
?>
<?php  
  require_once('../includes/functions.php');
?>

<?php  

  $errors = array();

  $fullname  = '';
  $email = '';
  $mobile_number = '';
  $password = '';
  $repeat_password = '';


  if (isset($_POST['addcashier'])) {
    
    $fullname  = $_POST['fullname'];
    $email = $_POST['email'];
    $mobile_number = $_POST['mobile_number'];
    $password = $_POST['password'];
    $repeat_password = $_POST['repeat_password']; 

    if ($password != $repeat_password) {
      $errors[] = 'Two passwords are not matching';
    }


    if (empty($errors)) {

    $password_hash = md5($password);    
    $query = "INSERT INTO cashier(cashierName,cashierEmail,cashierContactNo,cashierPassword,cashierRegDate) VALUES('{$fullname}','{$email}','{$mobile_number}','{$password_hash}',NOW())";
    $rs = mysqli_query($connection,$query);

    if ($rs) {
    	
    	$msg = "Inserted Successfully";
		echo "<script type='text/javascript'>alert('$msg');</script>";
    }else{
    	$errors[] = 'Data cannot be inserted';
    }

    }


  }

?>

<div class="container" >
    <nav aria-label="breadcrumb" >
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="#">Dashboard</a></li>
        <li class="breadcrumb-item active" aria-current="page">Add Cashier</li>
    </ol>
    </nav>
</div>
<!-- <div class="logg"></div> -->

<div class="container signUpPage">
  <div class="row justify-content-around">
    <div class="col-12 col-md-2 col-sm-12">
      <!-- <h3 style="color:black">Just Sign up to Order the food you want.</h3>
      <img class="mx-auto d-block" src="images\sign-up.png" alt=""> -->
    </div>
    <div class="col-12 col-md-8 col-sm-12 ">
<div class="card p-3">
<h1 class="text-center">Add Cashier</h1>

    <?php  

      if (!empty($errors)) {
        echo '<div class="errmsg text-center text-danger">';
        echo '<b>There were error(s) on your form</b><br>';
        foreach ($errors as $error) {
          echo $error . '<br>';
        }
        echo '</div>';
      }


    ?>


    <form action="cashieradd.php" method="post" class="userform">
      <div class="form-row">
        <div class="col-12 col-sm">
          <label for="fullName">Cashier Name</label>
          <input type="text" class="form-control" placeholder="Full Name" name="fullname" style="border-radius: 0.9rem;">
        </div>
      </div>
      <div class="form-row">
        <div class="col-12 col-sm">
          <label for="emailAddress">Email Address</label>
          <input type="text" class="form-control" placeholder="Email Address"  name="email"  style="border-radius: 0.9rem;">
          <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
        </div>
        <div class="col-12 col-sm">
          <label for="mobileNumber">Mobile Number</label>
          <input type="text" class="form-control" placeholder="Mobile Number"  name="mobile_number" style="border-radius: 0.9rem;">
          <small id="mobileNumHelp" class="form-text text-muted">We'll never share your mobile number with anyone else.</small>
        </div>
      </div>
      <div class="form-row">
        <div class="col-12 col-sm">
          <label for="password">Password</label>
          <input type="password" class="form-control" placeholder="Password"  name="password" style="border-radius: 0.9rem;">
        </div>
        <div class="col-12 col-sm mb-2">
          <label for="repeatPassword">Repeat Password</label>
          <input type="password" class="form-control" placeholder="Repeat Password"  name="repeat_password" style="border-radius: 0.9rem;">
        </div>
      </div>
      <div class="text-center ">
        <button type="submit" class="btn btn-primary " name="addcashier">Add Cashier</button>    
      </div>
      
    </form>
    </div>
</div>
  	<div class="col-12 col-md-2 col-sm-12"></div>
    
  </div>
</div>