<html>
<head>
<title>Time Sheet</title>
 <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.2/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
<style>
.container
{
	border:2px solid #ededed;
}
.navbar-header{
	padding-right:10px;
}
.menu{
	padding:5px;
	width:100%;
	height:60px;
}
.carousel-inner > .item > img,
.carousel-inner > .item > a > img {
      width: 100%;
      margin: auto;
  }
.footer {
      background-color: #555;
      color: white;
      padding: 15px;
    }
table.size{
	font-size:20px;
}
</style>
</head>
<body bgcolor="#f5fffa" onload="onPageLoad()">

	<div class="container-fluid">
			<div class="row1">
				<div class="header">
					<figure><img class="img-responsive" src="Logo.jpg" alt="logo"></figure>
				</div>
			</div>
			<div class="navbar navbar-inverse" role="navigation">

			<div class="navbar-header">
				<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".sidebar-navbar-collapse">
								<span class="sr-only">Toggle navigation</span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
				</button>
				<span class="visible-xs navbar-brand"><b>Menu</b></span>
			</div>
			<div class="navbar-collapse collapse sidebar-navbar-collapse">
				<ul class="nav navbar-nav">
								    <li><a href="#">Menu</a></li>
									<li><a href="home1.php">Home</a></li>
									<li><a href="register.php">Student Register</a></li>
									<li class="active"><a href="timesheet.php">Timesheet</a></li>
									<li><a href="batch.php">Batch</a></li>
									<li><a href="enquiry.php">Enquiry Form</a></li>
                                                                                                                                                									<li><a href="batchattn.phps">Batch Attendence</a></li>
									<li><a href="login.php">Log Out</a></li>
									
				</ul>
			</div><!--/.nav-collapse -->
		</div>
	<?php
	
	$conn=mysqli_connect("localhost","root","","web_project");
	if(mysqli_connect_error())
	{
		echo "Error in connecting to database: ".mysqli_connect_error();
	}
	$t_id=$_GET['id'];
	$sql="select * from timesheet where timesheet_id=$t_id ";
	
	//echo $t_id;
	$result = mysqli_query($conn, $sql);
	$row = mysqli_fetch_assoc($result);
	$ab= $row['in_time'];
	$ba = $row['out_time'];
	$t_d = $row['time_date'];

	echo"<div align='center'>
	
	<form action='timesheet_update.php?id=$t_id', method='post'>
	<input id='a1' type='hidden' value='$ab' >
	<input id='a2' type='hidden' value='$ba' >
	<input id='a3' type='hidden' value='$t_d' >
		<table style='border-collapse:separate; border-spacing:10px 40px;'>
			<tr>
				<th align='left'>Date</th>
				<th align='left'><input type='date' id='date1' name='time_date'></th>
			</tr>
			<tr>
				<th align='left'>In Time</th>
				<th align='left'>
				<select name='in_time'  id='d1' >
						<option value='7:00'>7:00</option>
    					<option value='7:30'>7:30</option>
    					<option value='8:00'>8:00</option>
    					<option value='8:30'>8:30</option>
    					<option value='9:00'>9:00</option>
    					<option value='9:30'>9:30</option>
    					<option value='10:00'>10:00</option>
    					<option value='10:30'>10:30</option>
    					<option value='11:00'>11:00</option>
    					<option value='11:30'>11:30</option>
    					<option value='12:00'>12:00</option>
    					<option value='12:30'>12:30</option>
    					<option value='13:00'>13:00</option>
    					<option value='13:30'>13:30</option>
    					<option value='14:00'>14:00</option>
    					<option value='14:30'>14:30</option>
    					<option value='15:00'>15:00</option>
    					<option value='15:30'>15:30</option>
    					<option value='16:00'>16:00</option>
    					<option value='16:30'>16:30</option>
    					<option value='17:00'>17:00</option>
						<option value='17:30'>17:30</option>
    					<option value='18:00'>18:00</option>
    					<option value='18:30'>18:30</option>
    					<option value='19:00'>19:00</option>
    					<option value='19:30'>19:30</option>
    					<option value='20:00'>20:00</option>
    					<option value='20:30'>20:30</option>
    					<option value='21:00'>21:00</option>
   					<option value='21:30'>21:30</option>
   	 				<option value='22:00'>22:00</option>
   				</select>
			</th>
			</tr>
			<tr>
			<th align='left'>Out Time</th>
			<th align='left'>
				<select name='out_time' id='d2'>
						<option value='7:00'>7:00</option>
    					<option value='7:30'>7:30</option>
    					<option value='8:00'>8:00</option>
    					<option value='8:30'>8:30</option>
    					<option value='9:00'>9:00</option>
    					<option value='9:30'>9:30</option>
    					<option value='10:00'>10:00</option>
    					<option value='10:30'>10:30</option>
    					<option value='11:00'>11:00</option>
    					<option value='11:30'>11:30</option>
    					<option value='12:00'>12:00</option>
    					<option value='12:30'>12:30</option>
    					<option value='13:00'>13:00</option>
    					<option value='13:30'>13:30</option>
    					<option value='14:00'>14:00</option>
    					<option value='14:30'>14:30</option>
    					<option value='15:00'>15:00</option>
    					<option value='15:30'>15:30</option>
    					<option value='16:00'>16:00</option>
    					<option value='16:30'>16:30</option>
    					<option value='17:00'>17:00</option>
						<option value='17:30'>17:30</option>
    					<option value='18:00'>18:00</option>
    					<option value='18:30'>18:30</option>
    					<option value='19:00'>19:00</option>
    					<option value='19:30'>19:30</option>
    					<option value='20:00'>20:00</option>
    					<option value='20:30'>20:30</option>
    					<option value='21:00'>21:00</option>
   					<option value='21:30'>21:30</option>
   	 				<option value='22:00'>22:00</option>
   				</select>
    			</th>
			</tr>
			<tr>
				<th align='left'>Training</th>
				<td align='left'>
				<input type='text' id='tr1' placeholder='Training 1' name='training_1'  value='$row[training_1]'><br>
				<input type='text' id='tr2' placeholder='Training 2' name='training_2'  value='$row[training_2]'><br>
				<input type='text' id='tr3' placeholder='Training 3' name='training_3'  value='$row[training_3]'>
			</td>
			</tr>
			<tr>
			<th align='left'>Tasks</th>
			<td align='left'>
			<input type='text' id='ts1' placeholder='Task 1' name='task_1'  value='$row[task_1]'><br>
			<input type='text' id='ts2' placeholder='Task 2' name='task_2'  value='$row[task_2]'><br>
			<input type='text' id='ts3' placeholder='Task 3' name='task_3'  value='$row[task_3]'>
			</td>
			</tr>
			<tr>
			<th align='right'><input type='reset' id='clear' value='CLEAR'>
			</th>
				<th align='left'>
				<input type='submit' id='save' value='SAVE'>
			</th>
			</tr>
		</table>
	</form>
	<a href='timesheet_view.php'>VIEW</a>
	</div>";
	
	
?>


<script>
  function onPageLoad()
  {
	  var x =document.getElementById("a1").value;
	  document.getElementById("d1").value=x;
	  var y = document.getElementById("a2").value;
	  document.getElementById("d2").value=y;
	  var z = document.getElementById("a3").value;
	  document.getElementById("date1").value=z;
  }

</script>
</body>
</html>