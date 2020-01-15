<!-- include the header files -->
<?php 
  $page= 'myOrders';include('../includes/loggedHeader.php');
?>

<?php  
	// $category_list = '';
	$usr_id = $_SESSION['user_id'];
	// $foodMenuId = $_SESSION['foodMenuId'];
	$orderNo = $_GET['orderNo'];

	$foodMenuId = $_GET['foodMenuId'];
	$quantity = $_GET['quantity'];

	//getting the list of categories


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
		<div class="row">


<?php

    //getting the list of food Menu
	$query_od = "SELECT * FROM orderdetails where orderNo = $orderNo";

	$query1 = "SELECT * FROM foodmenu where foodMenuId = $foodMenuId";

	$orders = mysqli_query($connection, $query_od);

	$orders1 = mysqli_query($connection, $query1);

    if($orders1){
        while ($or = mysqli_fetch_assoc($orders1)) {

            echo "
            <div class=\"col-12 col-md-7 col-lg-7\">
				<div class=\"card\">
				  <div class=\"card-body\">
				  	<div class=\"row align-items-center\">
					  	<div class=\"col-4 col-md-4 col-lg-4\">
					  		<img src=\"../images/{$or['foodImage']}\" alt=\"...\" class=\" rounded float-left\" height=\"128px\" width=\"128px\">
					  	</div>

					  	<div class=\"col-5 col-md-5 col-lg-5 float-left\">
					  		<h5 class=\"card-title\">{$or['itemName']}</h5>

					    	<p class=\"card-text\"{$or['itemDescription']}</p>
					  	</div>

					  	<div class=\"col-2 col-md-2 col-lg-2 float-left\">
					  		<p>Rs.{$or['itemPrice']}/=</p>
					  	</div>	
					  	</div>
				  </div>
				</div>
			</div>	
            ";

            $itemPrice = $or['itemPrice'];
        }   
    }

?>
			



			<div class="col-12 col-md-5 col-lg-5" id="shoppingCart">
				<div class="card text-center">
				  <div class="card-header">
				  <div class="card-body">
				    <h5 class="card-title"><strong>Location Details</strong></h5>


<?php

    //getting the list of food Menu
	$query_od = "SELECT * FROM orderdetails where orderNo = $orderNo";

	$orders = mysqli_query($connection, $query_od);

    if($orders){
        while ($or = mysqli_fetch_assoc($orders)) {

            echo "
				  <label class=\"col control-label text-center\"><b>Food Id 	: </b><span>{$or['foodMenuId']}</span></label>
				  <label class=\"col control-label text-center\"><b>Flat or Building No 	: </b><span>{$or['flatBuildingNo']}</span></label>
				  <label class=\"col control-label text-center\"><b>Street Name 	: </b><span>{$or['streetName']}</span></label>
				  <label class=\"col control-label text-center\"><b>Landmark 	: </b><span>{$or['landMark']}</span></label>
				  <label class=\"col control-label text-center\"><b>Area 	: </b><span>{$or['area']}</span></label>
				  <label class=\"col control-label text-center\"><b>City 	: </b><span>{$or['city']}</span></label>	
				</div>           


            ";
        }   
    }

?>
<!-- 				    	<div class="form-group loc text-center">
				    			<label class="col control-label text-center"><b>Food Id 	: </b><span>#h12321334</span></label>
				    			<label class="col control-label text-center"><b>Flat or Building No 	: </b><span>12</span></label>
				    			<label class="col control-label text-center"><b>Street Name 	: </b><span>asdfga</span></label>
				    			<label class="col control-label text-center"><b>Landmark 	: </b><span>asfdawsd</span></label>
				    			<label class="col control-label text-center"><b>Area 	: </b><span>qwerqw</span></label>
				    			<label class="col control-label text-center"><b>Land Mark 	: </b><span>werwe</span></label>	
				    	</div>
 -->
				    </div>
				</div>

				  <div class="card-footer text-center">
				  	<form>
				  		<div class="text-center">
                                <a href="invoice.php?foodMenuId=<?php echo "$foodMenuId"?>&orderNo=<?php echo "$orderNo"?>&quantity=<?php echo "$quantity"?>&itemPrice=<?php echo "$itemPrice" ?>" class="btn btn-primary btn-dark" name="addtocart"  target="_blank">Invoice</a>
                            </div>				  		<br>
				  		<a href="cancelOrder.php" target="_blank">cancel order</a>

				  		<br>
					    <h3>Total</h3>

					    <h4>Rs.499/=</h4>
					    <h5 style="margin-top: 5px;">Free Delivery</h5>		  		
				  	</form>

				  </div>
			</div>	
		</div>
	</div>
</div>
</div>


<!-- include the footer files -->
<?php 
  include('../includes/loggedFooter.php');
?>