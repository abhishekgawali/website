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
<body>
<?php
	$time_date = $_POST['time_date'];
	$in_time = $_POST['in_time'];
	$out_time = $_POST['out_time'];
	$training_1 = $_POST['training_1'];
	$training_2 = $_POST['training_2'];
	$training_3 = $_POST['training_3'];
	$task_1 = $_POST['task_1'];
	$task_2 = $_POST['task_2'];
	$task_3 = $_POST['task_3'];
	$user_id = 1;
	
	$conn=mysqli_connect("localhost","root","","web_project");
	if(mysqli_connect_error())
	{
		echo "Error in connecting to database: ".mysqli_connect_error();
	}
	$t_id = $_GET['id'];
	$sql1= "UPDATE `timesheet` SET time_date='$time_date' where timesheet_id=$t_id";
	$sql2= "UPDATE `timesheet` SET in_time='$in_time' where timesheet_id=$t_id";
	$sql3= "UPDATE `timesheet` SET out_time='$out_time' where timesheet_id=$t_id";
	$sql4= "UPDATE `timesheet` SET training_1='$training_1' where timesheet_id=$t_id";
	$sql5= "UPDATE `timesheet` SET training_2='$training_2' where timesheet_id=$t_id";
	$sql6= "UPDATE `timesheet` SET training_3='$training_3' where timesheet_id=$t_id";
	$sql7= "UPDATE `timesheet` SET task_1='$task_1' where timesheet_id=$t_id";
	$sql8= "UPDATE `timesheet` SET task_2='$task_2' where timesheet_id=$t_id";
	$sql9= "UPDATE `timesheet` SET task_3='$task_3' where timesheet_id=$t_id";
	if(mysqli_query($conn,$sql1)&& mysqli_query($conn,$sql2)&& mysqli_query($conn,$sql3)&& mysqli_query($conn,$sql4) && mysqli_query($conn,$sql5) && mysqli_query($conn,$sql6)&& mysqli_query($conn,$sql7) && mysqli_query($conn,$sql8) && mysqli_query($conn,$sql9))
	{
		echo"<h1 align='center' style='color:Blue'>Data updated successfully</h1>";
	}
	else
	{
		echo"Data not updated";
	}
	
?>

     	<div align="center">
		<a href="timesheet_view.php">VIEW</a>
	</div>
</table>
</body>
</html>