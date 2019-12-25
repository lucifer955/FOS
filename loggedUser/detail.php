<!-- include the header files -->
<?php 
  $page= 'foodMenu';include('../includes/loggedHeader.php');
?>

<div class="loggedFoodMenuDetails">
	<div class="container">
		<div class="col-md-12" > <!-- style="margin-top: 50px;" -->
			<nav aria-label="breadcrumb rounded">
			    <ol class="breadcrumb">
			        <li class="breadcrumb-item"><a href="#">Home</a></li>
			        <li class="breadcrumb-item"><a href="#">Food Menu</a></li>
			        <li class="breadcrumb-item active" aria-current="page">Details</li>
			    </ol>
	    	</nav>
		</div>
		<div class="row">
			<div class="col-md-3 col-lg-3">
				<?php 
					include('../includes/sidebar.php');
				?>
			</div>

			<div class="col-md-9 col-lg-9 carouselCss">
				<div class="row">
					<div class="col-sm col-md-6">
						<div id="carouselExampleInterval" class="carousel slide" data-ride="carousel">
						  <div class="carousel-inner">
						    <div class="carousel-item active" data-interval="10000">
						      <img src="..\images\bg7.jpg" class="d-block w-100" alt="...">
						    </div>
						    <div class="carousel-item" data-interval="2000">
						      <img src="..\images\bg7.jpg" class="d-block w-100" alt="...">
						    </div>
						    <div class="carousel-item">
						      <img src="..\images\bg7.jpg" class="d-block w-100" alt="...">
						    </div>
						  </div>
						  <a class="carousel-control-prev" href="#carouselExampleInterval" role="button" data-slide="prev">
						    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
						    <span class="sr-only">Previous</span>
						  </a>
						  <a class="carousel-control-next" href="#carouselExampleInterval" role="button" data-slide="next">
						    <span class="carousel-control-next-icon" aria-hidden="true"></span>
						    <span class="sr-only">Next</span>
						  </a>
						</div>
					</div>

					<div class="col-sm col-md detailCss">
						<div class="col-sm col-md">
						    <div class="card">
						      <div class="card-body">
						        <h5 class="card-title">PIZZA Name</h5>
						        <p class="card-text">A little discription about certain pizza goes here</p>

						        <form action="details.php" method="post" class="fom-horizontal detailCard">
						        	<div class="form-group">
						        		<div class="row">
						        			<label class="col-md-7 col-sm control-label" >Choose</label>
							        		<div class="col-md-5 col-sm">
							        			<select name="product_qty" class="form-control  text-center">
							        				<option>Delivery</option>
							        				<option>Take Away</option>
							        			</select>
							        		</div>
						        		</div>
						        		
						        		<div class="row">
						        			<label class="col-md-7 col-sm control-label" >Size</label>
							        		<div class="col-md-5 col-sm">
							        			<select name="product_qty" class="form-control  text-center">
							        				<option>Medium</option>
							        				<option>Large</option>
							        				<option>Small</option>
							        			</select>
							        		</div>
						        		</div>
						        		<div class="row">
						        			<label class="col-md-7 col-sm control-label" >Product Quantity</label>
							        		<div class="col-md-5 col-sm text-center">
							        			<select name="product_qty" class="form-control">
							        				<option>1</option>
							        				<option>2</option>
							        				<option>3</option>
							        				<option>4</option>
							        				<option>5</option>
							        			</select>
							        		</div>
						        		</div>	
						        	</div>
						        	
						        </form>

						        <div class="text-center">
				                	<a href="#" class="btn btn-primary btn-dark">Add Wishlist <i class="fa fa-heart"></i></a>
				                	<a href="cart.php" class="btn btn-primary btn-dark">Add to Cart <i class="fa fa-cart-plus"></i></a>
				                </div>
						      </div>
						    </div>
						</div>
					</div>
				</div>
			</div>	
		</div>
	</div>

	<div class="container topDeals">
		<div>
			<h6 class="text-center">Popular Deals</h6>
			<hr>
		</div>
		<div class="row">
					<div class="col-12 col-md-6 col-sm-12 col-lg-4 itemDeal">
		          		<div class="card">
			              <img class="card-img-top" src="..\images\bg2.png" alt="Card image cap">
			              <div class="card-body">
			                <h5 class="card-title">Card title</h5>
			                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
			                <div class="text-center">
			                	<a href="#" class="btn btn-primary btn-dark">View</a>
			                	<a href="cart.php" class="btn btn-primary btn-dark">Add to Cart <i class="fa fa-cart-plus"></i></a>
			                </div>
			              </div>
		            	</div>
		      		</div>
		      		<div class="col-12 col-md-6 col-sm-12 col-lg-4 itemDeal">
		          		<div class="card">
			              <img class="card-img-top" src="..\images\bg2.png" alt="Card image cap">
			              <div class="card-body">
			                <h5 class="card-title">Card title</h5>
			                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
			                <div class="text-center">
			                	<a href="#" class="btn btn-primary btn-dark">view</a>
			                	<a href="cart.php" class="btn btn-primary btn-dark">Add to Cart <i class="fa fa-cart-plus"></i></a>
			                </div>
			              </div>
		            	</div>
		      		</div>
		      		<div class="col-12 col-md col-sm-12 col-lg-4 itemDeal">
		          		<div class="card">
			              <img class="card-img-top" src="..\images\bg2.png" alt="Card image cap">
			              <div class="card-body">
			                <h5 class="card-title">Card title</h5>
			                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
			                <div class="text-center">
			                	<a href="detail.php" class="btn btn-primary btn-dark">view</a>
			                	<a href="cart.php" class="btn btn-primary btn-dark">Add to Cart <i class="fa fa-cart-plus"></i></a>
			                </div>
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