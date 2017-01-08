<html>
<head><title> ENQUIRY_BOOTSTRAP</title>
<script>

 function validate()
 {
    //alert(15);
   /*
	var a=document.getElementById("contact").value;
	var a1=document.getElementById("pcontact").value;
	var p=document.getElementById("ref1").checked;
	var q=document.getElementById("ref2").checked;
	var r=document.getElementById("ref3").checked;
	var s=document.getElementById("ref4").checked;
	//var l=document.getElementById("ref5").checked;
	var m=document.getElementById("specify").value;
	  var str="";
	  var flag=true; 
		 var len=a.toString().length;
		 var len1=a1.toString().length;
		 if(len1!=10)
		   {
		     flag=false;
			 str=str+"please enter the correct contact-no !\n"
		   }
		   if(len!=10)
		   {
		     flag=false;
			 str=str+"please enter the correct 10 digit number parent's contact-no !\n"
		   }
		   if(a==a1)
		   {  flag=false;
		     str=str+"your's contact no and your's parents contact is Matching please \"Rectify it \" and give your parent contact no "
		   }
		  
		 
		 if(p==false && q==false && r==false && s==false)
		   { 
		     flag=false;
			 str=str+"please enter any one of the references !\n"
		   }
		   if(s==true && m=="")
		   {
			  flag=false;
			  str=str+"please \"SPECIFY\" any other references ! \n"
			
			}
			if(flag==false)
			{
			  alert(str);
			  return false;
			}
			return true;
			*/
}
function onpageload(){
	var x=document.getElementById('ge1').value;
	if(document.getElementById('ref1').value==x)
	document.getElementById('ref1').checked=true;
    if(document.getElementById('ref2').value==x)
	document.getElementById('ref2').checked=true;
    if(document.getElementById('ref3').value==x)
	document.getElementById('ref3').checked=true;
    if(document.getElementById('ref4').value==x)
	document.getElementById('ref4').checked=true;
}

</script>
<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
</head>
<body bgcolor="blue" onload="onpageload()">
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
<?php
  $conn=mysqli_connect("localhost","root","","abhishek");
  $t_id=$_GET['id'];
	if(mysqli_connect_error())
	{
		echo "Error in connecting to database: ".mysqli_connect_error();
	}
	$sql="select * from enquiry where enquiry_id=$t_id";
	$result=mysqli_query($conn,$sql);
		if (mysqli_num_rows($result) > 0)
			{
				$row=mysqli_fetch_assoc($result);
			}
			$reftemp=$row['reference_type'];

echo"<div class='address' align='center' id='header'>
	    
		<h3> TalentHome Solution Private Limited.<br>
		  3/5, bussiness Point, Paliram Road ,Near BMC Office,Opp. Andheri Station,Andheri West ,Mumbai-400069</h3>
   </div>
   <hr>
   <form class='form-inline' role='form' align='center' action='enquiry_update.php?id=$t_id' method='post'>
   <input type='hidden' id='ge1' value=$reftemp>
    <div class='form-group'>
      <label for='c1'>Course-Interested:</label>
      <input type='text' class='form-control' id='c1' placeholder='Enter course' name='courseid' value='$row[course_interested]' required>
    </div>
	&nbsp;&nbsp;
    <div class='form-group'>
      <label for='date'>Date:</label>
      <input type='date' class='form-control' id='date' placeholder='Enter date' name='date' value='$row[enquiry_date]' required>
    </div>
	<hr size=10 noshade>
	<h3 align='center'>Personal -Information</h3>
    <div class='form-group'>
      <label for='fname'> First-Name</label>
	  <input type='text' class='form-control' id='fname' placeholder='enter name' name='first' value='$row[first_name]' required>
	  &nbsp;&nbsp;
	  <label for='lname'> Last-Name</label>
	  &nbsp;&nbsp;
	  <input type='text' class='form-control' id='lname' placeholder='enter name' name='last' value='$row[last_name]' required>
    </div>
	<hr size=10 noshade>
	<div class='form-group'>
      <label for='contact'> Contact-Number</label>
	  <input type='number' class='form-control' id='contact' placeholder='enter number' name='contact1' value='$row[mobile_no]' required>
	  &nbsp;&nbsp;
	  <label for='pcontact'> Residence-Contact-No</label>
	  <input type='number' class='form-control' id='pcontact' placeholder='enter name' name='contact2'  value='$row[residence]'>
    </div>
	<hr size=10 noshade>
	<div class='form-group'>
      <label for='email'> Email-Id:</label>
	  <input type='email' class='form-control' id='email' placeholder='enter email-id' name='emailid' value='$row[email]' required>
	  &nbsp;&nbsp;
	  <label for='rl'>Residence-Loc:</label>
	  <input type='text' class='form-control' id='rl' placeholder='enter Residence-Location' name='residence' value='$row[location]'  required>
    </div>
	<h3 align='center'>Educational -Information:</h3>
	<div class='form-group'>
      <label for='deg'> Degree:</label>
	  <input type='text' class='form-control' id='deg' placeholder='enter Degree' name='degree' value='$row[degree]' required>
	  &nbsp;&nbsp;
	  <label for='stream'>Stream:</label>
	  <input type='text' class='form-control' id='stream' placeholder='enter Stream' name='stream' value='$row[stream]' required>
    </div>
	<hr size='10' noshade>
	<div class='form-group'>
      <label for='ins'>Institute:</label>
	  <input type='text' class='form-control' id='ins' placeholder='enter Institute' name='institute' value='$row[institute]' required>
	  &nbsp;&nbsp;
	  <label for='uni'>University:</label>
	  <input type='text' class='form-control' id='uni' placeholder='enter University' name='univer' value='$row[university]' required>
    </div>
	<hr size='10' noshade>
	<h3 align='center'>References:</h3>
	<div class='form-group'>
	
      <label><input type='radio' id='ref1' name='ref' value='friends'>Friends</label>
	  
	  <label><input type='radio' id='ref2' name='ref' value='websites'>Websites</label>
	  
	  <label><input type='radio' id='ref3' name='ref' value='whatsap'>WhatsApp</label> 
	  
	  <label><input type='radio' id='ref4' name='ref' value='others'>others</label>
	  <br>
	  <br>
	  <label for='lname' value='specify'>SPECIFY:</label>
	  <input type='text' class='form-control' id='specify' name='refdetails' value='$row[reference_details]'>
    
	<hr>
	
    <button type='submit' class='btn btn-default' id='submit'>Submit</button>
	&nbsp;&nbsp;
	<button type='reset' class='btn btn-default' id='clear'>RESET</button>
	<a href='enquiryview.php'>VIEW</a>
  </form>"
  
  ?>
  
  
  
  
</div>
   
</body>
</html>