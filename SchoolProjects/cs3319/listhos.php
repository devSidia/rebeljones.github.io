<?php

    $query = "SELECT h.name, h.headDocStartDate, d.firstName, d.lastName from hospital h, doctor d WHERE h.headDoc=d.docLicNum ORDER BY h.name ASC";

    $result = mysqli_query($connection,$query);
   if (!$result) {
        die("databases query failed.");
    }

    //create a table to store data
    echo '<table>';
    echo '<tr><th>Hospital Name</th><th>Head Doctor<br>First Name</th><th>Head Doctor<br>Last Name</th><th>Head Doctor<br>Start Date</th>';
    echo '</tr>';
    //display list of hospital information
   while ($row = mysqli_fetch_assoc($result)) {
       //var_dump($row);
        //return a list of hospitals
        echo '<tr>';
        echo '<td>'.$row["name"].'</td><td>'.$row["firstName"]."</td><td>".$row["lastName"]."</td><td>".$row["headDocStartDate"]."</td>";
        echo '</tr>';
   }
    echo '</table>';
   mysqli_free_result($result);

?>
