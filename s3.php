<?php
session_start();
include("db_connect.php");
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <title>Login</title>
        <link href="css/online.css" rel="stylesheet" type="text/css" />
        <script type="text/javascript" src="js/functions.js"></script>
        <style type="text/css" media="all">
            @import "online.css";
        </style>
        <script language="javascript">
            function check()
            {
                if (document.getElementById("txt_username").value == "")
                {
                    alert('Please Enter user name !!');
                    document.getElementById("txt_username").focus();
                    return false;
                }
                if (document.getElementById("txt_password").value == "")
                {
                    alert('Please Enter password !!');
                    document.getElementById("txt_password").focus();
                    return false;
                }
                if (isUcase(document.getElementById("txt_username").value) == false || isUcase(document.getElementById("txt_password").value) == false)
                {
                    alert("Username and Password not match!!");
                    document.getElementById("txt_username").value = "";
                    document.getElementById("txt_password").value = "";
                    document.getElementById("txt_username").focus();
                    return false;
                }
            }
        </script>
    </head>

    <body class="twoColFixLtHdr">
        <div id="header">
            <!-- end #header -->
        </div>
        <div id="container">
            <div id="container1"></div>  
            <div id="sidebar1">
                <div id="subsidebar1">
                    <div id="subsidebar3"> Navigation </div>
                    <div id="subsidebar2"><a href="s3.php">Home</a>
                    </div>
                    <div id="subsidebar2"><a href="aboutus.php">About Us</a> 
                    </div>
                </div>
                <!-- end #sidebar1 -->
            </div>
            <div id="mainContent">
                <div id="mainContent1">
                    <div id="middletxtheadermain">
                        <div id="middletxtheader"><div align="center"><img src="images/c1.jpg" alt="Login Please" width="650" height="250" /> </div></div>
                    </div>
                    <div id="middletxt">
                        <form action="" method="post" name="frm_login" id="frm_login" enctype="multipart/form-data">
                            <table width="100%" border=0>
                                <tr>
                                    <td height="22"><table align="center" width="100%" border=0>
                                            <tr>
                                                <th colspan="3" bgcolor="pink" id="formhedear"><center><h3>Blood alone moves the wheels of history</h3></center></th>
                                            </tr>

                                            <tr>
                                                <td rowspan="4" id="formhedear"><div align="right"><img src="images/c2.jpg" alt="Login Please" width="300" height="200" /> </div></td>
                                            </tr>

                                            <tr>
                                                <td colspan="2"width="250" height="97" align="center">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                                    <a href="dhome.php"/><input type="button" id="submitMain" name="button" value="Doctor"></a>
                                                        &nbsp;&nbsp;&nbsp;
                                                </td>
                                            </tr>
                                            <td colspan="2"width="250" align="center">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                                <a href="sp.php"/><input type="button" id="submitMain" name="submitMain" value="Specialist" ><a />
                                                    &nbsp;&nbsp;&nbsp;
                                            </td>
                                            <tr>


                                        </table></td>
                                </tr>
                            </table>
                        </form>

                        <?php
                        if (isset($_POST['submitMain'])) {
                            $user = $_POST['txt_username'];
                            $password = $_POST['txt_password'];
                            $query = mysql_query("SELECT * FROM login WHERE uname = '$user' AND password = '$password' ")
                                    or die(mysql_error());
                            if (mysql_num_rows($query) > 0) {
                                //$_SESSION['user']=$user;
                                if ($user == admin)
                                    echo "<script>window.location='patient.php';</script>";
                                if ($user == pharm)
                                    echo "<script>window.location='lab1.php';</script>";
                            }
                            else {
                                echo '<div align="center"><strong><font color="#FF0000">User Name & Password not match !!</font></Strong></div>';
                            }
                        }
                        @mysql_close($con);
                        ?>

                        <!-- end #middletxt -->
                    </div>
                </div>
                <!-- end #mainContent -->
            </div>
            <!-- This clearing element should immediately follow the #mainContent div in order to force the #container div to contain all child floats -->
            <div id="footer">
                (C) Copyright CYTOCELL Pvt. Limited
                <!-- end #footer -->
            </div>
            <!-- end #container -->
        </div>
    </body>
</html>