<?php 
  $page= 'foodMenu';include('adminIncludes/adminHeader.php');
?>

	<div class="adminFoodMenu">
					<div class="col-md-12" > <!-- style="margin-top: 50px;" -->
						<nav aria-label="breadcrumb">
						    <ol class="breadcrumb">
						        <li class="breadcrumb-item"><a href="#">Home</a></li>
						        <li class="breadcrumb-item"><a href="#">Food Menu</a></li>
						        <li class="breadcrumb-item active" aria-current="page">Add Food</li>
						    </ol>
				    	</nav>
					</div>
				</div>

		<div class="container">
				<div class="row justify-content-center">
					<div class="card col-12 col-sm-12 col-md-6">
						<h2 class="text-center">Manage Food Category</h2>
						<div class="text-center">
							    <div class="card-body">
									<form>
									  
									  <div class="form-group">
									    <label for="exampleFormControlSelect1">Select Food Category</label>
									    <select class="form-control" id="exampleFormControlSelect1">
									      <option>1</option>
									      <option>2</option>
									      <option>3</option>
									      <option>4</option>
									      <option>5</option>
									    </select>
									  </div>
									  <div class="form-group">
									    <label for="exampleFormControlInput1">Add new food item</label>
									    <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="add new food item">
									  </div>
									  <div class="form-group">
									    <label for="exampleFormControlTextarea1">Description</label>
									    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
									  </div>
									  <div class="form-group">
									    <label for="exampleFormControlFile1">Choose Image</label>
									    <input type="file" class="form-control-file" id="exampleFormControlFile1">
									  </div>
									  <div class="form-group">
									    <label for="exampleFormControlInput1">Add Quantity</label>
									    <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="add new food item">
									  </div>
									  <div class="form-group">
									    <label for="exampleFormControlInput1">Add Price</label>
									    <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="add new food item">
									  </div>
									  <button type="submit" class="btn btn-primary">Submit</button>

									</form>
							</div>
						</div>
					</div>
				</div>

<?php 
  include('adminIncludes/adminFooter.php');
?>