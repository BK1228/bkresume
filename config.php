<?php
 
$host= 'localhost';
$username= 'root';
$password= '';
$dbname= 'vedas';

$con = mysqli_connect( $host , $username , $password , $dbname ) or die ( "Conncetion Failed!"  .mysqli_error ( $con )); 



?>