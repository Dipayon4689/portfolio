<?php 
  include("include/dbConnect.php"); 
 ?>
<?php 

  $id = $_GET['GetID']; 
  $sql = "select * from student where id = '".$id."'"; 
  $result = mysqli_query($con,$sql); 
  while ($row = mysqli_fetch_assoc($result)) {
    $id = $row['id']; 
    $roll_no = $row['roll_no'];
    $name = $row['name']; 
    $father_name = $row['father_name']; 
    $mother_name = $row['mother_name']; 
    $address = $row['address']; 
    $class = $row['class']; 
    $group = $row['group']; 
    $section = $row['section']; 
    $contact = $row['contact']; 

    $image = $row['image']; 
  }
 ?>


 <?php 
  if (isset($_POST['savechanges'])) {
  	echo $id = $_POST['id']; 
    echo $roll_no = $_POST['roll_no']; 
  	echo $name = $_POST['name']; 
  	echo $father_name = $_POST['father_name']; 
    echo $mother_name = $_POST['mother_name']; 
    echo $address = $_POST['address']; 
    echo $class = $_POST['class']; 
    echo $group = $_POST['group']; 
    echo $section = $_POST['section']; 
  	echo $contact = $_POST['contact']; 

  	$image = strtolower(file_get_contents($_FILES['file']['tmp_name'])); 
    $image_name = strtolower($_FILES['file']['name']); 
    $image_size = getimagesize($_FILES['file']['tmp_name']); 
    move_uploaded_file($_FILES["file"]["tmp_name"], "include/" . $_FILES["file"]["name"]); 
    echo $location = "include/" . $_FILES["file"]["name"]; 



  	echo $sql = "update student set roll_no='$roll_no', name = '$name', father_name = '$father_name', mother_name = '$mother_name', address = '$address', class = '$class', group = '$group' , section = '$section', contact = '$contact', image = '$location' where id = $id"; 


  	$result = mysqli_query($con, $sql); 
  	if ($result==true) {
       echo '
         <script>
             alert("Update successfully!"); 
             window.location.href="student-table.php" 
         </script>
       ';
     } 
    else {
      echo '
         <script>
            alert("Sorry unable to process your request!"); 
            window.location.href="student-table.php"
         </script>
      '; 
    }
  }
  ?>

  <!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Admin Details</title>
  <link rel="stylesheet" href="css/admin-table8.css">
  <link rel="stylesheet" href="bootstrap-4.4.1-dist\bootstrap-4.4.1-dist\css\bootstrap.min.css">
  <link rel="stylesheet" href="bootstrap-4.4.1-dist\bootstrap-4.4.1-dist\css\bootstrap.css">
  <link rel="stylesheet" href="font-awesome-4.7.0\css\font-awesome.min.css">
</head>
    <body>

    <div class="modals" id="myModal">

              
        <form action="" method="post" enctype="multipart/form-data">
            <a href="admin-table6.php"><span class="close" onclick="closeNav()">&times;</span></a>
          <div class="d-flex flex-wrap justify-content-around dip">
            <input type="hidden" name="id" value="<?php echo $id;  ?>" required>
            <div class="item">
              <input type="text" name="roll_no" value="<?php echo $roll_no;  ?>" placeholder="<?php echo $roll_no;  ?>" required>
            </div>
            <div class="item">
              <input type="text" name="name" value="<?php echo $name;  ?>" placeholder="<?php echo $name; ?>" required>
            </div>
            <div class="item">
              <input type="text" name="father_name" value="<?php echo $father_name;  ?>" placeholder="<?php echo $father_name;  ?>" required>
            </div>
            <div class="item">
              <input type="text" name="mother_name" value="<?php echo $mother_name;  ?>" placeholder="<?php echo $mother_name;  ?>" required>
            </div>
            <div class="item">
              <input type="text" name="address" value="<?php echo $address;  ?>" placeholder="<?php echo $address;  ?>" required>
            </div>
          
            <div class="item">
              <select name="class" id="select">
                <option value="<?php echo $class;  ?>"><?php echo $class;  ?></option>
                <option value="Select class" disabled>Select Class</option>
                <option value="6">6</option>
                <option value="7">7</option>
                <option value="8">8</option>
                <option value="7">9</option>
                <option value="10">10</option>
              </select>
            </div>
            <div class="item">
              <select name="section" id="select">
                <option value="<?php echo $section; ?>"><?php echo $section; ?></option>
                <option value="Select section" disabled>Select section</option>
                <option value="A">A</option>
                <option value="B">B</option>
                <option value="C">C</option>
                <option value="D">D</option>
              </select>
            </div>
            <div class="item">
              <select name="group" id="select">
                <option value="<?php echo $group; ?>"><?php echo $group; ?></option>
                <option value="Select Group" disabled>Select Group</option>
                <option value="Science">Science</option>
                <option value="Business Studies">Business Studies</option>
                <option value="Huminates">Huminates</option>
                <option value="N/A">N/A</option>
              </select>
            </div>
            
            <div class="item">

              <input type="number" name="contact" value="<?php echo $contact;  ?>" placeholder="<?php echo $contact; ?>" required>
            </div>
          
              
          
            <div class="item">
              <img src="<?php echo $image;?>" alt="" style="width:200px; height: 200px">
              <input type="file" name="file" enctype="multipart/form-data" required>
            </div>
            <div class="item">
              <button type="submit" name="savechanges" class="btn btn-info">Update</button>
            </div>
            <div class="item">
              <a href="admin-table6.php"  class="btn btn-danger">Close</a>
            </div>
          </div>
          


        </form>
      
      
    </div>
  </body>
  </html>