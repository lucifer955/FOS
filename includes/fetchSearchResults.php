<?php 
  require_once('../includes/connection.php'); 
?>


<?php



    if(isset($_POST['searchedFood'])){
        $searchedFood = $_POST['searchedFood'];

        $query3 = "SELECT * FROM foodmenu where itemName = '$searchedFood'";
        $fms1 = mysqli_query($connection, $query3);
        if($fms1){
            while ($fm = mysqli_fetch_assoc($fms1)) {

                echo "  <div class=\"col-12\" style=\"margin-top:100px\" >
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