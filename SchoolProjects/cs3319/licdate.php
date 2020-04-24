<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Doctor License Information</title>
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
         <h1>Doctor License Information:</h1>
    </div>
    
    <div class="boxstacked">
        <?php
            //license variable from main screen.
            $licdate = $_POST["licdate"];
            //select from doctor where license date fall before user entered license date
            $query = 'SELECT firstName, lastName, speciality, licenseDate FROM doctor WHERE licenseDate <"'.$licdate.'"';
            
            //test query
           // echo  'SELECT firstName, lastName, speciality, licenseDate FROM doctor WHERE licenseDate <"'.$licdate.'"';
            

            $result = mysqli_query($connection,$query);

            if (!$result) {
                die("Getting Doctor Data Failed.");
            }

                echo '<table>';
                echo '<tr>';
                // table header
                echo '<th>First Name</th><th>Last Name</th><th>Speciality</th><th>License Date</th></tr>';
                while ($row = mysqli_fetch_assoc($result)) {
                //var_dump($row);
                    echo '<tr>';
                    echo '<td>'.$row["firstName"]."</td><td>".$row["lastName"]."</td><td> ".$row["speciality"]."</td><td> ".$row["licenseDate"]."</td>";
                    echo '</tr>';
                }
                mysqli_free_result($result);
                
            echo '</tr>';
            echo '</table>';

        ?>
    </div>
    
        <?php
           mysqli_close($connection);
        ?>
</div>

</body>
</html>   