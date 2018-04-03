<?php include ( '../config.php ');
if ( !isset ( $_GET [ 'id' ] ) or empty ( $_GET [ 'id' ] ) )
{
	die ( "You are not allowed to visit this page" );
}
$newvalue = $_GET [ 'id' ];
?>



<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Update here</title>

</head>

<body>

<?php
	
	$datac = "SELECT *FROM genres WHERE id = '$newvalue' " ;
	
	$dataex = mysqli_query ( $con , $datac ) or die ( mysqli_error ( $con ) );
	
	if ( mysqli_num_rows ( $dataex ) == 0)
	{
			die ( "Something went wrong");
	}
	else
	{
		$newdata = mysqli_fetch_array ( $dataex );
		//$image1=$row['imgupload'];
	}

?>


					<form method="post">
							<table border="2">
										<tr>
											<td>Genres Type </td>
											<td><select name="genres" value="<?php echo $newdata['genres']?>">
											<option>Drama</option>
											<option>Comedy</option>
											<option>Action</option>
											<option>Romance</option>
											<option>Horror</option>
											<option>Fantasy</option>
											<option>Sci-Fi</option>
											<option>Thriller</option>
											<option>Western</option>
											<option>Adventure</option>
											<option>Animation</option>
											<option>Documentary</option>
											</select></td>
										</tr>
										<tr>
											<td>Title</td>
											<td><input type="text" name="title" placeholder="Title" value="<?php echo $newdata['title']?>"></td>
										</tr>
										<tr>
											<td>Description</td>
											<td><textarea name='desc' value="<?php echo $newdata['desc']?>"></textarea></td>
										</tr>
										<tr>
											<td><img src="../<?php echo $newdata['imgupload']; ?>" style="width:200px"></td>
											<td>Image Upload</td>
											<td><input type="file" name="img" value=""></td>
										</tr>
										<tr>
										<td><img src="../<?php echo $newdata['vidupload']; ?>" style="width:200px"></td>
											<td>Video Upload</td>
											<td><input type="file" name="video" value=""></td>
										</tr>
										<tr>
											<td>Catagory </td>
											<td><select name="catagory" value="<?php echo $newdata['catagory']?>">
											<option>TV serial</option>
											<option>Movie</option>
											<option>Playlists</option>
											<option>New Arrivals</option>
											</select></td>
										</tr>
  								 <tr>
  								 	    <td align="right"><input type="submit" name ="btn3" value="Update"></td>
  								  </tr>
  								 
								</table> 
								</form>
								<?php
	
									if( isset ( $_POST [ 'btn3' ] ) ){
		
									$target_dir = "../uploads/";
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
	
							$genres= $_POST['genres'];
							$title= $_POST['title'];
							$desc= $_POST['desc'];
							$catagory= $_POST['catagory'];
							
			
			
			$uq = "UPDATE genres SET genres = '$genres' , title = '$title' , desc = '$desc', catagory = '$catagory' 
			where id = '$newvalue'";
			
			$uex = mysqli_query ( $con , $uq ) or die ( mysqli_error ( $con ) );
			
			if ( $uex == 1)
			{
	?>			Please wait....
    			<?php
						header("Refresh: url= tables.php");
			}
	}
			?>	 	
</body>
</html>