<?php
	require "mySqlConn.php";
	
		$name = $mysqli->escape_string($_POST['Name']);
		$email = $mysqli->escape_string($_POST['Email']);
		$checkIn = $mysqli->escape_string($_POST['CheckIn']);
		$checkOut = $mysqli->escape_string($_POST['CheckOut']);
		$adults = $mysqli->escape_string($_POST['Adults']);
		$hotel = $mysqli->escape_string($_POST['Hotel']);
		$price = $mysqli->escape_string($_POST['Price']);
		
		
	$sql = "INSERT INTO reservations (Name, Email, CheckIn, CheckOut, Adults, Hotel, Price) " 
                . "VALUES ('$name','$email','$checkIn', '$checkOut','$adults','$hotel','$price')";
				
	if( $mysqli->query($sql) )
	{
		echo "<script>
		alert('Reserved successfully');
		window.location.href='index.php';
		</script>";
	}
	else
	{
		echo $mysqli->error;
	}
	
?>


