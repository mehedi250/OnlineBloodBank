<!DOCTYPE html>
<html>
    <head>
        <link  href="styles/bloodStorage.css" rel="stylesheet" type="text/css">
        <title>Blood Storage - Active Blood Bank Bangladesh</title>

    </head>
    <body>
        
        <div class="header1">
            <span class="headLeft">
                <a href="index.php"><img class="img1" src="images/head1.png"></a>
            </span>

            <span class="headRight">
            <img class="img1" src="images/head2.png">
            </span>
        </div>
       

        <div class="btn-group header2">

                 <a href="index.php"><button class="button">Home</button></a>
                <a href="upcommingEvent.php"><button class="button">Upcomming Event</button></a>
                <a href="bloodStorage.php"><button class="button">Blood Storage</button></a>
                <a href="searchDonor.php"><button class="button">Search Blood Donors</button></a>
                <a href="bloodBanks.php"><button class="button">Blood Banks</button></a>
                <a href="aboutBlood.html"><button class="button">About Blood</button></a>
                <a href="contactUs.html"><button class="button">Contact Us</button></a>
        
        </div>
   
        <div class="btn-group2" method="get" action="server.php">
            <div>
                <form>
                
                <button class="button2" name="b2">A positive(+)</button>
                <button class="button2" name="b1">A negative(-)</button>
                <button class="button2" name="b6">B positive(+)</button>
                <button class="button2" name="b5">B negative(-)</button>

                <button class="button2" name="b8">O positive(+)</button>
                <button class="button2" name="b7">O negative(-)</button>
                <button class="button2" name="b4">AB positive(+)</button>
                <button class="button2" name="b3">AB negative(-)</button>
                </form>
           </div>
            

        </div>

        <h2 class="topline">Storage Blood </h2>

        <div class="result">
            <?php
            $mysqli = new mysqli("localhost","root","","vip");
            

            if(isset($_GET['b1'])){
                $sql = "SELECT * FROM storage WHERE id_store = 1";
                $result = $mysqli->query($sql);
                $row = $result->fetch_array();
                echo "<h2>" . $row['blood_group'] . "</h2>";
                echo "<h2>" . $row['amount'] . "</h2>";
                echo "<h3> UNIT </h3>";
            }
            else if(isset($_GET['b2'])){
                $sql = "SELECT * FROM storage WHERE id_store = 2";
                $result = $mysqli->query($sql);
                $row = $result->fetch_array();
                echo "<h2>" . $row['blood_group'] . "</h2>";
                echo "<h2>" . $row['amount'] . "</h2>";
                echo "<h3> UNIT </h3>";

            }
            else if(isset($_GET['b3'])){
                $sql = "SELECT * FROM storage WHERE id_store = 3";
                $result = $mysqli->query($sql);
                $row = $result->fetch_array();
                echo "<h2>" . $row['blood_group'] . "</h2>";
                echo "<h2>" . $row['amount'] . "</h2>";
                echo "<h3> UNIT </h3>";

            }
            else if(isset($_GET['b4'])){
                $sql = "SELECT * FROM storage WHERE id_store = 4";
                $result = $mysqli->query($sql);
                $row = $result->fetch_array();
                echo "<h2>" . $row['blood_group'] . "</h2>";
                echo "<h2>" . $row['amount'] . "</h2>";
                echo "<h3> UNIT </h3>";

            }
            else if(isset($_GET['b5'])){
                $sql = "SELECT * FROM storage WHERE id_store = 5";
                $result = $mysqli->query($sql);
                $row = $result->fetch_array();
                echo "<h2>" . $row['blood_group'] . "</h2>";
                echo "<h2>" . $row['amount'] . "</h2>";
                echo "<h3> UNIT </h3>";

            }
            else if(isset($_GET['b6'])){
                $sql = "SELECT * FROM storage WHERE id_store = 6";
                $result = $mysqli->query($sql);
                $row = $result->fetch_array();
                echo "<h2>" . $row['blood_group'] . "</h2>";
                echo "<h2>" . $row['amount'] . "</h2>";
                echo "<h3> UNIT </h3>";

            }
            else if(isset($_GET['b7'])){
                $sql = "SELECT * FROM storage WHERE id_store = 7";
                $result = $mysqli->query($sql);
                $row = $result->fetch_array();
                echo "<h2>" . $row['blood_group'] . "</h2>";
                echo "<h2>" . $row['amount'] . "</h2>";
                echo "<h3> UNIT </h3>";

            }
            else if(isset($_GET['b8'])){
                $sql = "SELECT * FROM storage WHERE id_store = 8";
                $result = $mysqli->query($sql);
                $row = $result->fetch_array();
                echo "<h2>" . $row['blood_group'] . "</h2>";
                echo "<h2>" . $row['amount'] . "</h2>";
                echo "<h3> UNIT </h3>";

            }
            else{
                echo "<h2>Select any blood group</h2>";
            }

           ?>
        </div>

        
    </body>
</html>