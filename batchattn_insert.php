<html>
<head>
<title>Add info</title>
<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.2/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
</head>
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
									<li><a href="batchattn.php">Batch Attendence</a></li>
                                    <li><a href="login.php">Logout</a></li>
									
				</ul>
			</div><!--/.nav-collapse -->
		</div>
<?php

        $conn=mysqli_connect("localhost","root","","web_project");
       if(mysqli_connect_error())
       {
        echo "Error in connecting to the database: ".mysqli_connect_error();
       }
		
		
		$batch=$_POST['batchname'];
		$topic=$_POST['topic'];
		$trainer=$_POST['trainer'];
		$absent=$_POST['absentees'];
		
		$sql="INSERT INTO batchattn(`bacth_id`, `topics`, `trainer`, `absentees`, `modified_date` ) VALUES ('$batch','$topic','$trainer','$absent','CURRENT_DATE()')";
		if(mysqli_query($conn,$sql))
          {
  	       echo"Data stored successfully<br/>
	       <a href=batchattn_view.php>VIEW</a>";
         }
        else
         {
  	       echo"Data not stored";
         }
  
?>
</div>
</body>
</html>