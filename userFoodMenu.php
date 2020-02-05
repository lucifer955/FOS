<!-- include the header files -->
<?php 
  $page= 'usrfoodMenu';include('includes/header.php');
?>

<div class="userfoodMenu">
	<div class="container">
		<div class="col-md-12" > <!-- style="margin-top: 50px;" -->
			<nav aria-label="breadcrumb">
			    <ol class="breadcrumb">
			        <li class="breadcrumb-item"><a href="#">Home</a></li>
			        <li class="breadcrumb-item active" aria-current="page">Food Menu</li>
			    </ol>
	    	</nav>
		</div>
		<div class="row">
			<div class="col-md-3 col-lg-3">
				<?php 
					include('includes/sidebar.php');
				?>
			</div>

			<div class="col-md-9 col-lg-9">
				<div class="box">
					<h1>PIZZAMART</h1>
					<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
				</div>
			

				<div class="row">
					<?php

    //getting the list of food Menu
    $query_fm = "SELECT * FROM foodmenu";
    $fms = mysqli_query($connection, $query_fm);
    if($fms){
        while ($fm = mysqli_fetch_assoc($fms)) {

            echo "
                    <div class=\"col-12 col-md-6 col-sm-12 col-lg-4 itemDeal\" >
                    <form action=\"foodMenu.php\" method=\"GET\">
                        <div class=\"card\">
                          <img class=\"card-img-top\" src=\"images/{$fm['foodImage']}\" alt=\"Card image cap\" style=\"height:150px;\">
                          <div class=\"card-body\">
                            <h5 class=\"card-title\"> {$fm['itemName']} </h5>
                            <p class=\"card-text\"> {$fm['itemDescription']} </p>

                            <div class=\"text-center\">
                                <a href=\"sign_in.php\" class=\"btn btn-primary btn-dark\" name=\"addtocart\">Add to Cart <i class=\"fa fa-cart-plus\"></i></a>
                            </div>
                          </div>
                        </div>
                        </form>     
                    </div>
            ";
        }   
    }

?>
<!-- 					<div class="col-12 col-md-6 col-sm-12 col-lg-4 itemDeal">
		          		<div class="card">
			              <img class="card-img-top" src="..\images\BBQChickenPizza-foodgawker (1).jpg" alt="Card image cap">
			              <div class="card-body">
			                <h5 class="card-title">Chicken Bacon</h5>
			                <p class="card-text">Chicken Bacon Pizza is loaded with chicken bacon and onions & green chillies with a double layer of mozzarella cheese.
							.</p>
			                <div class="text-center">
			                	<a href="cart.php" class="btn btn-primary btn-dark">Add to Cart <i class="fa fa-cart-plus"></i></a>
			                </div>
			              </div>
		            	</div>
		      		</div>
		      		<div class="col-12 col-md-6 col-sm-12 col-lg-4 itemDeal">
		          		<div class="card">
			              <img class="card-img-top" src="..\images\Hot-Spicy-Pizza.jpg" alt="Card image cap">
			              <div class="card-body">
			                <h5 class="card-title">Spicy Seafood</h5>
			                <p class="card-text">A fiery mix of prawns, devilled fish, olives, bell peppers and onions with a double layer of mozzarella cheese.
							</p>
			                <div class="text-center">
			                	<a href="cart.php" class="btn btn-primary btn-dark">Add to Cart <i class="fa fa-cart-plus"></i></a>
			                </div>
			              </div>
		            	</div>
		      		</div>
		      		<div class="col-12 col-md col-sm-12 col-lg-4 itemDeal">
		          		<div class="card">
			              <img class="card-img-top" src="..\images\chicken-bacon-ranch-pizza.jpg" alt="Card image cap">
			              <div class="card-body">
			                <h5 class="card-title">Hot Garlic Prawns</h5>
			                <p class="card-text">Spicy prawns, hot garlic sauce, onions, peppers and tomatoes with a double layer of mozzarella cheese.</p>
			                <div class="text-center">
			                	<a href="cart.php" class="btn btn-primary btn-dark">Add to Cart <i class="fa fa-cart-plus"></i></a>
			                </div>
			              </div>
		            	</div>
		      		</div> -->
				</div>
			</div>	
		</div>
	</div>

	<div class="container">
		<!-- pagination -->
		<nav aria-label="Page navigation example" class="paginationCss"> <!-- style="background: white; margin-top: 20px;" -->
			  <ul class="pagination justify-content-center">
			    <li class="page-item disabled">
			      <a class="page-link" href="#" tabindex="-1" aria-disabled="true">Previous</a>
			    </li>
			    <li class="page-item"><a class="page-link" href="#">1</a></li>
			    <li class="page-item"><a class="page-link" href="#">2</a></li>
			    <li class="page-item"><a class="page-link" href="#">3</a></li>
			    <li class="page-item">
			      <a class="page-link" href="#">Next</a>
			    </li>
			  </ul>
		</nav>
	</div>
</div>
<!-- include the footer files -->
<?php 
  include('includes/footer.php');
?>