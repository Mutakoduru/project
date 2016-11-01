
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>Patient Login</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
        <meta name="apple-mobile-web-app-capable" content="yes">    
        <link href="./css/bootstrap.min.css" rel="stylesheet">
        <link href="./css/bootstrap-responsive.min.css" rel="stylesheet">
        <link href="http://fonts.googleapis.com/css?family=Open+Sans:400italic,600italic,400,600" rel="stylesheet">
        <link href="./css/adminia.css" rel="stylesheet"> 
        <link href="./css/adminia-responsive.css" rel="stylesheet"> 
        <link rel="stylesheet" href="style.css" media="screen, projection"/>
        <!-- Le HTML5 shim, for IE6-8 support of HTML5 elements -->
        <!--[if lt IE 9]>
          <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
        <![endif]-->
    </head>
    <body>
        <div class="navbar navbar-fixed-top">
            <div class="navbar-inner">
                <div class="container">
                    <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse"> 
                        <span class="icon-bar"></span> 
                        <span class="icon-bar"></span> 
                        <span class="icon-bar"></span> 				
                    </a>
                    <a class="brand" href="./">Admin Portal</a>
                    <div class="nav-collapse">
                        <ul class="nav pull-right">
                            <li class="divider-vertical"></li>
                            <li class="dropdown">
                                <a data-toggle="dropdown" class="dropdown-toggle " href="#">
                                    <b class="caret"></b>							
                                </a>
                            </li>
                        </ul>
                    </div> <!-- /nav-collapse -->
                </div> <!-- /container -->
            </div> <!-- /navbar-inner -->
        </div> <!-- /navbar -->
        <div id="content">
            <div class="container">
                <div class="row">
                    <div class="span3">
                        <ul id="main-nav" class="nav nav-tabs nav-stacked">                            
                            <li>
                                <a href="./patient.php">
                                    <i class="icon-user"></i>
                                    Home							
                                </a>
                            </li>
                            <li>
                                <a href="./viewUser.php">
                                    <i class="icon-user"></i>
                                    View patients						
                                </a>
                            </li>

                        </ul>	
                        <hr />
                        <br />
                    </div> <!-- /span3 -->



                    <div class="span9">
                        <h1 class="page-title">
                            <i class="icon-th-large"></i>
                            Registration				
                        </h1>
                        <div class="row">

                            <div class="span9">

                                <div class="widget">

                                    <div class="widget-header">
                                        <h3>Add Patient</h3>
                                    </div> <!-- /widget-header -->
                                    <div class="widget-content">
                                        <div class="tabbable">  
                                            <div class="tab-content">
                                                <div class="tab-pane active" id="1">
                                                    <form class="form-horizontal" method="POST" enctype="multipart/form-data" action="addUserNormal.php">
                                                        <fieldset>
                                                            <div class="control-group">											
                                                                <label class="control-label" for="firstname">First Name</label>
                                                                <div class="controls">
                                                                    <input type="text" required="required" class="input-medium" id="firstname" name="firstname" value="" />
                                                                    <span class="help-inline"></span>
                                                                </div> <!-- /controls -->				
                                                            </div> <!-- /control-group -->
                                                            <div class="control-group">											
                                                                <label class="control-label" for="lastname">Last Name</label>
                                                                <div class="controls">
                                                                    <input type="text" class="input-medium" required="required" id="lastname" name="lastname" value="" />
                                                                    <span class="help-inline"></span>
                                                                </div> <!-- /controls --></div> <!-- /control-group -->				
                                                            
                                                            <div class="control-group">											
                                                                <label class="control-label" for="Gender">Gender</label>
                                                                <div class="controls">
                                                                    <input type="text" required="required" class="input-medium" id="gender" name="gender" value="" />
                                                                    <span class="help-inline"></span>
                                                                </div> <!-- /controls -->				
                                                            </div> <!-- /control-group -->
                                                             <div class="control-group">											
                                                                <label class="control-label" for="Age">Age</label>
                                                                <div class="controls">
                                                                    <input type="text" class="input-medium" required="required" name="age" />
                                                                    <span class="help-inline"></span>                                                                    
                                                                </div> <!-- /controls -->				
                                                            </div> <!-- /control-group -->
                                                            <div class="control-group">											
                                                                <label class="control-label" for="Blood Group">Blood Group</label>
                                                                <div class="controls">
                                                                    <input type="text" required="required" class="input-medium" id="bloodgroup" name="bloodgroup" value="" />
                                                                    <span class="help-inline"></span>
                                                                </div> <!-- /controls -->				
                                                            </div> <!-- /control-group -->
                                                            <div class="control-group">											
                                                                <label class="control-label" for="phone">Phone</label>
                                                                <div class="controls">
                                                                    <input type="text" class="input-medium" required="required" name="phone" />
                                                                    <span class="help-inline"></span>                                                                    
                                                                </div> <!-- /controls -->				
                                                            </div> <!-- /control-group -->
                                                            <div class="control-group">											
                                                                <label class="control-label" for="email">Email</label>
                                                                <div class="controls">
                                                                    <input type="text" class="input-medium" required="required" name="email" />
                                                                    <span class="help-inline"></span>                                                                    
                                                                </div> <!-- /controls -->				
                                                            </div> <!-- /control-group -->
                                                             <div class="control-group">											
                                                                <label class="control-label" for="adr1">Address line 1</label>
                                                                <div class="controls">
                                                                    <input type="text" class="input-medium" requried="requried" name="adr1" />
                                                                    <span class="help-inline"></span>                                                                                           
                                                                </div> <!-- /controls -->				
                                                            </div> <!-- /control-group -->  
                                                             <div class="control-group">											
                                                                <label class="control-label" for="adr2">Address line 2</label>
                                                                <div class="controls">
                                                                    <input type="text" class="input-medium" name="adr2 />
                                                                    <span class="help-inline"></span>                                                                                           
                                                                </div> <!-- /controls -->				
                                                            </div> <!-- /control-group -->
                                                            

                                                            <div class="control-group">											
                                                                <label class="control-label" for="city">City</label>
                                                                <div class="controls">
                                                                    <input type="text" class="input-medium" required="required" name="city" />
                                                                    <span class="help-inline"></span>                                                                                           
                                                                </div> <!-- /controls -->				
                                                            </div> <!-- /control-group -->
                                                             <div class="control-group">											
                                                                <label class="control-label" for="state">state</label>
                                                                <div class="controls">
                                                                    <input type="text" class="input-medium" required="required" name="state" />
                                                                    <span class="help-inline"></span>                                                                                           
                                                                </div> <!-- /controls -->				
                                                            </div> <!-- /control-group --> 
                                                             <div class="control-group">											
                                                                <label class="control-label" for="zip">Zip code</label>
                                                                <div class="controls">
                                                                    <input type="text" class="input-medium" required="required" name="zip" />
                                                                    <span class="help-inline"></span>                                                                                           
                                                                </div> <!-- /controls -->				
                                                            </div> <!-- /control-group -->  
                                                            <div class="control-group">											
                                                                <label class="control-label" for="emr name">Emergency contact Name</label>
                                                                <div class="controls">
                                                                    <input type="text" class="input-medium" required="required" name="emrname" />
                                                                    <span class="help-inline"></span>                                                                    
                                                                </div> <!-- /controls -->				
                                                            </div>
                                                            <div class="control-group">											
                                                                <label class="control-label" for="emr phone">Emergency phone Number</label>
                                                                <div class="controls">
                                                                    <input type="text" class="input-medium" required="required" name="emrphone" />
                                                                    <span class="help-inline"></span>                                                                    
                                                                </div> <!-- /controls -->				
                                                            </div>
                                                            <div class="form-actions">
                                                                <button type="submit" class="btn btn-primary">Add</button> 
                                                                <a href="./home.php" class="btn">Cancel</a>
                                                            </div> <!-- /form-actions -->
                                                        </fieldset>
                                                    </form>

                                                </div>                                                
                                            </div>
                                        </div>
                                    </div> <!-- /widget-content -->
                                </div> <!-- /widget -->
                            </div> <!-- /span9 -->
                        </div> <!-- /row -->
                    </div> <!-- /span9 -->
                </div> <!-- /row -->
            </div> <!-- /container -->
        </div> <!-- /content -->
        <div id="footer">
            <div class="container">
                &copy; Abhaya Foundations Pvt Ltd
                <hr>
                <p></p>
            </div> <!-- /container -->
        </div> <!-- /footer -->
        <!-- Le javascript
        ================================================== -->
        <!-- Placed at the end of the document so the pages load faster -->
        <script src="./js/jquery-1.7.2.min.js"></script>
        <script src="./js/bootstrap.js"></script>
    </body>
</html>

