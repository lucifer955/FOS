<!-- include the header files -->
<?php 
  $page= 'cart';include('../includes/loggedHeader.php');
?>

<div class="loggedCart">
	<div class="container">
		<div class="col-md-12"> <!-- style="margin-top: 50px;" -->
			<nav aria-label="breadcrumb">
			    <ol class="breadcrumb">
			        <li class="breadcrumb-item"><a href="#">Home</a></li>
			        <li class="breadcrumb-item active" aria-current="page">Cart</li>
			    </ol>
	    	</nav>
		</div>
		<div class="row">
			<div class="col-md-8 col-lg-8">
				<div class="card">
				  <div class="card-header">
				    Cart Items
				  </div>
				  <div class="card-body">
				      <table class="table table-hover table-bordered">
						  <thead>
						    <tr>
						      <th scope="col">Image</th>
						      <th scope="col">Quantity</th>
						      <th scope="col">Unit<br>Price</th>
						      <th scope="col">SubTotal</th>
						    </tr>
						  </thead>
						  <tbody>
						    <tr class="text-center">
						      <td class="align-middle" ><img src="..\images\bg2.png" alt="..." class="img-thumbnail"><br>Cheese Pizza</td>
						      <td class="align-middle">2</td>
						      <td class="align-middle">Rs.499</td>
						      <td class="align-middle">Rs.998</td>
						    </tr>
						    <tr class="text-center">
						      <td class="align-middle" ><img src="..\images\bg2.png" alt="..." class="img-thumbnail"><br>Mongolian Pizza</td>
						      <td class="align-middle">1</td>
						      <td class="align-middle">Rs.299</td>
						      <td class="align-middle">Rs.299</td>
						    </tr>
						  </tbody>
						</table>
				  </div>
				</div>
			</div>
			<div class="col-md-4 col-lg-4 shoppingCart">
				<div class="card text-center">
				  <div class="card-header">
				   	Your Shopping Cart
				  </div>
				  <div class="card-body">
				    <h5 class="card-title">Enter Your Location Here</h5>
				    <form action="cart.php" method="post">
				    	<div class="form-group">
				    		<input type="text" name="flatOrBuildingNumber" placeholder="Flat or Flat or Building Number">
					    	<input type="text" name="streetName" placeholder="Street Name">
					    	<input type="text" name="area" placeholder="Area">
					    	<input type="text" name="landmark" placeholder="If any Landmark">
					    	<input type="text" name="city" placeholder="City">
				    	</div>
				    </form>
				    
				  </div>
				  <div class="card-footer text-center">
				    <h3>Total</h3>
				    <h4>Rs.499/=</h4>
				    <a href="#" class="btn btn-dark">Order</a>
				    <h5 style="margin-top: 5px;">Free Delivery</h5>
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