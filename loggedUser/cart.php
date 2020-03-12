<!-- include the header files -->
<?php 
  $page= 'cart';include('../includes/loggedHeader.php');

?>

<?php  
	// $category_list = '';
	$usr_id = $_SESSION['user_id'];
	// $foodMenuId = $_SESSION['foodMenuId'];
	if (isset($_GET['foodMenuId'])) {
		$foodMenuId = $_GET['foodMenuId'];	
	
		//getting the list of categories
		$query_cart = "SELECT * FROM foodmenu where foodMenuId = $foodMenuId";

		$categories = mysqli_query($connection, $query_cart);

		if($categories){

			while ($cart = mysqli_fetch_assoc($categories)) {
				$query = "INSERT INTO cart (foodMenuId,itemName,foodImage,itemPrice,customerId) VALUES ('{$cart['foodMenuId']}','{$cart['itemName']}','{$cart['foodImage']}','{$cart['itemPrice']}','{$usr_id}')";

	      		$result = mysqli_query($connection,$query);



			if ($result) {
	      		// $message = "Added to Cart";
	      		// $foodMenuId =  $cart['foodMenuId'];
	      		// echo "<script type='text/javascript'>alert('$message');</script>";	
	      	}	      		
	      	header('Location: ../loggedUser/cart.php');	
			}
		}

	}
	if(isset($_POST['updateCart'])){

			$count=$_POST['counter'];
			for ($i=1; $i <=$count ; $i++) { 
				
				$subData=$_POST['subData'.$i];
				$foodmID=$_POST['foodmID'.$i];
				$query="UPDATE cart set foodQuantity=".$subData." where foodMenuId=".$foodmID."";
				mysqli_query($connection,$query);
				header('Location: ../loggedUser/orderdetails.php');
			}
		}
	
?>


<div class="loggedCart">
	<div class="container">
		<div class="col-md-12"> <!-- style="margin-top: 50px;" -->		
			<nav aria-label="breadcrumb border-0">
			    <ol class="breadcrumb">
			        <li class="breadcrumb-item"><a href="#">Home</a></li>
			        <li class="breadcrumb-item active" aria-current="page">Cart</li>
			    </ol>
	    	</nav>
		</div>
	</div>
	<div class="container">
		<div class="row justify-content-around">
			<div class="col-8 text-center">
				
				<table class="table table-hover table-responsive-sm table-sm">
				  <thead>
				    <tr>
				  <!--     <th scope="col">Cart  Id</th> -->
				      <th class=" p-3 mb-2 bg-info text-white" scope="col">Food Id</th>
				      <th class=" p-3 mb-2 bg-info text-white" scope="col"></th>
				      <th class=" p-3 mb-2 bg-info text-white" scope="col">Food Name</th>
				      <th class=" p-3 mb-2 bg-info text-white" scope="col">Price</th>
				      <th class=" p-3 mb-2 bg-info text-white" scope="col">Quantity</th>
				      <th class=" p-3 mb-2 bg-info text-white" scope="col">Sub Total</th>
				      <th class=" p-3 mb-2 bg-info text-white" scope="col"></th>

				    </tr>
				  </thead>
				  <tbody>

<?php  
	$query_cart1 = "SELECT * FROM cart where customerId='{$usr_id}'";
	$categories1 = mysqli_query($connection, $query_cart1);

			if($categories1){
				$x=0;
					while ($cart1 = mysqli_fetch_assoc($categories1)) {
						$x=$x+1;
			echo "		<form method='post' action='cart.php'>		  		
						<tr>
						  <td  class=\"align-middle\" id=\"menuId\">{$cart1['foodMenuId']}</td>
					      <td  class=\"align-middle\"><img src=\"../images/{$cart1['foodImage']}\" height=\"50px\" width='100px'></td>
					      <td class=\"align-middle\">{$cart1['foodImage']}</td>
					      <td class=\"align-middle\" id=\"unitPrice$x\">{$cart1['itemPrice']}.00</td>
					      <td class=\"align-middle\"><input type=\"number\" name=\"quantity$x\" value=\"1\" min=\"1\" style=\"width: 50px\" id=\"quan$x\" onchange=\"quantityFunc(document.getElementById('quan$x'),document.getElementById('unitPrice$x'),document.getElementById('subTotal$x'),document.getElementById('IDsubData$x'))\"></td>
					      <td class=\"align-middle\"  id=\"subTotal$x\">{$cart1['itemPrice']}.00</td>


					      <td class=\"align-middle\"><i class=\"fa fa-window-close\" style=\"color: red\" 
					      onclick=\"dltfunc(document.getElementById('del$x'))\" ></i></td>
					      
					      <input type='hidden' value='1' name='subData$x' id='IDsubData$x'> 
					      <input type='hidden' id='del$x' name='foodmID$x' value={$cart1['foodMenuId']}>


					    </tr>	";

					}
					echo "<input type='hidden' name='counter' value=$x>";
}
?>
		    	
				  </tbody>
				</table>
				<div class="row">
					<div class="col-auto mr-auto"><button type="button" class="btn btn-primary btn-sm" onclick="redirectToPage()">Continue shopping</button></div>
				  	<div class="col-auto"><button type="submit" name="updateCart" class="btn btn-success btn-sm">OrderNow</button></div>
				  </form>
				</div>
			</div>

			<div class="col-3">

				<div class="table">
				  <div class="card-body text-center">
				  	<h4 class="p-4 mb-4 bg-dark text-white">Your Shopping Cart is Here</h4>
				  	<p><i class="fa fa-cart-plus fa-4x text-success"  ></i></p>
				  	<p><i class="fa fa-arrow-left fa-2x text-dark"  ></i></p>
				  </div>
				</div>
			</div>
		</div>

		
	
	</div>



	
</div>

<script type="text/javascript">
	function quantityFunc(a,y,z,b){
		var up= parseFloat(y.innerHTML);
		var x = parseInt(a.value);
		var tot = up * x;
		z.innerHTML = tot.toFixed(2);
		b.value=x;
	}

	function dltfunc(m){
		var x = parseInt(m.value);
		// alert(x);

		$.ajax({
			method : "post",
			url : "delete.php",
			data : {foodid: x},
			success:function(result){

				alert(result);
				location.reload(true);
			}
		})


	}


	function redirectToPage(){
		window.location.href = "foodMenu.php";
	}
</script>
<!-- include the footer files -->
<?php 
  include('../includes/loggedFooter.php');
?>


