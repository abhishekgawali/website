<html>
<head>
<title>DELETE</title>
</head>
<body>
<?php
	
	$conn=mysqli_connect("localhost","root","","abhishek");
	if(mysqli_connect_error())
	{
		echo "Error in connecting to database: ".mysqli_connect_error();
	}
	$t_id = $_GET['id'];
	$sql="delete from invoice where invoice_id=$t_id";
	if(mysqli_query($conn,$sql))
	{
		echo"Data deleted successfully";
	}
	else
	{
		echo"Data not deleted";
	}
	
?>

</table>
</body>
</html>