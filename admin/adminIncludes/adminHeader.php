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
              <h2>PIZZAMART</h2>
            </div>
            
            <ul class="sidebar-nav">
              
              <li class="<?php if($page=='dashboard') {echo 'active1';}?>">
                <a href="dashboard.php"><i class="fa fa-tachometer"></i>Dashboard</a>
              </li>

              <li class=" <?php if($page=='regUsers') {echo 'active1';}?>">
                <a href="regUsers.php"><i class="fa fa-users"></i>Reg Users</a>
              </li>
             <!--  <li class=" <?php if($page=='foodCategory') {echo 'active1';}?>">
                <a href="foodCategory.php"><i class="fa fa-plus-square"></i>Food Category</a>
              </li> -->
              <li class=" <?php if($page=='foodCategory') {echo 'active1';}?>">
                <a class="dropdown-toggle" href="search.php" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" >
                  <i class="fa fa-plus-square"></i>Food Category</a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                  <a class="dropdown-item" href="foodCategory.php">Food Categogy</a>
                  <a class="dropdown-item" href="#">Manage Food Category</a>
                </div>
              </li>
              <!-- <li class=" <?php if($page=='foodMenu') {echo 'active1';}?>">
                <a href="foodMenu.php"><i class="fa fa-align-justify"></i>Food Menu</a>
              </li> -->
              <li class=" <?php if($page=='foodMenu') {echo 'active1';}?>">
                <a class="dropdown-toggle" href="search.php" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" >
                  <i class="fa fa-align-justify"></i>Food Menu</a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                  <a class="dropdown-item" href="foodMenu.php">Add Food</a>
                  <a class="dropdown-item" href="#">Manage Food Category</a>
                </div>
              </li>

             <!--  <li class=" <?php if($page=='orders') {echo 'active1';}?>">
                <a href="orders.php"><i class="fa fa-cart-plus"></i>Orders</a>
              </li> -->

              <li class=" <?php if($page=='orders') {echo 'active1';}?>">
                <a class="dropdown-toggle" href="search.php" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" >
                  <i class="fa fa-cart-plus"></i>Orders</a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                  <a class="dropdown-item" href="foodMenu.php">Not Confirmed yet</a>
                  <a class="dropdown-item" href="#">Order Confirmed</a>
                  <a class="dropdown-item" href="#">Food being prepared</a>
                  <a class="dropdown-item" href="#">Cancelled</a>
                  <a class="dropdown-item" href="#">All orders</a>
                </div>
              </li>
              <li class=" <?php if($page=='reports') {echo 'active1';}?>">
                <a href="reports.php"><i class="fa fa-file"></i>Reports</a>
              </li>
              <li class=" <?php if($page=='search') {echo 'active1';}?>">
                <a href="search.php"><i class="fa fa-search"></i>Search</a>
              </li>
              <!-- <li class="<?php if($page=='search') {echo 'active1';}?>">
                <a class="dropdown-toggle" href="search.php" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" >
                  <i class="fa fa-search"></i>Food Category</a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                  <a class="dropdown-item" href="#">Food Categogy</a>
                  <a class="dropdown-item" href="#">Manage Food Category</a>
                </div>
              </li> -->
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
                  <a href="admin_login.php"><i class="fa fa-sign-out">Sign out</i></a>
                </div>
              </div>
            </nav>
          </div>



          <section id="content-wrapper">