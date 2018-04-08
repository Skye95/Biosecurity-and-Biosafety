<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"/>
    <meta name="description" content=""/>
	<meta name="keyword" content="HTML, CSS, Javascript" />
	
	<title>Biosafety and Biosecurity Online System - Login</title>
	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet=" href="styles/bootstrap/bootstrap.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<script src="https://apis.google.com/js/platform.js" async defer></script>
	
	<!--Custom CSS-->
	<link rel="stylesheet" type="text/css" href="../styles/login_styles.css">
    <link rel="icon" type="image/png" href="../images/bbos-favicon.png">

</head>
<body class="bg">

<div class="container"> 
<div class="container"> 
	<div class="row"> 
		<div class="col-md-12"> 
			<div class="header">
				<p>  <img src="../images/bbosLogo-white.png" width="50" height="40" alt="login BBOS logo" id="login_logo"/></p>
				<h2>Biosafety and Biosecurity Online System</h2>

			</div>
		</div>
	</div>

	<div class="form-group text-center">
	<form method="post" action="login.php">
		<div class="row"> 
		
			<div class="col-md-12"> 
			<input type="text" id="email" name="email" placeholder="email"/>
			</div>
		</div>
		
		<div class="row"> 
			<div class="col-md-12">
				<input type="password" name="password" ID="password" placeholder="password" />
			</div>
		</div>
		<div class="row"> 
			<div class="col-md-12 text-center">
				<button type="submit" class="btn" name="login_user" id="login_user">Login</button>
			</div>
		</div>
		<br>
		<div class="row"> 
			<div class="col-md-6 text-center">
				<p class="registered-text">
				&nbsp; &nbsp; Not registered? <a class="sign-up" href="register.php"> Sign up</a>
				</p>
			</div>
			<div class="col-md-6 pull-right">
			<p><a href="forgotPassword.php"> Forgot password?</a>
			</p>
			</div>
		</div>

	<br/><br/>
		
	</form>
	</div>
</div>

</body>
</html>