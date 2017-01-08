<html>
<head>
<title>ENQUIRY VIEW</title>
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
<table border="1">
<tr>
<caption><h1 align="center">ENQUIRY TABLE</h1></caption>
<th>COURSE-INTERESTED:</th>
<th>ENQUIRY date</th>
<th> FIRST NAME</th>
<th>LAST NAME</th>
<th>MOBILE_NO</th>
<th>RESIDENCE NUMBER</th>
<th>EMAIL</th>
<th>DEGREE</th>
<th>STREAM</th>
<th>INSTITUTE</th>
<th>UNIVERSITY</th>
<th>REFERENCE_TYPE</th>
<th>REFERENCE_DETAILS</th>
<th>MODIFIED -DATE</th>
<th>LOCATION</th>
<th>MODIFICATIONS</th>
</tr>

<?php
	
	$conn=mysqli_connect("localhost","root","","abhishek");
	if(mysqli_connect_error())
	{
		echo "Error in connecting to database: ".mysqli_connect_error();
	}
	$sql="select * from enquiry";
	$result = mysqli_query($conn, $sql);
	if (mysqli_num_rows($result) > 0)
	{
		
		  while($row = mysqli_fetch_assoc($result)) 
		{  
				
				echo "<tr>";
				echo"<td>$row[course_interested]</td>";
				echo"<td>$row[enquiry_date]</td>";
				echo"<td>$row[first_name]</td>";
				echo"<td>$row[last_name]</td>";
				echo"<td>$row[mobile_no]</td>";
				echo"<td>$row[residence]</td>";
				echo"<td>$row[email]</td>";
				echo"<td>$row[degree]</td>";
				echo"<td>$row[stream]</td>";
				echo"<td>$row[institute]</td>";
				//echo"<br>";
				echo"<td>$row[university]</td>";
				echo"<td>$row[reference_type]</td>";
				echo"<td>$row[reference_details]</td>";
                 echo"<td>$row[modified_date]</td>";
				echo"<td>$row[location]</td>";				 
				echo  "<td><a href='enquirydel.php?id=$row[enquiry_id]'>Delete</a>&nbsp;
				<a href='enquiryb1.php?id=$row[enquiry_id]'>Edit</a></td>";
				echo "</tr>";
		}
	    
	    // output data of each row
		/*while($row = mysqli_fetch_assoc($result)) 
		{ 
		echo"$row[time_date] $row[in_time] $row[out_time] $row[training_1] $row[training_2] $row[training_3] $row[task_1] $row[task_2] $row[task_3] $row[user_id] $row[modified_date] $row[points] $row[rating]";
			echo"<br>";
			echo  "<td><a href='abc.php?id=$pid'>Delete</td>";
        }*/
	}
?>

</table>
</body>
</html>