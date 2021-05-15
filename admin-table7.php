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
	<link rel="stylesheet" href="css/admin-table7.css">
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
						<th>Father's Name</th>
						<th>Mother's Name</th>
						<th>Address</th>
						<th>Class</th>
						<th>Section</th>
					    <th>Group</th>
						<th>Contact</th>
						<th>Image</th>
						<th>Action</th>
					</tr>
				</thead>
					<?php 
                   $id = 0; 
                   $sql = ("SELECT * FROM student ORDER BY id ASC") or die (mysqli_error());
                   $result = mysqli_query($con, $sql ); 
                   if (mysqli_num_rows($result)>0) {
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
                    		$password = $row['password']; 
                    		$image = $row['image']; 
                           
				 ?>
				<tbody>
					<tr>
						<td><?php echo $name;?></td>
						<td><?php echo $father_name;  ?></td>
						<td><?php echo $mother_name;  ?></td>
						<td><?php echo $address;  ?></td>
						<td><?php echo $class;  ?></td>
						<td><?php echo $section;  ?></td>
						<td><?php echo $group;  ?></td>
						<td><?php echo $contact;  ?></td>
						<td><img src="<?php echo $image;  ?>" alt="" style="width:200px; "></td>
						<td><a href="studentdelete.php?Del=<?php echo $id; ?>"><i class="fa fa-cart-plus" style="font-size:24px; color:red; cursor:pointer;"></i></a></td>
					</tr>
				</tbody>
				<?php 	}
                    }  ?>
			</table>
		</div>
	</div>
</body>
</html>