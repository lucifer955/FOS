<!-- include the header files -->
<?php 
  $page= 'home';include('../includes/loggedHeader.php');
?>

<!-- jumbotron -->
<div class="jumbotron jumbotron-fluid">
    <div class="container text-center">
      <h1 class="display-4 jumboh1">We'll serve it hot.</h1>
      <p class="lead">Ordering a pizza from PIZZAMART is one click away.</p>
    </div>
    <div>
        <form class="form-inline d-flex justify-content-center" action="loggedIndex.php" method="POST">
            <input class="form-control mx-1 col-6 col-md-4 col-sm-6" placeholder="Search Food" aria-label="Search" type="text" name="searchFood1" id="searchFood" autocomplete="off">
            <button class="btn btn-dark mx-1 col-3 col-md-2 col-sm-2 buttonSearch" type="submit" name="searchSubmit" id="buttonSearch" onclick="smoothScroll(document.getElementById('searchResults'))"><i class="fa fa-search"></i></button>
          </form>      
    </div>

    <div class="container howToStuff rounded loggedHowToStuff">
        <div class="row justify-content-center text-center">
            <div class="col-4 col-sm-4">
                <img src="..\images\search.png" class="rounded mx-auto d-block" alt="...">
              
                <h5>Select</h3>
                <p class="d-none d-md-block">Select the food item you want.</p>
              </div>
              <div class="col-4 col-sm-4">
                <img src="..\images\order-food.png" class="rounded mx-auto d-block" alt="...">
             
                <h5>Order</h3>
                <p class="d-none d-md-block">Select the food item you want.</p>
              </div>
          
              <div class="col-4 col-sm-4">
                <img src="..\images\pizza.png" class="rounded mx-auto d-block" alt="...">
                
                <h5>Enjoy</h3>
                <p class="d-none d-md-block">Select the food item you want.</p>        
              </div>
            </div>
        </div>    
    </div>
  </div>

  <!-- top deals -->
  <div class="container containerDeals">

   <!-- search results -->
   <div class="searchResults">
     <div class="row " >
         
<?php
            //getting the list of food Menu
  $searchFood = '';


  if (isset($_POST['searchSubmit'])) {
      $searchFood1 = $_POST['searchFood1'];

    $query3 = "SELECT * FROM foodmenu where itemName = '$searchFood1'";
    $fms1 = mysqli_query($connection, $query3);
    if($fms1){
        while ($fm = mysqli_fetch_assoc($fms1)) {

            echo "  <div class=\"col-12\">
                        <h1 class=\"text-left \">Search Results....</h1>
                        <hr>
                    </div>
                    <div class=\"col-12 col-md-6 col-sm-12 col-lg-4 itemDeal\" style=\"margin-bottom: 100px\">
                    <form action=\"foodMenu.php\" method=\"GET\">
                        <div class=\"card\">
                          <img class=\"card-img-top\" src=\"../images/{$fm['foodImage']}\" alt=\"Card image cap\" style=\"height:150px;\">
                          <div class=\"card-body\">
                            <h5 class=\"card-title\"> {$fm['itemName']} </h5>
                            <p class=\"card-text\"> {$fm['itemDescription']} </p>

                            <div class=\"text-center\">
                                <a href=\"cart.php?foodMenuId={$fm['foodMenuId']}\" class=\"btn btn-primary btn-dark\" name=\"addtocart\">Add to Cart <i class=\"fa fa-cart-plus\"></i></a>
                            </div>
                          </div>
                        </div>
                        </form>     
                    </div>
            ";
        }   
    }
  }
?>
 
     </div>
   </div>

    <div>
      <h1 class="text-center" >Our Hot Deals</h1>
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
                       
                        <a href="cart.php" class="btn btn-primary btn-dark">Add to Cart <i class="fa fa-cart-plus"></i></a>
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
