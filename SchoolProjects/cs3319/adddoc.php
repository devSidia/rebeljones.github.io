<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>New Doctor</title>
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
         <h1>Add New Doctor:</h1>
    </div>
    
    <div class="boxstacked">
        <?php
            //grab variables from main screen.
            $licnum = $_POST["docLicNum"];
            $fname = $_POST["firstName"];
            $lname = $_POST["lastName"];
            $spec = $_POST["speciality"];
            $licdate = $_POST["licenseDate"];
            $hos = $_POST["hospital"];
        
            //insert variables into doctor table
            $query2 = 'INSERT INTO doctor(docLicNum, firstName, lastName, speciality, licenseDate, hosWorksAt) VALUES( "'.$licnum.'","'.$fname.'","'.$lname.'","'.$spec.'","'.$licdate.'","'.$hos.'");';
        
            //catch error and display error message
            $result = mysqli_query($connection,$query2);
                if (!$result) {
                    die("Adding a new doctor to the table was unsuccessful! <br> Please ensure you have filled out oull fields");
                }
            
            //display if insert successful
            echo 'DOCTOR HAS BEEN SUCCESSFULLY ADDED';
              
        ?>
        
        </div>
        <?php
           mysqli_close($connection);
        ?>
</div>

</body>
</html>   