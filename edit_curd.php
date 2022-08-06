<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Edit</title>

	<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">

</head>
<body style="background-color:pink">
<fieldset>
	<legend style="text-align:center;background-color: red;">Update Data</legend>
<center>
<form class="form-horizontal" action="#" method="POST">

	<?php

		include_once('config.php');

		if (isset($_GET['edit_id'])) {
			
			$user_id =  $_GET['edit_id'];
			$select = "SELECT * FROM curd WHERE id=$user_id";
			$result = mysqli_query($connection,$select) or die('query fail');
			
			if ($row = mysqli_fetch_assoc($result)) {
				?>
	  <div class="form-group">
	    <label class="control-label col-sm-5"  for="name">First Name:</label>
	    <div class="col-sm-2">
	      <input type="text" name="firstname" value='<?php echo $row['first_name'];?>' class="form-control" id="name" placeholder="Enter name">
	    </div>
	  </div>
	  <div class="form-group">
	    <label class="control-label col-sm-5" for="lastname">Last Name:</label>
	    <div class="col-sm-2">
	      <input type="text" name='lastname' value='<?php echo $row['last_name'];?>' class="form-control" id="pwd" placeholder="Enter last name">
	    </div>
	  </div>
		<div class="form-group">
		    <label class="control-label col-sm-5" for="age">Age:</label>
		    <div class="col-sm-2">
		      <input type="text" name='age' value='<?php echo $row['age'];?>' class="form-control" id="age" placeholder="Enter age">
		    </div>
		 </div>
	  <div class="form-group" >
	    <div class="col-sm-offset-5 col-sm-2 " >
	      <button type="submit" name='button_update' class="btn btn-default">update</button>
	    </div>
	  </div>
	  <?php			
			}
		}

	 ?>
</form> 
</center>
<fieldset>
</body>
</html>


	<?php 


	/*Update data*/

	if (isset($_POST['button_update'])) {
		
		$userid = $_GET['edit_id'];
		$name = $_POST['firstname'];
		$lastname = $_POST['lastname'];
		$age = $_POST['age'];

		$update = "UPDATE curd SET first_name='$name', last_name='$lastname', age='$age'	 WHERE id = $userid";	
		$result_update = mysqli_query($connection,$update);
		if ($result_update == true) {
			
			header("location:action_page.php?message=Data Successfully updated");
		}


	}


	?>