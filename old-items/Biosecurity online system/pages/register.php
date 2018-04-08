<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"/>
    <meta name="description" content=""/>
	<meta name="keyword" content="HTML, CSS, Javascript" />
	
	<title>Biosafety and Biosecurity Online System - Register</title>
	
	<!--Custom CSS-->
	<link rel="stylesheet" type="text/css" href="..\styles\login_styles.css"/>
    <link rel="icon" type="image/png" href="../images/bbos-favicon.png">
    
    <link rel="stylesheet=" href="styles/bootstrap/bootstrap.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

	
	<!-- HTML5 Shim and Respond.js IE8 support of HTML5 
    elements and media queries --> 
    <!-- WARNING: Respond.js doesn't work if you view the 
    page via file:// --> 
    <!--[if lt IE 9]> 
    <script src="js/html5shiv.js"></script> 
    <script src="js/respond.min.js"></script> 
    <![endif]--> 

</head>

<body class="bg">
<div class="container" style="width:100%;"> 
    <div class="row"> 
            <div class="col-md-12"> 
                <div class="header">
                <h2>Register</h2>
            </div>
        </div>
    </div>
    
     <div class="form-group text-center">
         <form method="post" action="register.php">
           
            <div class="row">
                <div class="col-md-12"> 	
                    <input type="email" placeholder="Email" name="email" value="<?php echo $email; ?>"/>
                </div>
            </div>
            <div class="row"> 
                <div class="col-md-6"> 
                    <input type="password" placeholder="Password" name="password_1" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters"/>
                </div>

                <div class="col-md-6"> 
					<input type="password" placeholder="Confirm Password" name="password_2"/>
				</div>
            </div>
            <div class="row"> 
                <div class="col-md-12"> 
                <input type="text" placeholder="Name" name="username" value="<?php echo $username; ?>"/>
                </div>
            </div>
			<div class="row">
                <div class="col-md-12"> 	
                    <input type="text" placeholder="Account Type" name="accounttype" />
                </div>
            </div>
 
 			<div class="row">
                <div class="col-md-12"> 	
                    <input type="text" placeholder="User ID" name="userid" />
                </div>
            </div>
			
                <button type="submit" class="btn" name="reg_user" style="width: 100%;">Register</button>

            <br/><br/>
            <p id="alreadyMember">
                Already a member? <a href="login.php">Sign in</a>
            </p>
        </form>
    </div>
</div>
	
<br/>
	
</body>
</html>