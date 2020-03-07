<!-- include the header files -->
<?php 
  $page= 'myOrders';include('../includes/loggedHeader.php');
?>

<?php  
	// $category_list = '';
	$usr_id = $_SESSION['user_id'];




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
			<div class="col-2">
				<div class="card">
				  <div class="card-body">
					    
				  </div>
				</div>				
			</div>
			<div class="col-9">
				<div class="col-12">

<?php  

//getting the list of food Menu
    $query_orderdetails = "SELECT * FROM orderdetails";
    $ordr = mysqli_query($connection, $query_orderdetails);
    if($ordr){
        while ($fm = mysqli_fetch_assoc($ordr)) {

            echo "
					<div class=\"card\" >
					  <div class=\"card-body text-center\">
					  	<div class=\"row justify-content-around\">
					  	<div class='col-3 align-self-center'>
					  		<div class=\" align-self-center\">order Id : {$fm['orderId']}</div>
					  	</div>

					  		<div class=\"col-3 align-self-center\">
								<img src=\"../images/bag.png\" height=\"80px\" width=\"80px\" class='img-thumbnail'></div>
					  		<div class=\"col-4 align-self-center\">
					  			<p>order date : {$fm['orderDate']}</p>
					  			<p>customer Id : ".$_SESSION['user_id']."</p>
					  		</div>
					  		<div class=\"col-2 align-self-center\">Total : Rs.{$fm['total']}/=</div>	
					  	</div>
					  </div>
					</div>

                    
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
	// $qw = "truncate table orderdetails";
	// $rs = mysqli_query($connection,$qw);
  include('../includes/loggedFooter.php');
?>