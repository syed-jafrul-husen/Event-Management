<?php
	session_start();

	if($_SESSION['username']==null){
			if($_SESSION['password']==null){
				header("Location: login.php");
			}			
		}
	include("classes/loginandlogout.php");
	use App\classes\AdminLogin;
	$adm=new AdminLogin();
	if(isset($_GET['logout'])){
		$adm->adminLogout();
	}


?>
<!DOCTYPE html>
<html>
<head> <link href="stylelogin.css" rel="stylesheet"></head>
<body>
<div class="wrapper">
<?php include 'include/header.php';
	include "include/leftsidebar.php";
	
 ?>
 <?php
	include("../include/config.php")
	
?>
 <?php
			include("include/config.php");
			$sql="select * from signup";
			  
			$res=mysqli_query($conn,$sql);
			

		?>
 
 

 <table>
 <tr>
	<th width="20%">Name</th>
	<th width="20%">Institute</th>
	<th width="20%">User Name</th>
	<th width="20%">Email</th>
	<th width="20%">Password</th>
 </tr>
 <?php
						
			while($arr=mysqli_fetch_array($res))
				{
	?>
		 <tr>
			<td Style="text-align:center;border:1px solid black;"><?php echo $arr['name'] ?></td>
			<td Style="text-align:center;border:1px solid black;"><?php echo $arr['institute'] ?></td>
			<td Style="text-align:center;border:1px solid black;"><?php echo $arr['username'] ?></td>
			<td Style="text-align:center;border:1px solid black;"><?php echo $arr['email'] ?></td>
			<td Style="text-align:center;border:1px solid black;"><?php echo $arr['password'] ?></td>
		 </tr>
		 <?php	
				}
		?>
 

 </table><br>
 <button style="margin-left:20px;background-color:white;"><a style="text-decoration:none;color:green;font-size:20px;" href="screate.php">Add Post</a></button>
 
 
 
 
 
 
  
<?php
	
		include("include/footer.php")
	
?>
</div>
</body>
</html>