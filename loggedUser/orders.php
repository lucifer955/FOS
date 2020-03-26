<!-- include the header files -->
<?php 
  $page= 'myOrders';include('../includes/loggedHeader.php');
?>

<?php  
	// $category_list = '';
	$usr_id = $_SESSION['user_id'];


// enter data to the chekout table
	$getCart = "SELECT * FROM cart";
	$resultCart = mysqli_query($connection,$getCart);

	if ($resultCart) {
		while ($rsCart = mysqli_fetch_assoc($resultCart)) {
			$itemName1 = $rsCart['itemName'];
			$itemPrice1 = $rsCart['itemPrice'];
			$foodQuantity1 = $rsCart['foodQuantity'];
			$foodMenuId1 = $rsCart['foodMenuId'];
			$cartID1 = $rsCart['cartID'];
    //checking if any record  is already exixts
    $q2 = "SELECT * FROM checkout WHERE cartID = $cartID1 LIMIT 1";

    $r2 = mysqli_query($connection, $q2);

    if ($r2) {
      			if (mysqli_num_rows($r2) == 0) {
				$sql = "INSERT INTO checkout(
					itemName,
					itemPrice,
					foodQuantity,
					foodMenuId,
					cartID
					) VALUES(
					'{$itemName1}',
					'{$itemPrice1}',
					'{$foodQuantity1}',
					'{$foodMenuId1}',
					'{$cartID1}'
					)";
					mysqli_query($connection,$sql);
      			}

    		}		

		}
	}


?>

<!-- enter data to cartorder table -->
<?php  

	$getLastOrder = "SELECT * FROM orderdetails where customerId = '{$usr_id}' ORDER BY orderId DESC LIMIT 1";
	$resultOrder = mysqli_query($connection,$getLastOrder);
	if ($resultOrder) {
		while ($rsOrd = mysqli_fetch_assoc($resultOrder)) {
			$lastOrderId = $rsOrd['orderId'];
		}
	}

	if (empty($lastOrderId)) {
	}else{

	$cartItems = "SELECT * FROM cart";
	$rsCartNow = mysqli_query($connection,$cartItems);

	if ($rsCartNow) {
		while ($itemCat = mysqli_fetch_assoc($rsCartNow)) {

			$cartId = $itemCat['cartID'];

			$checkCartOrder = "SELECT * FROM cartorder WHERE cartID = $cartId LIMIT 1";
			$rsCO = mysqli_query($connection,$checkCartOrder);

			if ($rsCO) {
				if (mysqli_num_rows($rsCO) == 0) {					

		      		$message = "sssss";					
					echo "<script type='text/javascript'>alert('$message');</script>";


					$inserQuery = "INSERT INTO cartorder(
					cartID,
					orderId
					)VALUES(
					'{$cartId}',
					'{$lastOrderId}'
					)";
					mysqli_query($connection,$inserQuery);
				}
			}
		}
	}
 }
?>

<div class="loggedOrders">
	<div class="container">
		<div class="col-md-12"> <!-- style="margin-top: 50px;" -->
			<nav aria-label="breadcrumb">
			    <ol class="breadcrumb">
			        <li class="breadcrumb-item"><a href="#">Home</a></li>
			        <li class="breadcrumb-item active" aria-current="page">Orders</li>
			    </ol>
	    	</nav>
		</div>
	</div>

	<div class="container">
		<div class="row justify-content-around">
			<div class="col-12 col-md-3">
					<div class="table">
				  <div class="card-body text-center">
				  	<h4 class="p-4 mb-4 bg-dark text-white">Your Orders are Here</h4>
				  	<p><i class="fa fa-truck fa-4x text-success"  ></i></p>
				  	<p><i class="fa fa-arrow-right fa-2x text-dark"  ></i></p>
				  </div>
				</div>			
			</div>
			<div class="col-12 col-md-9">
				<div class="col-12">

<?php  

 	
?>

<?php  

//getting the list of food Menu
    $query_orderdetails = "SELECT * FROM orderdetails where customerId = '{$usr_id}' ORDER BY orderDate DESC";
    $ordr = mysqli_query($connection, $query_orderdetails);

   //  if(!$ordr){
	  //  	echo "
	  //   <div class=\"container\">
			//     <div class=\"row\">
	  //     			<h3 class=\"text-danger offset-1\">Order Canceled :( <span style=\"font-size: 20px;margin-left: 40px\"><a href=\"foodMenu.php\">Return to Food Menu</a></span></h3>
	  //   		</div>
			// </div>

	  //   "; 	
   //  }

    $conf = 1;
    $not = 0;
    $canc = 2;

    if($ordr){
        while ($fm = mysqli_fetch_assoc($ordr)) {





echo "
<form method='GET' action='orders.php'>
<table class=\"table table-responsive\">
  <tbody>
    <tr class='text-secondary'>
    <div class='3'>
		<td class=\"align-middle\">
      		<b>Order Id: <span class='text-primary'>0000{$fm['orderId']}</span></b>
      	</td>	
		<td class=\"align-middle\">
      	";

      	if ($not == $fm['orderStatus']) {
        	echo "<b><span class='text-warning'>Order Not Confirmed</span></b><br>";
        }else if ($conf == $fm['orderStatus']) {
        	echo "<b><span class='text-success'>Order Confirmed</span></b><br>";
        }else if ($canc == $fm['orderStatus']) {
        	echo "<b><span class='text-danger'>Order Canceled</span></b><br>";
        }
    echo "  		
    </td>
    <div>
    <div class='2'>
      	<td class=\"align-middle\"><img src=\"../images/bag.png\" height=\"60px\" width=\"60px\"></div>
		</td>
    <div>
    <div class='3'>
		<td class=\"align-middle\">
      	<b>
      	Order Date: 
      	<span class='text-info'><br>{$fm['orderDate']}
      	</span>
      	</b>
      </td>
    <div>
    <div class='2'>
		<td class=\"align-middle\">
      	<b class='text-info'>
      	Total : Rs.<span class='text-success'>{$fm['total']}</span>/=
      	<b>
      </td>
    <div>
    <div class='2'>
		<td class=\"align-middle\">
      		<a href=\"viewOrders.php?orderId={$fm['orderId']}\" class=\"btn btn-primary btn-secondary\" name=\"viewOrder1\">View</a>
      	</td>
    <div>
    </tr>
  </tbody>
</table>
</form>
";

        }   
    }

    	



?>





				</div>
			</div>

		</div>	
	</div>
</div>



<!-- include the footer files -->
<?php
	$qw = "truncate table cart";
	$rs = mysqli_query($connection,$qw);
  include('../includes/loggedFooter.php');
?>