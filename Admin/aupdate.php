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
	$query= "SELECT * FROM aboutus WHERE id=$id";
	$getData= $db->select($query)->fetch_assoc();
	
	if(isset($_POST['submit'])){
					$post = mysqli_real_escape_string($db->link, $_POST['about']); 
					if($post==''){
						$error="Field must not be Empty !!";
					}else{
						$query = " UPDATE aboutus
						SET
						about='$post'
						WHERE id= $id";
						$update = $db->update($query);
					}
	}
 ?>
 <?php
	if(isset($_POST['delete'])){
		$query="DELETE FROM aboutus WHERE id=$id";
		$deleteData = $db->delete($query);
		
		
	}
 
 
 
 ?>
 
 
 <?php
	if(isset($error)){
		echo "<span style='color:red'>".$error."</span>";
	}
 ?>
 
 <form action="aupdate.php?id=<?php echo $id;?>" method="post">
	 <table>
		 <tr><br>
					<td>Post</td>
					<td><input type="text" name="about" value="<?php echo $getData['about']?>" /></td>
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
 <button style="margin-left:20px;background-color:white;"> <a style="text-decoration:none;color:blue;font-size:20px;" href="aboutuspost.php">Go back</a></button>
 
 
 
 
 
  
<?php include 'include/footer.php'; ?> 
</div>
</body>
</html>