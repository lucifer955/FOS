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
			<div class="col-md-4 col-lg-4 " id="shoppingCart">
				<div class="card text-center">
				  <div class="card-header">
				   	Your Shopping Cart
				  </div>
				  <div class="card-body">
				    <h5 class="card-title"><strong>Enter Your Location Here</strong></h5>
				    <form action="cart.php" method="post">
				    	<div class="form-group loc">
				    		<input type="text" name="flatOrBuildingNumber" placeholder="Flat or Building Number" style="margin: 2px 0 2px 0;">
					    	<input type="text" name="streetName" placeholder="Street Name" style="margin: 2px 0 2px 0;">
					    	<input type="text" name="area" placeholder="Area" style="margin: 2px 0 2px 0;">
					    	<input type="text" name="landmark" placeholder="If any Landmark" style="margin: 2px 0 2px 0;">
					    	<input type="text" name="city" placeholder="City" style="margin: 2px 0 2px 0;">
				    	</div>
						    <div class="row justify-content-center">
						     <label class="col-12 control-label" ><strong>Choose</strong></label>
							    <div class="col-8">
							     <select name="product_qty" class="form-control">
							      <option>Delivery</option>
							      <option>Take Away</option>
							     </select>
							    </div>
						    </div>
						        		
						    <div class="row justify-content-center" style="margin-top: 10px;">
						     <label class="col-12 control-label" ><strong>Size</strong></label>
							    <div class="col-8">
							     <select name="product_qty" class="form-control">
							      <option>Medium</option>
							      <option>Large</option>
							      <option>Small</option>
							     </select>
							    </div>
						    </div>
						    <div class="row justify-content-center" style="margin-top: 10px;">
						     <label class="col-12 control-label" ><strong>Product Quantity</strong></label>
							    <div class="col-8 text-center">
							     <select name="product_qty" class="form-control">
							      <option>1</option>
							      <option>2</option>
							      <option>3</option>
							      <option>4</option>
							      <option>5</option>
							     </select>
							    </div>
						    </div>

						    <button type="submit" class="btn btn-primary" name="orderNow" style="margin: 20px 0 10px 0;">Order Now</button>
				    	</form>
				    </div>
				</div>
			 <!--  -->
				  <div class="card-footer text-center">
				    <h3>Total</h3>
				    <h4>Rs.499/=</h4>
				    <h5 style="margin-top: 5px;">Free Delivery</h5>
				  </div>
			</div>	
		</div>
	</div>	
</div>

<!-- include the footer files -->
<?php 
  include('../includes/loggedFooter.php');
?>