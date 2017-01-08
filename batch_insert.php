<html>
<head>
<title>Batch Insert</title>
<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.2/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>

</head>
<body>
<body bgcolor="#F5FFFA">
<div class="container-fluid">
     <div class="row1">
				<div class="header">
		`			<figure><img class="img-responsive" src="Logo.jpg" alt="logo"></figure>
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
								    <li><a href="login.php">Home</a></li>
								    <li><a href="register.php">Student Register</a></li>
								    <li><a href="timesheet.php">Timesheet</a></li>
								    <li class="active"><a href="batch.php">Batch</a></li>
								    <li><a href="enquiry.php">Enquiry Form</a></li>
									<li><a href="login.php">Logout</a></li>
                                     
                                                                                                                                                   	
				                </ul>
			        </div><!--/.nav-collapse -->
           </div>
   
<?php
	$batchname = $_POST['batchname'];
	$batchday = $_POST['batchday'];
	$number = $_POST['number'];
	$starttime = $_POST['starttime'];
	$endtime = $_POST['endtime'];
	$instructor = $_POST['instructor'];
	$conn=mysqli_connect("localhost","root","","web_project");
	if(mysqli_connect_error())
	{
		echo "Error in connecting to database: ".mysqli_connect_error();
	}
	$sql="INSERT INTO batch (`batch_name`, `day`, `nos_in_week`, `start_time`, `end_time`, `primary_incharge`, 	`modified_date`) 	VALUES ('$batchname', '$batchday', '$number', '$starttime', '$endtime', '$instructor', CURRENT_DATE());";
	if(mysqli_query($conn,$sql))
	{
		echo "<h1 style='color:Blue' align='center'>Data Saved Successfully!!!</h1>";
	}
	else
	{
		echo "Data Not saved";
	}
?>
	<div align="center">
		<a href="batch.php">Click Here</a>
	</div>
</body>
</html>