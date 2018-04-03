<?php

if ( $_SERVER ['REQUEST_METHOD' ] === "GET" )
{
	include('../config.php');
	
	if ( isset ( $_GET['id'] ) )
	{
		$value = $_GET['id'];	
		$del_qry = "DELETE FROM genres WHERE id = '$value'";
		
		$del_exc = mysqli_query( $con , $del_qry ) or die ( mysqli_error ( $con ) );
		
		if ( $del_exc == 1 )
		{
?>
			<script>
				alert('Delete Success');
				window.location.href = 'tables.php?done' ;
			</script>
	
    		<?php
    	}
	}

		else
		{
				die( " You are not allow to visit this page ");

		}
	}
	else
	{
			die("You are not allowed here ");
	}
	?>