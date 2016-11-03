
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>General Doctor</title>
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
                    <a class="brand" href="./">Patient Details</a>
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
                                <a href="./dhome.php">
                                    <i class="icon-user"></i>
                                    Home							
                                </a>
                            </li>
                            <li>
                                <a href="./adetails.php">
                                    <i class="icon-user"></i>
                                    Add details						
                                </a>
                            </li>
                        </ul>	
                        <hr />
                        <br />
                    </div> <!-- /span3 -->



                    <div class="span9">
                        <h1 class="page-title">
                            <i class="icon-th-large"></i>
                            View Details			
                        </h1>
                        <div class="row">

                            <div class="span9">

                                <div class="widget">

                                    <div class="widget-header">
                                        <h3>Add Patient details</h3>
                                    </div> <!-- /widget-header -->
                                    <div class="widget-content">
                                        <div class="tabbable">  
                                            <div class="tab-content">
                                                <div class="tab-pane active" id="1">
                                                    <form class="form-horizontal" method="POST" enctype="multipart/form-data" action="#">
                                                        <fieldset>
                                                            <div class="control-group">											
                                                                <label class="control-label" for="firstname">PatientID</label>
                                                                <div class="controls">
                                                                    <input type="text" required="required" class="input-medium" id="pid" name="pid" value="" />
                                                                    <span class="help-inline"></span>
                                                                </div> <!-- /controls -->				
                                                            </div> <!-- /control-group -->
                                                            <div class="control-group">	
                                                                <label class="control-label" for="Tobacco">Tobacco</label>
                                                                <div class="controls">
                                                                    <input type="radio" name="tobacco" value="yes">&nbsp;&nbsp;Yes &nbsp;&nbsp;&nbsp;
                                                                    <input type="radio" name="tobacco" value="no">&nbsp;&nbsp;No<br>
                                                                    <span class="help-inline"></span>
                                                                </div> <!-- /controls -->
                                                            </div> <!-- /control-group -->	
                                                            <div class="control-group">	
                                                                <label class="control-label" for="alcohol">Alcohol</label>
                                                                <div class="controls">
                                                                    <input type="radio" name="alcohol" value="yes">&nbsp;&nbsp;Yes&nbsp;&nbsp;&nbsp;
                                                                    <input type="radio" name="alcohol" value="no">&nbsp;&nbsp;No<br>
                                                                    <span class="help-inline"></span>
                                                                </div> <!-- /controls -->
                                                            </div> <!-- /control-group -->		

                                                            <div class="control-group">											
                                                                <label class="control-label" for="firstname">BP</label>
                                                                <div class="controls">
                                                                    <input type="text" required="required" class="input-medium" id="bp" name="bp" value="" />
                                                                    <span class="help-inline"></span>
                                                                </div> <!-- /controls -->				
                                                            </div> <!-- /control-group -->
                                                            <div class="control-group">											
                                                                <label class="control-label" for="sugar">Sugar</label>
                                                                <div class="controls">
                                                                    <input type="text" required="required" class="input-medium" id="sugar" name="sugar" value="" />
                                                                    <span class="help-inline"></span>
                                                                </div> <!-- /controls -->				
                                                            </div> <!-- /control-group -->
                                                            <div class="control-group">											
                                                                <label class="control-label" for="desc">Problem Description</label>
                                                                <div class="controls">
                                                                    <textarea required="required" class="input-medium" id="pdesc" name="pdesc" rows="5" cols="40" value=""></textarea>
                                                                    <span class="help-inline"></span>
                                                                </div> <!-- /controls -->	
                                                            </div> <!-- /control-group -->	
                                                            <br>
                                                            <div class="control-group">
                                                                <label class="control-label" for="desc">Tests Referred</label>
                                                                <div class="controls">
                                                                    <textarea required="required" class="input-medium" id="test" name="test" rows="5" cols="40" value=""></textarea>
                                                                    <span class="help-inline"></span>
                                                                </div> <!-- /controls -->				
                                                            </div> <!-- /control-group -->

                                                            <div class="control-group">
                                                                <label class="control-label" for="desc">Provide dosage</label>
                                                                <div class="controls">
                                                                    <textarea required="required" class="input-medium" id="dose" name="dose" rows="5" cols="40" value=""></textarea>
                                                                    <span class="help-inline"></span>
                                                                </div> <!-- /controls -->				
                                                            </div> <!-- /control-group -->
                                                            <div class="control-group">											
                                                                <label class="control-label" for="firstname">Departments</label>
                                                                <div class="controls">
                                                                    <input type="radio" name="dept" value="4">ENT<br>
                                                                    <input type="radio" name="dept" value="1">Cardiology<br>
                                                                    <input type="radio" name="dept" value="5">Orthopedics<br>
                                                                    <input type="radio" name="dept" value="2">Hematology<br>
                                                                    <input type="radio" name="dept" value="3">Neurology
                                                                    <span class="help-inline"></span>
                                                                </div> <!-- /controls -->				
                                                            </div> <!-- /control-group -->																							
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

<?php
include 'db_connect.php';
$id = $_POST['id'];
$tobacco = $_POST['tobacco'];
$alcohol = $_POST['alcohol'];
$bp = $_POST['bp'];
$sugar = $_POST['sugar'];
$pdesc = $_POST['pdesc'];
$test = $_POST['test'];
$dose = $_POST['dose'];
$dept = $_POST['dept'];

$query = "INSERT INTO `pdetails` (`id`,`tobacco`,`alcohol`,`bp`,`sugar`,`pdesc`,`test`,`dose`,`dept`) VALUES 
    ('" . $id . "','" . $tobacco . "','" . $alcohol . "','" . $bp . "','" . $sugar . "','" . $pdesc . "','" . $test . "','" . $dose . "','" . $dept . "')";
echo "s";

$result = mysql_query($query) or die('Can not insert because ' . mysql_error());
echo mysql_affected_rows();
if (mysql_affected_rows()) {
    // header('Location: viewp.php');
}
?>
