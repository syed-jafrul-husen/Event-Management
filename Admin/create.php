<!DOCTYPE html>
<html>
	<head> <link href="stylelogin.css" rel="stylesheet"></head>
	<body>
	<div class="wrapper">
	<?php include 'include/header.php';
	include "include/leftsidebar.php";
	include ("include/config.php");
	include ("include/Database.php");
	 ?>
	     <?php
				$db= new Database();
				if(isset($_POST['submit'])){
					$name = mysqli_real_escape_string($db->link, $_POST['name']); 
					$date = mysqli_real_escape_string($db->link, $_POST['date']); 
					$orgenizer = mysqli_real_escape_string($db->link, $_POST['orgenizer']); 
					$associate = mysqli_real_escape_string($db->link, $_POST['associate']);    

						
					if($name=='' || $date=='' || $orgenizer=='' || $associate==''){
						$error="Field must not be Empty !!";
					}else{
						$query = "INSERT INTO home(name,date,orgenizer,associate) Values('$name','$date','$orgenizer','$associate')";
						$create = $db->insert($query);
					}
				}
		?>
			 
			 <?php
				if(isset($error)){
					echo "<span style='color:red'>".$error."</span>";
				}
			 ?>
 
		 
		 <form action="create.php" method="post">
			 <table>
			 
				 <tr><br>
					<td>Name</td>
					<td><input type="text" name="name" placeholder="please enter your title"/></td>
				 </tr>
				 <tr><br>
					<td>Date</td>
					<td><input type="text" name="date" placeholder="please enter your title"/></td>
				 </tr>
				 <tr><br>
					<td>Orgenizer</td>
					<td><input type="text" name="orgenizer" placeholder="please enter your title"/></td>
				 </tr>
				 <tr>
					<td><br>Associate</td>
					<td><br><input type="text" name="associate" placeholder="please enter your post"/></td> 
					
				 </tr>
				 <tr>
					<td></td>
					<td>
						<br>
						<input type="submit" name="submit" value="POST" />
						<input type="reset" value="cancel" />
					</td> 
				 </tr>
			 </table>
		 </form>
			 <br>
			<button style="margin-left:20px;background-color:white;"> <a style="text-decoration:none;color:blue;font-size:20px;" href="index.php">Go back</a></button>
			 
 
 
 
 
  
		<?php 
			include 'include/footer.php'; 
		?>
		

   </div>
   </body>
   </html>
   
   
   
   
   
   
 