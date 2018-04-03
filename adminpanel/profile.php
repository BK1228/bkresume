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
      <div class="card-header">Profile pic Upload</div>
      <div class="card-body">
        <form method="post" enctype="multipart/form-data">
           <div class="form-group" >
            <label for="exampleInputName">Profile Pic</label>
          			<input type="file" class="form-control" id="exampleInputName" name="imgupload" value="Choose Image" >
          		</div>
          		
			<div class="text-center">
				<table><tr><td><input type="submit" name="btn" value="Upload Image"></td></tr></table>
			</div>
        </form>
        
		   <?php
							
						
								if(isset($_POST['btn'])){
		
								$target_dir = "image/";
									$target_file = $target_dir . basename($_FILES["imgupload"]["name"]);
									$uploadOk = 1;
									$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
									// Check if image file is a actual image or fake image
									
										$check = getimagesize($_FILES["imgupload"]["tmp_name"]);
										if($check !== false) {
											echo "File is an image - " . $check["mime"] . ".";
											$uploadOk = 1;
										} else {
											echo "File is not an image.";
											$uploadOk = 0;
										}
									
									// Check if file already exists
									if (file_exists($target_file)) {
										echo "Sorry, file already exists.";
										$uploadOk = 0;
									}

									// Check file size
									if ($_FILES["imgupload"]["size"] > 500000) {
										echo "Sorry, your file is too large.";
										$uploadOk = 0;
									}
									// Allow certain file formats
									if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
									   && $imageFileType != "gif" ) {
										echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
										$uploadOk = 0;
									}
									// Check if $uploadOk is set to 0 by an error
									if ($uploadOk == 0) {
										echo "Sorry, your file was not uploaded.";
										// if everything is ok, try to upload file
									} else {
										if (move_uploaded_file($_FILES["imgupload"]["tmp_name"], $target_file)) {
											echo "The file ". basename( $_FILES["imgupload"]["name"]). " has been uploaded.";
										} else {
											echo "Sorry, there was an error uploading your file.";
											}
									}
		
										$q4 = "INSERT INTO image VALUES ('0' , '$target_file' )";
										
										$ex3 = mysqli_query ( $con , $q4 ) or die ( mysqli_error ( $con ) );
										
										
											if ($ex3 == 1)
											{
													echo "Data Saved.." ;
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
