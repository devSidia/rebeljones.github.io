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
            $ohip = $_POST["patient"];
            
            //insert record into treats table
            $query = 'INSERT INTO treats (docLicNum, ohip) VALUES("'.$doc.'",'.$ohip.')';

            //catch error and display error message
            $result = mysqli_query($connection,$query);
                if (!$result) {
                    die("Error:  DUPLICATE ENTRY <br> Doctor has ALREADY been assigned to THIS patient");
                }else{
                    //let user know system has completed the task
                    echo 'Doctor has been assigned to patient';
                    
                }
        ?>
    </div>

        <?php
           mysqli_close($connection);
        ?>
</div>

</body>
</html>
