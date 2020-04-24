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
            //grab variables from main screen.
            $licnum = $_POST["doctor"];    
            
            //select all records that include doctors treating patients
            $query = 'SELECT * FROM patient WHERE ohip IN (SELECT ohip FROM treats WHERE docLicNum IN (SELECT docLicNum FROM doctor WHERE docLicNum = "'.$licnum.'"))';

            //catch error and display error message
            $result = mysqli_query($connection,$query);
                if (!$result) {

                    die("<br> Retreiving the doctor from the table was unsuccessful! <br>Error:  ".mysqli_error($connection));
                }

            // if doctor treating patient display this message
            if ($row = mysqli_fetch_assoc($result)) {
                echo "<h2>DOCTOR IS CURRENTLY TREATING A PATIENT!</h2>";             
                //var_dump($row);
            }
            echo "<h3>Are you sure you want to delete the doctor?</h3>";
            
        ?>
        
        <div class="inboxstacked">
            <form action="remdocconf.php" method="post">
                <div class="box1">
                    <a id="cancelbtn" href="in.php">Cancel</a>
                </div>
                <div class="box2">
                    <?php       
                        echo '<input id="delete" name="delete" type="hidden" value="'.$licnum.'">';
                    ?>
                    <input type="Submit" name="Delete Doctor">
                </div>
            </form>
            
        </div>
      </div>
          <?php
             mysqli_close($connection);
          ?>
</div>

</body>
</html>
