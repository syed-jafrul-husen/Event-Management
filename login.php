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
				$susername=$_REQUEST['username'];
				$spassword=$_REQUEST['password'];
				
				$sql="insert into login(username,password) values ('$susername','$spassword')";
				mysqli_query($conn,$sql);
				echo '<font color="green">Inserted Successfully</font>';
			}
	?>
		
		<?php
			include("menubar.php")
		?>
		<br>
		<br>
		<br>
		
		<!-- <div class = "parentLogin"> -->
			<div class="logsign">
			<div class="loginMain">
				<form align="center" action="" method="post" ;">
				<br/>
				<legend> <p style="color:white; font-size:40px;">Log In<p></legend>
				
				 </b><input type="text" name="username" placeholder=" Your username or email " required >
				
				</b><input type="password" name="password" placeholder=" Your password  " required>
				
				<input type="checkbox" name="tm" value="tm3"><b style="font-size:20px">Remember me</b>
				<br/> 
				<input type="submit" value="Log in" name="post" >
				<br/> <br/><br/><br/>
				</form>
				
				<script>
					function validateform(){
						var Username = document.login.username;
						var Password = document.login.password;
						if(Username.value == ""){
							document.getElementById("show").innerHTML="Please Enter Your Username";
							return false;
						}
						if(Password.value == ""){
							document.getElementById("show").innerHTML="Please Enter Your Password";
							return false;
						}
				</script>
			</div>
			</div>
		<!-- </div> -->
			<br>
			<br>
			<br>

		
		<?php
			include("footer.php");
		?>
		
		</div>
	</body>
</html>
