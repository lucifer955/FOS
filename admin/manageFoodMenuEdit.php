<?php 
  $page= 'foodCategory';include('adminIncludes/adminHeader.php');
?>

<div class="adminFoodCategory">
			<div class="col-md-12" > <!-- style="margin-top: 50px;" -->
				<nav aria-label="breadcrumb">
				    <ol class="breadcrumb">
				        <li class="breadcrumb-item"><a href="#">Home</a></li>
				        <li class="breadcrumb-item"><a href="#">Manage Food Menu</a></li>
				        <li class="breadcrumb-item active" aria-current="page">Food Menu Update</li>
				    </ol>
		    	</nav>
			</div>
		</div>
	<<div class="container">
		<div class="row justify-content-center">
			<div class="card col-12 col-sm-12 col-md-6">
				<h2 class="text-center">Manage Food Menu</h2>
				<div class="text-center">
<!-- 					  <h5 class="card-header">Search</h5> -->
					  <div class="card-body">
					    <form>
							  <div class="form-group">
							    <input type="text" class="form-control" id="exampleInputFoodMenu" aria-describedby="foodMenuHelp" placeholder="Update Food Menu">
							  </div>
							  <button type="submit" class="btn btn-primary">Add</button>
						</form>
				  </div>
				</div>
			</div>
	</div>
	

<?php 
  include('adminIncludes/adminFooter.php');
?>