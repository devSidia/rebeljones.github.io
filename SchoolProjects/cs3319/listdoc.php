<?php
    $query = "SELECT * FROM doctor ORDER BY firstName ASC";
    
    $result = mysqli_query($connection,$query);
   if (!$result) {
        die("databases query failed.");
    }

    //display list of doctor information
   while ($row = mysqli_fetch_assoc($result)) {
       //var_dump($row);
        echo '<option value="';
        echo $row["docLicNum"];
        echo '">'.$row["docLicNum"].": ".$row["firstName"]." ".$row["lastName"];
        echo '</option>';
   }
   mysqli_free_result($result);

?>
