<?php require ('../config.php') ?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <title>SB Admin - Start Bootstrap Template</title>
  <!-- Bootstrap core CSS-->
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <!-- Custom fonts for this template-->
  <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
  <!-- Custom styles for this template-->
  <link href="css/sb-admin.css" rel="stylesheet">
</head>

<body class="bg-dark">
  <div class="container">
    <div class="card card-register mx-auto mt-5">
      <div class="card-header">Manage About</div>
      <div class="card-body">
        <form method="post">
           <div class="form-group">
            <label for="exampleInputName">Name</label>
          			<input  class="form-control" id="exampleInputName"  type="text" name="name"  aria-describedby="nameHelp" placeholder="Enter name">
          		</div>
          		<div class="form-group">
            		<label for="exampleInputName">Address</label>
          			<input  class="form-control" id="exampleInputName"  type="text" name="address" aria-describedby="nameHelp" placeholder="Enter Address">
          		</div>
          		<div class="form-group">
            		<label for="exampleInputName">Phone no</label>
          			<input  class="form-control" id="exampleInputName"  type="text" name="phone" aria-describedby="nameHelp" placeholder="Enter phone no">
          		</div>
          		<div class="form-group">
            		<label for="exampleInputName">Email</label>
          			<input  class="form-control" id="exampleInputName"  type="text" name="email" aria-describedby="nameHelp" placeholder="Enter email">
          		</div>
          		<div class="form-group">
            		<label for="exampleInputName">About Me</label>
          			<input  class="form-control" id="exampleInputName"  type="text" name="about" aria-describedby="nameHelp" placeholder="Enter about me">
          		</div>
          		<div class="form-group">
            		<label for="exampleInputName">Facebook link</label>
          			<input  class="form-control" id="exampleInputName"  type="text" name="facebook" aria-describedby="nameHelp" placeholder="Enter Facebook link">
          		</div>
          		<div class="form-group">
            		<label for="exampleInputName">Twitter link</label>
          			<input  class="form-control" id="exampleInputName"  type="text" name="twitter" aria-describedby="nameHelp" placeholder="Enter Twitter link">
          		</div>
          		<div class="form-group">
            		<label for="exampleInputName">Linkedin link</label>
          			<input  class="form-control" id="exampleInputName"  type="text" name="linkedin" aria-describedby="nameHelp" placeholder="Enter Linkedin link">
          		</div>
			<div class="text-center">
				<table><tr><td><input type="submit" name="btn" value="Submit"></td></tr></table>
			</div>
        </form>
        
		   <?php
	if(isset($_POST['btn'])){
		
		$name = $_POST['name'];
		$address= $_POST['address'];
		$phone = $_POST['phone'];
		$email = $_POST['email'];
		$about = $_POST['about'];
		$facebook = $_POST['facebook'];
		$twitter = $_POST['twitter'];
		$linkedin = $_POST['linkedin'];
		
		if (empty ( $name ) or empty ( $address ) or   empty ( $phone) or empty ( $email ) or empty ( $about ) or empty ( $facebook ) or empty ( $twitter ) or empty ( $linkedin ) )
			{
				echo "Empty field is not allowed..";	
				
			}
			else
			{
				
					$q = "INSERT INTO manage_about VALUES ('0' , '$name' , '$address' , '$phone', '$email' , '$about' , '$facebook','$twitter','$linkedin')";
				
				$ex = mysqli_query ( $con , $q ) or die ( mysqli_error ( $con ) );
		  
				if ( $ex == 1)
					{
							echo "Data Saved.." ;
					}
				
			}

    
    
	}
 ?> 
          
		  
      </div>
    </div>
  </div>
  <!-- Bootstrap core JavaScript-->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <!-- Core plugin JavaScript-->
  <script src="vendor/jquery-easing/jquery.easing.min.js"></script>
</body>

</html>
