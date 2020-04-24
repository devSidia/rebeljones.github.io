<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Remove Doctor</title>
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
             <h1>Remove Doctor:</h1>
        </div>

        <div class="boxstacked">
            <?php
                //grab variables from previous screen.
                $licnum = $_POST["delete"];

                //select all doctor information that matches variable
                $query = 'SELECT * FROM doctor WHERE docLicNum="'.$licnum.'"';

                //catch error and display error message
                $result = mysqli_query($connection,$query);
                    if (!$result) {

                        die("<br> Error: ".mysqli_error($connection));
                    }


                if ($row = mysqli_fetch_assoc($result)) {
                    // new query to delete the doctor
                    $query2 = 'DELETE FROM doctor WHERE docLicNum="'.$licnum.'"';
                    echo "<h2>DOCTOR HAS BEEN DELETED</h2>";
                    $result2 = mysqli_query($connection,$query2);
                    
                    if (!$result2) {

                        die("Deleting the doctor from the table was unsuccessful!");
                    }
                }
            ?>
            
          </div>
              <?php
                 mysqli_close($connection);
              ?>
    </div>

</body>
</html>