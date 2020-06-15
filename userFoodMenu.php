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
					<p>check out our delicious pizza menu which will surely amaze your taste buds and will also give you a mind-blowing food experience.</p>
				</div>
			

                <div class="row" id="resultm" class="resultb">
<?php  
    //getting the list of food Menu
    $query_fm7 = "SELECT * FROM foodmenu";
    $fms1 = mysqli_query($connection, $query_fm7);
    if($fms1){
        $x  = 0;
            while ($fm1 = mysqli_fetch_assoc($fms1)) {
                $x = $x + 1;
                    echo "
                    <div class=\"col-12 col-md-6 col-sm-12 col-lg-4 itemDeal\" >
                    <form>
                        <div class=\"card\">
                          <img class=\"card-img-top\" src=\"images/{$fm1['foodImage']}\" alt=\"Card image cap\" style=\"height:150px;\">
                          <div class=\"card-body\">
                            <h5 class=\"card-title text-center\"> {$fm1['itemName']} <br><span class=\"badge badge-info\">{$fm1['categoryName']}</span> <span class=\"badge badge-success\">Rs.{$fm1['itemPrice']}/=</span></h5>
                            <p class=\"card-text\"> {$fm1['itemDescription']} </p>
                            <div class=\"text-center\">
                                <a href=\"\" class=\"btn btn-primary btn-dark\"  name=\"addtocart\">Add to Cart <i class=\"fa fa-cart-plus\"></i></a>
                            </div>
                          </div>
                        </div>                
                        </form>     
                    </div>
            ";
        }   
    }
?>
				</div>
			</div>	
		</div>
	</div>

	<div class="container">
		<!-- pagination -->
		<!-- <nav aria-label="Page navigation example" class="paginationCss"> 
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
		</nav> -->
	</div>
</div>
<script type="text/javascript">
    function filterFoodMenu(f){
        var id = f.value;
	    // h.value = y;
        $.ajax({
            method : "POST",
            url : "includes/foodFilter.php",
            data : {'categoId' : id },
            success:function(result){
                $("#resultm").html(result);
                // location.reload(true);
            }
        });
    }

// load to All categories when clicked
    function cateAll(){
        $.ajax({
            method : "POST",
            url : "includes/foodFilter.php",
            success:function(result){
                $("#resultm").html(result);
                // location.reload(true);
            }
        });
    }

</script>

<!-- include the footer files -->
<?php 
  include('includes/footer.php');
?>