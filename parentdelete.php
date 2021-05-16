<?php 

   session_start(); 
   include("include/dbConnect.php"); 



 ?>


<?php 
  if (isset($_GET['Del'])) {
  	$id = $_GET['Del']; 
  	$sql = "DELETE from parent where id = '".$id."'"; 
  	$result = mysqli_query($con,$sql); 
  	if ($result) {
  		header("location:admin-table9.php"); 
  	}
  	else {
  		echo "Please check your sql"; 
  	}

  }
  else {
  	header("location:admin-table9.php"); 
  }
 ?>



