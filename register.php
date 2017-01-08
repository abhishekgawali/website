<html>
<head>
<title>Register</title>
<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.2/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
<script>
function validate1()
{
var flag=true;
var str="";
var mob=document.getElementById("mob1").value;
var x=mob.toString().length;
 if(x!=10){
       flag=false;
       str=str+"please enter a valid mobile number\n";
}
if(flag==false){
alert(str);
return false;
}
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
<table align="center" style="border-collapse: separate;border-spacing: 10px 40px;">
<caption align="center"><h1>Student's Register</h1></caption>
<form action="register_insert.php" method="post">
  <tbody>
      <td><b>First Name:</b></th>
      <td><input type="text" PlaceHolder="First name" required name="First_name"></td>
 </tbody>
 <tbody>
      <td><b>Last Name:</b></td>
      <td><input type="text" PlaceHolder="Last name" required name="Last_name"></td>
 </tbody>
 <tbody>
      <td><b>Email:</b></td>
      <td><input type="email" PlaceHolder="abc@gmail.com" required name="email_id"></td>
 </tbody>
 <tbody>
      <td><b>Mobile:</b></td>
      <td><input type="number" PlaceHolder="8888888888" id="mob1" required name="Mobile"></td>
 </tbody>
 <tbody>
      <td valign="top"><b>Residence-Loc:</b></td>
      <td><input type="text" placeholder="andheri,etc" required name="Res_loc"></td>
 </tbody>
 <tbody>
      <td><b>Institute:</b></td>
      <td><input type="text" placeholder="Your college name" required name="institute"></td>
 </tbody>
<tbody>
      <td><b>University:</b></td>
      <td><input type="text" placeholder="University name" required name="University"></td>
 </tbody>
 <tbody>
      <td><b>Course Enrolled:</b></td>
       <td><select name="Course_en">
               <?php
	$conn=mysqli_connect("localhost","root","","web_project");
	$sql="Select course_name,course_id from course";
	$result=mysqli_query($conn,$sql);
	while($row1 = mysqli_fetch_assoc($result))
	{
		echo "<option value=$row1[course_id]>$row1[course_name]</option>";	
	}
	?>
 </tbody>
<tbody>
      <td><b>Degree:</b></td>
      <td><input type="text" placeholder="your qualification" required name="Degree"></td>
 </tbody>
 <tbody>
     <td><b>Batch:</b></td>
     <td><select name="batch_name">
	<?php
	$conn=mysqli_connect("localhost","root","","web_project");
	$sql="Select batch_name,batch_id from batch";
	$result=mysqli_query($conn,$sql);
	while($row = mysqli_fetch_assoc($result))
	{
		echo "<option value=$row[batch_id]>$row[batch_name]</option>";	
	}
	?>
 </select></td>
 </tbody>
 <tbody>
     <td></td>
     <td><input type="submit" value="submit" id="sub" onclick="return validate1()">
             <input type="reset" value="reset"></td>
 </tbody>
 <tr>
 <td colspan='2'><a href="register_view.php">View Registered Students</a></td>
 </tr>
</form>
</table>

</div>
</body>
</html>
