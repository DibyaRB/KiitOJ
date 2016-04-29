{{ content() }}

<div id="login-page">
	  	<div class="container">
	  	
		      <form class="form-login" action="http://localhost/KiitOJ/signup/teachersignup" method="post">
		        <h2 class="form-login-heading">sign up now</h2>
			{{ flash.output() }}
		        <div class="login-wrap">
			    <input type="text" class="form-control" placeholder="Full Name" name="name" autofocus>
			    <br>
		            <input type="email" class="form-control" placeholder="Email Address" name="email">
		            <br>
		            <input type="password" class="form-control" placeholder="Password" name="pass">
			    <br>
		            <input type="password" class="form-control" placeholder="Confirm Password" name="cpass">
			    <br>
		            <input class="btn btn-theme btn-block" type="submit" value="SIGN UP"/>
		            <hr>
		
		        </div>
		
		      </form>	  	
	  	
	  	</div>
	  </div>
<!--BACKSTRETCH-->
    <!-- You can use an image of whatever size. This script will stretch to fit in any screen size.-->
    <script type="text/javascript" src="http://localhost/KiitOJ/public/js/jquery.backstretch.min.js"></script>
    <script>
        $.backstretch("http://localhost/KiitOJ/public/img/login-bg.jpg", {speed: 500});
    </script>
