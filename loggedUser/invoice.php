  <?php session_start(); ?>

  <?php 
    require_once('../includes/connection.php'); 
  ?>

  <?php  
    // $category_list = '';
    $usr_id = $_SESSION['user_id'];
    // $foodMenuId = $_SESSION['foodMenuId'];
    $foodMenuId = $_GET['foodMenuId'];
    $orderNo = $_GET['orderNo'];
    $quantity = $_GET['quantity'];
    $itemPrice = $_GET['itemPrice'];



  ?>

  <!doctype html>
  <html lang="en">
    <head>
      <!-- Required meta tags -->
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

      <!-- Bootstrap CSS -->
      <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

      <title>Cancel Order</title>
    </head>
    <body>



      <h1 class="text-center" style="margin-top: 60px">Cancel Order</h1>

    <div class="row justify-content-center">
    <div class="col-6 text-center">


  <?php

      //getting the list of food Menu
      $queryOrder = "SELECT * FROM foodmenu where foodMenuId = $foodMenuId";
      $fod = mysqli_query($connection, $queryOrder);
      if($fod){
        $var = 1;
          while ($fm = mysqli_fetch_assoc($fod)) {

              echo "
                 <table class=\"table table-hover table-bordered\">
                        <thead>
                          <tr>
                            <th colspan=\"5\">Order no : $orderNo</th>
                          </tr>
                          <tr>
                            <th scope=\"col\">#</th>
                            <th scope=\"col\">Food name</th>
                            <th scope=\"col\">Unit Price</th>
                            <th scope=\"col\">Quantity</th>
                            <th scope=\"col\">Price</th>
                          </tr>
                        </thead>
                        <tbody>
                          <tr>
                            <th>$var</th>
                            <td>{$fm['itemName']}</td>
                            <td>{$fm['itemPrice']}</td>
                            <td>$quantity</td>
                            <td>".$itemPrice*$quantity."</td>
                          </tr>
                          <tr>
                            <td colspan=\"4\">Grand Total</td>
                            <td>Rs.".$itemPrice*$quantity."/=</td>
                          </tr>
                        </tbody>
                      </table>               


              ";
          }   
      }

  ?>     
         



  </div>


      <!-- Optional JavaScript -->
      <!-- jQuery first, then Popper.js, then Bootstrap JS -->
      <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
      <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
      <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    </body>
  </html>