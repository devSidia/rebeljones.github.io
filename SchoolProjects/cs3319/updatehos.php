<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Update Hospital</title>
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
         <h1>Update Hospital:</h1>
    </div>

    <div class="boxstacked">
        <?php
            //grab variables from main screen.
            $hos = $_POST["hospital"];
            $newname=$_POST["name"];

            //insert variables into doctor table
            $query = 'UPDATE hospital SET name="'.$newname.'" WHERE hosCode="'.$hos.'";';

            //test query
            // echo 'UPDATE hospital SET name="'.$newname.'" WHERE hosCode="'.$hos.'";';


            //catch error and display error message
            $result = mysqli_query($connection,$query);
                if (!$result) {
                    die("Updating hospital was unsuccessful! <br>Error:  ".mysqli_error($connection));
                }

            //display if insert successful
            echo 'Hospital Name has been updated';
        
            // select data from all hospital tables
            $query2 = 'SELECT * FROM hospital;';
            
            //catch error and display error message
            $result2 = mysqli_query($connection,$query2);
                if (!$result) {
                    die("Retreiving hospital information was unsuccessful! <br>Error:  ".mysqli_error($connection));
                }
            echo '<table><tr>';
            echo '<th>Hospital Code</th><th>Hospital Name</th><th>City</th><th>Province</th></tr>';
            while ($row = mysqli_fetch_assoc($result2)) {
                //var_dump($row);
                //return a list of hospitals
                echo '</tr><td>'.$row["hosCode"]."</td><td>".$row["name"]."</td><td>".$row["city"]."</td><td>".$row["province"]."</td></tr>";
            }
            echo '</table>';
        ?>
    </div>
         
        <?php
           mysqli_close($connection);
        ?>
</div>

</body>
</html>
