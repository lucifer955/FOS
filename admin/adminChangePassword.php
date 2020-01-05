<?php 
  $page= 'myAccount';include('adminIncludes/adminHeader.php');
?>

<div class="adminViewOrder">
	<div class="col-md-12" >
		<nav aria-label="breadcrumb">
			<ol class="breadcrumb">
				<li class="breadcrumb-item"><a href="#">Home</a></li>
				<li class="breadcrumb-item active" aria-current="page">Change Password</li>
			</ol>
		</nav>
	</div>
</div>
<div class="container">
		<div class="row justify-content-center">
			<div class="card col-12 col-sm-12 col-md-6">
				<h2 class="text-center">Update Password</h2>
				<div class="text-center">
<!-- 					  <h5 class="card-header">Search</h5> -->
					<div class="card-body">
						 <form>
					        <div class="form-row">
					            <div class="col-12 col-sm-12">
					              <label for="password">Current Password</label>
					              <input type="password" class="form-control" placeholder="Current Password" id="currentPassword">
					            </div>
					            <div class="col-12 col-sm-12">
					              <label for="newPassword">New Password</label>
					              <input type="password" class="form-control" placeholder=" New Password" id="newPassword">
					            </div>
					            <div class="col-12 col-sm-12">
					              <label for="repeatNewPassword">Repeat Password</label>
					              <input type="password" class="form-control" placeholder="Repeat Password" id="repeatNewPassword">
					            </div>
					      </div>
					      <br>
					        <button type="submit" class="btn btn-primary">Update</button>
					    </form>   
				  	</div>
				</div>
			</div>
	</div>
</div>
<div class="container">
  <div class="row align-items-center">
    <div class="col-12 col-md-7 col-sm-12 ">
            
    </div>
  </div>
</div>   
<?php 
  include('adminIncludes/adminFooter.php');
?>