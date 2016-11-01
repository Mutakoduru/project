<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>Reports download</title>
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
        <script type="text/javascript">
            function getDosage()
            {


            }
        </script>

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
                    <a class="brand" href="./">Diagnostics Lab</a>
                    <div class="nav-collapse">
                        <ul class="nav pull-right">
                            <li class="divider-vertical"></li>
                            <li class="dropdown">
                                <a data-toggle="dropdown" class="dropdown-toggle " href="#"><b class="caret"></b>							
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
                                <a href="./home.php">
                                    <i class="icon-user"></i>
                                    Home							
                                </a>
                            </li>
                            <li>
                                <a href="./vp.php">
                                    <i class="icon-user"></i>
                                    View Patinet						
                                </a>
                            </li>

                        </ul>	
                        <hr />
                        <br />
                    </div> <!-- /span3 -->


                    <div class="span9">
                        <h1 class="page-title">
                            <i class="icon-th-large"></i>Reports</h1>
                        <div class="row">

                            <div class="span9">

                                <div class="widget">

                                    <div class="widget-header">
                                        <h3>&nbsp;</h3>
                                    </div> <!-- /widget-header -->
                                    <div class="widget-content">
                                        <div class="tabbable">  
                                            <div class="tab-content">
                                                <div class="tab-pane active" id="1">
                                                    <form class="form-horizontal" method="POST" enctype="multipart/form-data" action="/uploads/#?id=$id">
                                                        <fieldset>
                                                            <div class="control-group">											
                                                                <label class="control-label" for="firsname">Patient ID</label>
                                                                <div class="controls">
                                                                    <input type="text" required="required" class="input-medium" id="id" name="id" value="" />
                                                                </div> <!-- /controls -->				
                                                            </div> <!-- /control-group -->
                                                            <div class="control-group">
                                                                <div class="controls"></div>
                                                            </div>
                                                            <div class="control-group"></div> <!-- /control-group -->                                                           
                                                            <div class="form-actions">
                                                                <a href="uploads/"><button type="button" class="btn btn-primary" >Reports download</button> </a>
                                                                <a href="./home.php" class="btn">Cancel</a>
                                                            </div> <!-- /form-actions -->
                                                        </fieldset>
                                                    </form>
                                                </div>
                                                <div>

                                                    <div class="control-group" id="hid" style="visibility:hidden" >											
                                                        <label class="control-label"for="t" >Patient ID</label>
                                                        <div class="controls">
                                                            <input type="text" required="required"  class="input-medium" id="pid" name="pid" value="" />
                                                        </div> <!-- /controls -->				
                                                    </div> <!-- /control-group -->

                                                </div>                                                   


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