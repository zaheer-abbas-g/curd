<?php 

	include_once('config.php');



			/*Insert Data*/ 

	if (isset($_POST['button_submit'])){
			
			$first_name=$_POST['firstname'];
			$last_name=$_POST['lastname'];
			$age=$_POST['age'];

		// echo '<pre>';	
		// 	print_r($_POST);
		// 	 '</pre>';

	        $insert="INSERT INTO curd(first_name,last_name,age)VALUES('$first_name','$last_name','$age')";	

	      echo  $result=mysqli_query($connection,$insert) or die('query fail');
	        if ($result) {

	        		echo '<p align="center">'.'Data Inserted'.'</p>';
	        	}	
				}



			



?>


<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>action page</title>

		<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">

</head>
<body>
	
	
<div class="container">
  <h2 style="text-align:center">All User's</h2>
  <hr />            

 <p style="text-align:'center;"><?php echo isset($_GET['message'])?$_GET['message']:' '?></p>

  <table class="table table-bordered">
    <thead style="text-align:center;background-color: black; color: white;">
      <tr>
        <th style="text-align:center">Firstname</th>
        <th style="text-align:center;">Lastname</th>
        <th style="text-align:center;">Email</th>
        <th style="text-align:center;">Action</th>
      </tr>
    </thead>
    <tbody>

    	<?php 

    	$select="SELECT * FROM curd";
    	$select_result = mysqli_query($connection,$select);
    	if (mysqli_num_rows($select_result)>0) {
    		
    	while ($row=mysqli_fetch_assoc($select_result)) {?>				
      <tr>
        <td style="text-align:center;"><?php echo $row['first_name']; ?></td>
        <td style="text-align:center;"><?php echo $row['last_name'];?></td>
        <td style="text-align:center;"><?php echo $row['age'];?></td> 
        <td style="text-align:center;">
          <a href="edit_curd.php?edit_id=<?php echo $row['id']?>">Edit</a> 
      		|
      	  <a href="delete_curd.php?delete_id=<?php echo $row['id'];?>"> Delete</a>
      	</td>
      </tr>
    
    <?php  	  
      	  }
    		}

    	?>
    </tbody>
  </table>
</div>


</body>
</html>