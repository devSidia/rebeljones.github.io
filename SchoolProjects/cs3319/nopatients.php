<?php
    //run query to find all doctors with no patients
    $query = 'SELECT * FROM doctor WHERE docLicNum NOT IN(SELECT docLicNum FROM treats);
';

    $result = mysqli_query($connection,$query);
   if (!$result) {
        die("databases query failed.");
    }

    //create a table to store data
    echo '<table>';
    echo '<tr><th>Doctor<br>First Name</th><th>Doctor<br>Last Name</th>';
    echo '</tr>';
   while ($row = mysqli_fetch_assoc($result)) {
      // var_dump($row);
         //return a list of doctors
        echo '<tr>';
        echo '<td>'.$row["firstName"]."</td><td>".$row["lastName"]."</td>";
        echo '</tr>';
   }
    echo '</table>';
   mysqli_free_result($result);

?>
