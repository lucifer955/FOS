<!-- include the header files -->
<?php 
  $page= 'myOrders';include('../includes/loggedHeader.php');
?>

<?php  
  // $category_list = '';
  $usr_id = $_SESSION['user_id'];
    
?>

<!-- cancel order -->
<?php
    if(isset($_GET['orderId'])) {
      $orderId = $_GET['orderId'];
    }

    $query = "DELETE FROM orderdetails WHERE orderId = '{$orderId}'";
    $rs = mysqli_query($connection,$query);

?>


<div class="loggedOrders">
  <div class="container">
    <div class="col-md-12"> <!-- style="margin-top: 50px;" -->
      <nav aria-label="breadcrumb">
          <ol class="breadcrumb">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item"><a href="#">Orders</a></li>
              <li class="breadcrumb-item"><a href="#">Order Details</a></li>
              <li class="breadcrumb-item active" aria-current="page">Cancel Order</li>
          </ol>
        </nav>
    </div>
  </div>

  <div class="container">
    <div class="row">
      <h3 class="text-danger offset-1">Order Canceled :( <span style="font-size: 20px;margin-left: 40px"><a href="foodMenu.php">Return to Food Menu</a></span></h3>
    </div>

  </div>
</div>

<!-- include the footer files -->
<?php
  // $qw = "truncate table orderdetails";
  // $rs = mysqli_query($connection,$qw);
  include('../includes/loggedFooter.php');
?>