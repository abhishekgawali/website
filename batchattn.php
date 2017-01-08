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
<table cellpadding="15" align="center" style="border-collapse: separate;border-spacing: 10px 40px;">
<form action="batchattn_insert.php" method="post">
 <tr>
     <td><b>Batch name:</b></td>
     <td><Select name="batchname">
	<?php
	$conn=mysqli_connect("localhost","root","","web_project");
	$sql="Select batch_name,batch_id from batch";
	$result=mysqli_query($conn,$sql);
	while($row = mysqli_fetch_assoc($result))
	{
		echo "<option value=$row[batch_id]>$row[batch_name]</option>";	
	}
	?>
	</td>
</tr>
<tr>
   <td><b>Topics:</b></td>
   <td><input type="text" Placeholder="Topic Name" name="topic" required></td>
</tr>
<tr>
  <td><b>Trainer:</b></td>
  <td><input type="text" Placeholder="Trainer's Name" name="trainer" required></td>
</tr>
<tr>
  <td><b>Absentees:</b></td>
   <td><input type="text" Placeholder="Absentees name" name="absentees" required></td>
</tr>
<tr>
  <td></td>
 <td><input type="submit" value="save">&nbsp;
         <input type="reset" value="clear"></td>
</tr>
<tr>
    <td colspan="2" align="center"><a href="batchattn_view.php">VIEW</a></td>
</tr>
</form>
</table>
</div>
</body>
</html>