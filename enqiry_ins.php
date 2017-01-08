<html>
<head>
<title>Enquiry Insert</title>
<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
</head>
<body bgcolor="blue">
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
									<li><a href="#">Home</a></li>
								<!--<li><a href="#">Sign Up</a></li>-->
									<li><a href="#">Student Register</a></li>
									<li><a href="#">Timesheet</a></li>
									<li><a href="#">Batch</a></li>
									<li class="active"><a href="#">Enquiry Form</a></li>
									<li><a href="#">LOG-OUT</a></li>
									
				</ul>
			
   
   
			</div><!--/.nav-collapse -->
		</div>
</div>
</head>
<body>
<?php
	$coursename = $_POST['courseid'];
	$date = $_POST['date'];
	$fname = $_POST['first'];
	$lname = $_POST['last'];
	$mobnum = $_POST['contact1'];
	$resno = $_POST['contact2'];
	$email = $_POST['emailid'];
	$resloc = $_POST['residence'];
	$deg= $_POST['degree'];
	$stream = $_POST['stream'];
	$inst= $_POST['institute'];
	$unv = $_POST['univer'];
	$reference = $_POST['ref'];
	$referencedetails=$_POST['refdetails'];
	//$location=$_POST['residence'];
	
	

	$conn=mysqli_connect("localhost","root","","web_projet");
	if(mysqli_connect_error())
	{
		echo "Error in connecting to database: ".mysqli_connect_error();
	}
	$sql="INSERT INTO enquiry
	(`course_interested`, enquiry_date,`first_name`, `last_name`,`mobile_no`,`residence`,`degree`,`stream`,`institute`,`university`,`reference_type`, `reference_details`, `modified_date`, `location`, `email`) VALUES 
	($coursename,$date,$fname,$lname,$mobnum,$resno,$deg,$stream,$inst,$unv,$reference,$referencedetails,CURRENT_DATE(),$resloc,$email)";
	if(mysqli_query($conn,$sql))
	{
		echo "<h1 style='color:Blue'>Data Saved Successfully!!!</h1>";
	}
	else
	{
		echo "Data Not saved";
	}
?>
	<a href="enquiryb.php">Click Here</a>
</body>
</html>