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
	
 ?>
 <?php
	include("../include/config.php")
?>
 <?php
			include("include/config.php");
			$sql="select * from registration";
			  
			$res=mysqli_query($conn,$sql);
			

		?>
 
 

 <table>
 <tr>
	<th width="10%">Team Name</th>
	<th width="10%">Team Member</th>
	<th width="10%">Institution Name</th>
	<th width="5%">Mem1 Name</th>
	<th width="10%">Mem1 email</th>
	<th width="10%">Mem1 pho</th>
	<th width="5%">Mem2 Name</th>
	<th width="10%">Mem2 email</th>
	<th width="10%">Mem2 pho</th>
	<th width="5%">Mem3 Name</th>
	<th width="10%">Mem3 email</th>
	<th width="5%">Mem3 pho</th>
 </tr>
 <?php
						
			while($arr=mysqli_fetch_array($res))
				{
	?>
		 <tr>
			<td Style="text-align:center;border:1px solid black;"><?php echo $arr['tn'] ?></td>
			<td Style="text-align:center;border:1px solid black;"><?php echo $arr['tm'] ?></td>
			<td Style="text-align:center;border:1px solid black;"><?php echo $arr['inn'] ?></td>
			<td Style="text-align:center;border:1px solid black;"><?php echo $arr['m1n'] ?></td>
			<td Style="text-align:center;border:1px solid black;"><?php echo $arr['m1e'] ?></td>
			<td Style="text-align:center;border:1px solid black;"><?php echo $arr['m1p'] ?></td>
			<td Style="text-align:center;border:1px solid black;"><?php echo $arr['m2n'] ?></td>
			<td Style="text-align:center;border:1px solid black;"><?php echo $arr['m2e'] ?></td>
			<td Style="text-align:center;border:1px solid black;"><?php echo $arr['m2p'] ?></td>
			<td Style="text-align:center;border:1px solid black;"><?php echo $arr['m3n'] ?></td>
			<td Style="text-align:center;border:1px solid black;"><?php echo $arr['m3e'] ?></td>
			<td Style="text-align:center;border:1px solid black;"><?php echo $arr['m3p'] ?></td>
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