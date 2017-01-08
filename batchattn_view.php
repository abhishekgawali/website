<html>
	<head>
		<title>
		Btach Attendance
		</title>
		<meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.2/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
		<style>
	    </style>
	<script>
	  /*function myload(){
		  document.getElementById(temp).style.display=true;
	  }*/
	</script>
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
								    <li><a href="login.php">Home</a></li>
								    <li><a href="register.php">Student Register</a></li>
								    <li><a href="timesheet.php">Timesheet</a></li>
								    <li><a href="batch.php">Batch</a></li>
									<li><a href="batchattn.php">Batch Attendance</a></li>
								    <li><a href="enquiryb.php">Enquiry Form</a></li>
									<li><a href="batchattn.php">Batch Attendence</a></li>
                                    <li><a href="login.php">Logout</a></li>
									
				</ul>
			</div><!--/.nav-collapse -->
		</div>	
	<div align="center">
	<h1 >VIEW</h1
	<h3>Batch Name:</h3>
	<?php
	$conn1=mysqli_connect("localhost","root","","web_project");
	if(mysqli_connect_error())
	{
		echo "Error in connecting to database: ".mysqli_connect_error();
	}
	$sql1="Select batch_name,batch_id from batch";
	$result1=mysqli_query($conn1,$sql1);
	echo"<form action='$_SERVER[PHP_SELF]' method='post'>
	     <select name='batchn'>";
	
	while($row1 = mysqli_fetch_assoc($result1))
	{
		echo "<option value=$row1[batch_id]>$row1[batch_name]</option>";	
	}
	echo"</select><br/><br/>
	     <input type='submit' name='sbutton' value='submit' onclick='return myload()'>
		 </form>";
	?>
	</div>
	<br><br><br><br>
	<div id="temp" align="center">
	<table cellpadding="10" border="1" style="border-collapse: separate;border-spacing: 10px 40px;">
	<tr>
	<th>Batch_name</th>
	<th>Topics</th>
	<th>Trainer</th>
	<th>Absentees</th>
	<th>Delete</th>
	<th>Update</th>
	</tr>
	<?php
	$conn=mysqli_connect("localhost","root","","web_project");
	if(mysqli_connect_error())
	{
		echo "Error in connecting to database: ".mysqli_connect_error();
	}
	$submit=$_POST['sbutton'];
	if(isset($submit))
	{
	$t_id=$_POST['batchn'];
	$sql="Select * from batchattn as b inner join batch as bb on b.bacth_id=bb.batch_id and b.bacth_id=$t_id";
	$result = mysqli_query($conn,$sql);
	if(mysqli_num_rows($result)>0)
	{
		
		  while($row = mysqli_fetch_assoc($result)) 
		{  
				echo "<tr>";
				echo"<td>$row[batch_name]</td>";
				echo"<td>$row[topics]</td>";
				echo"<td>$row[trainer]</td>";
				echo"<td>$row[absentees]</td>";
				echo "<td><a href='batchattn_delete.php?id=$t_id'>Delete</a></td>";
				echo"<td><a href='batchattn_update.php?id=$t_id'>Edit</a></td>";
				echo "</tr>";
		}
	}
	
	}
	
?>
    </div>
    </div>   
	</body>

<html>