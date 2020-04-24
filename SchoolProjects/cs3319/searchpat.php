<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Patient Results</title>
<link rel="stylesheet" type="text/css" href="ss.css">
<link href="https://fonts.googleapis.com/css?family=Quicksand&display=swap" rel="stylesheet">
</head>

    <body>
<?php
include 'connecttodb.php';
?>
<div class="clearfix">
    <a href="in.php">Main</a>
    <div class="boxstacked">
         <h1>Patient Results:</h1>
    </div>

    <div class="boxstacked">
        <?php
            //grab variables from main screen.
            $doc = $_POST["doctor"];
            $pat = $_POST["patient"];

            $query = 'INSERT INTO treats VALUES("'.$doc.'","'.$pat.'")';
           
        
            //test query
             //echo 'SELECT firstname, lastname FROM patient WHERE ohip="'.$ohip.'"';

            //catch error and display error message
            $result = mysqli_query($connection,$query);
                if (!$result) {
                    die("T <br>Error:  ".mysqli_error($connection));
                }
            
                
                if ($row = mysqli_fetch_assoc($result)) {
                //var_dump($row);
                    echo 'Doc has been Assigned to patient';
                    
            }

         
        ?>
    </div>
         
        <?php
           mysqli_close($connection);
        ?>
</div>

</body>
</html>
