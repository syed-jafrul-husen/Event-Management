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
	$query= "SELECT * FROM home WHERE id=$id";
	$getData= $db->select($query)->fetch_assoc();
	
	if(isset($_POST['submit'])){
					$name = mysqli_real_escape_string($db->link, $_POST['name']); 
					$date = mysqli_real_escape_string($db->link, $_POST['date']); 
					$orgenizer = mysqli_real_escape_string($db->link, $_POST['orgenizer']); 
					$associate = mysqli_real_escape_string($db->link, $_POST['associate']); 
					if($name=='' || $date=='' || $orgenizer=='' || $associate==''){
						$error="Field must not be Empty !!";
					}else{
						$query = " UPDATE home
						SET
						name='$name',
						date='$date',
						orgenizer='$orgenizer',
						associate='$associate'
						WHERE id= $id";
						$update = $db->update($query);
					}
	}
 ?>
 <?php
	if(isset($_POST['delete'])){
		$query="DELETE FROM home WHERE id=$id";
		$deleteData = $db->delete($query);
		
		
	}
 
 
 
 ?>
 
 
 <?php
	if(isset($error)){
		echo "<span style='color:red'>".$error."</span>";
	}
 ?>
 
 <form action="update.php?id=<?php echo $id;?>" method="post">
	 <table>
		 <tr><br>
					<td>Name</td>
					<td><input type="text" name="name" value="<?php echo $getData['name']?>" /></td>
				 </tr>
				 <tr><br>
					<td>Date</td>
					<td><input type="text" name="date" value="<?php echo $getData['date']?>" /></td>
				 </tr>
				 <tr><br>
					<td>Orgenizer</td>
					<td><input type="text" name="orgenizer" value="<?php echo $getData['orgenizer']?>" /></td>
				 </tr>
				 <tr>
					<td>Associate</td>
					<td><input type="text" name="associate" value="<?php echo $getData['associate']?>" /></td> 
					
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
 <button style="margin-left:20px;background-color:white;"> <a style="text-decoration:none;color:blue;font-size:20px;" href="index.php">Go back</a></button>
 
 
 
 
 
  
<?php include 'include/footer.php'; ?> 
</div>
</body>
</html>