<?php 


$servername='localhost';
$username='root';
$password='';
$databasename='curdappone';


$connection=mysqli_connect($servername,$username,$password,$databasename);

if (!$connection) {
	echo "Error Message :".mysqli_connect_error();
}

?>