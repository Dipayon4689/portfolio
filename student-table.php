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
						<th>Roll no</th>
						<th>Student Name</th>
						<th>Father Name</th>
						<th>Mother Name</th>
						<th>Address</th>
						<th>Class</th>
						<th>Group</th>
						<th>Section</th>
						<th>Contact</th>
						<th>Image</th>
						<th>Action</th>
					</tr>
				</thead>
				<?php 
                   $id = 0; 
                   $sql = ("SELECT * FROM student ORDER BY id ASC") or die (mysqli_error()); 
                   $result = mysqli_query($con, $sql); 
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
						<td><?php echo $row['roll_no']; ?></td>
						<td><?php echo $row['name']?></td>
						<td><?php echo $row['father_name']?></td>
						<td><?php echo $row['mother_name']?></td>
						<td><?php echo $row['address']?></td>
						<td><?php echo $row['class']?></td>
						<td><?php echo $row['group']?></td>
						<td><?php echo $row['section'] ?></td>
						<td><?php echo $row['contact']; ?></td>
						<td><img src="<?php echo $row['image']; ?>" alt="" style="width:200px"></td>
					<td ><a href="studentUpdate.php?GetID=<?php echo $id;  ?>"><i class="fa fa-edit"  style="font-weight:bold; color:blue; cursor: pointer; font-size: 18px"></i></a></td>
					</tr>
                    <?php }} ?>
				</tbody>
			</table>
		</div>
	</div>

	<div class="modals" id="myModal">

    	    		
    		<form action="studentUpdate.php" method="post" enctype="multipart/form-data">
    			  <span class="close" onclick="closeNav()">&times;</span>
    			<div class="d-flex flex-wrap justify-content-around dip">
    				<input type="hidden" name="id" value="<?php echo $id;  ?>" required>
    				<div class="item">
    					<input type="text" name="roll_no" value="<?php echo $roll_no;  ?>" placeholder="<?php echo $roll_no; ?>" required>
    				</div>
    				<div class="item">
    					<input type="text" name="name" value="<?php echo $name;  ?>" placeholder="<?php echo $name; ?>" required>
    				</div>
    				<div class="item">
    					<input type="text" name="father_name" value="<?php echo $father_name; ?>" placeholder="<?php echo $father_name; ?>" required>
    				</div>
    				<div class="item">
    					<input type="text" name="mother_name" value="<?php echo $mother_name; ?>" placeholder="<?php echo $mother_name; ?>">
    				</div>
    				<div class="item">
    					<input type="text" name="address" value="<?php echo $address;  ?>" placeholder="<?php echo $address;  ?>">
    				</div>
    				<div class="item">
    					<input type="number" name="class" value="<?php echo $class;  ?>" placeholder="<?php echo $class;  ?>">
    				</div>
    				<div class="item">
    					<select name="group" id="select">
    						<option value="<?php echo $group?>"><?php echo $group; ?></option>
    						<option value="SELECT Group" disabled>Select Group</option>
    						<option value="Science">Science</option>
    						<option value="Business Studies">Business Studies</option>
    						<option value="Huminaties">Huminaties</option>
    					</select>
    				</div>
    				<div class="item">

    					<select name="section" id="select">
    						<option value="<?php echo $section; ?>"><?php echo $section;?></option>
    						<option value="Select Section" disabled>Select Section</option>
    						<option value="a">A</option>
    						<option value="b">B</option>
    						<option value="c">C</option>
    						<option value="d">D</option>
    					</select>
    				</div>

    				<div class="item">
    					<input type="number" name="contact" value="<?php echo $contact; ?>" placeholder="<?php echo $contact; ?>" required>
    				</div>
    				
    					
    			
    				<div class="item">
    					<img src="<?php echo $image;?>" alt="" style="width:200px; height: 200px">
    					<input type="file" name="file" enctype="multipart/form-data" required>
    				</div>
    				<div class="item">
    					<button type="submit" name="savechanges" class="btn btn-info">Update</button>
    				</div>
    				<div class="item">
    					<button type="submit" class="btn btn-default" onclick="closeNav()">Close</button>
    				</div>
    			</div>
    			
    		</form>
    	
    	
    </div>


</body>
</html>