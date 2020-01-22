<!-- include the header files -->
<?php 
  $page= 'myOrders';include('../includes/loggedHeader.php');
?>

<?php  
	// $category_list = '';
	$usr_id = $_SESSION['user_id'];
	// $foodMenuId = $_SESSION['foodMenuId'];
	$orderNumber = $_GET['orderNumber'];

	$insert_data = $_GET['insert_data'];
	//getting the list of categories
	$cmp = unserialize(base64_decode($insert_data));
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
			
			<div class="col-12 col-md-8 col-lg-8">
				<div class="card">
						  <div class="card-body">
						  	<div class="row align-items-center">
							  	<div class="col-4 col-md-4 col-lg-4 text-center">
							  		<h5><b>Image</b></h5>
							  	</div>

							  	<div class="col-3 col-md-3 col-lg-3 float-left">
							  		<h5 class="card-title text-center"><b>Food Name</b></h5>
							  	</div>
							  	<div class="col-3 col-md-3 col-lg-3 float-left">
							  		<h5 class="card-title text-center"><b>Quantity</b></h5>
							  	</div>
							  	<div class="col-2 col-md-2 col-lg-2 float-left">
							  		<h5 class="card-title text-center"><b>Price</b></h5>
							  	</div>	
							  	</div>
						  </div>
						</div>
<?php
	
	foreach($cmp as $item) {
    	$foodMenuId = $item['foodMenuId'];

    		$query1 = "SELECT *
			FROM foodmenu  
			INNER JOIN orderdetails
			ON foodmenu.foodMenuId = orderdetails.foodMenuId where foodmenu.foodMenuId = $foodMenuId";  
			// $query1 = "SELECT * FROM `foodmenu` CROSS JOIN `orderdetails` where foodMenuId = $foodMenuId " ;

			// $orders = mysqli_query($connection, $query_od);SELECT * FROM foodmenu

			$orders1 = mysqli_query($connection, $query1);
		    if($orders1){
		        while ($or = mysqli_fetch_assoc($orders1)) {

		            echo "

						<div class=\"card\">
						  <div class=\"card-body\">
						  	<div class=\"row align-items-center\">
							  	<div class=\"col-4 col-md-4 col-lg-4\">
							  	<p class=\"text-center\">
							  		<img src=\"../images/{$or['foodImage']}\" alt=\"...\" class=\" rounded float-left\" height=\"128px\" width=\"128px\">
							  	</p>
							  	</div>

							  	<div class=\"col-3 col-md-3 col-lg-3 float-left\">
							  		<h5 class=\"card-title text-center\">{$or['itemName']}</h5>
							  	</div>
							  	<div class=\"col-3 col-md-3 col-lg-3 float-left\">
							  		<h5 class=\"card-title text-center\">{$or['quantity']}</h5>
							  	</div>
							  	<div class=\"col-2 col-md-2 col-lg-2 float-left\">
							  		<h5 class=\"card-title text-center\">Rs.{$or['itemPrice']}/=</h5>
							  	</div>	
							  	</div>
						  </div>
						</div>

		            ";

		            $itemPrice = $or['itemPrice'];
		        }   
		    }

		}

?>
</div>	
			<div class="col-12 col-md-4 col-lg-4 " id="shoppingCart">
				<div class="card text-center">
				  <div class="card-header">
				  <div class="card-body">
				    <h5 class="card-title"><strong>Location Details</strong></h5>


<?php

	
    //getting the list of food Menu
	$query_od = "SELECT * FROM orderdetails LIMIT 1";

	$orders = mysqli_query($connection, $query_od);

    if($orders){
        while ($or = mysqli_fetch_assoc($orders)) {

            echo "
				  <label class=\"col control-label text-center\"><b>Order Id 	: </b><span>$orderNumber</span></label>
				  <label class=\"col control-label text-center\"><b>Flat or Building No 	: </b><span>{$or['flatBuildingNo']}</span></label>
				  <label class=\"col control-label text-center\"><b>Street Name 	: </b><span>{$or['streetName']}</span></label>
				  <label class=\"col control-label text-center\"><b>Landmark 	: </b><span>{$or['landMark']}</span></label>
				  <label class=\"col control-label text-center\"><b>Area 	: </b><span>{$or['area']}</span></label>
				  <label class=\"col control-label text-center\"><b>City 	: </b><span>{$or['city']}</span></label>	
				</div>           


            ";
            $quantity = $or['quantity'];
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
                                <a href="invoice.php?orderNo=<?php echo "$orderNo"?>&quantity=<?php echo "$quantity"?>&itemPrice=<?php echo "$itemPrice" ?>" target="_blank" class="btn btn-primary btn-dark" name="addtocart" >Invoice</a>
                            </div>	
                            			  		<br>
				  		<a href="cancelOrder.php" target="_blank">cancel order</a>

				  		<br>
					    <!-- <h3>Total</h3>

					    <h4>Rs.499/=</h4> -->
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
    $qw1 = "truncate table orderdetails";
    $rs2 = mysqli_query($connection,$qw1);
    $qw = "truncate table cart";
    $rs = mysqli_query($connection,$qw);

  include('../includes/loggedFooter.php');
?>