<!DOCTYPE html>
<html>
    <head>
    <title>Login Page</title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <!-- Bootstrap -->
    <link href="framework/css/bootstrap.min.css" rel="stylesheet" />
    <link href="framework/css/bootstrap-theme.min.css" rel="stylesheet"/>
    <link href="main.css" rel="stylesheet"/>
    <!--HTML5 Shim and Respond.js IE8 support of HTML5
    elements and media queries-->
    <!-- WARNING: Respond.js doesn't work if you view the
    page via file:// -->
    <!--[if lt IE 9]>
    <script src="js/html5shiv.js"></script>
    <script src="js/respond.min.js"></script>
    <![endif]-->
    </head>
    <body>
        <nav class="navbar navbar-default navbar-fixed-top">
            <div class="container-fluid">
                <div class="navbar-header">
                    <a class="navbar-brand" href="#">Swinburne Biosecurity and Biosafety Online System</a>
                </div>
            </div> 
        </nav>
        
        
        <div class="container" id="loginpg">
            <div class="col-lg-4"></div>
            <div class="col-lg-4">
                <div class="jumbotron">
                    
                    <h3>Login To Account</h3>
                    <form method="post">
                        <div class="form-group">
                            <input type="email" name="loginemail" class="form-control" placeholder="Enter Email">
                        </div>
                        <div class="form-group">
                            <input type="password" name="loginpassword" class="form-control" placeholder="Enter Password">
                        </div>
                        
                        <button type="submit" name="submit" class="btn btn-primary form-control">Login</button>
                    </form>
                </div>
            </div>
        </div>
        

    
    
    <!-- jQuery – required for Bootstrap's JavaScript plugins) -->
    <script src="js/jquery.min.js"></script>
    <!-- All Bootstrap plug-ins file -->
    <script src="js/bootstrap.min.js"></script>
    </body>
</html>