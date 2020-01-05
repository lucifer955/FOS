<?php 
  $page= 'myAccount';include('adminIncludes/adminHeader.php');
?>

<div class="adminViewOrder">
	<div class="col-md-12" >
		<nav aria-label="breadcrumb">
			<ol class="breadcrumb">
				<li class="breadcrumb-item"><a href="#">Home</a></li>
				<li class="breadcrumb-item active" aria-current="page">My Account</li>
			</ol>
		</nav>
	</div>
</div>
<div class="container">
	<div class="row justify-content-center">
		<div class="card col-12 text-center">
				<h2 class="text-center">Update</h2>
					<div class="card-body">
						<form>
						  <div class="form-group row">
						    <label for="inputFirstName" class="col-sm-2 col-form-label">First Name:</label>
						    <div class="col-sm-10">
						      <input type="text" class="form-control" id="inputFirstName" placeholder="First Name">
						    </div>
						  </div>
						  <div class="form-group row">
						    <label for="inputLastName" class="col-sm-2 col-form-label">Last Name:</label>
						    <div class="col-sm-10">
						      <input type="text" class="form-control" id="inputLastName" placeholder="Last Name">
						    </div>
						  </div>
						  <div class="form-group row">
						    <label for="inputEmail" class="col-sm-2 col-form-label">Email:</label>
						    <div class="col-sm-10">
						      <input type="email" class="form-control" id="inputEmail" placeholder="user@test.com" disabled>
						    </div>
						  </div>
						  <div class="form-group row">
						    <label for="inputMobileNumber" class="col-sm-2 col-form-label">Mobile Number:</label>
						    <div class="col-sm-10">
						      <input type="text" class="form-control" id="inputMobileNumber" placeholder="0123123456" disabled>
						    </div>
						  </div>
						  <div class="form-group row">
						    <label for="inputRegDate" class="col-sm-2 col-form-label">Registered Date:</label>
						    <div class="col-sm-10">
						      <input type="text" class="form-control" id="inputRegDate" placeholder="2019-04-08 13:11:22" disabled>
						    </div>
						  </div>
						  <button type="submit" class="btn btn-primary">Update</button>
						</form>
					</div>
			</div>	
	</div>
</div>

<?php 
  include('adminIncludes/adminFooter.php');
?>