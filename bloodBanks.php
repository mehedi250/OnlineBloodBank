<!DOCTYPE html>
<html>
    <head>
        <link  href="styles/bloodBanks.css" rel="stylesheet" type="text/css">
        <title>Blood Bank</title>

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

        <div>
            <h1>All Blood Bank List</h1>
        </div>

        <?php
            
            $mysqli = new mysqli("localhost","root","","vip");
            $sql2 = "SELECT * FROM bbank";
                if($result2 = $mysqli->query($sql2)){
                    if($result2->num_rows > 0){
                        echo "<table>";
                            echo "<tr>";
                            echo "<th>Blood Bank Name</th>";
                            echo "<th>Blood Bank Location</th>";
                            echo "<th>Blood Bank Contact Number</th>"; 
                            
                        echo "</tr>";
                        while($row = $result2->fetch_array()){
                            echo "<tr>";
                                echo "<td>" . $row['bname'] . "</td>";
                                echo "<td>" . $row['blocation'] . "</td>";
                                echo "<td>" . $row['bnumber'] . "</td>";
                            echo "</tr>";
                        }
                        echo "</table>"; 
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