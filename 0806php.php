<!DOCTYPE HTML>
<html>
    <head>
        <meta charset="utf-8">
        <title>Dio!!</title>
    </head>
    <body>
        <?php
            $link = mysqli_connect("35.234.30.242", "root", "629262034") or die("cannot connect la");
            echo "success";
            
            mysqli_select_db($link, "test1" ) or die("cannot connect this db la oi");
            echo "success connect db";
        ?>

    </body>
    
</html>