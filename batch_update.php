<html>
<head>
<title>Batch
</title>
<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.2/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
<style>

table.two{


font-size:20;

}
</style>
</head>
<body bgcolor="#F5FFFA" onload="onLoadPage()">
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
   
	<?php
	
	/*$user_id = $_POST['user_id'];
	$first_name = $_POST['first_name'];
	$last_name = $_POST['last_name'];
	$email_id = $_POST['emai_id'];
	$password = $_POST['password'];
	$modified_date = $_POST['modified_date'];
	$role = $_POST['task_1'];
	$task_2 = $_POST['task_2'];
	$task_3 = $_POST['task_3'];
	$user_id = 1;*/
	
	$conn=mysqli_connect("localhost","root","","web_project");
	if(mysqli_connect_error())
	{
		echo "Error in connecting to database: ".mysqli_connect_error();
	}
	$b_id=$_GET['id'];
	$sql="select * from batch where batch_id=$b_id";
	$result = mysqli_query($conn, $sql);
	$row = mysqli_fetch_assoc($result);
	$in_time=$row['start_time'];
	$out_time=$row['end_time'];
	$batchday=$row['day'];
	$number=$row['nos_in_week'];
	echo"<div align='center'>
	
   <div class='table' align='center' >
    
	<table style='border-collapse:separate; border-spacing:10px 30px;'>
	<caption><h2>BATCH FORM</h2></CAPTION>  

	<form action='batch_update1.php?id1=$b_id', method='POST'>
	<input type='hidden' id='a1' value='$in_time'>
	<input type='hidden' id='b1' value='$out_time'>
	<input type='hidden' id='c1' value='$batchday'>
	<input type='hidden' id='d1' value='$number'>
	
	<tr>
	     <td> Batch Name:</td>
		 <td><input type='text' name='batchname' placeholder='please enter' id='bn' value='$row[batch_name]'>
		 </td>
	  </tr>
	  	  <tr>
	       <td> Day:</td>
		   <td> 	<select name='batchday' id='bd'>
    					<option value='Monday'>Monday</option>
    					<option value='Tuesday'>Tuesday</option>
    					<option value='Wednesday'>Wednesday</option>
    					<option value='Thursday'>Thursday</option>
    					<option value='Friday'>Friday</option>
						<option value='Saturday'>Saturday</option>
						<option value='Sunday'>Sunday</option>
					</select>
		 </td>   
	  </tr>
	  <tr>
	       <td> No.of Days in week:</td>
		   <td> <select name='number' id='num'>
    					<option value='1'>1</option>
    					<option value='2'>2</option>
    					<option value='3'>3</option>
    					<option value='4'>4</option>
    					<option value='5'>5</option>
						<option value='6'>6</option>
						<option value='7'>7</option>
   				</select>
		 </td>       
	  </tr>
      <tr>
	       <td> Start time:</td>
		   <td> <select name='starttime' id='st' >
				 
		        <option value='7:00'>7:00</option>
				<option value='7:30'>7:30</option>
				<option value='8:00'>8:00</option>
				<option value='8:30'>8:30</option>
				<option value='9:00'>9:00</option>
				<option value='9:30'>9:30</option>
				<option value='10:00'>10:00</option>
				<option value='10:30'>10:30</option>
				<option value='11:00'>11:00</option>
				<option value='11:30'>11:30</option>
				<option value='12:00'>12:00</option>
				<option value='12:30'>12:30</option>
                <option value='13:00'>13:00</option>
                <option value='13:30'>13:30</option>
   				<option value='14:00'>14:00</option>
				<option value='14:30'>14:30</option>
				<option value='15:00'>15:00</option>
				<option value='15:30'>15:30</option>
				<option value='16:00'>16:00</option>
				<option value='16:30'>16:30</option>
				<option value='17:00'>17:00</option>
				<option value='17:30'>17:30</option>
				<option value='18:00'>18:00</option>
				<option value='18:00'>18:30</option>
				<option value='19:00'>19:00</option>
				<option value='19:30'>19:30</option>
				<option value='20:00'>20:00</option>
				<option value='20:30'>20:30</option>
				<option value='21:00'>21:00</option>
				<option value='21:30'>21:30</option>
				<option value='22:00'>22:00</option>
				</select>
				</td>
		</tr>
				
	  <tr>
	       <td> End time:</td>
		   <td> <select name='endtime' id='et'>
		        
		        <option value='7:00'>7:00</option>
				<option value='7:30'>7:30</option>
				<option value='8:00'>8:00</option>
				<option value='8:30'>8:30</option>
				<option value='9:00'>9:00</option>
				<option value='9:30'>9:30</option>
				<option value='10:00'>10:00</option>
				<option value='10:30'>10:30</option>
				<option value='11:00'>11:00</option>
				<option value='11:30'>11:30</option>
				<option value='12:00'>12:00</option>
				<option value='12:30'>12:30</option>
                <option value='13:00'>13:00</option>
                <option value='13:30'>13:30</option>
   				<option value='14:00'>14:00</option>
				<option value='14:30'>14:30</option>
				<option value='15:00'>15:00</option>
				<option value='15:30'>15:30</option>
				<option value='16:00'>16:00</option>
				<option value='16:30'>16:30</option>
				<option value='17:00'>17:00</option>
				<option value='17:30'>17:30</option>
				<option value='18:00'>18:00</option>
				<option value='18:00'>18:30</option>
				<option value='19:00'>19:00</option>
				<option value='19:30'>19:30</option>
				<option value='20:00'>20:00</option>
				<option value='20:30'>20:30</option>
				<option value='21:00'>21:00</option>
				<option value='21:30'>21:30</option>
				<option value='22:00'>22:00</option>				
				</select>
				</td>
		</tr>
				
		<tr>
	     <td>Primary Instructor:</td>
		 <td><input type='text' name='instructor' placeholder='please enter' id='pi' value='$row[primary_incharge]'>
		 </td>
	    </tr>	
						
       
        		<tr>
             <td><input type='submit' value='Submit' name='subm'>
    		 </td>
             <td><input type='reset' value='Clear' name='clear'>
             </td>
        </tr>
	 
				
		
		
				
	</form>			
   </table>";
   
   ?>
 <script>
 function onLoadPage(){
	 var x=document.getElementById("a1").value;
	 document.getElementById("st").value=x;
	 var y=document.getElementById("b1").value;
	 document.getElementById("et").value=y;
	 var z=document.getElementById("c1").value;
	 document.getElementById("bd").value=z;
	 var a=document.getElementById("d1").value;
	 document.getElementById("num").value=a;	
 }
</script>
</body>
</html>
