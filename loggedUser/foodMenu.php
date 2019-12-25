<!-- include the header files -->
<?php 
  $page= 'home';include('../includes/loggedHeader.php');
?>


<div class="container">
	<div class="col-md-12  loggedFoodMenu" style="margin-top: 50px;">
		<nav aria-label="breadcrumb rounded">
		    <ol class="breadcrumb">
		        <li class="breadcrumb-item"><a href="#">Home</a></li>
		        <li class="breadcrumb-item active" aria-current="page">Food Menu</li>
		    </ol>
    	</nav>
	</div>
	<div class="col-md-3">
		<?php 
			include('../includes/sidebar.php');
		?>
	</div>
</div>

<!-- include the footer files -->
<?php 
  include('../includes/loggedFooter.php');
?>