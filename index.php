<!-- include the header files -->
<?php 
  $page= 'home';include('includes/header.php');
?>
<!-- jumbotron -->
<div class="jumbotron jumbotron-fluid">
    <div class="container text-center">

        <h1 class="display-4 jumboh1 effect-shine">We'll serve it <span style="color: red">hot...</span></h1>

      <p class="lead">Ordering a pizza from <span>PIZZA</span>MART is one click away.</p>
    </div>
    <div>
        <form class="form-inline d-flex justify-content-center">
            <input class="form-control mx-1 col-6 col-md-4 col-sm-6" type="search" placeholder="Search Food" aria-label="Search">
            <button class="btn btn-dark mx-1 col-3 col-md-2 col-sm-2" type="submit"><i class="fa fa-search"></i></button>
          </form>      
    </div>

    <div class="container howToStuff rounded">
        <div class="row justify-content-center text-center">
            <div class="col-4 col-sm-4">
                <img src="images\search.png" class="rounded mx-auto d-block" alt="...">
              
                <h5><b>Select</b></h5>
                <p class="d-none d-md-block">Select the food item you want.</p>
              </div>
              <div class="col-4 col-sm-4">
                <img src="images\order-food.png" class="rounded mx-auto d-block" alt="...">
             
                <h5><b>Order</b></h5>
                <p class="d-none d-md-block">Select the food item you want.</p>
              </div>
          
              <div class="col-4 col-sm-4">
                <img src="images\pizza.png" class="rounded mx-auto d-block" alt="...">
                
                <h5><b>Enjoy</b></h5>
                <p class="d-none d-md-block">Select the food item you want.</p>        
              </div>
            </div>
        </div>    
    </div>




<div class="container containerDeals" style="margin-top: 100px">
  <div>
      <h1 class="text-center">About Us</h1>
      <hr>
    </div>
<div class="section-block-grey">
    <div class="container">
        <div class="section-heading center-holder" style="margin-top: 100px">
            <h3>Doing the right thing at the right time</h3>
            <div class="section-heading-line"></div>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                <br>incididunt ut labore et dolore magna aliqua.</p>
        </div>
        <div class="row mt-60">
            <div class="col-md-4 col-sm-12 col-12">
                <div class="serv-section-2">
                    <div class="serv-section-2-icon"> <i class="fas fa-concierge-bell"></i> </div>
                    <div class="serv-section-desc">
                        <h4>On time</h4>
                        <h5>We provide better service</h5> </div>
                    <div class="section-heading-line-left"></div>
                </div>
            </div>
            <div class="col-md-4 col-sm-12 col-12">
                <div class="serv-section-2 serv-section-2-act">
                    <div class="serv-section-2-icon serv-section-2-icon-act"> <i class="fas fa-pepper-hot"></i> </div>
                    <div class="serv-section-desc">
                        <h4>Hot n Spicy</h4>
                        <h5>Larger Collection of PIZZA</h5></div>
                    <div class="section-heading-line-left"></div>
                   
                </div>
            </div>
            <div class="col-md-4 col-sm-12 col-12">
                <div class="serv-section-2">
                    <div class="serv-section-2-icon"> <i class="fas fa-info"></i> </div>
                    <div class="serv-section-desc">
                        <h4>Info</h4>
                        <h5>Contact us for more details</h5></div>
                    <div class="section-heading-line-left"></div>
                    
                </div>
            </div>
        </div>

    </div>
</div>  

</div>
 <!-- top deals -->
  <div class="container containerDeals" style="margin-top: 150px;">
    <div>
      <h1 class="text-center">Our Hot Deals</h1>
      <hr>
    </div>
    <div class="text-center">
          <h4 style="font-style: italic; font-family: sans-serif;">Just sign in to pick your favourite</h4>
      </div>
    <div class="row" style="margin-top: 60px;">
      
      <div class="col-12 col-md-4 col-sm-4 itemDeal">
          <div class="card">
                    <img class="card-img-top" src="images\BBQChickenPizza-foodgawker (1).jpg" alt="Card image cap">
                    <div class="card-body">
                      <h5 class="card-title">Chicken Bacon</h5>
                      <p class="card-text">Chicken Bacon Pizza is loaded with chicken bacon and onions & green chillies with a double layer of mozzarella cheese.
</p>
                      <!-- <div class="text-center">
                        <a href="#" class="btn btn-primary btn-dark">Add to Cart <i class="fa fa-cart-plus"></i></a>
                      </div> -->
                    </div>
                  </div>
      </div>
      <div class="col-12 col-md-4 col-sm-4 itemDeal">
          <div class="card">
                    <img class="card-img-top" src="images\Hot-Spicy-Pizza.jpg" alt="Card image cap">
                    <div class="card-body">
                      <h5 class="card-title">Spicy Seafood</h5>
                      <p class="card-text">A fiery mix of prawns, devilled fish, olives, bell peppers and onions with a double layer of mozzarella cheese.</p>
                      <!-- <div class="text-center">
                        <a href="#" class="btn btn-primary btn-dark">Add to Cart <i class="fa fa-cart-plus"></i></a>
                      </div> -->
                    </div>
                  </div>
      </div>
      <div class="col-12 col-md-4 col-sm-4 itemDeal">
          <div class="card">
                    <img class="card-img-top" src="images\chicken-bacon-ranch-pizza.jpg" alt="Card image cap">
                    <div class="card-body">
                      <h5 class="card-title">Hot Garlic Prawns</h5>
                      <p class="card-text">Spicy prawns, hot garlic sauce, onions, peppers and tomatoes with a double layer of mozzarella cheese.</p>
                      <!-- <div class="text-center">
                        <a href="#" class="btn btn-primary btn-dark">Add to Cart <i class="fa fa-cart-plus"></i></a>
                      </div> -->
                    </div>
                  </div>
      </div>
    </div>
  </div>
<div class="container containerDeals  d-none d-lg-block" style="margin-top: 100px;">
  <div>
      <h1 class="text-center">Visit Us</h1>
      <hr>
    </div>
  <div class="row">
    <div class="col-12">
      <p class="text-center">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d18837.762057040352!2d81.04620469508379!3d6.991413212345229!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3ae462167fa6dad9%3A0x84d3d072c32aa246!2sBadulla!5e0!3m2!1sen!2slk!4v1579601351006!5m2!1sen!2slk" width="800" height="400" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
      </p>
    </div>
  </div>
</div>
<!-- include the footer files -->  
<?php 
  include('includes/footer.php');
?>
