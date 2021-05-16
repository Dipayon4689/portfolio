<?php   
   session_start(); 
   include('include/dbConnect.php'); 

  if (isset($_POST['login'])) {
       $myuser = mysqli_real_escape_string($con,$_POST['username']); 
   $mypass = mysqli_real_escape_string($con,md5($_POST['password'])); 

    $sql = ("SELECT * FROM admin WHERE username = '$myuser' AND password='$mypass'"); 
    $result = mysqli_query($con, $sql); 
    if (mysqli_num_rows($result) > 0) {
        while ($row = mysqli_fetch_assoc($result)) {
            $_SEESION['id'] = $row['id']; 
            $_SESSION['username'] = $row['username']; 
            $_SESSION['email'] = $row['email']; 
            $_SESSION['contact'] = $row['contact']; 
            $_SESSION['password'] = $row['password']; 
            $_SESSION['image'] = $row['image']; 
        }
        header("location:dashboard1.php"); 
    }
    else {
        '
        <script>
              window.alert("Your not registered user!")
              window.location.href="admin-login.php"; 
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
	<link rel="stylesheet" type="text/css" href="css\admin-login.css">
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
                    <h4>Admin Login</h4>      
                </div>
    <div class="d-flex align-items-center justify-content-start">
       
    </div>
    <div class="d-flex justify-content-between align-items-center form-content">
         <img class="img" src="img\iitjee+training+center+in+uae.png">
         
             <form action="" method="post">
    	<div class="form d-flex flex-column flex-sm-row flex-wrap justify-content-around ">
    		   
    			<div class="item">
    			<label for="uname">Username <span class="span">:</span></label>
    		</div> 
    		<div class="item">
    			<input type="text" name="username" id="uname">
                <div class="width"></div>
    		</div>
    		<div class="item">
    			<label for="psw">Password <span class="span span1">:</span></label>
    		</div>
    		<div class="item">
    			<input type="password" name="password" id="psw"> <i class="fa"></i>
                <div class="width"></div>
    		</div>
    		<div class="d-flex justify-content-between">
                <button class="button" name="login">Log in <div class="style"></div></button>
                <a class="link" onclick="myFunction()"> Forget Password???</a>
            </div>
    	

        </div>
        </form>
    </div>

    <div class="d-flex container justify-content-center align-items-center">
        <span class="close" onclick="closeNav()">&times; </span>
        <form action="" method="post" enctype="multipart/form-data">
        <div id="myModal" class="modals d-flex flex-sm-row flex-wrap justify-content-between">
            
            <div class="item1">
                <input type="text" name="username" id="uname" placeholder="Username">
            </div>
            <div class="item1">
                <input type="password" name="password" id="psw" placeholder="Current Password">
            </div>
            <div class="item1">
                <input type="password" name="psw" id="psw" placeholder="New Password">
            </div>
            <div class="item1">
                <input type="password" name="psw" placeholder="Confirm Password">
            </div>
            <div class="item1">
                <button type="submit" class="submit" name="submit">Submit</button>
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
    </script>
</body>
</html>

<?php 
  if (isset($_POST['submit'])) {
      $username = $_POST['username']; 
      $password =  md5($_POST['password']); 
      $newpassword = md5($_POST['newpassword']); 
        $sql = "SELECT password FROM admin WHERE username = '$username' AND password = '$password'"; 
  }

 ?>