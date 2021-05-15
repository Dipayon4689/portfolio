<?php 
  session_start(); 

  include("include/dbConnect.php"); 
 ?>


<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Admin Details</title>
	<link rel="stylesheet" href="css/admin-table9.css">
	<link rel="stylesheet" href="bootstrap-4.4.1-dist\bootstrap-4.4.1-dist\css\bootstrap.min.css">
	<link rel="stylesheet" href="bootstrap-4.4.1-dist\bootstrap-4.4.1-dist\css\bootstrap.css">
	<link rel="stylesheet" href="font-awesome-4.7.0\css\font-awesome.min.css">
</head>
<body>
	<div class="dashboard">
		<div class="logo">DHS</div>

		<div class="table container mt-5">
			<table class="table table-striped table-hover table-borderless">
				<thead class="bg-dark">
					<tr>
						<th>Student Name</th>
						<th>Parent Name</th>
						<th>Relation</th>
						<th>Gender</th>
						<th>Address</th>
						<th>Email</th>
						<th>Contact</th>
						<th>Image</th>
					    <th>Admission Payment</th>
					    <th>Exam Payment</th>
						<th>Action</th>
					</tr>
				</thead>
				<tbody style=" font-size: 14px; ">
					<?php 
                      $id = 0; 
                      $sql = ("SELECT * FROM parent ORDER BY id ASC") or die (mysqli_error()); 
                      $result = mysqli_query($con, $sql); 
                      if (mysqli_num_rows($result)>0) {
                      	while ($row = mysqli_fetch_assoc($result)) {
                      		$id = $row['id']; 
                      		$parent_name = $row['parent_name']; 
                      		$student_name = $row['student_name']; 
                      		$relation = $row['relation']; 
                      		$gender = $row['gender']; 
                      		$address = $row['address']; 
                      		$image = $row['image']; 
                      		$contact = $row['contact']; 
                      		$email = $row['email']; 
                      		$password = $row['password']; 
                      
					 ?>
					<tr>
						<td><?php echo $row['student_name']; ?></td>
						<td><?php echo $row['parent_name']; ?></td>
						<td><?php echo $row['relation']; ?></td>
						<td><?php echo $row['gender']; ?></td>
						<td><?php echo $row['address']; ?></td>
						<td><?php echo $row['email']; ?></td>
						<td><?php echo $row['contact']; ?></td>
						<td><img src="<?php echo $row['image']; ?>" alt="" style="width:200px"></td>
						<td></td>
						<td></td>
						<td><a href="parentdelete.php?Del=<?php echo $id; ?>"><i class="fa fa-cart-plus" style="font-size:24px; color:red; cursor:pointer;"></i></a></td>
					</tr>

				<?php }} ?>
				</tbody>
			</table>
		</div>
	</div>

</body>
</html>