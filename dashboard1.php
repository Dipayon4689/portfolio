<?php 
 
  include("include/dbConnect.php"); 
 ?>
<?php 
  if (!isset($_SESSION['username'])) {
 ?>
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
			Admin Details <i class="fa "></i>

			
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
					<a href="admin-table.php">Add new Admin</a>
				</div>
				
				<div class="item">
					<a href="admin-table2.php">Manage Admin</a>
				</div>
				<div class="item">
					<a href="admin-table3.php">Delete Admin</a>
				</div>
			</div>


		<div class="admin">
			Teacher Details <i class="fa "></i>

			
		</div>
           <div class="d-flex log justify-content-sm-around">
				
				<div class="item">
					<a href="admin-table4.php">Manage Teacher</a>
				</div>
				<div class="item">
					<a href="admin-table5.php">Delete Teacher</a>
				</div>
				<div class="item">
					<a href="present.php">Present Teacher</a>
				</div>
				<div class="item">
					<a href="admission-date.php">Admission Date</a>
				</div>
				<div class="item">
					<a href="result-date.php">Result Date</a>
				</div>
				<div class="item">
					<a href="exam-date.php">Exam Date</a>
				</div>
				<div class="item">
					<a href="result-sheet.php">Result Sheet</a>
				</div>
				
			</div>

		<div class="admin">
			Student Details <i class="fa "></i>

			
		</div>
		<div class="d-flex log justify-content-sm-around">
				
				<div class="item">
					<a href="admin-table6.php">Manage Student</a>
				</div>
				<div class="item">
					<a href="admin-table7.php">Delete Student</a>
				</div>
				<div class="item">
					<a href="present-student.php">Present Student</a>
				</div>
				<div class="item">
					<a href="admission-date.php">Edit Admission Date</a>
				</div>
				<div class="item">
					<a href="exam-date.php">Edit Exam Date</a>
				</div>
				<div class="item">
					<a href="exam-routine.php">Edit Exam Routine</a>
				</div>
				<div class="item">
				    <a href="result-date.php">Edit Result Date</a>
				</div>
				<div class="item">
					<a href="result-sheet.php">Result Sheet</a>
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
					<a href="admin-table9.php">Delete Parent</a>
				</div>
				<div class="item">
					Student Addmission Payment
				</div>
				<div class="item">
					Student Exam Payment
				</div>
				
			</div>
		</div>
		
		</div>
	</div>


	
	</div>


         <div class="modals" id="myModal">
<?php 
                       $id = 0; 
                       $sql = ("SELECT * FROM admin ORDER BY id ASC") or die (mysqli_error()); 
                       $result = mysqli_query($con, $sql); 
                       if (mysqli_num_rows($result)>0) {
                       	while ($row = mysqli_fetch_assoc($result)) {
                       		$id = $row['id']; 
                       	$username = $row['username']; 
                       	$password = $row['password']; 
                       	$email = $row['email'];
                       	$contact = $row['contact'];  
                       	$image = $row['image'];
                       
					 ?>
         	<span class="close" onclick="closeNav()">&times</span>
         	<div class="slider">
         	<img src="<?php echo $row['image'];  ?>" alt="dip" class="img">
         	<h4><?php echo $row['username'];  ?></h4>
         	<hr>

         	<div class="d-flex justify-content-around">
         		<div class="item2">
         			<a href="adminUpdate.php?GetID=<?php echo $id;  ?>" class="btn btn-success">Edit Account</a>
         		</div>
         		<div class="item2">
         			<a href="delete.php?Del=<?php echo $id; ?>" class="btn btn-danger">Delete Account</a>
         		</div>
         	</div>
         	</div>
         <?php }} ?>
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

<?php 
   }
   else if (isset($_SESSION['username'])) {
   	include("index.php"); 
   }
 ?>