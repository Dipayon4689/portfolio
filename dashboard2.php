<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Admin Details</title>
	<link rel="stylesheet" href="css/dashboard1.css">
	<link rel="stylesheet" href="bootstrap-4.4.1-dist\bootstrap-4.4.1-dist\css\bootstrap.min.css">
	<link rel="stylesheet" href="bootstrap-4.4.1-dist\bootstrap-4.4.1-dist\css\bootstrap.css">
	<link rel="stylesheet" href="font-awesome-4.7.0\css\font-awesome.min.css">
</head>
<body>
	<div class="dashboard">
		<div class="logo">DHS</div>

            
		<div class="admin">
			Teacher Details <i class="fa "></i>

			
		</div>
		<div class="d-flex log justify-content-sm-around">
				<div class="item">
					<i class="fa"></i>
					<a href="index.php">Log out</a>
				</div>
				<div class="item" onclick="myProfile()">
					Profile
				</div>
				<div class="item">
					<a href="admin-table4.php">All teacher List</a>
				</div>
				<div class="item">
					Attends 
				</div>
			</div>


		

		<div class="admin">
			Student Details <i class="fa "></i>

			
		</div>
		<div class="d-flex log justify-content-sm-around">
				
				
				<div class="item">
					<a href="admin-table6.php">All Student list</a>
				</div>
				<div class="item">
					<a href="present-student.php">Present Student</a>
				</div>
				<div class="item">
					Edit Marks
				</div>
				<div class="item">
					Class Routine
				</div>
				<div class="item">
					Addmission Date
				</div>
				<div class="item">
					Result Date
				</div>
				<div class="item">
					Exam Date
				</div>
			</div>

		<div class="admin">
			Parent Details <i class="fa "></i>

			
		</div>
		<div class="d-flex log justify-content-sm-around">
				
				<div class="item">
					<a href="admin-table8.php">Manage Parent</a>
				</div>
				<div class="item">
					 Student Addmission payment
				</div>
				<div class="item">
					Exam payment
				</div>
				
			</div>
		</div>
		
		</div>
	</div>



	<div class="modals" id="myModal">

         	<span class="close" onclick="closeNav()">&times</span>
         	<div class="slider">
         	<img src="img/iitjee+training+center+in+uae.png" alt="dip" class="img">
         	<h4>Dipayon Deb</h4>
         	<hr>
         	<div class="d-flex justify-content-around">
         		<div class="item2">
         			<button class="btn">Edit Account</button>
         		</div>
         		<div class="item2">
         			<button class="btn">Delete Account</button>
         		</div>
         	</div>
         	</div>
         </div>



	<script>
		
		function myProfile() {
            document.getElementById("myModal").style.display="block"; 
		}
		function closeNav() {
            document.getElementById("myModal").style.display="none"; 
		}
	</script>
</body>
</html>