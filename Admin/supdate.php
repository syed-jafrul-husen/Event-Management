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
	$id=$_GET['id'];
	$db= new Database();
	$query= "SELECT * FROM schedule WHERE id=$id";
	$getData= $db->select($query)->fetch_assoc();
	
	if(isset($_POST['submit'])){
					$time = mysqli_real_escape_string($db->link, $_POST['time']); 
					$event = mysqli_real_escape_string($db->link, $_POST['event']); 
					$place = mysqli_real_escape_string($db->link, $_POST['place']); 
					if($time=='' || $event=='' || $place==''){
						$error="Field must not be Empty !!";
					}else{
						$query = " UPDATE schedule
						SET
						time='$time',
						event='$event',
						place='$place'
						WHERE id= $id";
						$update = $db->update($query);
					}
	}
 ?>
 <?php
	if(isset($_POST['delete'])){
		$query="DELETE FROM schedule WHERE id=$id";
		$deleteData = $db->delete($query);
		
		
	}
 
 
 
 ?>
 
 
 <?php
	if(isset($error)){
		echo "<span style='color:red'>".$error."</span>";
	}
 ?>
 
 <form action="supdate.php?id=<?php echo $id;?>" method="post">
	 <table>
		 <tr><br>
					<td>Time</td>
					<td><input type="text" name="time" value="<?php echo $getData['time']?>" /></td>
				 </tr>
				 <tr><br>
					<td>Event</td>
					<td><input type="text" name="event" value="<?php echo $getData['event']?>" /></td>
				 </tr>
				 <tr><br>
					<td>Place</td>
					<td><input type="text" name="place" value="<?php echo $getData['place']?>" /></td>
				 </tr>
		 <tr>
			<td></td>
			<td>
			<br>
			<input type="submit" name="submit" value="Update" />
			<input type="reset" value="cancel" />
			<input type="submit" name="delete" value="Delete" />
			</td> 
		 </tr>
	 </table>
 </form>
 <br>
 <button style="margin-left:20px;background-color:white;"> <a style="text-decoration:none;color:blue;font-size:20px;" href="admission.php">Go back</a></button>
 
 
 
 
 
  
<?php include 'include/footer.php'; ?> 
</div>
</body>
</html>