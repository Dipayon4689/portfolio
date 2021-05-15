<?php 
  session_start(); 
  include("include/dbConnect.php"); 

  if (isset($_POST['login'])) {
    $myuser = mysqli_real_escape_string($con,$_POST['parent_name']); 
    $mypass = mysqli_real_escape_string($con,md5($_POST['password'])); 

    $sql = ("SELECT * FROM parent WHERE parent_name = '$myuser' AND password='$mypass'"); 

    $result = mysqli_query($con, $sql); 
     if (mysqli_num_rows($result)>0) {
       while ($row = mysqli_fetch_assoc($result)) {
         $_SESSION['id'] = $row['id']; 
         $_SESSION['parent_name'] = $row['parent_name']; 
         $_SESSION['student_name'] = $row['student_name']; 
         $_SESSION['relation'] = $row['relation']; 
         $_SESSION['gender'] = $row['gender']; 
         $_SESSION['address'] = $row['address']; 
         $_SESSION['image'] = $row['image']; 
         $_SESSION['contact'] = $row['contact']; 
         $_SESSION['email'] = $row['email']; 
         $_SESSION['password'] = $row['password']; 
       }
       header("location:dashboard4.php"); 
     }
     else {
      echo '
        <script>
           window.alert("Your not registered user!")
           window.location.href="parent-login.php"; 
        </script>
      ';
     }
     mysqli_close($con); 
  }
 ?>


<!DOCTYPE html>
<html>
<head>
    <title>Admin login</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="css\parent-login.css">
    <link rel="stylesheet" type="text/css" href="font-awesome-4.7.0\css\font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="bootstrap-4.4.1-dist\bootstrap-4.4.1-dist\css\bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="bootstrap-4.4.1-dist\bootstrap-4.4.1-dist\css\bootstrap.css">
