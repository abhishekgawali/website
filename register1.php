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
<body bgcolor="#f5fffa" onload="onLoadPage()">
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
								    <li><a href="enquiry.php">Enquiry Form</a></li>
                                                                                                                                                    <li><a href="batchattn.php">Batch Attendence</a></li>
                                                                                                                                                    <li><a href="login.php">Logout</a></li>
									
				</ul>
			</div><!--/.nav-collapse -->
		</div>

<?php
$conn=mysqli_connect("localhost","root","","web_project");
if(mysqli_connect_error())
	{
		echo "Error in connecting to database: ".mysqli_connect_error();
	}
$s_id=$_GET['id'];
$sql1="Select * from student s inner join course c inner join batch as b on s.course_id=c.course_id and s.batch_id=b.batch_id and student_id=$s_id";
$result1=mysqli_query($conn,$sql1);
     $row=mysqli_fetch_assoc($result1);
	 $c_name=$row['course_id'];
	 $b_name=$row['batch_id'];
	//echo $c_name." ".$b_name;
	 $sql="Select * from course";
	$result=mysqli_query($conn,$sql);
	$sql2="Select * from batch";
	$result2=mysqli_query($conn,$sql2);
echo"
<table align='center' style='border-collapse: separate;border-spacing: 10px 40px;'>
<caption align='center'><h1>Student's Register</h1></caption>
<form action='register_update.php?id=$s_id' method='post'>
<input type='hidden' id='a1' value='$c_name'>
<input type='hidden' id='a2' value='$b_name'>
  <tbody>
      <td><b>First Name:</b></th>
      <td><input type='text' PlaceHolder='First name' required name='First_name' value=$row[first_name]></td>
 </tbody>
 <tbody>
      <td><b>Last Name:</b></td>
      <td><input type='text' PlaceHolder='Last name' required name='Last_name' value=$row[last_name]></td>
 </tbody>
 <tbody>
      <td><b>Email:</b></td>
      <td><input type='email' PlaceHolder='abc@gmail.com' required name='email_id' value=$row[email_id]></td>
 </tbody>
 <tbody>
      <td><b>Mobile:</b></td>
      <td><input type='number' PlaceHolder='8888888888' id='mob1' required name='Mobile' value=$row[mobile_no]></td>
 </tbody>
 <tbody>
      <td valign='top'><b>Residence-Loc:</b></td>
      <td><input type='text' placeholder='andheri,etc' required name='Res_loc' value=$row[residence]></td>
 </tbody>
 <tbody>
      <td><b>Institute:</b></td>
      <td><input type='text' placeholder='Your college name' required name='institute' value=$row[institute]></td>
 </tbody>
<tbody>
      <td><b>University:</b></td>
      <td><input type='text' placeholder='University name' required name='University' value=$row[university]></td>
 </tbody>
 <tbody>
      <td><b>Course Enrolled:</b></td>
       <td><select name='Course_en' id='c1'>";

	while($row1 = mysqli_fetch_assoc($result))
	{
		echo "<option value=$row1[course_id]>$row1[course_name]</option>";	
	}
echo
 "</tbody>
<tbody>
      <td><b>Degree:</b></td>
      <td><input type='text' placeholder='your qualification' required name='Degree' value=$row[degree]></td>
 </tbody>
 <tbody>
     <td><b>Batch:</b></td>
     <td><select name='batch_name' id='b1'>";

	while($row2 = mysqli_fetch_assoc($result2))
	{
		echo "<option value=$row2[batch_id]>$row2[batch_name]</option>";	
	}
	echo
 "</select></td>
 </tbody>
 <tbody>
     <td></td>
     <td><input type='submit' value='submit' id='sub' onclick='return validate1()'>
             <input type='reset' value='reset'></td>
 </tbody>
 <td colspan='2'><a href='register_view.php'>View Registered Students</a></td>
 </tr>
</form>
</table>
</div>";
?>
<script>
function onLoadPage(){
	
	var x=document.getElementById('a1').value;
	//alert(x);
	document.getElementById('c1').value=x;
	var y=document.getElementById('a2').value;
	//alert(y);
	document.getElementById('b1').value=y;
	
	
}
</script>
</body>
</html>
