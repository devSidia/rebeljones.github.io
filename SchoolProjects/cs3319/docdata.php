<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Doctor Information</title>
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
         <h1>Doctor Information:</h1>
    </div>
    
    <div class="boxstacked">
        <?php
        
            $docnum = $_POST["doctor"];
            
            $query = 'SELECT docLicNum, firstName, lastName, speciality, licenseDate, hosWorksAt, name FROM doctor, hospital WHERE docLicNum ="'.$docnum.'" AND hosWorksAt = hosCode';
            
            //test query
            /*echo 'SELECT docLicNum, firstName, lastName, speciality, licenseDate, hosWorksAt, name FROM doctor, hospital WHERE docLicNum ="'.$docnum.'" AND hosWorksAt = hosCode';*/
            

            $result = mysqli_query($connection,$query);

            if (!$result) {
                die("Getting Doctor Data Failed.");
            }

                echo '<table>';
                echo '<tr>';
                echo '<th>Licence</th><th>First Name</th><th>Last Name</th><th>Speciality</th><th>License Date</th><th>Hospital</th><th>Hospital Name</th></tr>';
                while ($row = mysqli_fetch_assoc($result)) {
                //var_dump($row);
                    echo '<tr>';
                    echo '<td>'.$row["docLicNum"]."</td><td> ".$row["firstName"]."</td><td> ".$row["lastName"]."</td><td> ".$row["speciality"]."</td><td> ".$row["licenseDate"]." </td><td>".$row["hosWorksAt"]."</td><td>".$row["name"]."</td>";
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