<?php 
  $page= 'orders';include('adminIncludes/adminHeader.php');
?>



<div class="adminOrder">
	<div class="col-md-12" >
		<nav aria-label="breadcrumb">
			<ol class="breadcrumb">
				<li class="breadcrumb-item"><a href="dashboard.php">Home</a></li>
				<li class="breadcrumb-item active" aria-current="page">Not Confirmed Order Details</li>
			</ol>
		</nav>
	</div>
</div>

<div class="container">
	<div class="row justify-content-center">
		<div class="card col-12 text-center">
				<h2 class="text-center">Not Confirmed Order Details</h2>
					<div class="card-body">
					    <div class="table-responsive-md">
							  	<table class="table table-hover table-bordered">
									<thead>
									    <tr>
									      <th scope="col">Order Id</th>
									      <th scope="col">Customer Id</th>
									      <th scope="col">Total</th>
									      <th scope="col">Delivery Type</th>
									    </tr>
									  </thead>
									  	<tbody>

<?php  

    //getting the list of food Menu
    $query_fm = "SELECT * FROM orderdetails where orderStatus = 0 ORDER BY orderId DESC";
    $fms = mysqli_query($connection, $query_fm);
    if($fms){
        while ($fm = mysqli_fetch_assoc($fms)) {

            echo "

									  	<tr>
									      <th>0000{$fm['orderId']}</th>
									      <td>0000{$fm['customerId']}</td>
									      <td>Rs.{$fm['total']}/=</td>
									      <td><a href=\"viewNotConfirmedOrderDetail.php?orderId={$fm['orderId']}&cutomerId={$fm['customerId']}\">View Details</a></td>
									    </tr>



            ";
        }   
    }




?>									  

									  </tbody>
							  	</table>
						</div>
					</div>
			</div>	
	</div>
</div>
<?php 
  include('adminIncludes/adminFooter.php');
?>