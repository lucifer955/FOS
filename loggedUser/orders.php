<!-- include the header files -->
<?php 
  $page= 'myOrders';include('../includes/loggedHeader.php');
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
    $query_or = "SELECT * FROM orderdetails ORDER BY orderNo DESC";
    $odr = mysqli_query($connection, $query_or);
    if($odr){
        while ($or = mysqli_fetch_assoc($odr)) {

            echo "
            <div class=\"col-12 col-md-7 col-lg-7\">
				<div class=\"card mb-3\">
				  <div class=\"row no-gutters align-items-center\">
				    <div class=\"col col-md-4\">
				    	<img src=\"../images/bag(1).png\" alt=\"...\" class=\" rounded float-left offset-col-1\">
				    </div>
				    <div class=\" col col-md-8\">
				      <div class=\"card-body\">
				      	<div class=\"row\">
				      		<div class=\"col col-md\">
					      		<h5 class=\"card-title\">Order ID : <span>{$or['orderNo']}</span></h5>
				        		<p class=\"card-text\">Order date : <span>2000.12.12</span></p>			      			
				      		</div>
				      		<div class=\"col col-md\">
				      		<div class=\"text-center\">
                                <a href=\"orderdetails.php?orderNo={$or['orderNo']}&foodMenuId={$or['foodMenuId']}&quantity={$or['quantity']}\" class=\"btn btn-primary btn-dark\" name=\"addtocart\">View Details</a>
                            </div>	
				      		</div>
				      	</div>
				      </div>
				    </div>
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


<!-- include the footer files -->
<?php 
  include('../includes/loggedFooter.php');
?>