              </div>
                </section>

      </div>



    
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-3-typeahead/4.0.2/bootstrap3-typeahead.js"></script>
    <!-- external javascript files -->
    <script type="text/javascript">
      $("#sidebar-toggle").click(function(e) {
        e.preventDefault();
        $("#wrapper").toggleClass("toggled");
});


    // search typeahead
      $(document).ready(function(){
       
       $('#searchFood').typeahead({
        source: function(query, result)
        {
         $.ajax({
          url:"adminIncludes/fetchAdmin.php",
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
          $('#buttonSearch1').click(function(){
              var clickBtnValue = $(this).val();
              var ajaxurl = 'adminIncludes/searchAdmin.php',
              data =  {'action': clickBtnValue};
              $.post(ajaxurl, data, function (response) {
                  // Response div goes here.
              });
          });
      });
    </script>
  </body>
</html>

<?php mysqli_close($connection); ?>