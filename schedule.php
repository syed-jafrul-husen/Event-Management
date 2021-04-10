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
			include("menubar.php")
		?>
		<?php
			include("include/config.php");
			$sql="select * from schedule";
			  
			$res=mysqli_query($conn,$sql);
			

		?>
		
		<div class="body2Schedule">
			<h2 style="color:green; font-size:40px; align:center; ">Schedule</h2></br>
            <h2 style="color:maroon; font-size:30px; align:center; ">Day 1 (Friday), 27 December 2019</h2>
            <table border="3" style="font-size:25px; align:center; color:black; width:100%">
			<tr>
          		<td>Time</td>
          		<td>Event</td>
				<td>Place</td>
       		</tr>
		<?php
		
					
		while($arr=mysqli_fetch_array($res))
			{
		?>
        	
       		<tr style="background-color: lightgrey;">
			
         		<td><?php	echo $arr['time'];?></td>
          		<td><?php	echo $arr['event'];?></td>
				<td><?php	echo $arr['place'];?></td>
		<?php	
			}
		?>
       		</tr>
	
			
      	    </table>
			<br/>
			</div>
			
			
			<div class="parentSchedule">
			
				<img src="robot.jpg" width="100%" height="100" class="addSchedule" id="1">
				<img src="cutt.jpg" width="100%" height="100" class="addSchedule" id="3">
				<img src="logo_2.png" width="100%" height="100" class="addSchedule" id="2">
				
			</div>
		  
			<div class="body2Schedule">
			<h2 style="color:maroon; font-size:30px; align:center; ">Day 2 (Satarday), 28 December 2019</h2>
            <table border="3" style="font-size:25px; align:center; color:black; width:100%">
        	<tr>
          		<td>Time</td>
          		<td>Event</td>
				<td>Place</td>
       		</tr>
       		<tr style="background-color: lightgrey;">
         		<td> 08:00 AM - 8:30 AM</td>
          		<td> Reporting Time</td>
				<td> Auditorium</td>
       		</tr>
			<tr>
          		<td> 09:00 AM - 02:00 PM</td>
          		<td> Programming Contest(On-site Final Contest)</td>
				<td> Computers Lab</td>
       		</tr>
       		<tr style="background-color: lightgrey;">
         		<td>02:00 PM - 03:00 PM</td>
          		<td>Prayer & Lunch Break</td>
				<td>Mosque 2nd floor</td>
       		</tr>
			<tr>
          		<td>04:30 PM - 06:00 PM</td>
          		<td>Prize Giving Ceremony</td>
				<td>Audotorium</td>
       		</tr>
      	    </table>
			</div>
		
		<?php
			include("footer.php");
		?>
		
		</div>
		<script>
	var i=0;
	function x()
	{
		if(i==0)
		{
			document.getElementById('1').style.display='block';
			document.getElementById('2').style.display='block';
			document.getElementById('3').style.display='block';
			i=1;
			setTimeout(function(){x();},1000);
		}
		else if(i==1)
		{
			document.getElementById('1').style.display='block';
			document.getElementById('2').style.display='block';
			document.getElementById('3').style.display='none';
			i=2;
			setTimeout(function(){x();},1200);
		}
		else
		{
			document.getElementById('3').style.display='block';
			document.getElementById('2').style.display='block';
			document.getElementById('1').style.display='block';
			i = 0;
			setTimeout(function(){x();},3000);
		}
		
	}
	x();
	</script>
	</body>
</html>