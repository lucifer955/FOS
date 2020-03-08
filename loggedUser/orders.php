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
			<div class="col-3">
					<div class="table">
				  <div class="card-body text-center">
				  	<h4 class="p-4 mb-4 bg-dark text-white">Your Orders are Here</h4>
				  	<p><i class="fa fa-truck fa-4x text-success"  ></i></p>
				  	<p><i class="fa fa-arrow-right fa-2x text-dark"  ></i></p>
				  </div>
				</div>			
			</div>
			<div class="col-9">
				<div class="col-12">

<?php  

 	
?>

<?php  

//getting the list of food Menu
    $query_orderdetails = "SELECT * FROM orderdetails where customerId = '{$usr_id}'";
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



    if($ordr){
        while ($fm = mysqli_fetch_assoc($ordr)) {

echo "
<form method='GET' action='orders.php'>
<table class=\"table\">
  <tbody>
    <tr class='text-secondary'>
    <div class='3'>
		<td class=\"align-middle\">
      		<b>Order Id: <span class='text-primary'>0000{$fm['orderId']}</span></b>
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


     //        echo "
					// <div class=\"card mb-2\" style='border-left: 10px solid green;border-right: 10px solid green; ' >
					//   <div class=\"card-body\">
					//   	<div class=\"row justify-content-around\">
					//   	<div class='col-3 align-self-center'>
					//   		<div class=\" align-self-center\"><b>Order Id : <span class='text-primary'>00000{$fm['orderId']}</span> </b></div>
					//   	</div>

					//   		<div class=\"col-2 align-self-center\">
					// 			<img src=\"../images/bag.png\" height=\"80px\" width=\"80px\"></div>
					//   		<div class=\"col-4 align-self-center\">
					//   			<b>
					//   				<p>Order Date: <span class='text-info'><br>{$fm['orderDate']}</span></p>
					//   				<p>Customer Id: <span class='text-info'>".$_SESSION['user_id']."</span></p>
					//   			</b>
					//   		</div>
					//   		<div class=\"col-2 align-self-center\">Total : Rs.<span class='te'>{$fm['total']}</span>/=</div>	
					//   	</div>
					//   </div>
					// </div>

                    
     //        ";
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