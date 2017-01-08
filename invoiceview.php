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
<table border="1"align="center">
<tr>
<th>Invoice No.</th>
<th>STUDENT_ID</th>
<th>Name</th>
<th>Modified DATE:</th>
<th>Amount</th>
<th>In words</th>
<th>Mode</th>
<th>Installment</th>
<th>Modifications</th>
</tr>

<?php
	
	$conn=mysqli_connect("localhost","root","","abhishek");
	if(mysqli_connect_error())
	{
		echo "Error in connecting to database: ".mysqli_connect_error();
	}
	$sql="select * from invoice";
	$result = mysqli_query($conn, $sql);
	if (mysqli_num_rows($result) > 0)
	{
		
		  while($row = mysqli_fetch_assoc($result)) 
		{  
				
				echo "<tr>";
				echo"<td>$row[receipt_no]</td>";
				echo"<td>$row[student_id]</td>";
				echo"<td>$row[s_name]</td>";
				echo"<td>$row[modified_date]</td>";
				echo"<td>$row[amount]</td>";
				echo"<td>$row[in_words]</td>";
				echo"<td>$row[mode]</td>";
				echo"<td>$row[installment]</td>";		
				echo  "<td><a href='invoicedel.php?id=$row[invoice_id]'>Delete</a>
				<a href='invoice21.php?id=$row[invoice_id]'>Edit</a></td>";
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