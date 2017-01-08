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
	$course = $_POST['courseid'];
	$date = $_POST['date'];
	$first = $_POST['first'];
	$last = $_POST['last'];
	$mob = $_POST['contact1'];
	$res = $_POST['contact2'];
	$ema = $_POST['emailid'];
	$deg = $_POST['degree'];
	$strm = $_POST['stream'];
	
	$inst = $_POST['institute'];
	$univer= $_POST['univer'];
	$reference = $_POST['ref'];
	$refd = $_POST['refdetails'];
	$location=$_POST['residence'];
	
	
	$conn=mysqli_connect("localhost","root","","abhishek");
	if(mysqli_connect_error())
	{
		echo "Error in connecting to database: ".mysqli_connect_error();
	}
	$t_id = $_GET['id'];
	
	$sql1= "UPDATE `enquiry` SET course_interested='$course' where enquiry_id=$t_id";
	$sql2= "UPDATE `enquiry` SET enquiry_date='$date' where enquiry_id=$t_id";
	$sql3= "UPDATE `enquiry` SET first_name='$first' where enquiry_id=$t_id";
	$sql4= "UPDATE `enquiry` SET last_name='$last' where enquiry_id=$t_id";
	$sql5= "UPDATE `enquiry` SET mobile_no='$mob' where enquiry_id=$t_id";
	$sql6= "UPDATE `enquiry` SET residence='$res' where enquiry_id=$t_id";
	$sql7= "UPDATE `enquiry` SET email='$ema' where enquiry_id=$t_id";
	$sql8= "UPDATE `enquiry` SET degree='$deg' where enquiry_id=$t_id";
	$sql9= "UPDATE `enquiry` SET stream='$strm' where enquiry_id=$t_id";
	$sql10= "UPDATE `enquiry` SET institute='$inst' where enquiry_id=$t_id";
	$sql11= "UPDATE `enquiry` SET university='$univer' where enquiry_id=$t_id";
	$sql12= "UPDATE `enquiry` SET reference_type='$reference' where enquiry_id=$t_id";
	$sql13= "UPDATE `enquiry` SET reference_details='$refd' where enquiry_id=$t_id";
	$sql14= "UPDATE `enquiry` SET location='$location' where enquiry_id=$t_id";
	if(mysqli_query($conn,$sql1)&& mysqli_query($conn,$sql2)&& mysqli_query($conn,$sql3)&& mysqli_query($conn,$sql4) && mysqli_query($conn,$sql5) && mysqli_query($conn,$sql6)&& mysqli_query($conn,$sql7) && mysqli_query($conn,$sql8) && mysqli_query($conn,$sql9) && mysqli_query($conn,$sql10) && mysqli_query($conn,$sql11) && mysqli_query($conn,$sql12) && mysqli_query($conn,$sql13) && mysqli_query($conn,$sql14))
	{
		echo"Data updated successfully";
	}
	else
	{
		echo"Data not updated";
	}
	
?>
</body>
</html>