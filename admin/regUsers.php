<?php 
  $page= 'regUsers';include('adminIncludes/adminHeader.php');
?>

<div class="adminRegUsers">
	<div class="col-md-12" > <!-- style="margin-top: 50px;" -->
		<nav aria-label="breadcrumb">
			<ol class="breadcrumb">
				<li class="breadcrumb-item"><a href="#">Home</a></li>
				<li class="breadcrumb-item active" aria-current="page">User Details</li>
			</ol>
		</nav>
	</div>
</div>

<div class="container">
	<div class="row justify-content-center">
		<div class="card col-12 text-center">
				<h2 class="text-center">User Details</h2>
					<div class="card-body">
					    <div class="table-responsive-md">
							  	<table class="table table-hover table-bordered">
									<thead>
									    <tr>
									      <th scope="col">S.NO</th>
									      <th scope="col">First Name</th>
									      <th scope="col">Last Name</th>
									      <th scope="col">Mobile Number</th>
									      <th scope="col">Email</th>
									      <th scope="col">Edit</th>
									    </tr>
									  </thead>
									  <tbody>
									  	<tr>
									      <th>1</th>
									      <td>Mark</td>
									      <td>Otto</td>
									      <td>@mdo</td>
									      <td>Otto</td>
									      <td><a href="adminUserDetail.php">Edit User Datails</a></td>
									    </tr>
									    <tr>
									      <th>2</th>
									      <td>Mark</td>
									      <td>Otto</td>
									      <td>@mdo</td>
									      <td>Otto</td>
									      <td>@mdo</td>
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