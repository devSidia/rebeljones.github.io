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
        <div class="boxstacked">
          <h1>View Image:</h1>
       </div>

       <div class="boxstacked">

            <?php
                //grab variables from main screen
                $url = $_POST["url"];
                $doc = $_POST["doc"];

                //update the table with the url
                $query = 'UPDATE doctor SET docimage="'.$url.'" WHERE docLicNum="'.$doc.'"';
                //echo 'UPDATE doctor SET docimage="'.$url.'" WHERE docLicNum="'.$doc.'"';
                $result = mysqli_query($connection,$query);

                if (!$result) {
                   die('IMAGE URL TOO LONG OR NOT VALID');
                 }

                //if ($row = mysqli_fetch_assoc($result)){

                  $query2 = 'SELECT * FROM doctor WHERE docLicNum ="'.$doc.'"';
                  $result2 = mysqli_query($connection,$query2);

                  if (!$result2) {
                     die("Error:  ".mysqli_error($connection));
                   }


                  if ($row = mysqli_fetch_assoc($result2)){
                    //display the image and doctor name
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
         ?>
        </div>
        <?php
        mysqli_close($connection);
        ?>
    </div>

</body>
</html>