<html>
<head>
<title>Time Sheet</title>
</head>
<body>
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
			if($row["email_id"]==$email)
			{
				if( $row["password"]=$password)
				{
     	    				echo"<h1 style='color:Green'>Login Successful</h1>";
					$flag=1;
				}
			}
    		}
	}
	if($flag==0)
	{
		echo "<h1 style='color:Red'>Invalid username or Password</h1>";
	}
	

?>
	<a href="login.php">Click Here</a>
</body>
</html>