<?php 
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'vendor/autoload.php';
/* Reset your password form, sends reset.php password link */
require 'mySqlConn.php';

session_start();
if($_SESSION['logged_in'])
	{
		if((time() - $_SESSION['last_time'])>900)
		{
			header("location: logout.php");
		}
		else
		{
			$_SESSION['last_time'] = time();
		}
	}

// Check if form submitted with method="post"
if ( $_SERVER['REQUEST_METHOD'] == 'POST' ) 
{   
    $email = $mysqli->escape_string($_POST['email']);
    $result = $mysqli->query("SELECT * FROM users WHERE email='$email'");

    if ( $result->num_rows == 0 ) // User doesn't exist
    { 
        $_SESSION['message'] = "User with that email doesn't exist!";
        header("location: error.php");
    }
    else { // User exists (num_rows != 0)

        $user = $result->fetch_assoc(); // $user becomes array with user data
        
        $email = $user['email'];
        $hash = $user['hash'];
        $first_name = $user['first_name'];

        // Session message to display on success.php
        $_SESSION['message'] = "<p>Please check your email <span>$email</span>"
        . " for a confirmation link to complete your password reset!</p>";
        
        $message_body = '
        Hello '.$first_name.',<br><br><br>

        You have requested password reset!<br><br>

        Please click this <a href="http://traveleragency.epizy.com/reset.php?email='.$email.'&hash='.$hash.'">link</a> to reset your password.'; 
        $mail = new PHPMailer(true);
        try{
            $mail->SMTP = 1;
            $mail->isSMTP();
            $mail->Host = 'smtp.gmail.com';
            $mail->SMTPAuth = true;
            $mail->Username = 'traveleragjency@gmail.com';
            $mail->Password = 'Tr4veler';
            $mail->SMTPSecure = 'tls';
            $mail->Port = 587;
            $mail->setFrom('traveleragjency@gmail.com','Traveler');
            $mail->addAddress($email);
            
            $mail->isHTML(true);
            $mail->Subject = 'Password Reset Link ( Traveler )';
            $mail->Body = $message_body;
            $mail->send();
            
            header("location: success.php");
        } catch (Exception $ex) 
        {   
            echo $mail->ErrorInfo;
        }
        
        
  }
}
?>
<!DOCTYPE html>
<html>
<head>
  <title>Reset Your Password</title>
  <link href="css/regisetCss.css" rel="stylesheet" type="text/css" media="all" />
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script type="application/x-javascript">
		addEventListener("load", function () {
			setTimeout(hideURLbar, 0);
		}, false);

		function hideURLbar() {
			window.scrollTo(0, 1);
		}
	</script>
        <!-- Style-sheets -->
	<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
	<link href="css/font-awesome.css" rel="stylesheet" type="text/css" media="all">
	<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
	<!-- // Style-sheets -->
        <!-- Online-fonts -->
	<link href="//fonts.googleapis.com/css?family=Montserrat:100,200,400,500,600" rel="stylesheet">
	<link href="//fonts.googleapis.com/css?family=Lato:300,400,700,900" rel="stylesheet">
	<!--// Online-fonts -->
</head>

<body>
    <?php
    require 'header.php';
    ?>
    
  <div class="forma">

    <h1 class="hRegister">Reset Your Password</h1>

    <form action="forgot.php" method="post">
     <div class="field-wrap">
      <label>
        Email Address<span class="req">*</span>
      </label>
      <input class="iRegister" type="email"required autocomplete="off" name="email"/>
    </div>
    <button class="button button-block"/>Reset</button>
    </form>
  </div>
    <?php
    require 'footer.php';
    ?>
          
<script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
<script src="js/index.js"></script>
</body>

</html>
