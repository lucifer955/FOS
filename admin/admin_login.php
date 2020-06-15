<?php session_start(); ?>
<?php 
  require_once('../includes/connection.php'); 
?>

<?php  

  //check for form subbmission
    if (isset($_POST['login_admin'])) {

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
        $hashed_password = md5($password);

        // prepare database query
        $query = "SELECT * FROM admin
                    WHERE adminEmail = '{$email}'
                    -- hashed password should be included
                    AND adminPassword = '{$hashed_password}'
                    LIMIT 1";

        $result_set = mysqli_query($connection,$query);

        if ($result_set) {
          //query successful

          if(mysqli_num_rows($result_set) == 1){
            //valid user found

            $us = mysqli_fetch_assoc($result_set);
            $_SESSION['admin_id'] = $us['adminId'];
            $_SESSION['user_name'] = $us['userName'];
            //redirect to dashboard.php
            header('Location: dashboard.php');
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
    <!-- google fonts -->
    <link href="https://fonts.googleapis.com/css?family=Pacifico|Roboto&display=swap" rel="stylesheet">
    
    <!-- external css file -->
    <link rel="stylesheet" href="..\css\adminStyle.css">
    <link rel="stylesheet" href="..\css\adminLogin.css">
    <title>Admin Page</title>
  </head>
  <body class="formAdmin">

    <div >
       <div class="container-fluid">
        <div class="row d-flex justify-content-center">
          <div class="col-12 col-sm-12 col-md-6 col-lg-6">
            <h3 class="text-center ">Food Ordering System | Admin Login</h3>
          </div>

          <div class="col-12 col-sm-12 col-md-4 col-lg-4 ">
            <form class="form-container" method="post" action="admin_login.php">

              <?php 

                if (isset($errors) && !empty($errors)) {
                  echo '<p class = "errorAdmin">Invalid Username / Password</P>';
                } 

              ?>

              <?php  
                if(isset($_GET['logout'])){
                  echo '<p class = "infoAdmin">You have successfully logged out from the system</P>';
                }
                
              ?>

                  <div class="form-group">
                    <label for="exampleInputEmail1">Email address</label>
                    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email" name="email">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Password</label>
                    <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password" name="password">
                  </div>

                <button type="submit" class="btn btn-primary btn-block" name="login_admin">Submit</button>

                <!-- <label style="margin-top: 5px"><a href="admin_resetPassword.php">Forgot password?</a></label> -->
              </form>
          </div>
        </div>
      </div>
    

    <hr>
    <footer class="adminFooter">
       <!-- copyrights -->
      <div class="row justify-content-center">
          <small>&copy; Copyright 2019, CST2K19 Project-I</small>
      </div>
    </footer>
    </div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>

<?php mysqli_close($connection); ?>