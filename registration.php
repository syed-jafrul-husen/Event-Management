<!DOCTYPE html>
<?php
	include("connect.php")
?>
<?php
	include("include/config.php")
?>
	<?php
		if(isset($_REQUEST['submit']))
			{
				$tn=$_REQUEST['tn'];
				$tm=$_REQUEST['tm'];
				$et=$_REQUEST['et'];
				$inn=$_REQUEST['inn'];
				$m1n=$_REQUEST['m1n'];
				$m1e=$_REQUEST['m1e'];
				$m1p=$_REQUEST['m1p'];
				$m2n=$_REQUEST['m2n'];
				$m2e=$_REQUEST['m2e'];
				$m2p=$_REQUEST['m2p'];
				$m3n=$_REQUEST['m3n'];
				$m3e=$_REQUEST['m3e'];
				$m3p=$_REQUEST['m3p'];
				
				$sql="insert into registration(tn,tm,et,inn,m1n,m1e,m1p,m2n,m2e,m2p,m3n,m3e,m3p) values ('$tn','$tm','$et','$inn','$m1n','$m1e','$m1p','$m2n','$m2e','$m2p','$m3n','$m3e','$m3p')";
				mysqli_query($conn,$sql);
				echo '<font color="green">Inserted Successfully</font>';
			}
	?>
<html lang="en">
	<head>
		<title>Cybernetics CSE Fest'19</title>
		<link href="style.css" rel="stylesheet">
	</head>
	
	
	
	<body background="bodyP.jpeg">
		<div  class="wrapper">
		
		<?php
			include("menubar.php")
		?>
		<div class="regiTitle">
				</br>Registration Form</br></br>
			</div>
		<div class="body2Regi">
		<div class="registerbox">
		<form action="" method="post">
		
				<input type="text" name="tn"  placeholder="Team Name" required>
				<br/> <br/><br/>
				<b> Number of Team Members :  </b> <input type="radio" name="tm" value="1" >1
							<input type="radio" name="tm" value="2" checked >2
							<input type="radio" name="tm" value="3" >3
				<br/><br/><br/>
				<b>Event Type : </b>
				<select name="et">
					<option>Inter University Programming Contest</option>
					<option>Robo Rides (Line Following Robot)</option>
					<option>Inter University Project Exhibition</option>
				</select><br/><br/><br/>
				<input type="text" name="inn" placeholder="Institute Name:" required>
				<br/><br/>
				
				<b >Team Member 1</b> <br/>
				<input type="text" name="m1n" placeholder="Member 1 Name:" required>
				
				<input type="email" name="m1e" placeholder="Member 1 Email:" required>
				
				<input type="text" name="m1p" placeholder="Member 1 Phone No. :" required>
				<br/> <br/><br/>
				
				<b >Team Member 2</b> <br/>
				<input type="text" name="m2n" placeholder="Member 2 Name:" required>
				
				<input type="email" name="m2e" placeholder="Member 2 Email:" required>
				
				<input type="text" name="m2p" placeholder="Member 2 Phone No. :" required>
				<br/> <br/><br/>
				
				<b >Team Member 3</b> <br/>
				<input type="text" name="m3n" placeholder="Member 3 Name:" required>
				
				<input type="email" name="m3e" placeholder="Member 3 Email:" required>
				
				<input type="text" name="m3p" placeholder="Member 3 phone No. :" required>
				<br/> <br/><br/>
				<input type="submit" name="submit" value="Submit"><br/>
				<input type="reset" value="Reset">
			<br/><br/>
		</form>
		</div>
		</div>
		<?php
			include("footer.php");
		?>
		
		</div>
	</body>
	</html>
