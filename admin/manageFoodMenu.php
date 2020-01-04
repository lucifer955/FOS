<?php 
  $page= 'manageFoodMenu';include('adminIncludes/adminHeader.php');
?>

<div class="adminManageFoodMenuCategory">
	<div class="col-md-12" >
		<nav aria-label="breadcrumb">
			<ol class="breadcrumb">
				<li class="breadcrumb-item"><a href="#">Home</a></li>
				<li class="breadcrumb-item"><a href="#">Food Category</a></li>
				<li class="breadcrumb-item active" aria-current="page">Manage Food Menu</li>
			</ol>
		</nav>
	</div>
</div>

<div class="container">
	<div class="row justify-content-center">
		<div class="card col-12 text-center">
				<h2 class="text-center">Manage Food Item</h2>
					<div class="card-body">
					    <div class="table-responsive-md">
							  	<table class="table table-hover">
									<thead>
									    <tr>
									      <th scope="col">S.NO</th>
									      <th scope="col">Category Name</th>
									      <th scope="col">Item Name</th>
									      <th scope="col">Action</th>
									    </tr>
									  </thead>
									  <tbody>
									  	<tr>
									      <th>1</th>
									      <td>Mark</td>
									      <td>Otto</td>
									      <td><a href="">Edit</a></td>
									    </tr>
									    <tr>
									      <th>2</th>
									      <td>Mark</td>
									      <td>Otto</td>
									      <td>Otto</td>
									    </tr>
									  </tbody>
							  	</table>
						</div>
					</div>
			</div>	
	</div>
</div>

<?php 
  include('adminIncludes/adminFooter.php');
?>