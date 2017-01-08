<html>
<head>
<title>Employee View</title>
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
  
<table border="1">
<tr>
<th>Seral no.</th>
<th>First Name.</th>
<th>LastName:</th>
<th>E-mail id</th>
<th>Psssword:</th>
<th>Role:</th>
<th>Status:</th>
<th>Modified_date:</th>
<th>Modifications:</th>

</tr>

<?php
	
	$conn=mysqli_connect("localhost","root","","web_project");
	if(mysqli_connect_error())
	{
		echo "Error in connecting to database: ".mysqli_connect_error();
	}
	$sql="select * from user";
	$result = mysqli_query($conn, $sql);
	if (mysqli_num_rows($result) > 0)
	{
		
		  while($row = mysqli_fetch_assoc($result)) 
		  {
				echo "<tr>";
				echo"<td>$row[user_id]</td>";
				echo"<td>$row[first_name]</td>";
				echo"<td>$row[last_name]</td>";
				echo"<td>$row[email_id]</td>";
				echo"<td>$row[password]</td>";
				echo"<td>$row[role]</td>";
				echo"<td>$row[status]</td>";
				echo "<td>$row[modified_date]</td>";
				echo  "<td><a href='employee_update.php?id=$row[user_id]'>Edit &nbsp<a href='employee_delete.php?id=$row[user_id]'>Delete</td>";
				
		    
		     echo "</tr>";
		}
	}
	    // output data of each row
		/*while($row = mysqli_fetch_assoc($result)) 
		{ 
		echo"$row[time_date] $row[in_time] $row[out_time] $row[training_1] $row[training_2] $row[training_3] $row[task_1] $row[task_2] $row[task_3] $row[user_id] $row[modified_date] $row[points] $row[rating]";
			echo"<br>";
			echo  "<td><a href='abc.php?id=$pid'>Delete</td>";
        }*/
	
?>

</table>
</body>
</html>