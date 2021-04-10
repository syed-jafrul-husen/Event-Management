<!DOCTYPE html>
<?php
	include("connect.php")
?>
<html lang="en">
	<head>
		<title>Cybernetics CSE Fest'19</title>
		<link href="style.css" rel="stylesheet">
	</head>
	
	<body background="bodyP.jpeg">
		<div  class="wrapper">
		<?php
	include("include/config.php")
?>
	<?php
		if(isset($_REQUEST['post']))
			{
				$sPost1=$_REQUEST['textbox1'];
				$sPost2=$_REQUEST['textbox2'];
				$sPost3=$_REQUEST['textbox3'];
				$sPost4=$_REQUEST['textbox4'];
				$sPost5=$_REQUEST['textbox5'];
				
				$sql="insert into signup(name,institute,username,email,password) values ('$sPost1','$sPost2','$sPost3','$sPost4','$sPost5')";
				mysqli_query($conn,$sql);
				echo '<font color="green">Inserted Successfully</font>';
			}
	?>
		
		<?php
			include("menubar.php")
		?>
		<br>
		
			<div class="signUpMain">
			<div class="logsign">
			
				<form action="" method="post" enctype="multipart/from-data" target="_self" align="center">
				<br/>
				<legend> <p style="color:black; background: #988D31;font-size:40px;">Sign Up<p></legend>
				
				<input type="text" name="textbox1" placeholder=" Your name  " required>
				
				<input type="text" name="textbox2" placeholder=" Your institute  " required>
				
				<input type="text" name="textbox3" placeholder=" Your username " required >
				
				<input type="email" name="textbox4" placeholder=" Your email " required>
				
				<input type="password" name="textbox5" placeholder=" Your password  " required>
				
				<input type="submit" value="Singn up" name="post"  >
				<br/><br/><br/>
				</form>
			</div>
			</div>
		<?php
			include("footer.php");
		?>
		
		</div>
	</body>
</html>
