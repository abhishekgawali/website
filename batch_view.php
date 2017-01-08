<html>
<head>
<title>Batch View</title>
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
   
<table border="1">


<?php
	
	$conn=mysqli_connect("localhost","root","","web_project");
	if(mysqli_connect_error())
	{
		echo "Error in connecting to database: ".mysqli_connect_error();
	}
	$sql="select * from batch";
	$result = mysqli_query($conn, $sql);
	if (mysqli_num_rows($result) > 0)
	{
		echo "<tr>
		<th>Serial no.</th>
		<th>Batch Name:</th>
		<th>Day</th>
		<th>Number of days in week</th>
		<th>Start time:</th>
		<th>End time:</th>
		<th>Primary Incharge:</th>
		<th>Modified Date:</th>
		<th>Modifications</th>
		</tr>";
		  while($row = mysqli_fetch_assoc($result)) 
		{  
				echo "<tr>";
				echo"<td>$row[batch_id]</td>";
				echo"<td>$row[batch_name]</td>";
				echo"<td>$row[day]</td>";
				echo"<td align='center'>$row[nos_in_week]</td>";
				echo"<td>$row[start_time]</td>";
				echo"<td>$row[end_time]</td>";
				echo"<td>$row[primary_incharge]</td>";
				echo"<td>$row[modified_date]</td>";
				echo  "<td><a href='batch_update.php?id=$row[batch_id]'>Edit &nbsp<a href='batch_delete.php?id=$row[batch_id]'>Delete</td>";
				
		    
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
	else
	{
		echo "<h1 style='color:Blue' align='center'>No Data to Display</h1>";
	}
?>

</table>
</body>
</html>