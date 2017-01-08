<html>
<head>
<title>Registered Students</title>
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
<table border="1">
<tr>
<th>Student Id</th>
<th>First Name</th>
<th>Last Name</th>
<th>Email Id</th>
<th>Mobile No.</th>
<th>Residence</th>
<th>Institute</th>
<th>Degree</th>
<th>University</th>
<th>Course Id</th>
<th>Batch Id</th>
<th>Modified Date</th>
<th>Modifications</th>

</tr>

<?php
	
	$conn=mysqli_connect("localhost","root","","web_project");
	if(mysqli_connect_error())
	{
		echo "Error in connecting to database: ".mysqli_connect_error();
	}
	$sql="select * from student";
	$result = mysqli_query($conn, $sql);
	if (mysqli_num_rows($result) > 0)
	{
		
		  while($row = mysqli_fetch_assoc($result)) 
		{  
				echo "<tr>";
				echo"<td>$row[student_id]</td>";
				echo"<td>$row[first_name]</td>";
				echo"<td>$row[last_name]</td>";
				echo"<td>$row[email_id]</td>";
				echo"<td>$row[mobile_no]</td>";
				echo"<td>$row[residence]</td>";
				echo"<td>$row[institute]</td>";
				echo"<td>$row[degree]</td>";
				echo"<td>$row[university]</td>";
				echo"<td>$row[course_id]</td>";
				echo"<td>$row[batch_id]</td>";
				echo"<td>$row[modified_date]</td>";
				echo  "<td><a href='register_delete.php?id=$row[student_id]'>Delete</a>
				<a href='register1.php?id=$row[student_id]'>Edit</a></td>";
				echo "</tr>";
		}
	}
?>

</table>
</div>
</body>
</html>