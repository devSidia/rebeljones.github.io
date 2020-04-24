<?php
    //grab radio button values and insert into SQL statement
    $order = $_POST["order"];
    $sort = $_POST["sort"];
    $query = "SELECT * FROM doctor ORDER BY '".$order."'".$sort."'";
    $result = mysqli_query($connection,$query);
   if (!$result) {
        die("databases query failed.");
    }
    //create a table to keep data organized
        echo '<table>';
        echo '<tr>';
        echo '<th>Select</th><th>Licence</th><th>First Name</th><th>Last Name</th><th>Speciality</th><th>Licence Date</th><th>Hospital</th></tr>';
   while ($row = mysqli_fetch_assoc($result)) {
       //var_dump($row);
       // table starts with a radio button that is linked to docLicNum
        echo '<tr>';
        echo '<td><input id="btn" type="radio" name="doctor" value="';
        echo $row["docLicNum"];
        echo '"></td>'."<td>".$row["docLicNum"]."</td><td> ".$row["firstName"]."</td><td> ".$row["lastName"]."</td><td> ".$row["speciality"]."</td><td> ".$row["licenseDate"]." </td><td>".$row["hosWorksAt"]."</td>";
        echo '</tr>';
        
   }
   mysqli_free_result($result);
echo '</tr>';
echo '</table>';
?>