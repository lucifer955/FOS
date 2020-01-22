<?php 
  $page= 'dashboard'; include('adminIncludes/adminHeader.php');
?>

                    <div class="row">
                      <div class="col-lg-4 col-12 col-sm-12 col-md-4">
                      <div class="card text-white bg-warning mb-3">
                          <div class="card-header">Not Confirmed Orders</div>
                          <div class="card-body">
                            <h5 class="card-title"></h5>
                            <p class="card-text"></p>
                          </div>
                        </div>  
                      </div>

                      <div class="col-lg-4 col-12 col-sm-12 col-md-4">
                        <div class="card text-white bg-success mb-3">
                          <div class="card-header">Confirmed Orders</div>
                          <div class="card-body">
                            <h5 class="card-title"></h5>
                            <p class="card-text"></p>
                          </div>
                        </div>
                      </div>

                      <div class="col-lg-4 col-12 col-sm-12 col-md-4">
                          <div class="card text-white bg-danger mb-3">
                            <div class="card-header">Cancelled Orders</div>
                            <div class="card-body">
                              <h5 class="card-title"></h5>
                              <p class="card-text"></p>
                            </div>
                          </div>
                      </div>
        
<?php 
  include('adminIncludes/adminFooter.php');
?>
