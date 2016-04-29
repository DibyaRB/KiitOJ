<?php echo $this->getContent(); ?>

<div id="login-page">
	  	<div class="container">
	  	
		      <form class="form-login" action="http://localhost/KiitOJ/forgotpassword/update" method="POST">
		        <h2 class="form-login-heading">sign in now</h2>
			<?php echo $this->flash->output(); ?>
		        <div class="login-wrap">
		            <input type="text" class="form-control" value= "<?php echo $email; ?>" name="email" readonly>
		            <br>
		            <input type="password" class="form-control" name="pass" placeholder="New Password" autofocus>
			    <input type="password" class="form-control" name="cpass" placeholder="Confirm Password">
		            <input type="hidden" name="hash" value="<?php echo $ur1; ?>">
		            <input class="btn btn-theme btn-block" type="submit" value="Reset Password" >
		            <hr>
		
		        </div>
		</form>


<!--BACKSTRETCH-->
    <!-- You can use an image of whatever size. This script will stretch to fit in any screen size.-->
    <script type="text/javascript" src="http://localhost/KiitOJ/public/js/jquery.backstretch.min.js"></script>
    <script>
        $.backstretch("http://localhost/KiitOJ/public/img/login-bg.jpg", {speed: 500});
    </script>

