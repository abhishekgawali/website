<html>
<head>
<title>Time Sheet</title>
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
								    <li class="active"><a href="#">Menu</a></li>
								    <li><a href="login.php">Home</a></li>
								    <li><a href="register.php">Student Register</a></li>
								    <li><a href="timesheet.php">Timesheet</a></li>
								    <li><a href="batch.php">Batch</a></li>
								    <li><a href="enquiry.php">Enquiry Form</a></li>
									<li><a href="login.php">Logout</a></li>
                                     
                                                                                                                                                   	
				                </ul>
			        </div><!--/.nav-collapse -->
           </div>
   
<?php
	$fname = $_POST['fname'];
	$lname = $_POST['lname'];
	$email = $_POST['email'];
	$password = $_POST['password'];
	
	$conn=mysqli_connect("localhost","root","","web_project");
	if(mysqli_connect_error())
	{
		echo "Error in connecting to database: ".mysqli_connect_error();
	}
	$sql="INSERT INTO user (`user_id`, `first_name`, `last_name`, `email_id`, `password`, `modified_date`, `role`, `status`) 		VALUES (NULL, '$fname', '$lname', '$email', '$password', CURRENT_DATE(), 'trainer', 'pending')";
	if(mysqli_query($conn,$sql))
	{
		echo "<h1 style='color:Blue'>Welcome <i style='color:Green'>$fname $lname.</i> Your data is saved Successfully!!! Waiting for admin to approve your status.</h1>";
	}
	else
	{
		echo "Data Not saved";
	}
?>
	<a href="timesheet.php">Click Here</a>
</body>
</html>