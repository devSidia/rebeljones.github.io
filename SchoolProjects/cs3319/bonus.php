
<?php
    $query = 'SELECT * FROM doctor';

    $result = mysqli_query($connection,$query);
   if (!$result) {
        die("databases query failed.");
    }

    //create a table to store data
    echo '<table>';
    echo '<tr><th>Select</th><th>License Number</th><th>Doctor<br>First Name</th><th>Doctor<br>Last Name</tr>';
    while ($row = mysqli_fetch_assoc($result)) {
      // var_dump($row);
         //return a list of doctors
        echo '<tr>';
        echo '<td><input type="radio" name="doctor" value="';
        echo $row["docLicNum"];
        echo '"></td>'."<td>".$row["docLicNum"]."</td><td> ".$row["firstName"]."</td><td> ".$row["lastName"]."</td>";
        echo '</tr>';
   }
    echo '</table>';
   mysqli_free_result($result);

?>

