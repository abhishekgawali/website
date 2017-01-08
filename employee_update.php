<html>
<head>
<title>Employee register</title>
<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.2/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
<script>
function validate()
{

var flag=true;

var str="";

var fn=document.getElementById("Fname").value;

var ln=document.getElementById("Lname").value;

var em=document.getElementById("em1").value;

var pw=document.getElementById("pswd").value;

var cp=document.getElementById("cpswd").value;

       	if(fn=="")
        {
          flag=false;
          str=str+"Please Enter First name\n";
        }
        
       	if(ln=="")
        {
          flag=false;
          str=str+"Please Enter Last name\n";
        }
         
       	if(em=="")
        {
          flag=false;
          str=str+"Please Enter Email-id\n";
        }
         
       	if(pw=="")
        {
          flag=false;
          str=str+"Please Enter Password\n";
        }
        
       	if(cp!=pw)
        {
          flag=false;
          str=str+"Your confirm password does not match with your password\n";
        }
 
        if(flag==false)
        {
         alert(str);
         return false;
        }

}
</script>
</head>
<body bgcolor= "#f5fffa">
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
								   								    <li 			    <li><a href="home1.php">Home</a></li>
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
	
	$t_id=$_GET['id'];
	$sql="Select * from user where user_id=$t_id";
	$result=mysqli_query($conn,$sql);
	$row= mysqli_fetch_assoc($result);
	
echo"
<form action='employee1_update.php?id=$t_id' method='POST'>
<table align='center' cellpadding='20' style='border-collapse:separate;border-spacing: 10px 40px;'>
<caption align='center'><h2>TalentHome Employee Register</h2></caption>
<tr>
<td><b>First-name:</b></td>
<td><input type='text' placeholder='First-name' id='Fname' name='fname' value='$row[first_name]'></td>
</tr>
<tr>
<td><b>Last-name:</b></td>
<td><input type='text' placeholder='Last-name' id='Lname' name='lname' value='$row[last_name]'></td>
</tr>
<tr>
<td><b>Email-Id:</b></td>
<td><input type='email' placeholder='123@gmail.com' id='em1' name='email' value='$row[email_id]'></td>
</tr>
<tr>
<td><b>Password:</b></td>
<td><input type='password' placeholder='enter the password' id='pswd' name='password' value='$row[password]'></td>
</tr>
<tr>
<td><b>Confirm-Password:</b></td>
<td><input type='password' placeholder='Re-enter the password' id='cpswd' ></td>
</tr>
<tr>
<td></td>
<td><input type='Submit' value='submit' id='s1' onclick='return validate()'>
    <input type='Reset' value='Reset' id='r1'></td>
</tr>
</table>
</form>";

?>
</body>
</html>