<?php 
  require_once('../includes/connection.php'); 
?>

<?php 

	if (isset($_POST['categoId'])) {

	$c = $_POST['categoId'];
	

	// $rs = mysqli_query($connection,$query);

    //getting the list of food Menu
    $query_fm = "SELECT * FROM foodmenu WHERE categoryName = '$c'";
    $fms = mysqli_query($connection, $query_fm);
    if($fms){
        $x  = 0;
            while ($fm = mysqli_fetch_assoc($fms)) {
                $x = $x + 1;
                    echo "
                    <div class=\"col-12 col-md-6 col-sm-12 col-lg-4 itemDeal\" >
                    <form action=\"foodMenu.php\" method=\"GET\">
                        <div class=\"card\">
                          <img class=\"card-img-top\" src=\"images/{$fm['foodImage']}\" alt=\"Card image cap\" style=\"height:150px;\">
                          <div class=\"card-body\">
                            <h5 class=\"card-title text-center\"> {$fm['itemName']} <br><span class=\"badge badge-info\">{$fm['categoryName']}</span> <span class=\"badge badge-success\">Rs.{$fm['itemPrice']}/=</span></h5>
                            <p class=\"card-text\"> {$fm['itemDescription']} </p>
                          </div>
                        </div>                
                        </form>     
                    </div>
            ";
        }   
    }

}else{


    //getting the list of food Menu
    $query_fm1 = "SELECT * FROM foodmenu";
    $fms1 = mysqli_query($connection, $query_fm1);
    if($fms1){
        $x  = 0;
            while ($fm1 = mysqli_fetch_assoc($fms1)) {
                $x = $x + 1;
                    echo "
                    <div class=\"col-12 col-md-6 col-sm-12 col-lg-4 itemDeal\" >
                    <form action=\"foodMenu.php\" method=\"GET\">
                        <div class=\"card\">
                          <img class=\"card-img-top\" src=\"images/{$fm1['foodImage']}\" alt=\"Card image cap\" style=\"height:150px;\">
                          <div class=\"card-body\">
                            <h5 class=\"card-title text-center\"> {$fm1['itemName']} <br><span class=\"badge badge-info\">{$fm1['categoryName']}</span> <span class=\"badge badge-success\">Rs.{$fm1['itemPrice']}/=</span></h5>
                            <p class=\"card-text\"> {$fm1['itemDescription']} </p>
                          </div>
                        </div>                
                        </form>     
                    </div>
            ";
        }   
    }



}
?> 