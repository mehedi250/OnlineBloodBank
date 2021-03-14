<!DOCTYPE html>
<html>
    <head>
        <link  href="styles/upcommingEvent.css" rel="stylesheet" type="text/css">
        <title> Upcomming Event - Active Blood Bank Bangladesh</title>

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

        <h2>Blood Donation Event List</h2>

        <?php
            $mysqli = new mysqli("localhost","root","","vip");

            if($mysqli===false){
                echo "Error : Could not connect Database";
            
            }
            $today = date('Y-m-d');
          

            $sql2 = "SELECT * FROM events WHERE eventDate >= '$today' ORDER BY eventDate";
                if($result2 = $mysqli->query($sql2)){
                    if($result2->num_rows > 0){
                    
                        while($row = $result2->fetch_array()){
                            echo "<form>";
                            echo "<center>";

                                echo "<p>Event Number - #" . $row['evnNum'] . "</p>";
                                echo "<h2>" . $row['headline'] . "</h2>";
                                echo "<p>Location : " . $row['location'] . "</p>";
                                echo "<p>Date : " . $row['eventDate'] . "</p>";
                                echo "<p>" . $row['details'] . "</p>";
                            echo "</center>";
                            echo "</form>";
                            echo "<br>";
                        }
                   
                        $result2->free();

                        
                    } 
                    else{
                        $mess = "NO DATA FOUND ! ";
                        echo "<h1>" . $mess . "</h1>";
                    }
                }

            ?>

    </body>
</html>