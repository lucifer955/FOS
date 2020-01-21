<!-- include the header files -->
<?php 
  $page= 'myOrders';include('../includes/loggedHeader.php');
?>

<?php  
	
	$sql = "SELECT foodMenuId FROM orderdetails";
	$result = mysqli_query($connection,$sql);
	$datas = array();

	if (mysqli_num_rows($result) > 0) {
		while ($row = mysqli_fetch_assoc($result)) {
			$datas[] = $row;
		}
	}

	$insert_data = base64_encode(serialize($datas));
	// serialize($datas);
	$query12 = "INSERT INTO orderno (orderNumber,foodMenuIds) VALUES ('','{$insert_data}')";
	// $cmp = unserialize(base64_decode($insert_data));
	// print_r($cmp);
    $result = mysqli_query($connection,$query12);
    $_SESSION["insert_data"] = $datas;
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
    $query_or = "SELECT * FROM orderno ORDER BY orderNumber DESC";
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
					      		<h5 class=\"card-title\">Order ID : <span>{$or['orderNumber']}</span></h5>
				        		<p class=\"card-text\">Order date : <span>{$or['orderedTime']}</span></p>			      			
				      		</div>
				      		<div class=\"col col-md\">
				      		<div class=\"text-center\">
                                <a href=\"orderdetails.php?orderNumber={$or['orderNumber']}&insert_data=$insert_data\" class=\"btn btn-primary btn-dark\" name=\"addtocart\">View Details</a>
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
	// $qw = "truncate table orderdetails";
	// $rs = mysqli_query($connection,$qw);
  include('../includes/loggedFooter.php');
?>