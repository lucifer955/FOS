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

    <form>
      <div class="form-row">
        <div class="col-12 col-sm">
          <label for="firstName">First Name</label>
          <input type="text" class="form-control" placeholder="First name" name="firstname" value="<?php echo $firstname; ?>">
        </div>
        <div class="col-12 col-sm">
          <label for="lastName">Last Name</label>
          <input type="text" class="form-control" placeholder="Last name" name="lastname" value="<?php echo $lastname; ?>">
        </div>
      </div>
      <div class="form-row">
        <div class="col-12 col-sm">
          <label for="emailAddress">Email Address</label>
          <input type="email" class="form-control" placeholder="Email Address"  name="email" value="<?php echo $email; ?>">
          <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
        </div>
        <div class="col-12 col-sm">
          <label for="mobileNumber">Mobile Number</label>
          <input type="text" class="form-control" placeholder="Mobile Number"  name="mobilenumber" value="<?php echo $mobilenumber; ?>">
          <small id="mobileNumHelp" class="form-text text-muted">We'll never share your mobile number with anyone else.</small>
        </div>
      </div>
      <div class="form-row">
        <div class="col-12 col-sm">
          <label for="password">Password</label>
          <input type="password" class="form-control" placeholder="Password"  name="password_1">
        </div>
        <div class="col-12 col-sm">
          <label for="repeatPassword">Repeat Password</label>
          <input type="password" class="form-control" placeholder="Repeat Password"  name="password_2">
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