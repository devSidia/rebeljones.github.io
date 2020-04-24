<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Unassign</title>
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
         <h1>Unassign Doctor and Patient:</h1>
    </div>

    <div class="boxstacked">
        <?php
            //grab variables from main screen.
            $doc = $_POST["doctor"];
            $ohip = $_POST["patient"];

            //make sure doc is assigned to patient
            $query = 'SELECT * FROM treats WHERE docLicNum ="'.$doc.'" AND ohip="'.$ohip.'"';

            //catch error and display error message
           $result = mysqli_query($connection,$query);
           if (!$result) {
               die("Error:  ".mysqli_error($connection));
             }

            if ($row = mysqli_fetch_assoc($result)){

              //remove assignment
              //display message once completed
              $query = 'DELETE FROM treats WHERE docLicNum ="'.$doc.'" AND ohip="'.$ohip.'"';
              echo 'DOCTOR HAS BEEN UNASSIGNED FROM PATIENT:<br>';
              $result = mysqli_query($connection,$query);

              //search for patient via OHIP
              //display patient name
              $query2='SELECT * FROM patient WHERE ohip="'.$ohip.'"';
              $result2 = mysqli_query($connection,$query2);

              echo '<div class=box1>';
                    echo '</div>';
                    echo '<div class=box2>';
                    //create a table to store data
                    echo '<table>';
                    echo '<tr><th>Patient First Name</th><th>Patient Last Name</th></tr>';
                    //display list of hospital information
                    while ($row = mysqli_fetch_assoc($result2)) {
                       //var_dump($row);
                        //return name of patient
                        echo '<tr>';
                        echo '<td>'.$row["firstname"].'</td><td>'.$row["lastname"].'</td>';
                        echo '</tr>';
                    
                        }
              echo '</table>';
              echo '</div>';
            }
            else {
              echo 'PATIENT WAS NOT ASSIGNED TO DOCTOR, TRY AGAIN!';
            }

?>
  </div>

    <?php
    mysqli_close($connection);
    ?>
</div>

</body>
</html>

