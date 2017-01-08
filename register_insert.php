<html>
<head>
<title>Student data</title>
<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.2/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
<body>
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
								    <li class="active"><a href="#">Menu</a></li>
									<li><a href="home1.php">Home</a></li>
									<li><a href="register.php">Student Register</a></li>
									<li><a href="timesheet.php">Timesheet</a></li>
									<li><a href="batch.php">Batch</a></li>
									<li><a href="enquiryb.php">Enquiry Form</a></li>
                                                                        <li><a href="batchattn.phps">Batch Attendence</a></li>
									<li><a href="login.php">Log Out</a></li>
									
				</ul>
			</div><!--/.nav-collapse -->
		</div>
<?php
        $conn=mysqli_connect("localhost","root","","web_project");
       if(mysqli_connect_error())
{
      echo "Error in connecting to the database: ".mysqli_connect_error();
}
      $First_name=$_POST['First_name'];
      $Last_name=$_POST['Last_name'];
      $email=$_POST['email_id'];
      $mobile=$_POST['Mobile'];
      $res=$_POST['Res_loc'];
      $inst=$_POST['institute'];
      $course=$_POST['Course_en'];
      $uni=$_POST['University'];
      $deg=$_POST['Degree'];
      $batch=$_POST['batch_name'];
      

    $sql="INSERT INTO student(`first_name`, `last_name`, `email_id`, `mobile_no`, `residence`, `institute`, `degree`, `university`, `course_id`, `batch_id`, `modified_date`)
               VALUES('$First_name','$Last_name','$email','$mobile','$res','$inst','$deg','$uni','$course','$batch','CURRRENT_DATE()')";
  if(mysqli_query($conn,$sql))
{
  	echo"Data stored successfully<br/>
	     <a href=register_view.php>VIEW</a>";
}
  else
{
  	echo"Data not stored";
}
  
?>
</div>
</body>
</html>
