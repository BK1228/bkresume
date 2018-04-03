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
      <div class="card-header">Manage Education Details</div>
      <div class="card-body">
        <form method="post">
           <div class="form-group">
            <label for="exampleInputName">Institute Name</label>
          			<input  class="form-control" id="exampleInputName"  type="text" name="institute"  aria-describedby="nameHelp" placeholder="Enter Institute Name">
          		</div>
          		<div class="form-group">
            		<label for="exampleInputName">Digree</label>
          			<input  class="form-control" id="exampleInputName"  type="text" name="digree" aria-describedby="nameHelp" placeholder="Enter Digree">
          		</div>
          		<div class="form-group">
            		<label for="exampleInputName">Details</label>
          			<input  class="form-control" id="exampleInputName"  type="text" name="details" aria-describedby="nameHelp" placeholder="Enter Details">
          		</div>
			<div class="text-center">
				<table><tr><td><input type="submit" name="btn" value="Submit"></td></tr></table>
			</div>
        </form>
        
		   <?php
	if(isset($_POST['btn'])){
		
		$institute = $_POST['institute'];
		$digree = $_POST['digree'];
		$details = $_POST['details'];
		
		
		
	
	if (empty ( $institute ) or empty ( $digree ) or empty ( $details ) )
			{
				echo "Empty field is not allowed..";	
				
			}
			else
			{
				
					$q3 = "INSERT INTO education VALUES ('0' , '$institute' , '$digree' , '$details' )";
				
				$ex2 = mysqli_query ( $con , $q3 ) or die ( mysqli_error ( $con ) );
				
				
					if ($ex2 == 1)
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
