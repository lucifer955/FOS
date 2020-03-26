<!-- include the header files -->
<?php 
  $page= 'signIn';include('includes/header.php');
?>



<div class="container" >
    <nav aria-label="breadcrumb" >
    <ol class="breadcrumb" 
    style="

margin-top: 50px;
background-color: white !important;
  /*-webkit-box-shadow: 2px 6px 4px -6px black;
     -moz-box-shadow: 2px 6px 4px -6px black;
          box-shadow: 2px 6px 4px -6px black;*/
  -webkit-box-shadow: 1px 1px 6px 0px rgba(50, 50, 50, 0.5);
-moz-box-shadow:    1px 1px 6px 0px rgba(50, 50, 50, 0.5);
box-shadow:         1px 1px 6px 0px rgba(50, 50, 50, 0.5);
             border-left: 3px solid red;
/*             border-right: 3px solid #cc0000;*/
             border-radius: 0 !important;
             margin-bottom: 40px;


">
        <li class="breadcrumb-item"><a href="#">Home</a></li>
        <li class="breadcrumb-item active" aria-current="page">Sign in</li>
    </ol>
    </nav>
</div>
<!-- <div class="logg"></div> -->

<div class="container signInPage">
  <div class="row justify-content-around">

    <div class="col-12 col-md-5 col-sm-12">
      <!-- <h3 class="" style="color:black;">Just Sign in to Order the food you want.</h3>
      <img class="mx-auto d-block" src="images\log-in.png" alt=""> -->
    </div>
    <div class="col-12 col-md-7 col-sm-12" style="padding:40px;border-radius: 0.9rem;

-webkit-box-shadow: 7px -7px 42px -10px rgba(48,38,39,0.71);
-moz-box-shadow: 7px -7px 42px -10px rgba(48,38,39,0.71);
box-shadow: 7px -7px 42px -10px rgba(48,38,39,0.71);
          padding: 50px;
          border-radius: 0.9rem;

    ">
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
            <input type="email" class="form-control text-center" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email" name="email" style="border-radius: 0.9rem;" 
            value="<?php if(isset($_COOKIE["member_login"])) { echo $_COOKIE["member_login"]; } ?>"
            >
            <small id="emailHelp" class="form-text text-muted">*We'll never share your email with anyone else.</small>
        </div>
        <div class="form-group">
            <label for="exampleInputPassword1">Password</label>
            <input type="password" class="form-control text-center" id="exampleInputPassword1" placeholder="Password" name="password" style="border-radius: 0.9rem;"
            value="<?php if(isset($_COOKIE["member_password"])) { echo $_COOKIE["member_password"]; } ?>"
            >
        </div>
          <div class="form-group form-check">
              <input type="checkbox" class="form-check-input" id="exampleCheck1" name="remember"
              <?php if(isset($_COOKIE["member_login"])) { ?> checked <?php } ?>
              >
              <label class="form-check-label" for="exampleCheck1">Remember Me</label>
          </div>
        <div class="text-center">
          <div class="forget-password">
            <p style="color:tomato"><a href="">Forgot Your Password?</a></p>
          </div>
          
          <button type="submit" class="btn btn-primary btn-block" name="login_user">Sign in</button>
          <div class="form-footer">
            <div>
              <p style="color:black;margin-top:10px;">Don't you have an Account? <a href="sign_up.php">Sign Up</a></p>
            </div>
  			  </div>
        </div>
    </form>        
    </div>

    
  </div>
</div>

<!-- include the footer files -->
<?php 
  include('includes/footer.php');
?>