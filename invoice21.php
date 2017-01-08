<html>
<head>
<title>Invoice</title>
 <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.2/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
<style>
.container
{
	border:2px solid #ededed;
}
.navbar-header{
	padding-right:10px;
}
.menu{
	padding:5px;
	width:100%;
	height:60px;
}
.carousel-inner > .item > img,
.carousel-inner > .item > a > img {
      width: 100%;
      margin: auto;
  }
.footer {
      background-color: #555;
      color: white;
      padding: 15px;
    }
table.size{
	font-size:20px;
}
</style>
<script>
function onpageload()
   {
	var x=document.getElementById('ge1').value;
	//alert(x);
	if(document.getElementById('cash').value==x)
	{
		document.getElementById('cash').checked=true;
	}
    else
	{
		document.getElementById('cheque').checked=true;
	}
	var y=document.getElementById('ge2').value;
    if(document.getElementById('full').value==y)
	{
		document.getElementById('full').checked=true;
    }
	else
	{
		document.getElementById('install').checked=true;
	}
   }
</script>
</head>
<body bgcolor="#f5fffa" onload="onpageload()">
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
									<li><a href="home1.html">Home</a></li>
									<li><a href="register.html">Student Register</a></li>
									<li><a href="timesheet.html">Timesheet</a></li>
									<li><a href="batch.html">Batch</a></li>
									<li><a href="enquiry.html">Enquiry Form</a></li>
									<li><a href="login.html">Log Out</a></li>
									
				</ul>
			</div><!--/.nav-collapse -->
		</div>
<?php
 $conn=mysqli_connect("localhost","root","","abhishek");
  $t_id=$_GET['id'];
	if(mysqli_connect_error())
	{
		echo "Error in connecting to database: ".mysqli_connect_error();
	}
	$sql="select * from invoice where invoice_id=$t_id";
	$result=mysqli_query($conn,$sql);
		if (mysqli_num_rows($result) > 0)
			{
				$row=mysqli_fetch_assoc($result);
			}
			$reftemp=$row['mode'];
			$reftemp1=$row['installment'];


echo"	<div align='center'  >
		<table style='border-collapse:separate; border-spacing:10px 20px;'>
		<caption align='center'><h2>Invoice</h2><caption>
		<form action='invoice_update.php?id=$t_id' method='POST'>
		<input type='hidden' value=$reftemp1 id='ge1'>
		<input type='hidden' value=$reftemp id='ge2'>
		<tr>
			<th align='left'>Receipt_No</th>
			<td align='left'>
				<input type='text' id='rno' placeholder='Student_Id' name='receipt' value='$row[receipt_no]' required>


			</td>
			</tr>
			<tr>
			<th align='left'>Student Id</th>
			<td align='left'>
				<input type='text' id='sid' placeholder='Student Id'name='s_id' value='$row[student_id]' required>
			</td>
			</tr>
			<tr>
				<th align='left'>Received with thanks from: </th>
				<td align='left'>
				<input type='text' id='name' placeholder='Name of student' name='person1' value='$row[s_name]' required>
			</td>
			</tr>
			<tr>
				<th align='left'>Rupees</th>
				<td align='left'>
				<input type='text' id='amt' placeholder='Amount' name='rupees' value='$row[amount]' required>
			</td>
			</tr>
			<tr>
				<th align='left'>In words</th>
				<td align='left'>
				<input type='text' id='amtinw' placeholder='Amount in words' name='in_words' value='$row[in_words]' required>
			</td>
			</tr>
			<tr>
				<th align='left'>
				<input type='radio' id='cash' name='payment1' value='C'>Cash
			</th>
			<th>
				<input type='radio' id='cheque' name='payment1' value='Q' >Cheque</th>
			</tr>
			<tr>
			<th>
				<input type='radio' id='full' name='amount1' value='F' >Full
			</th>
			<th>
				<input type='radio' id='install' name='amount1' value='I' >Installment
			</th>
			</tr>
			<tr>
				<th colspan =2 align='right'><input type='reset' id='clear' value='CLEAR'>
				<input type='submit' id='save' value='SAVE'>
			</th>
			</tr>
		</table>
		<div class='row'>
    <div class='col-sm-12'>Signature<input type='text' id='sign'></div>
    </div>
	<div class='row'>
<div class='col-sm-12' ><input type='button' value='Save as Pdf '></div>
	</div>
	<a href='invoiceview.php'>VIEW</a>
		</form>
		
		"
		?>
	</div>
</body>
</html>