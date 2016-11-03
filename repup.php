
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>status</title>
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
        <div class="form-actions">
            <button type="button" class="btn btn-primary"  onClick="getDosage()"> Home </button> 
            <a href="./rep.php" class="btn">Back</a>

        </div> <!-- /form-actions -->

        <?php
        $pid = $_POST['pid'];
        $time = date("Y-m-d")."-".time();
        $filename = $pid."-".$time ;
        $store = "uploads/".$filename;
        print_r($_FILES);
        echo '<br>';
        $allowedExts = array("pdf", "jpeg", "jpg", "gif", "png");
        $arr = explode(".", $_FILES["myfile"]["name"]);
        $extension = end($arr);
        echo "$extension";
        if ((($_FILES["myfile"]["type"] == "application/pdf") || ($_FILES["myfile"]["type"] == "image/jpeg") || ($_FILES["myfile"]["type"] == "image/png")) && in_array($extension, $allowedExts)) {
            if ($_FILES["myfile"]["error"] > 0) {
                echo "Return Code: " . $_FILES["myfile"]["error"] . "<br>";
            } else {
                echo "Upload: " . $_FILES["myfile"]["name"] . "<br>";
                echo "Type: " . $_FILES["myfile"]["type"] . "<br>";
                echo "Size: " . ($_FILES["myfile"]["size"] / 1024) . "kB<br>";
                echo "Temp file: " . $_FILES["myfile"]["tmp_name"] . "<br>";

                if (file_exists("uploads/" . $_FILES["myfile"]["name"])) {
                    echo $_FILES["myfile"]["name"] . " already exists. ";
                } else {
                    move_uploaded_file($_FILES["myfile"]["tmp_name"], $store.".".$extension);
                    echo "Stored in: " .$store.".".$extension;
                }
            }
        } else {
            echo "Invalid file";
        }
        ?>
    </body> 
</html>
