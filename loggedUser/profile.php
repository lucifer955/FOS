<!-- include the header files -->
<?php 
  $page= 'signUp';include('../includes/loggedHeader.php');
?>


<?php  

  $usr_id = $_SESSION['user_id'];

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
        <li class="breadcrumb-item active" aria-current="page">Profile</li>
    </ol>
    </nav>
</div>

<div class="loggedProfile">
  
  <div class="container">
  <div class="row align-items-center">
        <div class="col-12 col-md-5 col-sm-12">
      <!-- <h3 class="" style="color:black;">Just Sign up to Order the food you want.</h3>
      <img class="mx-auto d-block" src="..\images\sign-up.png" alt=""> -->
    </div>
    <div class="col-12 col-md-7 col-sm-12 "
    style="
    /*-webkit-box-shadow: 0 8px 6px -6px black;
     -moz-box-shadow: 0 8px 6px -6px black;
          box-shadow: 0 8px 6px -6px black;*/
-webkit-box-shadow: 7px -7px 42px -10px rgba(48,38,39,0.71);
-moz-box-shadow: 7px -7px 42px -10px rgba(48,38,39,0.71);
box-shadow: 7px -7px 42px -10px rgba(48,38,39,0.71);
          padding: 50px;
          border-radius: 0.9rem;
      

    ">


<?php 

    //getting the list of food Menu
    $query = "SELECT * FROM customer where customerId = '{$usr_id}'";
    $ls= mysqli_query($connection, $query);
    if($ls){
      while ($fm = mysqli_fetch_assoc($ls)) {
        echo "

        <form>
        <div class=\"form-row\">
        <div class=\"col-12 col-sm\">
          <label for=\"firstName\">First Name</label>
          <input type=\"text\" class=\"form-control\" placeholder=\"First name\" id=\"firstName\" value={$fm['customerFirstName']}>
        </div>
        <div class=\"col-12 col-sm\">
          <label for=\"lastName\">Last Name</label>
          <input type=\"text\" class=\"form-control\" placeholder=\"Last name\" id=\"lastName\" value={$fm['customerLastName']}>
        </div>
      </div>
      <div class=\"form-row secondRoCss\">
        <div class=\"col-12 col-sm\">
          <label for=\"emailAddress\">Email Address</label>
          <input type=\"email\" class=\"form-control\" placeholder=\"Email Address\" id=\"emailAddress\" value={$fm['customerEmail']} disabled>
          <small id=\"emailHelp\" class=\"form-text text-muted\">We'll never share your email with anyone else.</small>
        </div>
        <div class=\"col-12 col-sm\">
          <label for=\"mobileNumber\">Mobile Number</label>
          <input type=\"text\" class=\"form-control\" placeholder=\"Mobile Number\" id=\"mobileNumber\" value={$fm['customerContactNo']} disabled>
          <small id=\"mobileNumHelp\" class=\"form-text text-muted\">We'll never share your mobile number with anyone else.</small>
        </div>
      </div>
      <div class=\"form-row regDateCss\">
          <div class=\"col-12 col-sm-6\">
            <label for=\"registrationDate\">Registration Date</label>
            <input type=\"text\" class=\"form-control\" placeholder=\"Registration Date\" id=\"registrationDate\" value={$fm['customerRegDate']} disabled>
          </div>
        </div>
        <div class=''>
          <button type=\"submit\" class=\"btn btn-primary\">Update</button>
        </div>
      </form>
    </div>


        ";

       }   
    }


 ?>

  </div>
</div>

</div>


<!-- include the footer files -->
<?php 
  include('../includes/loggedFooter.php');
?>