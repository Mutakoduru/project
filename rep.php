<?php
/*
  include('db_connect.php');
  $query = "select * from `pd` ";
  $result = mysql_query($query);
  $counter = 0;
  while($row = mysql_fetch_array($result)) {
  $pid[$counter] = $row['pid'];
  $pname[$counter] = $row['pname'];
  $city_name[$counter] = $row['dosage'];
  $gid[$counter] = $row['gid'];
  $counter++;
  }
 */
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>Reports upload</title>
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
                                <a href="rep.php">
                                    <i class="icon-user"></i>
                                    Home							
                                </a>
                            </li>
                            <li>
                                <a href="./viewUser.php">
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
                                                    <div class="tab-pane active" id="1">
                                                        <?php
                                                        echo '<h1>Report UPLOAD To Patient</h1>';
                                                        ?>
                                                        <form method="POST" action="repup.php" enctype="multipart/form-data">
                                                            <!-- max files size in bytes -->
                                                            <input type="hidden" name="MAX_FILE_SIZE" value="5000000" 			/>
                                                            <input type="file" name="myfile" class="btn-large" /><br />
                                                            <input type="submit" value="Submit" class="btn btn-primary"  />
                                                        </form>
                                                    </div>                          

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
            <!--&copy; Abhaya Foundations Pvt Ltd<hr>-->
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

