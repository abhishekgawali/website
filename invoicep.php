<html>
<head><title>data</title></head>
<body>
<?php

$receip=$_POST['receipt'];
$sid=$_POST['s_id'];

$amount=$_POST['rupees'];
$mode=$_POST['payment1'];
$install1=$_POST['amount1'];
$person1=$_POST['person1'];
$in_words=$_POST['in_words'];

$conn=mysqli_connect("localhost","root","","abhishek");
	if(mysqli_connect_error())
	{
		echo "Error in connecting to database: ".mysqli_connect_error();
	}
	else{
		echo "connection established ";
	}
	
	$sql="INSERT INTO invoice
	(`receipt_no`, `student_id`, `modified_date`, `amount`, `mode`, `installment`,`s_name`,`in_words`) VALUES 
	($receip, '$sid', CURRENT_DATE(), '$amount',  '$mode', '$install1', '$person1','$in_words')";
				
	if(mysqli_query($conn,$sql))
	{
	  echo "INSERTED SUCCESSFULLY";
	}
	else
	{
		echo "Error: ".mysqli_error($conn);
	}

	
	
		

?>
</body>
</html>