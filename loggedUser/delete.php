<?php 
  require_once('../includes/connection.php'); 
?>

<?php 

	$foodID = $_POST['foodid'];

	$query = "DELETE FROM cart WHERE foodMenuId = '{$foodID}'";
	$rs = mysqli_query($connection,$query);

	if($rs) {
		$msg = "Removed From the Cart";
		echo $msg;

	}
?>