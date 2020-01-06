<!-- include the header files -->
<?php 
  $page= 'signIn';include('../includes/header.php');
?>



<div class="container breadcumb">
    <nav aria-label="breadcrumb rounded">
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="#">Home</a></li>
        <li class="breadcrumb-item active" aria-current="page">Sign in</li>
    </ol>
    </nav>
</div>

<div class="container signInPage">
  <div class="row align-items-center">
    <div class="col-12 col-md-7 col-sm-12 ">

      <?php 

        if (isset($errors) && !empty($errors)) {
          echo '<p class = "errorCust text-center">Invalid Username / Password</P>';
        } 

      ?>

      <?php  
        if(isset($_GET['logout'])){
          echo '<p class = "infoCust text-center">You have successfully logged out from the system</P>';
        }
                
      ?>


    <form method="post" action="sign_in.php">
        <div class="form-group">
            <label for="exampleInputEmail1">Email address</label>
            <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email" name="email">
            <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
        </div>
        <div class="form-group">
            <label for="exampleInputPassword1">Password</label>
            <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password" name="password">
        </div>
        <div class="forget-password">
          <p style="color:tomato"><a href="">Forgot Your Password?</a></p>
        </div>
        <button type="submit" class="btn btn-primary" name="login_user">Sign in</button>
        

        <div class="form-footer">
          <div>
            <p style="color:black;margin-top:10px;">Don't you have an Account? <a href="sign_up.php">Sign Up</a></p>
          </div>
			  </div>
    </form>        
    </div>

    <div class="col-12 col-md-5 col-sm-12">
      <h3 class="" style="color:black;">Just Sign in to Order the food you want.</h3>
      <img class="mx-auto d-block" src="..\images\log-in.png" alt="">
    </div>
  </div>
</div>

<!-- include the footer files -->
<?php 
  include('../includes/footer.php');
?>