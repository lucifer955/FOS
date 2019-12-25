<!-- include the header files -->
<?php 
  $page= 'signUp';include('../includes/loggedHeader.php');
?>

<div class="container breadcumb">
    <nav aria-label="breadcrumb rounded">
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="#">Home</a></li>
        <li class="breadcrumb-item active" aria-current="page">Profile</li>
    </ol>
    </nav>
</div>

<div class="loggedProfile">
  
  <div class="container">
  <div class="row align-items-center">
    <div class="col-12 col-md-7 col-sm-12 ">
        <form>
        <div class="form-row">
        <div class="col-12 col-sm">
          <label for="firstName">First Name</label>
          <input type="text" class="form-control" placeholder="First name" id="firstName">
        </div>
        <div class="col-12 col-sm">
          <label for="lastName">Last Name</label>
          <input type="text" class="form-control" placeholder="Last name" id="lastName">
        </div>
      </div>
      <div class="form-row secondRoCss">
        <div class="col-12 col-sm">
          <label for="emailAddress">Email Address</label>
          <input type="email" class="form-control" placeholder="Email Address" id="emailAddress">
          <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
        </div>
        <div class="col-12 col-sm">
          <label for="mobileNumber">Mobile Number</label>
          <input type="text" class="form-control" placeholder="Mobile Number" id="mobileNumber">
          <small id="mobileNumHelp" class="form-text text-muted">We'll never share your mobile number with anyone else.</small>
        </div>
      </div>
      <div class="form-row regDateCss">
          <div class="col-12 col-sm-6">
            <label for="registrationDate">Registration Date</label>
            <input type="text" class="form-control" placeholder="Registration Date" id="registrationDate" disabled>
          </div>
        </div>
        <button type="submit" class="btn btn-primary">Update</button>
      </form>
    </div>

    <div class="col-12 col-md-5 col-sm-12">
      <h3 class="" style="color:black;">Just Sign up to Order the food you want.</h3>
      <img class="mx-auto d-block" src="..\images\sign-up.png" alt="">
    </div>
  </div>
</div>

</div>


<!-- include the footer files -->
<?php 
  include('../includes/loggedFooter.php');
?>