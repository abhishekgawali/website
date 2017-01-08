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
								    <li class="active"><a href="#">Menu</a></li>
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
      echo "Error in connecting to the database: ".mysqli_connect_error();
      }
	  
	  $t_id=$_GET['id'];
	  
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
	  
	  
	  
	  
	$sql1= "UPDATE `student` SET first_name='$First_name' where student_id=$t_id";
	$sql2= "UPDATE `student` SET last_name='$Last_name' where student_id=$t_id";
	$sql3= "UPDATE `student` SET email_id='$email' where student_id=$t_id";
	$sql4= "UPDATE `student` SET mobile_no='$mobile' where student_id=$t_id";
	$sql5= "UPDATE `student` SET residence='$res' where student_id=$t_id";
	$sql6= "UPDATE `student` SET institute='$inst' where student_id=$t_id";
	$sql7= "UPDATE `student` SET degree='$deg' where student_id=$t_id";
	$sql8= "UPDATE `student` SET university='$uni' where student_id=$t_id";
	$sql9= "UPDATE `student` SET course_id='$course' where student_id=$t_id";
	$sql10= "UPDATE `student` SET batch_id='$batch' where student_id=$t_id";
	$sql11="UPDATE `student` SET modified_date=Current_date() where student_id=$t_id";
	  
	  if(mysqli_query($conn,$sql1)&& mysqli_query($conn,$sql2)&& mysqli_query($conn,$sql3)&& mysqli_query($conn,$sql4) && mysqli_query($conn,$sql5) && mysqli_query($conn,$sql6)&& mysqli_query($conn,$sql7) && mysqli_query($conn,$sql8) && mysqli_query($conn,$sql9) && mysqli_query($conn,$sql10))
	{
		echo"Data updated successfully<br/><br/>
                <a href='register_view.php'>VIEW</a>";
	}
	else
	{
		echo"Data not updated";
	}
?>
</div>
</body>
</html>