<?php 
    if( isset($_POST['FullName']) && isset($_POST['email']) && isset($_POST['message']) )
    {
	$name = $_POST['FullName'];
	$email = $_POST['email'];
	$mesazhi = nl2br($_POST['mesazhi']);
	$to = "traveleragjency@gmail.com";	
	$from =$email;         
	$subject = 'Traveler Agency';
	$message = '<b>Full Name:</b> '.$name.' <br><b>Email:</b> '.$email.' <p>'.$mesazhi.'</p>';
	$headers = "From: $from\n";
	$headers .= "MIME-Version: 1.0\n";
	$headers .= "Content-type: text/html; charset=iso-8859-1\n";
	if(mail($to, $subject, $message, $headers))
        {
        echo "<script>alert('Mesazhi u dergua me sukses')</script>";
        echo("<script>window.location = 'email_form.php';</script>");
        }
    }
    else
    {
        echo "<script>alert('Ka ndodhur nje gabim')</script>";           
    }
?>