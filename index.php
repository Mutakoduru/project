<?php
session_start();
include("db_connect.php");
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <title>Login</title>
         <link href="./css/bootstrap.min.css" rel="stylesheet">
        <link href="./css/bootstrap-responsive.min.css" rel="stylesheet">
        <link href="http://fonts.googleapis.com/css?family=Open+Sans:400italic,600italic,400,600" rel="stylesheet">
        <link href="./css/adminia.css" rel="stylesheet"> 
        <link href="./css/adminia-responsive.css" rel="stylesheet"> 
        <link rel="stylesheet" href="style.css" media="screen, projection"/>
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
                    <div id="subsidebar2"><a href="index.php">Home</a>
                    </div>
                    <div id="subsidebar2"><a href="aboutus.php">About Us</a> 
                    </div>
                </div>
                <!-- end #sidebar1 -->
            </div>
            <div id="mainContent">
                <div id="mainContent1">
                    <div id="middletxtheadermain">
                        <div id="middletxtheader"><div align="center"><img src="images/name.png" alt="Login Please" width="650" height="250" /> </div></div>
                    </div>
                    <div id="middletxt">
                        <form action="" method="post" name="frm_login" id="frm_login" enctype="multipart/form-data">
                            <table width="100%" border=0>
                                <tr>
                                    <td height="22"><table align="center" width="100%" border=0>
                                            <tr>
                                                <th colspan="3" bgcolor="pink" id="formhedear"><center><h3>we serve you as <i>THE MOTHER</i> served the nation</h3></center></th>
                                            </tr>

                                            <tr>
                                                <td rowspan="4" id="formhedear"><div align="right"><img src="images/logo.jpg" alt="Login Please" width="300" height="200" /> </div></td>
                                            </tr>

                                            <tr>
                                                <td width="100" height="87"><div align="right"><strong><font color="#FF0000"></font>User Name : </strong></div></td>
                                                <td width="298"><input type="textbox" name="txt_username" id="txt_username" maxlength="20" style="width:176px;"
                                                                       onChange="document.getElementById('txt_username').value = trim(this.value);"/>
                                                    </div></td>
                                            </tr>
                                            <tr>
                                                <td width="45" height="27"><div align="right"><strong><font color="#FF0000"></font>Password : </strong></div></td>
                                                <td width="28"><input type="password" name="txt_password" id="txt_password" maxlength="20" style="width:176px;"
                                                                      onChange="document.getElementById('txt_password').value = trim(this.value);"/></td>
                                            </tr>
                                            <tr>
                                                <td colspan="2"width="50" align="center">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                                    <input type="submit" id="submitMain" name="submitMain" value="Login" Onclick="return check(this.form);" />
                                                    &nbsp;&nbsp;&nbsp;
                                                </td>
                                            </tr>

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
                                if ($user == phy)
                                    echo "<script>window.location='rep.php';</script>";
                                if ($user == ent)
                                    echo "<script>window.location='s1.php';</script>";
                                if ($user == card)
                                    echo "<script>window.location='s2.php';</script>";
                                if ($user == hae)
                                    echo "<script>window.location='s3.php';</script>";
                                if ($user == nue)
                                    echo "<script>window.location='s4.php';</script>";
                                if ($user == ortho)
                                    echo "<script>window.location='s5.php';</script>";
                                if ($user == dia)
                                    echo "<script>window.location='dosage.php';</script>";
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
                <!--(C) Copyright Abhaya Foundations Pvt. Limited*/ -->
                <!-- end #footer -->
            </div>
            <!-- end #container -->
        </div>
    </body>
</html>