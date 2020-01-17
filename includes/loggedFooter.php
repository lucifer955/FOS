<!-- footer -->
<footer>
    <div class="container">
      <div class="row d-flex justify-content-around">
        <div class="col-4 col-md-2 col-sm-4">
          <h5>Home</h5>
        </div>
        <div class="col-4 col-md-2 col-sm-4">
            <h5>Food Menu</h5>
            <h6>Top Deals</h6>
        </div>
        
        <div class="col-4 col-md-2 col-sm-4">
          <h5>My Account</h5>
          <h6>Profile</h6>
          <h6>Settings</h6>
        </div>
        <div class="col-6 col-md-2 col-sm-6">
            <h5>Order</h5>
            <h6>My Orders</h6>
            <h6>Cart</h6>
           
        </div>
        <div class="col-6 col-md-2 col-sm-6">
            <h5>Contact</h5>
            <h6><i class="fa fa-phone"></i> +9455 123 1234</h6>
            <h6><i class="fa fa-envelope"></i> test@user.com</h6>
        </div>  
      </div>
    </div>

    <!-- social links -->
    
    <div class="row socialIcons justify-content-center">
      <div class="col-2 col-sm-1">
        <img src="..\images\facebook.png" alt="">
      </div>
      <div class="col-2 col-sm-1">
          <img src="..\images\instagram.png" alt="">
      </div>
      <div class="col-2 col-sm-1">
        <img src="..\images\whatsapp.png" alt="">
      </div>
      <div class="col-2 col-sm-1">
        <img src="..\images\gmail.png" alt="">
      </div>
    </div>

    <!-- copyrights -->
    <div class="row justify-content-center">
        <small>&copy; Copyright 2019, CST2K19 Project-I</small>
    </div>
  </footer>
  


    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-3-typeahead/4.0.2/bootstrap3-typeahead.js"></script>
  <script>
    // search typeahead
      $(document).ready(function(){
       
       $('#searchFood').typeahead({
        source: function(query, result)
        {
         $.ajax({
          url:"../includes/fetch.php",
          method:"POST",
          data:{query:query},
          dataType:"json",
          success:function(data)
          {
           result($.map(data, function(item){
            return item;
           }));
          }
         })
        }
       });
       
      });

      //display the search results
      $(document).ready(function(){
          $('#buttonSearch').click(function(){
              var clickBtnValue = $(this).val();
              var ajaxurl = '../includes/search.php',
              data =  {'action': clickBtnValue};
              $.post(ajaxurl, data, function (response) {
                  // Response div goes here.
                  alert("action performed successfully");
              });
          });
      });
</script>
  </body>
</html>

<?php mysqli_close($connection); ?>