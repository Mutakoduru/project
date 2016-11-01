<?php
include('db_connect.php');
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>patient details</title>
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
                    <a class="brand" href="./">Patient details</a>
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
                                <a href="./patient.php">
                                    <i class="icon-user"></i>
                                    Add Patient							
                                </a>
                            </li>
                            <li>
                                <a href="./Editpatient.php">
                                    <i class="icon-user"></i>
                                    Edit patient						
                                </a>
                            </li>
                        </ul>	
                        <hr />
                        <br />
                    </div> <!-- /span3 -->



                    <div class="span9">
                        <h1 class="page-title">
                            <i class="icon-th-large"></i>
                            patient Details				
                        </h1>
                        <div class="row">

                            <div class="span9">

                                <div class="widget">

                                    <div class="widget-header">
                                        <h3>Patient Information</h3>
                                    </div> <!-- /widget-header -->
                                    <div class="widget-content">
                                        <div class="tabbable">
                                            <div class="tab-content">
                                                <div class="tab-pane active" id="1">
                                                    <table class="table table-striped table-bordered">
                                                        <thead>
                                                            <tr>
                                                                <th>patient Id</th>
                                                                <th>First Name</th>
                                                                <th>Last Name</th>
                                                                <th>Gender</th>
                                                                <th>Blood Group</th>
                                                                <th>Phone</th>
                                                                <th>Email</th>
                                                                <th>City</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            <?php
                                                            try {
                                                                $pdo = new PDO('mysql:host=localhost;dbname=chistar', $username, $password);
                                                                $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                                                                $result = $pdo->query('SELECT * FROM patient');
                                                                while ($patient = $result->fetch()) {
                                                                    ?>    
                                                                    <tr>
                                                                        <td><?php echo $patient['pid'] ?></td>
                                                                        <td><?php echo $patient['fname'] ?></td>
                                                                        <td><?php echo $patient['lname'] ?></td>
                                                                        <td><?php echo $patient['gender'] ?></td>
                                                                        <td><?php echo $patient['blood group'] ?></td>
                                                                        <td><?php echo $patient['phone'] ?></td>
                                                                        <td><?php echo $patient['mail id'] ?></td>
                                                                        <td><?php echo $patient['city'] ?></td>
                                                                    </tr>
                                                                    <?php
                                                                }
                                                            } catch (PDOException $e) {
                                                                echo 'Error: ' . $e->getMessage();
                                                            }

                                                            /* $query = "SELECT * FROM 05_properties where is_deleted = '0'";
                                                              $result = mysql_query($query);
                                                              $i = '1';
                                                              while ($row = mysql_fetch_row($result)) {
                                                              $id = $row['0'];
                                                              $name = $row['1'];
                                                              ?>
                                                              <tr>
                                                              <td><?php echo $i ?></td>
                                                              <td><?php echo $name ?></td>
                                                              <td class="action-td">
                                                              <a href="editProperties.php?id=<?php echo $id ?>" class="btn btn-small btn-success">
                                                              <i class="icon-edit"></i>
                                                              </a>
                                                              </td>
                                                              <td>
                                                              <a href="deleteProperties.php?id=<?php echo $id ?>" class="btn btn-small btn-danger">
                                                              <i class="icon-remove"></i>
                                                              </a>
                                                              </td>
                                                              </tr>
                                                              <?php
                                                              $i++;
                                                              } */
                                                            ?>
                                                        </tbody>
                                                    </table>
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

