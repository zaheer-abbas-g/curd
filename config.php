<?php 


$servername='localhost';
$username='root';
$password='';
$databasename='curdappone';


$connection=mysqli_connect($servername,$username,$password,$databasename);

if (!$connection) {
	echo "Error Message show:".mysqli_connect_error();
}

?>