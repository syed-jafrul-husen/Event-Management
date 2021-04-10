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
					$time = mysqli_real_escape_string($db->link, $_POST['time']); 
					$event = mysqli_real_escape_string($db->link, $_POST['event']); 
					$place = mysqli_real_escape_string($db->link, $_POST['place']);     

						
					if($time=='' || $event=='' || $place==''){
						$error="Field must not be Empty !!";
					}else{
						$query = "INSERT INTO schedule(time,event,place) Values('$time','$event','$place')";
						$create = $db->insert($query);
					}
				}
		?>
			 
			 <?php
				if(isset($error)){
					echo "<span style='color:red'>".$error."</span>";
				}
			 ?>
 
		 
		 <form action="screate.php" method="post">
			 <table>
			 
				 <tr><br>
					<td>Time</td>
					<td><input type="text" name="time" placeholder="please enter your title"/></td>
				 </tr>
				 <tr><br>
					<td>Event</td>
					<td><input type="text" name="event" placeholder="please enter your title"/></td>
				 </tr>
				 <tr><br>
					<td>Place</td>
					<td><input type="text" name="place" placeholder="please enter your title"/></td>
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
			<button style="margin-left:20px;background-color:white;"> <a style="text-decoration:none;color:blue;font-size:20px;" href="admission.php">Go back</a></button>
			 
 
 
 
 
  
		<?php 
			include 'include/footer.php'; 
		?>
		

   </div>
   </body>
   </html>
   
   
   
   
   
   
 