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
			include("menubar.php");
		?>
		<?php
			include("include/config.php");
			$sql="select * from home";
			  
			$res=mysqli_query($conn,$sql);
			

		?>

		
		<div id="body2Home">
		<?php
						
			while($arr=mysqli_fetch_array($res))
				{
			?>
			<h2 style="font-size:30px; color=white;"><?php	echo $arr['name'];?></h2>
			<h2><?php	echo $arr['date'];?></h2>
			<h2>Organized by</h2>
			<h2> <?php	echo $arr['orgenizer'];?><h2>
			<h2><?php	echo $arr['associate'];?></h2>
			<?php	
				}
			?>
			<br/>
			<a href="Event.php">Find Your Event</a>
		</div>
		
		<div class="parentHome">
			<img src="cse-globa.jpg"  class="addHome" id="1">
			<img src="pic1.jpg" class="addHome" id="2">
			<img src="unsplash.jpg"  class="addHome" id="3">
	<script>
	var i=0;
	function x()
	{
		if(i==0)
		{
			document.getElementById('1').style.display='block';
			document.getElementById('2').style.display='none';
			document.getElementById('3').style.display='none';
			i=1;
			document.getElementById('body2Home').style.background = '#E1E4EB';
			setTimeout(function(){x();},1000);
		}
		else if(i==1)
		{
			document.getElementById('1').style.display='block';
			document.getElementById('2').style.display='block';
			document.getElementById('3').style.display='none';
			document.getElementById('body2Home').style.background = '#EEF9FF';
			i=2;
			setTimeout(function(){x();},1200);
		}
		else
		{
			document.getElementById('1').style.display='block';
			document.getElementById('2').style.display='block';
			document.getElementById('3').style.display='block';
			document.getElementById('body2Home').style.background = '#C8CBD2';
			i = 0;
			setTimeout(function(){x();},3000);
		}
		
	}
	x();
	</script>
		</div>
		<?php
			include("footer.php");
		?>		
		</div>
		
	
	</body>
</html>