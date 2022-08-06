<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Create</title>

	<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">

</head>
<body style="background-color:pink">
<fieldset>
	<legend style="text-align:center;background-color: red;">Curd application</legend>
<center>
<form class="form-horizontal" action="action_page.php" method="POST">
	  <div class="form-group">
	    <label class="control-label col-sm-5" for="email">First Name:</label>
	    <div class="col-sm-2">
	      <input type="text" name="firstname" class="form-control" id="email" placeholder="Enter name">
	    </div>
	  </div>
	  <div class="form-group">
	    <label class="control-label col-sm-5" for="pwd">Last Name:</label>
	    <div class="col-sm-2">
	      <input type="text" name='lastname' class="form-control" id="pwd" placeholder="Enter last name">
	    </div>
	  </div>
		<div class="form-group">
		    <label class="control-label col-sm-5" for="pwd">Age:</label>
		    <div class="col-sm-2">
		      <input type="text" name='age' class="form-control" id="pwd" placeholder="Enter age">
		    </div>
		 </div>
	  <div class="form-group" >
	    <div class="col-sm-offset-5 col-sm-2 " >
	      <button type="submit" name='button_submit' class="btn btn-default">Submit</button>
	    </div>
	  </div>
</form> 
</center>
<fieldset>

	
</body>
</html>