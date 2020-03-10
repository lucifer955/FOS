<?php session_start(); ?>
<?php 
  require_once('../includes/connection.php'); 
?>
<?php  

  //checkin if a user is logged in
  if (!isset($_SESSION['admin_id'])) {
    header('Location: admin_login.php');
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
    <link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- external css file -->
    <link rel="stylesheet" href="..\css\adminPanel.css">
 
    <title>Admin Panel</title>
  </head>

  <body>
      <div id="wrapper">
          <aside id="sidebar-wrapper">
            <div class="sidebar-brand">
              <h4 class="text-white"><span style="color: red">PIZZA</span>MART | <span class="text-warning">ADMIN</span></h4>
            </div>
            
            <ul class="sidebar-nav">
              
              <li class="<?php if($page=='dashboard') {echo 'active1';}?>">
                <a href="dashboard.php"><i class="fa fa-tachometer"></i>Dashboard</a>
              </li>

              <li class=" <?php if($page=='regUsers') {echo 'active1';}?>">
                <a href="regUsers.php"><i class="fa fa-users"></i>Reg Users</a>
              </li>
              

              <li class=" <?php if($page=='foodCategory') {echo 'active1';}?>">
                <a class="dropdown-toggle " href="" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  <i class="fa fa-plus-square"></i>Food Category</a>
                <div class="dropdown-menu bg-dark" aria-labelledby="navbarDropdown">
                  <div style="display: block">
                    <a class="dropdown-item text-white" href="foodCategory.php">Food Categogy</a>
                    <a class="dropdown-item text-white" href="manageFoodCategory.php">Manage Food Category</a>                    
                  </div>
                </div>
              </li>
              <!-- <li class=" <?php if($page=='foodMenu') {echo 'active1';}?>">
                <a href="foodMenu.php"><i class="fa fa-align-justify"></i>Food Menu</a>
              </li> -->
              <li class=" <?php if($page=='foodMenu') {echo 'active1';}?>">
                <a class="dropdown-toggle" href="" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" >
                  <i class="fa fa-align-justify"></i>Food Menu</a>
                <div class="dropdown-menu bg-dark" aria-labelledby="navbarDropdown">
                  <a class="dropdown-item text-white" href="foodMenu.php">Add Food Menu</a>
                  <a class="dropdown-item text-white" href="manageFoodMenu.php">Manage Food Menu</a>
                </div>
              </li>

              <li class=" <?php if($page=='orders') {echo 'active1';}?>">
                <a class="dropdown-toggle" href="" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" >
                  <i class="fa fa-cart-plus"></i>Orders</a>
                <div class="dropdown-menu bg-dark" aria-labelledby="navbarDropdown">
                  <a class="dropdown-item text-white" href="orderNotConfirmed.php">Not Confirmed yet</a>
                  <a class="dropdown-item text-white" href="orderConfirmed.php">Order Confirmed</a>
                  <a class="dropdown-item text-white" href="orderCancelled.php">Cancelled</a>
              </li>
              <li class=" <?php if($page=='reports') {echo 'active1';}?>">
                <a href="reports.php"><i class="fa fa-file"></i>Reports</a>
              </li>
              <li class=" <?php if($page=='search') {echo 'active1';}?>">
                <a href="search.php"><i class="fa fa-search"></i>Search</a>
              </li>
            <li class=" <?php if($page=='cashieradd') {echo 'active1';}?>">
                <a class="dropdown-toggle " href="" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  <i class="fa fa-money"></i>Cashier</a>
                <div class="dropdown-menu bg-dark" aria-labelledby="navbarDropdown">
                  <div>
                    <a class="dropdown-item text-white" href="cashieradd.php">Add Cashier</a>
                    <a class="dropdown-item text-white" href="cashierDetail.php">View Cashiers</a>                    
                  </div>
                </div>
              </li>              
              <li class=" <?php if($page=='myAccount') {echo 'active1';}?>">
                <a class="dropdown-toggle" href="adminAccount.php" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" >
                  <i class="fa fa-user"></i><?php echo $_SESSION['user_name']; ?></a>
                <div class="dropdown-menu bg-dark" aria-labelledby="navbarDropdown">
                  <a class="dropdown-item text-white" href="adminProfile.php">Profile</a>
                  <a class="dropdown-item text-white" href="adminChangePassword.php">Change Password</a>
                </div>
              </li>
            </ul>
          </aside>


 


          <div id="navbar-wrapper">
            <nav class="navbar navbar-inverse">
              <div class="container-fluid">
                <div class="navbar-header">
                  <a href="#" class="navbar-brand" id="sidebar-toggle"><i class="fa fa-bars"></i></a>
                </div>
                <div class="nav-item ml-auto">
                  <a href="#"><i class="fa fa-bell"></i></a>
                </div>
                <div class="nav-item ml-auto">
                  <a href="logout.php"><i class="fa fa-sign-out">Sign out</i></a>
                </div>
              </div>
            </nav>
          </div>



          <section id="content-wrapper">