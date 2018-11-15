<?php
    require "mySqlConn.php";
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
        <title>Register</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
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
    <?php
        if ($_SERVER['REQUEST_METHOD'] == 'POST')
        {
            if(isset($_POST['login']))
            {
                require 'login.php';
            }
            elseif (isset($_POST['register']))
            {
                require 'register.php';
            }
            
        }
    ?>
    <body>
        <?php
            include "header.php";
        ?>
        <div class="forma">
      
                <ul class="tab-group">
                  <li class="tab active"><a class="aRegister" href="#login">Log In</a></li>
                  <li class="tab"><a class="aRegister" href="#signup">Sign Up</a></li>
                </ul>

                <div class="tab-content">
                  

                  <div id="login">   
                    <h1 class="hRegister">Welcome Back!</h1>

                    <form action="regjistrohu.php" method="post">

                      <div class="field-wrap">
                      <label>
                        Email Address<span class="req">*</span>
                      </label>
                      <input name="email" class="iRegister" classtype="email"required autocomplete="off"/>
                    </div>

                    <div class="field-wrap">
                      <label>
                        Password<span class="req">*</span>
                      </label>
                      <input name="password" class="iRegister" type="password"required autocomplete="off"/>
                    </div>

                        <p class="forgot"><a href="forgot.php">Forgot Password?</a></p>

                    <button name="login" class="button button-block"/>Log In</button>

                    </form>

                  </div>
                    <div id="signup">   
                        <h1 class="hRegister">Sign Up for Free</h1>

                        <form action="regjistrohu.php" method="post" autocomplete="off">

                        <div class="top-row">
                          <div class="field-wrap">
                            <label>
                              First Name<span class="req">*</span>
                            </label>
                            <input name="firstName" class="iRegister" type="text" onkeyup="showHint(this.value)" required autocomplete="off" />
                          </div>

                          <div class="field-wrap">
                            <label>
                              Last Name<span class="req">*</span>
                            </label>
                            <input name="lastName" class="iRegister" type="text"required autocomplete="off"/>
                          </div>
                        </div>
                        <div class="field-wrap">
                          <label>
                            Name Suggestion:<span id="txtHint"></span>
                          </label>
                          <p class="iRegister"p>
                        </div>                        
                        <div class="field-wrap">
                          <label>
                            Email Address<span class="req">*</span>
                          </label>
                          <input name="email" class="iRegister" type="email"required autocomplete="off"/>
                        </div>

                        <div class="field-wrap">
                          <label>
                            Set A Password<span class="req">*</span>
                          </label>
                          <input name="password" class="iRegister" type="password"required autocomplete="off"/>
                        </div>
                        <div class="field-wrap">
                          <label>
                            Confirm Password<span class="req">*</span>
                          </label>
                          <input name="confirmpassword" class="iRegister" type="password"required autocomplete="off"/>
                        </div>

                        <button name="register" type="submit" class="button button-block"/>Get Started</button>

                        </form>

                      </div>

                </div><!-- tab-content -->

          </div> <!-- /form -->
        <?php
            include "footer.php";
        ?>
    </body>
    <script>
        $('.forma').find('input, textarea').on('keyup blur focus', function (e) {

            var $this = $(this),
                label = $this.prev('label');

                    if (e.type === 'keyup') {
                                  if ($this.val() === '') {
                    label.removeClass('active highlight');
                  } else {
                    label.addClass('active highlight');
                  }
              } else if (e.type === 'blur') {
                  if( $this.val() === '' ) {
                          label.removeClass('active highlight'); 
                                  } else {
                              label.removeClass('highlight');   
                                  }   
              } else if (e.type === 'focus') {

                if( $this.val() === '' ) {
                          label.removeClass('highlight'); 
                                  } 
                else if( $this.val() !== '' ) {
                              label.addClass('highlight');
                                  }
              }

          });

          $('.tab a').on('click', function (e) {

            e.preventDefault();

            $(this).parent().addClass('active');
            $(this).parent().siblings().removeClass('active');

            target = $(this).attr('href');

            $('.tab-content > div').not(target).hide();

            $(target).fadeIn(600);

          });
</script>
<script>
function showHint(str) {
    if (str.length == 0) { 
        document.getElementById("txtHint").innerHTML = "";
        return;
    } else {
        var xmlhttp = new XMLHttpRequest();
        xmlhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
                document.getElementById("txtHint").innerHTML = this.responseText;
            }
        };
        xmlhttp.open("GET", "gethint.php?q=" + str, true);
        xmlhttp.send();
    }
}
</script>

</html>
		