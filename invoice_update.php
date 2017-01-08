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
		$t_id=$_GET['id'];
		$receipt=$_POST['receipt'];
		$stuid=$_POST['s_id'];
		$amoun=$_POST['rupees'];
		$pay=$_POST['payment1'];
		$amoun1=$_POST['amount1'];
		$person=$_POST['person1'];
		$in_words=$_POST['in_words'];
		$conn=mysqli_connect("localhost","root","","abhishek");
	if(mysqli_connect_error())
	{
		echo "Error in connecting to database";
	}
	
	
	$sql1= "UPDATE `invoice` SET receipt_no='$receipt' where invoice_id=$t_id";
	$sql2= "UPDATE `invoice` SET student_id='$stuid' where invoice_id=$t_id";
	$sql3= "UPDATE `invoice` SET amount='$amoun' where invoice_id=$t_id";
	$sql4= "UPDATE `invoice` SET installment='$pay' where invoice_id=$t_id";
	$sql5= "UPDATE `invoice` SET mode='$amoun1' where invoice_id=$t_id";
	$sql6= "UPDATE `invoice` SET s_name='$person' where invoice_id=$t_id";
	$sql7= "UPDATE `invoice` SET modified_date = CURRENT_DATE() where invoice_id=$t_id";
	$sql8= "UPDATE `invoice` SET in_words='$in_words' where invoice_id=$t_id";
	if(mysqli_query($conn,$sql1) && mysqli_query($conn,$sql2) && mysqli_query($conn,$sql3)&& mysqli_query($conn,$sql4) && mysqli_query($conn,$sql5) && mysqli_query($conn,$sql6) && mysqli_query($conn,$sql7) && mysqli_query($conn,$sql8))
	{
		 echo "Data updated sucessfully";
	}
	else
	{
		echo "data not updated";
	}
		?>
</body>
</html>