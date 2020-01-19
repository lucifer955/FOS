<?php session_start(); ?>
<?php 
  require_once('../includes/connection.php'); 
?>

<?php  

  //check for form subbmission
    if (isset($_POST['login_user'])) {

      $errors = array();

    //check if usename and password has been entered
      if (!isset($_POST['email']) || strlen(trim($_POST['email'])) < 1) {
        
        $errors[] = 'Username is missing / invalid';
      }

      if (!isset($_POST['password']) || strlen(trim($_POST['password'])) < 1) {
        
        $errors[] = 'Password is missing / invalid';
      }

      //check if there are any errors in the file
      if(empty($errors)){

        // save username adn password into variables
        $email = mysqli_real_escape_string($connection, $_POST['email']);
        $password = mysqli_real_escape_string($connection, $_POST['password']);
        $hashed_password = sha1($password);

        // prepare database query
        $query = "SELECT * FROM customer
                    WHERE customerEmail = '{$email}'
                    -- hashed password should be included
                    AND customerPassword =  '{$password}'
                    LIMIT 1";
                    // add hash password
        $result_set = mysqli_query($connection,$query);

        if ($result_set) {
          //query successful

          if(mysqli_num_rows($result_set) == 1){
            //valid user found

            $user = mysqli_fetch_assoc($result_set);
            $_SESSION['user_id'] = $user['customerId'];
            $_SESSION['first_name'] = $user['customerFirstName'];
            //redirect to dashboard.php
            header('Location: ../loggedUser/loggedIndex.php');
          }else{
            //user name and password invalid

            $errors[] = 'Invalid Username / Password';
          }

        }else{

          $errors[] = 'Database query failed';
        } 
      }
    }
?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <!-- font awesome cdn -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- external css file -->
    <link rel="stylesheet" href="..\css\style.css">
    <!-- google fonts -->
    <link href="https://fonts.googleapis.com/css?family=Pacifico|Roboto&display=swap" rel="stylesheet">
    
    <title>Index</title>
  </head>
  <body>
    <!-- navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
      <a class="navbar-brand" href="#"><strong>PIZZAMART</strong></a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav d-none d-md-block">
            <li class="nav-item">
              <a class="nav-link" href="#"><i class="fa fa-phone"></i> +9455 123 1234</i></a>   
            </li>
        </ul>
        <ul class="navbar-nav ml-auto">
          <li class="nav-item <?php if($page=='home') {echo 'active';}?> mr">
            <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
          </li>
          <li class="nav-item <?php if($page=='usrfoodMenu') {echo 'active';}?>">
            <a class="nav-link" href="userFoodMenu.php">Food Menu</a>
          </li>
          <li class="nav-item <?php if($page=='signIn') {echo 'active';}?>">
            <a class="nav-link" href="sign_in.php">Sign in</a>
          </li>
          <li class="nav-item <?php if($page=='signUp') {echo 'active';}?>">
              <a class="nav-link" href="sign_up.php">Sign up</a>
          </li>
          
          <li class="nav-item dropdown <?php if($page=='myAccount') {echo 'active';}?>">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                My Account
              </a>
              <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownMenuLink">
                <a class="dropdown-item" href="sign_in.php">Settings</a>
                <a class="dropdown-item" href="sign_in.php">Profile</a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="">logout</a>
              </div>
          </li>
        </ul>
      </div>
</nav>
