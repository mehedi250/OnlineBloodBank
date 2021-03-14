<!DOCTYPE html>
<html>
    <head>
        <link  href="styles/searchDonor.css" rel="stylesheet" type="text/css">
        <title> Search Donor</title>

    </head>
    <body>

        <div class="header1">
            <span class="headLeft">
                <a href="index.html"><img class="img1" src="images/head1.png"></a>
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

        <form class="form1" method="post" action="searchDonor.php">
        
            <table class="tab">
                <tr>
                    <th>Blood group</th>
                    <th>District</th>
                    <th rowspan=2><button class= "b1"type="submit" name="show"><b>SEARCH</b></button></th>

                </tr>
            
                <tr>
                
                    <td>
                            <select id="sel" name="user_blood_group">
                                <option value="">Select one...</option>
                                <option value="A negative(-)">A negative(-)</option>
                                <option value="A positive(+)">A positive(+)</option>
                                <option value="AB negative(-)">AB negative(-)</option>
                                <option value="AB positive(+)">AB positive(+)</option>
                                <option value="B negative(-)">B negative(-)</option>
                                <option value="B positive(+)">B positive(+)</option>
                                <option value="O negative(-)">O negative(-)</option>
                                <option value="O positive(+)">O positive(+)</option>
                            </select>
            
                    </td>
                    <td>
                
                
                
                            <select  id="district" name="user_district" >
                                <option value="">Select one...</option>
                                <option value="Bagerhat">Bagerhat</option>
                                <option value="Bandarban">Bandarban</option>
                                <option value="Barguna">Barguna</option>
                                <option value="Barisal">Barisal</option>
                                <option value="Bhola">Bhola</option>
                                <option value="Bogra">Bogra</option>
                                <option value="Brahmanbaria">Brahmanbaria</option>
                                <option value="Chandpur">Chandpur</option>
                                <option value="Chittagong">Chittagong</option>
                                <option value="Chuadanga">Chuadanga</option>
                                <option value="Comilla">Comilla</option>
                                <option value="Cox's Bazar">Cox's Bazar</option>
                                <option value="Dhaka">Dhaka</option>
                                <option value="Dinajpur">Dinajpur</option>
                                <option value="Faridpur">Faridpur</option>
                                <option value="Feni">Feni</option>
                                <option value="Gaibandha">Gaibandha</option>
                                <option value="Gazipur">Gazipur</option>
                                <option value="Gopalganj">Gopalganj</option>
                                <option value="Habiganj">Habiganj</option>
                                <option value="Jaipurhat">Jaipurhat</option>
                                <option value="Jamalpur">Jamalpur</option>
                                <option value="Jessore">Jessore</option>
                                <option value="Jhalokati">Jhalokati</option>
                                <option value="Jhenaidah">Jhenaidah</option>
                                <option value="Khagrachari">Khagrachari</option>
                                <option value="Khulna">Khulna</option>
                                <option value="Kishoreganj">Kishoreganj</option>
                                <option value="Kurigram">Kurigram</option>
                                <option value="Kushtia">Kushtia</option>
                                <option value="Lakshmipur">Lakshmipur</option>
                                <option value="Lalmonirhat">Lalmonirhat</option>
                                <option value="Madaripur">Madaripur</option>
                                <option value="Magura">Magura</option>
                                <option value="Manikgonj">Manikgonj</option>
                                <option value="Maulvi Bazar">Maulvi Bazar</option>
                                <option value="Meherpur">Meherpur</option>
                                <option value="Munshiganj">Munshiganj</option>
                                <option value="Mymensingh">Mymensingh</option>
                                <option value="Naogaon">Naogaon</option>
                                <option value="Narail">Narail</option>
                                <option value="Narayanganj">Narayanganj</option>
                                <option value="Narsingdi">Narsingdi</option>
                                <option value="Natore">Natore</option>
                                <option value="Nawabganj">Nawabganj</option>
                                <option value="Netrokona">Netrokona</option>
                                <option value="Nilphamari">Nilphamari</option>
                                <option value="Noakhali">Noakhali</option>
                                <option value="Pabna">Pabna</option>
                                <option value="Panchagarh">Panchagarh</option>
                                <option value="Patuakhali">Patuakhali</option>
                                <option value="Pirojpur">Pirojpur</option>
                                <option value="Rajbari">Rajbari</option>
                                <option value="Rajshahi">Rajshahi</option>
                                <option value="Rangamati">Rangamati</option>
                                <option value="Rangpur">Rangpur</option>
                                <option value="Shariatpur">Shariatpur</option>
                                <option value="Shatkhira">Shatkhira</option>
                                <option value="Sherpur">Sherpur</option>
                                <option value="Sirajganj">Sirajganj</option>
                                <option value="Sunamgonj">Sunamgonj</option>
                                <option value="Sylhet">Sylhet</option>
                                <option value="Tangail">Tangail</option>
                                <option value="Thakurgaon">Thakurgaon</option>
                            </select>
                        </td>
                    </tr>
                </table>

      
        </form>

        <?php

            $mysqli = new mysqli("localhost","root","","vip");
            if(isset($_POST['show'])){
                $bg= $_POST['user_blood_group'];
                $ds= $_POST['user_district'];
            
            
            $sql = "SELECT * FROM donorinfo WHERE user_blood_group like '%$bg%' AND user_district like '%$ds%'";
            if($result = $mysqli->query($sql)){
                if($result->num_rows > 0){
                    echo "<br>";
                    echo "<br>";
                
                    echo "<h2>Search Result:</h2>";
                  
                    echo "<table class='tab2'>";
                        echo "<tr>";
                        echo "<th>Name</th>";
                        echo "<th>Blood group</th>";
                        echo "<th>District</th>";
                        echo "<th>Available</th>";
                        echo "<th>Profile</th>"; 
                      
                    echo "</tr>";
                    while($row = $result->fetch_array()){
                        echo "<tr>";
                            echo "<td>" . $row['user_name'] . "</td>";
                            echo "<td>" . $row['user_blood_group'] . "</td>";
                            echo "<td>" . $row['user_district'] . "</td>";
                            echo "<td>" . $row['available'] . "</td>";
                            echo "<td> <a class='profile_btn' href=server.php?profile=" . $row['id'] . " >Profile </a> </td>";
                        
                        echo "</tr>";
                    }
                    echo "</table>"; 
                    $result->free(); 
                } 
                else{
                    $mess = "NO DATA FOUND ! ";
                    echo "<br>";
                    echo "<center><h1>" . $mess . "</h1></center>";
                }
            }
        }
         
         ?>

            



    </body>
</html>