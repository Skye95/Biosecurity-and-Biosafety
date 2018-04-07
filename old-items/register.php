<!DOCTYPE html>
<html>
    <head>
    <title>Registration Page</title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <!-- Bootstrap -->
    <link href="framework/css/bootstrap.min.css" rel="stylesheet" />
    <link href="framework/css/bootstrap-theme.min.css" rel="stylesheet"/>
    <link href="main.css" rel="stylesheet" /> 
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
        
        <div class="container registerpage">
            
            <div class="col-md-2"></div>
            
            <div class="col-md-8">
                <h2>Registration</h2>
                <form class="form-horizontal" action="/action_page.php">
                    <div class="form-group">
                      <label class="control-label col-sm-2" for="email">Email:</label>
                      <div class="col-sm-10">
                        <input type="email" class="form-control" id="email" placeholder="Enter email" name="email">
                      </div>
                    </div>
                    <div class="form-group">
                      <label class="control-label col-sm-2" for="pwd">Password:</label>
                      <div class="col-sm-10">          
                        <input type="password" class="form-control" id="pwd" placeholder="Enter password" name="pwd">
                      </div>
                    </div>
                    <div class="form-group">
                      <label class="control-label col-sm-2" for="conpwd">Confirm Password:</label>
                      <div class="col-sm-10">          
                        <input type="password" class="form-control" id="conpwd" placeholder="Reenter password" name="conpwd">
                      </div>
                    </div>
                    <div class="form-group">
                      <label class="control-label col-sm-2" for="name">Name:</label>
                      <div class="col-sm-10">          
                        <input type="text" class="form-control" id="name" placeholder="Enter Name" name="name">
                      </div>
                    </div>
                    <div class="form-group">
                      <label class="control-label col-sm-2" for="acctype">Account Type:</label>
                      <div class="col-sm-10">          
                        <input type="text" class="form-control" id="acctype" placeholder="Enter Account Type" name="acctype">
                      </div>
                    </div>
                    <div class="form-group">
                      <label class="control-label col-sm-2" for="usrid">User ID:</label>
                      <div class="col-sm-10">          
                        <input type="text" class="form-control" id="usrid" placeholder="Enter ID" name="usrid">
                      </div>
                    </div>
                    <div class="form-group">        
                      <div class="col-md-offset-4 col-md-2">
                        <button type="submit" class="btn btn-primary btn-block">Register</button>
                      </div>
                      <div class="col-md-2">
                        <input type="reset" class="btn btn-primary btn-block" value="Cancel">
                      </div>
                    </div>
                  </form>
            </div>
            
            <div class="col-md-2"></div>
            
            
        </div>
        
        
        
        
        
        
        
        
    <!-- jQuery – required for Bootstrap's JavaScript plugins) -->
    <script src="framework/js/jquery.min.js"></script>
    <!-- All Bootstrap plug-ins file -->
    <script src="framework/js/bootstrap.min.js"></script>
    </body>
</html>