<?php
    if(isset($_POST['hotels']))
    {
        $city = $_POST['City'];
		$adults = $_POST['Adults'];
        $prishtin = "Prishtine";
        $tiran = "Tirane";
        $shkup = "Shkup";
		
		setcookie('CheckIn',$_POST['Check-In']);
		setcookie('CheckOut',$_POST['Check-Out']);
		setcookie('Adults',$_POST['Adults']);
		if($adults=="select")
		{
			echo "<script>
			alert('Choose quantity of adults!');
			window.history.back();
			</script>";
		}
		else
		{
			if($city==$prishtin)
			{
				header("location: hotelPrishtine.php");
			}
			elseif($city==$tiran)
			{
				header("location: hotelTirane.php");
			}
			elseif($city==$shkup)
			{
				header("location: hotelShkup.php");
			}
			elseif($city=="Select")
			{
				echo "<script>
				alert('Choose a city!');
				window.history.back();
				</script>";
			}
		}
		
		
    }



?>
