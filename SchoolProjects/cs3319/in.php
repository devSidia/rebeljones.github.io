<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Main - Assignment 3</title>
        <link rel="stylesheet" type="text/css" href="ss.css">
        <link href="https://fonts.googleapis.com/css?family=Quicksand&display=swap" rel="stylesheet">
    </head>
<body>
    <div class="clearfix">
        <div class="inboxstacked">
            <?php
                include "connecttodb.php";
            ?>

            <h1>Assignment 3</h1>
            <h3>Sidia Clarke 250940009</h3>
        </div>

        <div class="boxstacked">
            <div class="box1">
                <img src="https://images.onlinelabels.com/images/clip-art/j4p4n/Female%20Doctor-284473.png" width="70" height="70">
            </div>
            <div class="box2">
                <h2> View Doctor Table</h2>
            </div>
            <form action ="getdoc.php" method="post">
                <div class="inboxstacked">
                    <div class="box3">
                    <p>Order List By:</p>
                        <input type="radio" name="order" value="firstName">First Name<br>
                        <input type="radio" name="order" value ="lastName">Last Name<br>
                    </div>
                    <div class="box3">
                    <p>Sort List:</p>
                        <input type="radio" name="sort" value=" ASC">A-Z<br>
                        <input type="radio" name="sort" value =" DESC">Z-A<br>
                    </div>

                    <div class="box3">
                        <input type="submit" value="Show Doctors Table">
                    </div>
                </div>
            </form>
        </div>
        <div class="boxstacked">
            <div class="box1">
               <img src="https://www.dscreative.co.uk/img/images/content/services/print/business-printing/identity-cards/icons.png" width="100" height="70">
            </div>
            <div class="box2">
                <h2> Search by Licensing Date</h2>
            </div>
            <form action="licdate.php" method="post">
                <div class="inboxstacked">
                    <div class="box3">
                        List all doctors that were licensed before:
                    </div>
                    <div class="box3">
                       <input type="text" name="licdate" value="">
                        <p><label>Enter Date (YYYY-MM-DD) </label></p>
                    </div>
                    <div class="box3">
                        <input type="submit" value="Show Doctors">
                    </div>
                </div>
            </form>
        </div>
        <div class="boxstacked">
            <div class="box1">
               <img src="https://i.ya-webdesign.com/images/cartoon-doctor-png-2.png" width="98" height="100">
            </div>
            <div class="box2">
                <h2> Add a New Doctor</h2>
            </div>
            <form action="adddoc.php" method="post">
                <div class="inboxstacked">
                    <div class="inboxstacked">
                        <div class="box3">
                             <input type="text" name="docLicNum" value="">
                            <p><label>License (XX##) </label></p>
                        </div>
                        <div class="box3">
                           <input type="text" name="firstName" value="">
                            <p><label>First Name</label></p>
                        </div>
                        <div class="box3">
                           <input type="text" name="lastName" value="">
                            <p><label>Last Name</label></p>
                        </div>
                    </div>
                    <div class="inboxstacked">
                         <div class="box3">
                             <input type="text" name="speciality" value="">
                            <p><label>Specialty </label></p>
                        </div>
                        <div class="box3">
                           <input type="text" name="licenseDate" value="">
                            <p><label>License Date YYYY-MM-DD</label></p>
                        </div>
                        <div class="box3">
                            <form >
                                <div class="select">
                                   <select id="hospital" name="hospital">
                                       <option value="1">Select Hospital</option>
                                        <?php
                                        include "gethos.php";
                                       ?>
                                    </select>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="inboxstacked">
                        <div class="box3r">
                            <input type="submit" value="Add New Doctor">
                        </div>
                    </div>
                </div>
            </form>
        </div>
        <div class="boxstacked">
            <div class="box1">
               <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSgUo5Wh6L3wDR0RDhWAZRO93iEosr18_C7eevsJFp54EYqorDc&s" width="70" height="70">
            </div>
            <div class="box2">
                <h2> Remove Existing Doctor</h2>
            </div>
                <form action="remdoc.php" method="post">

                        <div class="inboxstacked">
                            <div class="box3">
                                <p>Select the doctor you would like to remove:</p>
                            </div>
                            <div class="box3">
                                <form >
                                    <div class="select">
                                       <select id="doctor" name="doctor">
                                           <option value="1">Select Doctor</option>
                                            <?php
                                            include "listdoc.php";
                                           ?>
                                        </select>
                                    </div>
                                </form>
                            </div>
                            <div class="box3">
                                <input type="submit" value="Remove Doctor">
                            </div>
                        </div>
                        <div class="inboxstacked">


                    </div>
            </form>
        </div>
        <div class="boxstacked">
            <div class="box1">
               <img src="https://www.netclipart.com/pp/m/13-135479_clipart-hospital-building-hospital-clipart.png" width="100" height="60">
            </div>
            <div class="box2">
                <h2> Update Hospital Name</h2>
            </div>
            <form action="updatehos.php" method="post">
                <div class="inboxstacked">
                        <div class="box3">
                              <div class="select">

                                <select id="hospital" name="hospital">
                                   <option value="1">Select Hospital</option>
                                        <?php
                                            include "gethos.php";
                                        ?>
                                </select>
                            </div>
                        </div>
                        <div class="box3">
                             <input type="text" name="name" value="">
                                <p><label>New Hospital Name</label></p>
                        </div>
                    <div class="box3r">
                        <input type="submit" value="Update Hospital">
                    </div>
                </div>
            </form>
        </div>
        <div class="boxstacked">
            <div class="box1">
               <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSZKSGOR1wXBbOpPgD0qwPeav6M7zzX4EyUbb-T4cDI7Gg_VsVT&s" width="70" height="80">
            </div>
            <div class="box2">
                <h2> List of Hospitals</h2>
            </div>
            <div class="inboxstacked">
                <?php
                    include "listhos.php";
                ?>
            </div>
        </div>
        <div class="boxstacked">
            <div class="box1">
               <img src="https://s.clipartkey.com/mpngs/s/183-1836926_doctor-office-call-cartoon.png" width="102" height="100">
            </div>
            <div class="box2">
                <h2> Search Patients</h2>
            </div>
            <form action="searchpat.php" method="post">
                <div class="inboxstacked">
                        <div class="box3">
                              <p>Enter patient OHIP to see doctors:</p>
                        </div>
                        <div class="box3">
                             <input type="text" name="ohip" value="">
                                <p><label>Patient OHIP</label></p>
                        </div>
                    <div class="box3r">
                        <input type="submit" value="View Results">
                    </div>
                </div>
            </form>
        </div>
         <div class="boxstacked">
            <div class="box1">
               <img src="https://www.nicepng.com/png/detail/35-353379_icon-sick-child-icon.png" width="100" height="100">
            </div>
            <div class="box2">
                <h2> Assign Doctor to Patient</h2>
            </div>
            <form action="assignpat.php" method="post">
                <div class="inboxstacked">
                        <div class="box3">

                                <div class="select">
                                    <select id="doctor" name="doctor">
                                        <option value="1">Select Doctor</option>
                                        <?php
                                        include "listdoc.php";
                                       ?>
                                    </select>
                                </div>

                        </div>
                        <div class="box3">

                                <p><label>Assign Doctor to Patient </label></p>
                        </div>
                        <div class="box3r">

                            <div class="select">
                               <select id="patient" name="patient">
                                       <option value="1">Select Patient</option>
                                        <?php
                                            include "listpat.php";
                                       ?>
                                </select>
                            </div>

                    </div>
                </div>
               <div class="inboxstacked">
                   <div class="box3r">
                        <input type="submit" value="Assign">
                    </div>
                </div>
            </form>
        </div>
        <div class="boxstacked">
            <div class="box1">
               <img src="https://www.jing.fm/clipimg/detail/133-1335402_cartoon-business-people-team-of-doctors-clipart.png" width="120" height="80">
            </div>
            <div class="box2">
                <h2> Unassign Doctor from Patient</h2>
            </div>
            <form action="removeassign.php" method="post">
                <div class="inboxstacked">
                        <div class="box3">

                                <div class="select">
                                    <select id="doctor" name="doctor">
                                        <option value="1">Select Doctor</option>
                                        <?php
                                        include "listdoc.php";
                                       ?>
                                    </select>
                                </div>

                        </div>
                        <div class="box3">

                                <p><label>Unassign Doctor from Patient </label></p>
                        </div>
                        <div class="box3r">

                            <div class="select">
                               <select id="patient" name="patient">
                                       <option value="1">Select Patient</option>
                                        <?php
                                            include "listpat.php";
                                       ?>
                                </select>
                            </div>

                    </div>
                </div>
               <div class="inboxstacked">
                   <div class="box3r">
                        <input type="submit" value="Unassign">
                    </div>
                </div>
            </form>
        </div>
         <div class="boxstacked">
            <div class="box1">
               <img src="https://www.thenews.com.pk/assets/uploads/magazine/2016-11-18/165337_1_040144_mag.jpg" width="90" height="110">
            </div>
            <div class="box2">
                <h2> Doctors without Patients</h2>
            </div>

            <div class="inboxstacked">
                <?php
                    include "nopatients.php";
                ?>
            </div>
        </div>
        <form action="showimage.php" method="post" enctype="multipart/form-data">
            <div class="boxstacked">
                <div class="box1">
                   <img src="https://media.istockphoto.com/vectors/bonus-sign-vector-id492419012?k=6&m=492419012&s=612x612&w=0&h=Lt8OxTJAdZwGlsy1iSPlVwrS8j5U-eMkHXs9QJutzoo=" width="100" height="50">
                </div>
                <div class="box2">
                    <h2>View Doctor Image</h2>
                </div>
                <div class="inboxstacked">
                    <?php
                        include "bonus.php";
                    ?>
                <div class="inboxstacked">
                    <div class="box3r">
                        <input type="submit" value="View Image">
                    </div>
                </div>
                </div>
            </div>
        </form>




    </div>
</body>
</html>
