	
		<?php 

		include_once("config.php");
			/*Delete Data*/ 

			if (isset($_GET['delete_id'])) {
				
				$user_id=$_GET['delete_id'];
			    $delete = "DELETE FROM curd WHERE id=$user_id";
			    $result = mysqli_query($connection,$delete);
			    if ($result == true) {
			    		header("location:action_page.php?message=User Deleted");

			    	}	


			}
			

		?>