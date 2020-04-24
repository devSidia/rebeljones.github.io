<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>View Image</title>
<link rel="stylesheet" type="text/css" href="ss.css">
<link href="https://fonts.googleapis.com/css?family=Quicksand&display=swap" rel="stylesheet">
</head>

    <body>
<?php
include 'connecttodb.php';
?>
<div class="clearfix">
    <a href="in.php">Main</a>

        <?php
            //grab variables from main screen.
            $doc = $_POST["doctor"];


            $query = 'SELECT * FROM doctor WHERE docLicNum ="'.$doc.'" AND docimage IS NOT NULL';

            //TEST QUERY
            //echo 'SELECT docimage FROM doctor WHERE docLicNum ="'.$doc.'" AND docimage IS NOT NULL';

            //catch error and display error message
            $result = mysqli_query($connection,$query);
                if (!$result) {
                    die("Error:  ".mysqli_error($connection));
                }

                //if select works - show image and namoe of doctor
            if ($row = mysqli_fetch_assoc($result)) {

                    echo '<div class="boxstacked">';
                    echo '<h1>View Doctor Image:</h1>';
                    echo '</div>';

                    echo'<div class="boxstacked">';
                        echo '<div class="inboxstacked">';
                            echo '<img src="';
                            echo $row["docimage"];
                            echo '">';
                            echo '</div>';
                            echo '<div class="inboxstacked">';
                            echo 'Doctor: '.$row["firstName"].' '.$row["lastName"];
                        echo '</div>';
                echo '</div>';
                }
            else{

            //display if image field is empty
            $query2='SELECT * FROM doctor WHERE docLicNum ="'.$doc.'" AND docimage="" OR docimage IS NULL';
            //create a table to store data
             $result2 = mysqli_query($connection,$query2);
            if (!$result2) {
                die("Error:  ".mysqli_error($connection));
            }

            //display form to apply new image
           if ($row = mysqli_fetch_assoc($result2)) {
               //var_dump($row);
                echo '<div class="boxstacked">';
                    echo '<h1>Add New Doctor Image:</h1>';
                    echo '</div>';
                    echo '<h3> There is no current image for this doctor, Please add one below</h3>';
                    echo '<form action="addimage.php" method="post">';
                        echo '<div class="inboxstacked">';
                            echo '<div class="box1">';
                            echo '<p>Enter an image URL to add a picture:</p>';
                            echo '</div>';
                        echo '<div class="inboxstacked">';
                            echo '<div class="box1">';
                            echo '<input id="doc" name="doc" type="hidden" value="'.$doc.'">';
                            echo '<input type="text" name="url" class="longtxt">';
                            echo '<p><label> Image URL</label></p>';
                            echo '</div>';
                            echo '<div class="box3r">';
                            echo '<input type="submit" value="Add Image">';
                            echo '</div>';
                        echo '</div>';
                        echo '</div>';
                    echo '</form>';
               echo '</div>';
           }

           mysqli_free_result($result2);

                }
        ?>

        <?php
           mysqli_close($connection);
        ?>
</div>

</body>
</html>
