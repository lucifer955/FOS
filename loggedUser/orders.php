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
			<div class="card">
				  <div class="card-header">
				    Cart Items
				  </div>
				  <div class="card-body">
				      <table class="table">
						  <thead>
						    <tr>
						      <th scope="col">Image</th>
						      <th scope="col">Quantity</th>
						      <th scope="col">Unit<br>Price</th>
						      <th scope="col">SubTotal</th>
						      <th scope="col">Deliver Status</th>
						    </tr>
						  </thead>
						  <tbody>
						    <tr class="text-center">
						      <td class="align-middle" ><img src="..\images\bg2.png" alt="..." class="img-thumbnail"><br>Cheese Pizza</td>
						      <td class="align-middle">2</td>
						      <td class="align-middle">Rs.499</td>
						      <td class="align-middle">Rs.998</td>
						      <td class="align-middle">Delivered</td>
						    </tr>
						    <tr class="text-center">
						      <td class="align-middle" ><img src="..\images\bg2.png" alt="..." class="img-thumbnail"><br>Mongolian Pizza</td>
						      <td class="align-middle">1</td>
						      <td class="align-middle">Rs.299</td>
						      <td class="align-middle">Rs.299</td>
						      <td class="align-middle">Cancelled</td>
						    </tr>
						  </tbody>
						</table>
				  </div>
				</div>
		</div>
	</div>
</div>


<!-- include the footer files -->
<?php 
  include('../includes/loggedFooter.php');
?>