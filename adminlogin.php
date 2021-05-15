<?php 
  session_start(); 
  include("include/dbConnect.php"); 

  if(isset($_POST['save'])) {
    $image = $_FILES['image']['name']; 
    $target_dir = ""; 
    $target_file = $target_dir . basename($_FILES["image"]["name"]); 
    $imageFileType = addslashes(pathinfo($target_file,PATHINFO_EXTENSION)); 
    $extensions_arr = array("jpg","jpeg","png","gif"); 
    if (in_array($imageFileType,$extensions_arr)) {
        $sql = "INSERT INTO admin-login(image) VALUES('".$image."')"; 
        mysqli_query($con,$query) or die(mysqli_error($con)); 
        move_uploaded_file($_FILES['image']['tmp_name'],''.$name); 
    }
  }
 ?>