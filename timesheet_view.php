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
<body bgcolor="#f5fffa">
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
</style>
</head>
<body>
<table border="1">


<?php
	
	$conn=mysqli_connect("localhost","root","","web_project");
	if(mysqli_connect_error())
	{
		echo "Error in connecting to database: ".mysqli_connect_error();
	}
	$sql="Select * from timesheet";
	$result = mysqli_query($conn, $sql);
	if (mysqli_num_rows($result) > 0)
	{
		echo"<tr>
		<th>Serial No.</th>
		<th>Time Date</th>
		<th>In Time</th>
		<th>Out Time</th>
		<th>Training 1</th>
		<th>Training 2</th>
		<th>Training 3</th>
		<th>Task 1</th>
		<th>Task 2</th>
		<th>Task 3</th>
		<th>User Id</th>
		<th>Modified Date</th>
		<th>Points</th>
		<th>Rating</th>
		<th>Status</th>
		<th>Modifications</th>
		</tr>";
		
		while($row = mysqli_fetch_assoc($result)) 
		{  
				
				echo "<tr>";
				echo"<td>$row[timesheet_id]</td>";
				echo"<td>$row[time_date]</td>";
				echo"<td>$row[in_time]</td>";
				echo"<td>$row[out_time]</td>";
				echo"<td>$row[training_1]</td>";
				echo"<td>$row[training_2]</td>";
				echo"<td>$row[training_3]</td>";
				echo"<td>$row[task_1]</td>";
				echo"<td>$row[task_2]</td>";
				echo"<td>$row[task_3]</td>";
				echo"<td>$row[user_id]</td>";
				echo"<td>$row[modified_date]</td>";
				echo"<td>$row[points]</td>";
				echo"<td>$row[rating]</td>";
				echo"<td>$row[status]</td>";
				echo  "<td><a href='timesheet_delete.php?id=$row[timesheet_id]'>Delete</a>
				<a href='timesheet1.php?id=$row[timesheet_id]'>Edit</a></td>";
				echo "</tr>";
		}
	}
	else
	{
		echo "<h1 style='color:Blue' align='center'>No Data to Display</h1>";
	}
?>

</table>
</body>
</html>