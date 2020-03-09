<?php 
  $page= 'dashboard'; include('adminIncludes/adminHeader.php');
?>
<!-- count for reg users -->
<?php  
    $query = "SELECT COUNT(customerId) AS total FROM customer";
    $rs= mysqli_query($connection, $query);
    $values = mysqli_fetch_assoc($rs);
    $num_rowsreg = $values['total'];
?>

<!-- count for total orders -->
<?php  
    $query2 = "SELECT COUNT(orderId) AS totalOrder FROM orderdetails";
    $rs2= mysqli_query($connection, $query2);
    $values2 = mysqli_fetch_assoc($rs2);
    $num_rowsordrer = $values2['totalOrder'];
?>

<!-- count for food categories -->
<?php  
    $query3 = "SELECT COUNT(categoryId) AS totalFoodCate FROM category";
    $rs3= mysqli_query($connection, $query3);
    $values3 = mysqli_fetch_assoc($rs3);
    $num_rowscatego = $values3['totalFoodCate'];
?>

<!-- count for foods available -->
<?php  
    $query4 = "SELECT COUNT(foodMenuId) AS totalFoods FROM foodmenu";
    $rs4= mysqli_query($connection, $query4);
    $values4 = mysqli_fetch_assoc($rs4);
    $num_rowsfoodmenu = $values4['totalFoods'];
?>





<div class="row justify-content-center">
  

                      <div class="col-lg-4 col-12 col-sm-12 col-md-4">
                        <div class="card text-white bg-dark mb-3">
                          <div class="card-header">Registered Users</div>
                          <div class="card-body">
                            <h5 class="card-title text-white"><?php echo $num_rowsreg; ?></h5>
                            <p class="card-text"></p>
                          </div>
                        </div>
                      </div>

                      <div class="col-lg-4 col-12 col-sm-12 col-md-4">
                          <div class="card text-white bg-secondary mb-3">
                            <div class="card-header">Total Orders</div>
                            <div class="card-body">
                              <h5 class="card-title"><?php echo $num_rowsordrer; ?></h5>
                              <p class="card-text"></p>
                            </div>
                          </div>
                      </div>
                      <div class="col-lg-4 col-12 col-sm-12 col-md-4">
                          <div class="card text-white bg-dark mb-3">
                            <div class="card-header">Total Food Categories</div>
                            <div class="card-body">
                              <h5 class="card-title"><?php echo $num_rowscatego; ?></h5>
                              <p class="card-text"></p>
                            </div>
                          </div>
                      </div>

</div>
<div class="row justify-content-center">
  

                      <div class="col-lg-4 col-12 col-sm-12 col-md-4">
                        <div class="card text-white bg-secondary mb-3">
                          <div class="card-header">Total Foods</div>
                          <div class="card-body">
                            <h5 class="card-title text-white"><?php echo $num_rowsfoodmenu; ?></h5>
                            <p class="card-text"></p>
                          </div>
                        </div>
                      </div>

                     <!--  <div class="col-lg-4 col-12 col-sm-12 col-md-4">
                          <div class="card text-white bg-dark mb-3">
                            <div class="card-header">Cancelled Orders</div>
                            <div class="card-body">
                              <h5 class="card-title"></h5>
                              <p class="card-text"></p>
                            </div>
                          </div>
                      </div>
                      <div class="col-lg-4 col-12 col-sm-12 col-md-4">
                          <div class="card text-white bg-secondary mb-3">
                            <div class="card-header">Cancelled Orders</div>
                            <div class="card-body">
                              <h5 class="card-title"></h5>
                              <p class="card-text"></p>
                            </div>
                          </div>
                      </div> -->

</div>

<?php 
  include('adminIncludes/adminFooter.php');
?>
