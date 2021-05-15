<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Admin Details</title>
	<link rel="stylesheet" href="css/admission-date.css">
	<link rel="stylesheet" href="bootstrap-4.4.1-dist\bootstrap-4.4.1-dist\css\bootstrap.min.css">
	<link rel="stylesheet" href="bootstrap-4.4.1-dist\bootstrap-4.4.1-dist\css\bootstrap.css">
	<link rel="stylesheet" href="font-awesome-4.7.0\css\font-awesome.min.css">
</head>
<body>
	<div class="dashboard">
		<div class="logo">DHS</div>

		<div class="form">
			<form action="#">
				<div class="d-flex flex-row flex-wrap justify-content-around dip">
					<div class="item">
						<label for="name">Name <span style="color:red">*</span></label>
					</div>
					<div class="item">
						<input type="text" name="name" required="required">
					</div>
					<div class="item">
						<label for="email">Email <span style="color:red">*</span></label>
					</div>
					<div class="item">
						<input type="email" name="email" required="required">
					</div>
					<div class="item">
						<label for="contact">Contact </label>
					</div>
					<div class="item">
						<input type="number" name="contact" required="required">
					</div>
					<div class="item">
						<label for="image">Image <span style="color:red">*</span></label>
					</div>
					<div class="item"> 
                       <input type="file" name="image" required="required">
					</div>
					
                    <div class="item">
                    	<label for="password">Password <span style="color: red">*</span></label>
                    </div>
                    <div class="item">
                    	<input type="password" name="psw" required="required" autocomplete="off">
                    </div>
				</div>

				<div class="d-flex justify-content-around">
					<div class="item">
						<button class="btn" type="submit">Submit</button>
					</div>
					<div class="item">
						<button class="btn" type="submit"><a href="dashboard1.php">Close</a></button>
					</div>
				</div>
			</form>
		</div>
	</div>
</body>
</html>