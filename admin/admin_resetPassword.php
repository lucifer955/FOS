<?php session_start(); ?>
<?php 
  require_once('../includes/connection.php'); 
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

    <div class="container-fluid bg">
      <div class="row d-flex justify-content-center">
        <div class="col-12 col-sm-12 col-md-6 col-lg-6">
          <h3 class="text-center ">Food Ordering System | Admin Login</h3>
        </div>

        <div class="col-12 col-sm-12 col-md-4 col-lg-4 ">
          <form class="form-container">
                <div class="form-group">
                  <label for="exampleInputEmail1">Email address</label>
                  <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
                </div>
                <div class="form-group">
                  <label for="exampleInputMobileNumber1">Mobile Number</label>
                  <input type="text" class="form-control" id="exampleInputMobileNumber1" placeholder="Mobile Number" id="exampleInputMobileNumber1">
                </div>
<!--                 <div class="form-check">
                  <input type="checkbox" class="form-check-input" id="exampleCheck1">
                  <label class="form-check-label" for="exampleCheck1">Check me out</label>
                </div> -->
              <button type="submit" class="btn btn-primary btn-block">Submit</button>

              <label style="margin-top: 5px"><a href="admin_login.php">Sign in</a></label>
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
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>

<?php mysqli_close($connection); ?>