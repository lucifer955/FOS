<!-- include the header files -->
<?php 
  include('../includes/loggedHeader.php');
?>

<div class="logg"></div>
<div class="container" >
    <nav aria-label="breadcrumb" >
    <ol class="breadcrumb" 
    style="

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
        <li class="breadcrumb-item active" aria-current="page">Change Password</li>
    </ol>
    </nav>
</div>

<div class="loggedSettings">
    
 <div class="container">
  <div class="row justify-content-around">
    <div class="col-12 col-md-5 col-sm-12">
      <!-- <h3 class="" style="color:black;">Just Sign in to Order the food you want.</h3>
      <img class="mx-auto d-block" src="images\log-in.png" alt=""> -->
    </div>

    <div class="col-12 col-md-7 col-sm-12" 
style="padding:40px;border-radius: 0.9rem;

-webkit-box-shadow: 7px -7px 42px -10px rgba(48,38,39,0.71);
-moz-box-shadow: 7px -7px 42px -10px rgba(48,38,39,0.71);
box-shadow: 7px -7px 42px -10px rgba(48,38,39,0.71);
          padding: 50px;
          border-radius: 0.9rem;

    ">
    <form action="settings.php" method="post">

        <div class="form-row justify-content-center">
            <div class="col-12 col-sm-10">
              <label for="password">Current Password</label>
              <input type="password" class="form-control" placeholder="Current Password" id="currentPassword" style="border-radius: 0.9rem;">
            </div>
            <div class="col-12 col-sm-10">
              <label for="newPassword">New Password</label>
              <input type="password" class="form-control" placeholder=" New Password" id="newPassword" style="border-radius: 0.9rem;">
            </div>
            <div class="col-12 col-sm-10">
              <label for="repeatNewPassword">Repeat Password</label>
              <input type="password" class="form-control" placeholder="Repeat Password" id="repeatNewPassword" style="border-radius: 0.9rem;">
            </div>
      </div>
      <div class="text-center">
        <button type="submit" class="btn btn-primary">Update</button>
      </div>
        
    </form>        
    </div>

<!--     <div class="col-12 col-md-5 col-sm-12">
      <h3 class="" style="color:black;">Just Sign in to Order the food you want.</h3>
      <img class="mx-auto d-block" src="..\images\log-in.png" alt="">
    </div> -->
  </div>
</div>   
    
</div>


<!-- include the footer files -->
<?php 
  include('../includes/loggedFooter.php');
?>