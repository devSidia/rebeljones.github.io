<?php

    $query = "SELECT * FROM hospital";
    $result = mysqli_query($connection,$query);
   if (!$result) {
        die("databases query failed.");
    }
    //display list of hospital information
   while ($row = mysqli_fetch_assoc($result)) {
       //var_dump($row);
        //return a list of hospitals
        echo '<option value="';
        echo $row["hosCode"];
        echo '">'.$row["hosCode"]." : ".$row["name"]." - ".$row["city"].", ".$row["province"];
        echo '</option>';
   }
   mysqli_free_result($result);

?>
