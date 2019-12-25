<!-- include the header files -->
<?php 
  $page= 'home';include('../includes/header.php');
?>
<!-- jumbotron -->
<div class="jumbotron jumbotron-fluid">
    <div class="container text-center">
      <h1 class="display-4 jumboh1">We'll serve it hot.</h1>
      <p class="lead">Ordering a pizza from PIZZAMART is one click away.</p>
    </div>
    <div>
        <form class="form-inline d-flex justify-content-center">
            <input class="form-control mx-1 col-6 col-md-4 col-sm-6" type="search" placeholder="Search Food" aria-label="Search">
            <button class="btn btn-darkl mx-1 col-3 col-md-2 col-sm-2" type="submit"><i class="fa fa-search"></i></button>
          </form>      
    </div>

    <div class="container howToStuff rounded">
        <div class="row justify-content-center text-center">
            <div class="col-4 col-sm-4">
                <img src="..\images\search.png" class="rounded mx-auto d-block" alt="...">
              
                <h5>Select</h3>
                <p class="d-none d-md-block">Selct the food item you want.</p>
              </div>
              <div class="col-4 col-sm-4">
                <img src="..\images\order-food.png" class="rounded mx-auto d-block" alt="...">
             
                <h5>Order</h3>
                <p class="d-none d-md-block">Selct the food item you want.</p>
              </div>
          
              <div class="col-4 col-sm-4">
                <img src="..\images\pizza.png" class="rounded mx-auto d-block" alt="...">
                
                <h5>Enjoy</h3>
                <p class="d-none d-md-block">Selct the food item you want.</p>        
              </div>
            </div>
        </div>    
    </div>
  </div>

  <!-- top deals -->
  <div class="container containerDeals">
    <div>
      <h1 class="text-center">Our Hot Deals</h1>
      <hr>
    </div>
    
    <div class="row">
      <div class="col-12 col-md-4 col-sm-4 itemDeal">
          <div class="card">
              <img class="card-img-top" src="..\images\bg2.png" alt="Card image cap">
              <div class="card-body">
                <h5 class="card-title">Card title</h5>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                <a href="#" class="btn btn-primary">Go somewhere</a>
              </div>
            </div>
      </div>
      <div class="col-12 col-md-4 col-sm-4 itemDeal">
          <div class="card" >
              <img class="card-img-top" src="..\images\bg2.png" alt="Card image cap">
              <div class="card-body">
                <h5 class="card-title">Card title</h5>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                <a href="#" class="btn btn-primary">Go somewhere</a>
              </div>
            </div>
      </div>
      <div class="col-12 col-md-4 col-sm-4 itemDeal">
          <div class="card" >
              <img class="card-img-top" src="..\images\bg2.png" alt="Card image cap">
              <div class="card-body">
                <h5 class="card-title">Card title</h5>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                <a href="#" class="btn btn-primary">Go somewhere</a>
              </div>
            </div>
      </div>
    </div>

    <div class="row">
        <div class="col-12 col-md-4 col-sm-4 itemDeal">
            <div class="card">
                <img class="card-img-top" src="..\images\bg2.png" alt="Card image cap">
                <div class="card-body">
                  <h5 class="card-title">Card title</h5>
                  <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                  <a href="#" class="btn btn-primary">Go somewhere</a>
                </div>
              </div>
        </div>
        <div class="col-12 col-md-4 col-sm-4 itemDeal">
            <div class="card" >
                <img class="card-img-top" src="..\images\bg2.png" alt="Card image cap">
                <div class="card-body">
                  <h5 class="card-title">Card title</h5>
                  <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                  <a href="#" class="btn btn-primary">Go somewhere</a>
                </div>
              </div>
        </div>
        <div class="col-12 col-md-4 col-sm-4 itemDeal">
            <div class="card" >
                <img class="card-img-top" src="..\images\bg2.png" alt="Card image cap">
                <div class="card-body">
                  <h5 class="card-title">Card title</h5>
                  <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                  <a href="#" class="btn btn-primary">Go somewhere</a>
                </div>
              </div>
        </div>
      </div>
  </div>

<!-- include the footer files -->  
<?php 
  include('../includes/footer.php');
?>
