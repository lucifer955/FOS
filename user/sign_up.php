<?php session_start() ?>
<?php 
  require_once('../includes/connection.php'); 
?>
<?php  
  require_once('../includes/connection.php');
  require_once('../includes/functions.php');
?>

<?php  

  $errors = array();

  $first_name  = '';
  $last_name = '';
  $email = '';
  $mobile_number = '';
  $password = '';
  $repeat_password = '';


  if (isset($_POST['reg_user'])) {
    
    $first_name  = $_POST['first_name'];
    $last_name = $_POST['last_name'];
    $email = $_POST['email'];
    $mobile_number = $_POST['mobile_number'];
    $password = $_POST['password'];
    $repeat_password = $_POST['repeat_password'];  


    //checking required fields
    $req_fields = array('first_name','last_name','email','mobile_number','password','repeat_password');

    foreach ($req_fields as $fields) {
      if (empty(trim($_POST[$fields]))) {
      $errors[] = $fields . ' is required';
      }
    }

    if ($password != $repeat_password) {
      $errors[] = 'Two passwords are not matching';
    }

    //checking max length
    $max_len_fields = array('first_name' => 50,'last_name' => 50,'email' => 100,'mobile_number' => 10,'password' => 10,'repeat_password' => 10);

    foreach ($max_len_fields as $field => $max_len) {
      if (strlen(trim($_POST[$field])) > $max_len) {
        $errors[] = $field . ' must be less than ' . $max_len . ' characters';
      }
    }
    
    //checking mobile number
    if(!preg_match('/^[0-9]{10}+$/', $mobile_number)) {
      $errors[] = 'Enter a valid mobile number ex : 0711231234';
    }
    //checking email address
    if (!is_email($_POST['email'])) {
      $errors[] = 'Email address is invalid';
    }

    //checking if email adress is already exixts
    $email = mysqli_real_escape_string($connection, $_POST['email']);

    $query = "SELECT * FROM customer WHERE customerEmail = '{$email}' LIMIT 1";

    $result_set = mysqli_query($connection, $query);

    if ($result_set) {
      if (mysqli_num_rows($result_set) == 1) {
        $errors[] = 'Email Adress already exists';
      }
    }


    //to databse

    if (empty($errors)) {
      //no errors found... ading new record
      $first_name = mysqli_real_escape_string($connection, $_POST['first_name']);
      $last_name = mysqli_real_escape_string($connection, $_POST['last_name']);
      $mobile_number = mysqli_real_escape_string($connection, $_POST['mobile_number']);
      $password = mysqli_real_escape_string($connection, $_POST['password']);

      $hashed_password = sha1($password);

      $query = "INSERT INTO customer(customerFirstName,customerLastName,customerEmail,customerContactNo,customerPassword)
        VALUES('{$first_name}','{$last_name}','{$email}','{$mobile_number}','{$hashed_password}')";
      // $query = "INSERT INTO customer(";
      // $query .= "customerFirstName,customerLastName,customerEmail,customerContactNo,customerPassword";
      // $query .= ")VALUES(";
      // $query .= "'{$first_name}','{$last_name}','{$email}','{$mobile_number}','{$hashed_password}')";
      // $query .= ")";

      $result = mysqli_query($connection,$query);

      if($result){
        // query successfull... redirecting to loggedIndex page
        header('Location: sign_in.php?added=true');
      }else{
        $errors[] = 'Failed to add the new record';
      }
    }
    
  }

?>

<!-- include the header files -->
<?php 
  $page= 'signUp';include('../includes/header.php');
?>

<div class="container breadcumb">
    <nav aria-label="breadcrumb rounded">
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="#">Home</a></li>
        <li class="breadcrumb-item active" aria-current="page">Sign up</li>
    </ol>
    </nav>
</div>

<div class="container signUpPage">
  <div class="row align-items-center">
    <div class="col-12 col-md-7 col-sm-12 ">


    <?php  

      if (!empty($errors)) {
        echo '<div class="errmsg">';
        echo '<b>There were error(s) on your form</b><br>';
        foreach ($errors as $error) {
          echo $error . '<br>';
        }
        echo '</div>';
      }


    ?>


    <form action="sign_up.php" method="post" class="userform">
      <div class="form-row">
        <div class="col-12 col-sm">
          <label for="firstName">First Name</label>
          <input type="text" class="form-control" placeholder="First name" name="first_name" <?php echo 'value ="' . $first_name . '"'; ?>>
        </div>
        <div class="col-12 col-sm">
          <label for="lastName">Last Name</label>
          <input type="text" class="form-control" placeholder="Last name" name="last_name" <?php echo 'value ="' . $last_name . '"'; ?>>
        </div>
      </div>
      <div class="form-row">
        <div class="col-12 col-sm">
          <label for="emailAddress">Email Address</label>
          <input type="text" class="form-control" placeholder="Email Address"  name="email" <?php echo 'value ="' . $email . '"'; ?>>
          <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
        </div>
        <div class="col-12 col-sm">
          <label for="mobileNumber">Mobile Number</label>
          <input type="text" class="form-control" placeholder="Mobile Number"  name="mobile_number" <?php echo 'value ="' . $mobile_number . '"'; ?>>
          <small id="mobileNumHelp" class="form-text text-muted">We'll never share your mobile number with anyone else.</small>
        </div>
      </div>
      <div class="form-row">
        <div class="col-12 col-sm">
          <label for="password">Password</label>
          <input type="password" class="form-control" placeholder="Password"  name="password">
        </div>
        <div class="col-12 col-sm">
          <label for="repeatPassword">Repeat Password</label>
          <input type="password" class="form-control" placeholder="Repeat Password"  name="repeat_password">
        </div>
      </div>
      <button type="submit" class="btn btn-primary" name="reg_user">Sign up</button>
      <p>
        Already a member? <a href="sign_in.php">Sign in</a>
      </p>
    </form>
    </div>

    <div class="col-12 col-md-5 col-sm-12">
      <h3 style="color:black">Just Sign up to Order the food you want.</h3>
      <img class="mx-auto d-block" src="..\images\sign-up.png" alt="">
    </div>
  </div>
</div>

<!-- include the footer files -->
<?php 
  include('../includes/footer.php');
?>
<?php mysqli_close($connection); ?>