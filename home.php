<html>
<head><title>HOME</title>
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
								    <li><a href="home.php">Home</a></li>   

                                                                                                                                                   
									
				</ul>
			</div><!--/.nav-collapse -->
		</div>
<div align="center">
<p><i>
TalentHome stays true to its vision of providing career graded IT / Non-IT professionals and Training services, with the total focus on the needs of client, and a company-wide commitment to high standards of service.
TalentHome has a workforce that has the required 8-10 Years of IT experience and over 30 years of Business experience.
Our vision is to be a globally recognized, highly reliable and most supportive IT corporation that would provide innovative business solutions, leveraging high end technologies delivered by best-in-industry.
We promote and nurture service excellence and assure our clients to locate, screen and recommend best candidates.
</i></p>
</div>
<?php
	$email = $_POST['email'];
	$password = $_POST['password'];
	$flag=0;
	$conn=mysqli_connect("localhost","root","","web_project");
	if(mysqli_connect_error())
	{
		echo "Error in connecting to database: ".mysqli_connect_error();
	}
	$sql="Select * from user";
	$result = mysqli_query($conn, $sql);

	if (mysqli_num_rows($result) > 0)
	 {
	    // output data of each row
	    while($row = mysqli_fetch_assoc($result)) 
		{
			if($row["email_id"]==$email and $row["password"]=$password)
			{
     	    			echo"<h1 style='color:Green'>Login Successful</h1>";
				$flag=1;
			}

    		}
	}
	if($flag==0)
	{
		echo "<h1 style='color:Red'>Invalid username or Password</h1>";
	}
	

?>
</body>
</html>