</head>
<body>
    <div class="d-flex justify-content-end">
        <button class="back"><a href="index.php">Back to Home</a></button>
    </div>
    <div class="d-flex flex-start logo">
        DHS
    </div>
     <div class="d-flex flex-start justify-content-center admin">
                    <h4>Parent Login</h4>      
                </div>
    <div class="d-flex align-items-center justify-content-start">
       
    </div>
    <div class="d-flex justify-content-between align-items-center form-content">
         <img class="img" src="img\iitjee+training+center+in+uae.png">
         
           <form action="" method="POST">
        <div class="form d-flex flex-column flex-sm-row flex-wrap justify-content-around ">
                
                <div class="item">
                <label for="uname">User Name<span class="span">:</span></label>
            </div> 
            <div class="item">
                <input type="text" name="parent_name" id="uname">
                <div class="width"></div>
            </div>
            <div class="item">
                <label for="psw">Password <span class="span span1">:</span></label>
            </div>
            <div class="item">
                <input type="password" name="password" id="psw"> <i class="fa"></i>
                <div class="width"></div>
            </div>
           
                <div class="item">
                  <button class="button" name="login">Log in <div class="style"></div></button>
                </div>
                
           <div class="item">
              
              <input type="button" onclick="myRegister()" class="button" value="Register">

           </div>
            <a class="link" onclick="myFunction()"> Forget Password???</a>

        </div>
        </form> 
       
               
    </div>

    <div class="d-flex container justify-content-center align-items-center">
        <span class="close" onclick="closeNav()">&times; </span>
        <div id="myModal" class="modals d-flex flex-sm-row flex-wrap justify-content-between">
            
            <div class="item1">
                <input type="text" name="uname" id="uname" placeholder="Studentname">
            </div>
            <div class="item1">
                <input type="password" name="psw" id="psw" placeholder="Current Password">
            </div>
            <div class="item1">
                <input type="password" name="psw" id="psw" placeholder="New Password">
            </div>
            <div class="item1">
                <input type="password" name="psw" placeholder="Confirm Password">
            </div>
            <div class="item1">
                <button type="submit" class="submit">Submit</button>
            </div>
        </div>
    </div>


    <div class="register" id="myRegister">
        <a class="close" href="#" onclick="closeNavs()">&times;</a>
          <h4>Register now</h4>
          <hr>
          <form action="" method="post" enctype="multipart/form-data">
          <div style="width:100%" class="d-flex flex-sm-row flex-wrap">
              <div class="item2">
                  <label for="name">Name<span style="color:red">*</span></label>
              </div>
              <div class="item2">
                  <input type="text" required="required" name="parent_name">
              </div>
              <div class="item2">
                  <label for="sname">Student name<span style="color:red">*</span></label>
              </div>
              <div class="item2">
                  <input type="text" name="student_name" required="required">
              </div>
              <div class="item2">
                <label for="password">Password</label>
              </div>
              <div class="item2">
                <input type="password" name="password" required="required">
              </div>
              <div class="item2">
                  <label for="relation">Relation<span style="color:red">*</span></label>
              </div>
              <div class="item2">
                  <input type="text" name="relation" required="required">
                  
              </div>
              <div class="item2">
                  <label for="gender">Gender <span style="color:red">*</span></label>
              </div>
              <div class="item2">
                  <input type="text" name="gender" required="required">
              </div>
              <div class="item2">
                  <label for="address">Address <span style="color:red">*</span></label>
              </div>

              <div class="item2">
                  <input type="text" name="address" required="required">
              </div>
              <div class="item2">
                <label for="image">Select Image</label>
              </div>
              <div class="item2">
                <input type="file" name="file" required="required" enctype="multipart/form-data">
              </div>
              <div class="item2">
                <label for="contact">Contact</label>
              </div>
              <div class="item2">
                <input type="number" name="contact">
              </div>
              <div class="item2">
                <label for="email">Email</label>
              </div>
              <div class="item2">
                <input type="email" name="email" required="required">
              </div>
          </div>

          <div class="d-flex justify-content-around">
            <div class="item3">
              <button type="submit" class="btn" name="register">Register</button>
            </div>
            <div class="item3">
              <button class="btn cancel" onclick="closeNavs()">Cancel</button>
            </div>
          </div>
          </form>
      </div>


    <script type="text/javascript">
        function myFunction() {
            document.getElementById("myModal").style.marginTop="0px"; 
        }
        function closeNav() {
            document.getElementById("myModal").style.marginTop="-500px"; 
        }
        function myRegister() {
          document.getElementById("myRegister").style.display="block"; 
        }
        function closeNavs() {
            document.getElementById("myRegister").style.display="none"; 
             
        }
    </script>


    <?php 
      if (isset($_POST['register'])) {
        $parent_name = $_POST['parent_name']; 
        $student_name = $_POST['student_name']; 
        $password = md5($_POST['password']); 
        $relation = $_POST['relation']; 
        $gender = $_POST['gender']; 
        $contact = $_POST['contact']; 
        $email = $_POST['email']; 
        $address = $_POST['address']; 

         //image
                                $image = addslashes(file_get_contents($_FILES['file']['tmp_name']));
                                $image_name = addslashes($_FILES['file']['name']);
                                $image_size = getimagesize($_FILES['file']['tmp_name']);
//
                                move_uploaded_file($_FILES["file"]["tmp_name"], "" . $_FILES["file"]["name"]);
                                $location = "" . $_FILES["file"]["name"];

                if (empty($parent_name) || empty($password) || empty($contact)) {
                  echo '
                    <script>
                       alert("Fields must be empty."); 
                       window.location.href="parent-login.php"; 
                    </script>
                  ';
                }
                else {
                  $sql = ("INSERT INTO parent VALUES(NULL,'$parent_name','$student_name','$relation','$gender','$address','$location','$contact','$email','$password')") or die (mysqli_error()); 

                  $result = mysqli_query($con, $sql); 
                  if ($result==true) {
                    echo '
                      <script>
                         alert("Save Successfully!"); 
                         window.location.href="dashboard4.php"; 
                      </script>
                    ';
                  }
                  else {
                    echo '
                      <script>
                          alert("Sorry unable to process your request!"); 
                          window.location.href="parent-login.php"; 
                      </script>
                    ';
                  }
                }
      }
     ?>
</body>
</html>