<!DOCTYPE html>
<html>
    <head>
    <meta charset="utf-8">
    <title>Doctors</title>
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
         <h1>Available Doctors:</h1>
    </div>
    
    
    <div class="boxstacked">
    <form action ="docdata.php" method="post">
        <?php
        
            //grab variables from main page
            $order = $_POST["order"];
            $sort = $_POST["sort"];
        
            //select all doctors with variable data
            $query = "SELECT * FROM doctor ORDER BY ".$order."".$sort.""; 

            $result = mysqli_query($connection,$query);

            if (!$result) {
                die("Please go back and select Order By and Sort By.");
            }

                //put data in a table
                echo '<table>';
                echo '<tr>';
                echo '<th>Select</th><th>First Name</th><th>Last Name</th></tr>';
                while ($row = mysqli_fetch_assoc($result)) {
                    //var_dump($row);
                    echo '<tr>';
                    echo '<td><input type="radio" name="doctor" value="';
                    echo $row["docLicNum"];
                    echo '"></td>'."<td> ".$row["firstName"]."</td><td> ".$row["lastName"]."</td>";
                    echo '</tr>';
                }
                mysqli_free_result($result);
                
            echo '</tr>';
            echo '</table>';
            echo '<input type="submit">';
            //echo '</form>'
        ?>
        </form>
    </div>
    
        <?php
           mysqli_close($connection);
        ?>
</div>

</body>
</html>