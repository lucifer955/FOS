<div class="panel panel-default sidebar-menu">

	<!-- <div class="panel-body" >
		<div class="panel-heading">
			<h3 class="panel-title">Search Food</h3>
		</div>
		<div class="row">
		  	<div class="col-12 col-sm-12 col-md-12">
			    <div>
			        <form class="form-inline d-flex justify-content-center">
			            <input class="form-control col-10 col-sm-10 col-md-9" type="search" placeholder="Search Food" aria-label="Search">
			            <button class="btn btn-dark col-2 col-sm-2 col-md-3" type="submit"><i class="fa fa-search"></i></button>
          			</form>      
    			</div>
		  	</div>
		</div>
	</div> -->
	
	<div class="panel-body panelContent"><!--  style="margin-top: 50px;" -->
		<div class="panel-heading">
			<h3 class="panel-title">Product Categories</h3>
		</div>
		<div class="row">
		  	<div class="col-12 col-sm-12 col-md sideBarMenu" >
			    <div class="nav text-center flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">

					<a class="nav-link active" id="v-pills-profile-tab" data-toggle="pill" href="#v-pills-profile" role="tab" aria-controls="v-pills-profile" aria-selected="false">All</a>
<?php  

	// $category_list = '';

	//getting the list of categories
	$query_ct = "SELECT * FROM category";
	$cats = mysqli_query($connection, $query_ct);

	if($cats){
		$x = 0;
		while ($cat = mysqli_fetch_assoc($cats)) {
			$x = $x+1;
			echo "
			      <a class=\"nav-link {$cat['categoryName']} \" id=\"cat$x\" data-toggle=\"pill\" href=\"#v-pills-home\" role=\"tab\" aria-controls=\"v-pills-home\" aria-selected=\"true\" onclick=\"filterFoodMenu(document.getElementById('cats$x'))\" > {$cat['categoryName']} </a>
			    <input type='hidden' id='cats$x' name='filter$x' value={$cat['categoryId']}>  
			";
		}
	}

?>

<!-- 			      <a class="nav-link" id="v-pills-profile-tab" data-toggle="pill" href="#v-pills-profile" role="tab" aria-controls="v-pills-profile" aria-selected="false">Profile</a>
			      <a class="nav-link" id="v-pills-messages-tab" data-toggle="pill" href="#v-pills-messages" role="tab" aria-controls="v-pills-messages" aria-selected="false">Messages</a>
			      <a class="nav-link" id="v-pills-settings-tab" data-toggle="pill" href="#v-pills-settings" role="tab" aria-controls="v-pills-settings" aria-selected="false">Settings</a> -->
			    </div>
		  	</div>
		</div>
	</div>
</div>

