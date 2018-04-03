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
      <div class="card-header">Manage Experience Details</div>
      <div class="card-body">
        <form method="post">
          <div class="form-group">
            <label for="exampleInputName">Experince Title</label>
          			<input  class="form-control" id="exampleInputName"  type="text" name="title"  aria-describedby="nameHelp" placeholder="Experince Title">
          		</div>
          		<div class="form-group">
            		<label for="exampleInputName">Company name</label>
          			<input  class="form-control" id="exampleInputName"  type="text" name="companyname" aria-describedby="nameHelp" placeholder="Enter Company name">
          		</div>
          		<div class="form-group">
            		<label for="exampleInputName">date</label>
          			<input  class="form-control" id="exampleInputName"  type="text" name="date" aria-describedby="nameHelp" placeholder="Enter date">
          		</div>
			<div class="text-center">
				<table><tr><td><input type="submit" name="btn" value="Submit"></td></tr></table>
			</div>
        </form>
        
		   <?php
	if(isset($_POST['btn'])){
		
		$title = $_POST['title'];
		$companyname = $_POST['companyname'];
		$date = $_POST['date'];
		
		
		if (empty ( $title ) or empty ( $companyname ) or empty ( $date ) )
			{
				echo "Empty field is not allowed..";	
				
			}
			else
			{
				
				
					$q2 = "INSERT INTO manage_exp VALUES ('0' , '$title' , '$companyname' , '$date')";
				
					
					
				
					$ex1 = mysqli_query ( $con , $q2 ) or die ( mysqli_error ( $con ) );
				
				
					if ( $ex1 == 1)
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
