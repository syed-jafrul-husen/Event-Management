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
		<div class="wrapper">
		
		<?php
			include("menubar.php")
		?>
		<?php
			include("include/config.php");
			$sql="select * from aboutus";
			  
			$res=mysqli_query($conn,$sql);
			

		?>

		<div class="body2About">
			<h2><u>About</u></h2>
		<?php
						
			while($arr=mysqli_fetch_array($res))
				{
			?>
			<h4><?php	echo $arr['about'];?></h4>
			
			<?php	
				}
			?>
			<img src="logo.png" alt="Event Description" width="100%" height="400">
		</div>
	
		<?php
			include("footer.php");
		?>
		
		</div>
	</body>
</html>
