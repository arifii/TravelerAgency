<?php
/* Displays all successful messages */
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
?>
<!DOCTYPE html>
<html>
<head>
  <title>Success</title>
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
<body class="pRegister">
    <?php
    require 'header.php';
    ?>
    <div class="forma">
        <h1><?= 'Success'; ?></h1>
        <p>
        <?php 
        if( isset($_SESSION['message']) AND !empty($_SESSION['message']) ):
            echo $_SESSION['message'];    
        else:
            header( "location: regjistrohu.php" );
        endif;
        ?>
        </p>
        <a class="aRegister" href="regjistrohu.php"><button class="button button-block"/>Home</button></a>
    </div
    <?php
    require 'footer.php';
    ?>
</body>
</html>
