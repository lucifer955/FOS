<?php session_start(); ?>
<?php 
    require_once('../includes/connection.php'); 
?>

<?php  
    // $category_list = '';
  $usr_id = $_SESSION['user_id'];


?>

<!DOCTYPE html>
<html>
<head>
  <title>Invoice</title>
  <link href="//netdna.bootstrapcdn.com/bootstrap/3.1.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
  <script src="//netdna.bootstrapcdn.com/bootstrap/3.1.0/js/bootstrap.min.js"></script>
  <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

</head>
<body>

<?php
    if((isset($_GET['orderId'])) && (isset($_GET['customerId']))) {
      $orderId = $_GET['orderId'];
      $customerId = $_GET['customerId'];


        $queryView1 =   "SELECT *
          FROM orderdetails 
          INNER JOIN customer 
          ON orderdetails.customerId=customer.customerId where customer.customerId = '{$customerId}' and orderdetails.orderId='{$orderId}'";

      $view1 = mysqli_query($connection, $queryView1);
        if($view1){
          while ($fm = mysqli_fetch_assoc($view1)){

?>

<div class="container">
    <div class="row">
        <div class="col-xs-12">
        <div class="invoice-title">
          <h2>Invoice</h2><h3 class="pull-right">Order # 0000<?php echo "{$fm['orderId']}"; ?></h3>
        </div>
        <hr>
        <div class="row">
          <div class="col-xs-6">
            <address>
            <strong>Billed To:</strong><br>
              <?php echo "{$fm['customerFirstName']}"; ?><br>
              <?php echo "{$fm['flatBuildingNo']}"; ?><br>
              <?php echo "{$fm['streetName']}"; ?><br>
              <?php echo "{$fm['city']}"; ?>
            </address>
          </div>
          <div class="col-xs-6 text-right">
            <address>
              <strong>Shipped To:</strong><br>
              <?php echo "{$fm['customerFirstName']}"; ?><br>
              <?php echo "{$fm['flatBuildingNo']}"; ?><br>
              <?php echo "{$fm['streetName']}"; ?><br>
              <?php echo "{$fm['city']}"; ?>
            </address>
          </div>
        </div>
        <div class="row">
          <div class="col-xs-6">
            <address>
              <strong>Order Method:</strong><br>
              <?php echo "{$fm['orderType']}"; ?><br>
              <?php echo "{$fm['customerEmail']}"; ?>
            </address>
          </div>
          <div class="col-xs-6 text-right">
            <address>
              <strong>Order Date:</strong><br>
                <?php echo "{$fm['orderDate']}"; ?><br><br>
            </address>
          </div>
        </div>
      </div>
    </div>
<?php 
       $tot =  $fm['total'];
      }
    }
}
?>

    <div class="row">
      <div class="col-md-12">
        <div class="panel panel-default">
          <div class="panel-heading">
            <h3 class="panel-title"><strong>Order summary</strong></h3>
          </div>
          <div class="panel-body">
            <div class="table-responsive">
              <table class="table table-condensed">
                <tbody>
                  <!-- foreach ($order->lineItems as $line) or some such thing here -->


                  <tr>
                    <td class="thick-line"></td>
                    <td class="thick-line"></td>
                    <td class="thick-line text-center"><strong>Subtotal</strong></td>
                    <td class="thick-line text-right">Rs.<?php echo $tot; ?>.00</td>
                  </tr>
                  <tr>
                    <td class="no-line"></td>
                    <td class="no-line"></td>
                    <td class="no-line text-center"><strong>Delivering</strong></td>
                    <td class="no-line text-right">Rs.0.00</td>
                  </tr>
                  <tr>
                    <td class="no-line"></td>
                    <td class="no-line"></td>
                    <td class="no-line text-center"><strong>Total</strong></td>
                    <td class="no-line text-right">Rs.<?php echo $tot; ?>.00</td>
                  </tr>
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="row">
      <div class="text-center">
        <button onclick="myprint()">Print</button>
        
      </div>
    </div>
</div>


<script type="text/javascript">
  
  function myprint(){
    window.print();
  }
</script>
</body>
</html>
   
