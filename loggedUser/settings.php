<!-- include the header files -->
<?php 
  include('../includes/loggedHeader.php');
?>

<div class="container breadcumb">
    <nav aria-label="breadcrumb rounded">
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="#">Home</a></li>
        <li class="breadcrumb-item active" aria-current="page">Change Password</li>
    </ol>
    </nav>
</div>

<div class="loggedSettings">
    
 <div class="container">
  <div class="row align-items-center">
    <div class="col-12 col-md-7 col-sm-12 ">
    <form>
        <div class="form-row">
            <div class="col-12 col-sm-8">
              <label for="password">Current Password</label>
              <input type="password" class="form-control" placeholder="Current Password" id="currentPassword">
            </div>
            <div class="col-12 col-sm-8">
              <label for="newPassword">New Password</label>
              <input type="password" class="form-control" placeholder=" New Password" id="newPassword">
            </div>
            <div class="col-12 col-sm-8">
              <label for="repeatNewPassword">Repeat Password</label>
              <input type="password" class="form-control" placeholder="Repeat Password" id="repeatNewPassword">
            </div>
      </div>
        <button type="submit" class="btn btn-primary">Update</button>
    </form>        
    </div>

    <div class="col-12 col-md-5 col-sm-12">
      <h3 class="" style="color:black;">Just Sign in to Order the food you want.</h3>
      <img class="mx-auto d-block" src="..\images\log-in.png" alt="">
    </div>
  </div>
</div>   
    
</div>


<!-- include the footer files -->
<?php 
  include('../includes/loggedFooter.php');
?>