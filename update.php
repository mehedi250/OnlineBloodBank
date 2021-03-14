<?php
session_start();
$_SESSION["donation_serial_update"]=0;

?>
<!DOCTYPE html>
<html>
    <head>
        <link  href="styles/update.css" rel="stylesheet" type="text/css">
        <title>Update</title>

    </head>
    <body>
        <div class="header1">
            <span class="headLeft">
                <a><img class="img1" src="images/head1.png"></a>
            </span>

            <span class="headRight">
            <img class="img1" src="images/head2.png">
            </span>
        </div>

         


        <?php
        if($_SESSION["u_login"]==1 && $_SESSION["donation_update"]== true){
            $user_id = 0;
            $sel = 0;
            $user_id = $_SESSION["pro_id"];

            $sel = $_SESSION["donation_serial"];
            $_SESSION["donation_serial_update"] = $sel;

            $mysqli = new mysqli("localhost","root","","vip");
            $sql = "SELECT * FROM donation_details WHERE serialno = $sel";
            if($result = $mysqli->query($sql)){


            $row = $result->fetch_array();
            
            }
            else{
                echo "nooo ";
            }

            
        ?>

            <center><h1>Update Donation History</h1></center>
            <form method="post" action="server.php">

                <div>
                    <label for="d1" ><b>Date : </b></label>
                    <input type="date"  id="d1" name="donation_date" placeholder="Donation Date" value="<?php echo $row['donation_date'];?>">
                </div>
                <div>
                    <label for="h11" ><b>Location : </b></label>
                    <input type="text"  id="h11" placeholder="Event Headline"  name="donation_location" value="<?php echo $row['location'];?>">
                </div>
                <div>
                    <label for="pass"><b>Description : </b></label>
                    <input id="Pass" placeholder="Event location" type="text"   size="30" name="description" value="<?php echo $row['description'];?>">
                </div>
                <div>
                    <label> </label>
                    <span>
                        <button class="button1" type="reset">Clear All</button> 
                        <button class="button2" type="submit" name="update_donation_history">Submit</button>
                    </span>
                </div>

            </form>

        <?php  } ?>






        
        <?php
        if($_SESSION["u_login"]==1 && $_SESSION["editProfile"]== true){
            $user_id = 0;
            $sel = 0;
            $user_id = $_SESSION["pro_id"];


            $sel = $_SESSION["donation_serial"];
            $_SESSION["donation_serial_update"] = $sel;

            $mysqli = new mysqli("localhost","root","","vip");
            $sql = "SELECT * FROM donorinfo WHERE id = $user_id";
            if($result = $mysqli->query($sql)){
                $row = $result->fetch_array();
            }
            else{
                echo "nooo ";
            }    
        ?>

        <h3>Update profile basic information</h3>

            <form method="post" action="server.php">
                    
                       
                            <div>
                                <label for="name" >Name : </label>
                                <input type="text"  required  placeholder="Enter Name"  size="90" id="name" name="user_name" value="<?php echo $row['user_name']; ?>">
                            </div>
                            
                            <div>
                                <label for="email">Email : </label>
                                <input id="email" disabled     size="90" name="umail" value="<?php echo $row['user_email']; ?>" >
                            </div>
            
                            <div>
                                <label for="sel">Blood group : </label>
                                <select id="sel" name="user_blood_group" value="">
                                <option value="null">Select one...</option>
                                <option value="A negative(-)" <?php if ($row['user_blood_group'] == 'A negative(-)') echo ' selected="selected"'; ?>>A negative(-)</option>
                                <option value="A positive(+)" <?php if ($row['user_blood_group'] == 'A positive(+)') echo ' selected="selected"'; ?>>A positive(+)</option>
                                <option value="AB negative(-)" <?php if ($row['user_blood_group'] == 'AB negative(-)') echo ' selected="selected"'; ?>>AB negative(-)</option>
                                <option value="AB positive(+)" <?php if ($row['user_blood_group'] == 'AB positive(+)') echo ' selected="selected"'; ?>>AB positive(+)</option>
                                <option value="B negative(-)" <?php if ($row['user_blood_group'] == 'B negative(-)') echo ' selected="selected"'; ?>>B negative(-)</option>
                                <option value="B positive(+)" <?php if ($row['user_blood_group'] == 'B positive(+)') echo ' selected="selected"'; ?>>B positive(+)</option>
                                <option value="O negative(-)" <?php if ($row['user_blood_group'] == 'O negative(-)') echo ' selected="selected"'; ?>>O negative(-)</option>
                                <option value="O positive(+)" <?php if ($row['user_blood_group'] == 'O positive(+)') echo ' selected="selected"'; ?>>O positive(+)</option>
                                </select>
                            </div>
            
                            <div>
                                <label for="district">Living District : </label>
                                
                                <select  id="district" name="user_district">
                                <option value="null">Select one...</option>
                                <option value="Bagerhat"  <?php if ($row['user_district'] == 'Bagerhat') echo ' selected="selected"'; ?>>Bagerhat</option>
                                <option value="Bandarban"  <?php if ($row['user_district'] == 'Bandarban') echo ' selected="selected"'; ?>>Bandarban</option>
                                <option value="Barguna"  <?php if ($row['user_district'] == 'Barguna') echo ' selected="selected"'; ?>>Barguna</option>
                                <option value="Barisal"  <?php if ($row['user_district'] == 'Barisal') echo ' selected="selected"'; ?>>Barisal</option>
                                <option value="Bhola"  <?php if ($row['user_district'] == 'Bhola') echo ' selected="selected"'; ?>>Bhola</option>
                                <option value="Bogra"  <?php if ($row['user_district'] == 'Bogra') echo ' selected="selected"'; ?>>Bogra</option>
                                <option value="Brahmanbaria"  <?php if ($row['user_district'] == 'Brahmanbaria') echo ' selected="selected"'; ?>>Brahmanbaria</option>
                                <option value="Chandpur"  <?php if ($row['user_district'] == 'Chandpur') echo ' selected="selected"'; ?>>Chandpur</option>
                                <option value="Chittagong"  <?php if ($row['user_district'] == 'Chittagong') echo ' selected="selected"'; ?>>Chittagong</option>
                                <option value="Chuadanga"> <?php if ($row['user_district'] == 'Chuadanga') echo ' selected="selected"'; ?>Chuadanga</option>
                                <option value="Comilla"  <?php if ($row['user_district'] == 'Comilla') echo ' selected="selected"'; ?>>Comilla</option>
                                <option value="Cox's Bazar"  <?php $cox="Cox's Bazar"; if ($row['user_district'] == $cox) echo ' selected="selected"'; ?>>Cox's Bazar</option>
                                <option value="Dhaka"  <?php if ($row['user_district'] == 'Dhaka') echo ' selected="selected"'; ?>>Dhaka</option>
                                <option value="Dinajpur"  <?php if ($row['user_district'] == 'Dinajpur') echo ' selected="selected"'; ?>>Dinajpur</option>
                                <option value="Faridpur"  <?php if ($row['user_district'] == 'Faridpur') echo ' selected="selected"'; ?>>Faridpur</option>
                                <option value="Feni"  <?php if ($row['user_district'] == 'Feni') echo ' selected="selected"'; ?>>Feni</option>
                                <option value="Gaibandha"  <?php if ($row['user_district'] == 'Gaibandha') echo ' selected="selected"'; ?>>Gaibandha</option>
                                <option value="Gazipur"  <?php if ($row['user_district'] == 'Gazipur') echo ' selected="selected"'; ?>>Gazipur</option>
                                <option value="Gopalganj"  <?php if ($row['user_district'] == 'Gopalganj') echo ' selected="selected"'; ?>>Gopalganj</option>
                                <option value="Habiganj"  <?php if ($row['user_district'] == 'Habiganj') echo ' selected="selected"'; ?>>Habiganj</option>
                                <option value="Jaipurhat"  <?php if ($row['user_district'] == 'Jaipurhat') echo ' selected="selected"'; ?>>Jaipurhat</option>
                                <option value="Jamalpur"  <?php if ($row['user_district'] == 'Jamalpur') echo ' selected="selected"'; ?>>Jamalpur</option>
                                <option value="Jessore"  <?php if ($row['user_district'] == 'Jessore') echo ' selected="selected"'; ?>>Jessore</option>
                                <option value="Jhalokati"  <?php if ($row['user_district'] == 'Jhalokati') echo ' selected="selected"'; ?>>Jhalokati</option>
                                <option value="Jhenaidah"  <?php if ($row['user_district'] == 'Jhenaidah') echo ' selected="selected"'; ?>>Jhenaidah</option>
                                <option value="Khagrachari"  <?php if ($row['user_district'] == 'Khagrachari') echo ' selected="selected"'; ?>>Khagrachari</option>
                                <option value="Khulna"  <?php if ($row['user_district'] == 'Khulna') echo ' selected="selected"'; ?>>Khulna</option>
                                <option value="Kishoreganj"  <?php if ($row['user_district'] == 'Kishoreganj') echo ' selected="selected"'; ?>>Kishoreganj</option>
                                <option value="Kurigram"  <?php if ($row['user_district'] == 'Kurigram') echo ' selected="selected"'; ?>>Kurigram</option>
                                <option value="Kushtia"  <?php if ($row['user_district'] == 'Kushtia') echo ' selected="selected"'; ?>>Kushtia</option>
                                <option value="Lakshmipur"  <?php if ($row['user_district'] == 'Lakshmipur') echo ' selected="selected"'; ?>>Lakshmipur</option>
                                <option value="Lalmonirhat"  <?php if ($row['user_district'] == 'Lalmonirhat') echo ' selected="selected"'; ?>>Lalmonirhat</option>
                                <option value="Madaripur"  <?php if ($row['user_district'] == 'Madaripur') echo ' selected="selected"'; ?>>Madaripur</option>
                                <option value="Magura"  <?php if ($row['user_district'] == 'Magura') echo ' selected="selected"'; ?>>Magura</option>
                                <option value="Manikgonj"  <?php if ($row['user_district'] == 'Manikgonj') echo ' selected="selected"'; ?>>Manikgonj</option>
                                <option value="Maulvi Bazar"  <?php if ($row['user_district'] == 'Maulvi Bazar') echo ' selected="selected"'; ?>>Maulvi Bazar</option>
                                <option value="Meherpur"  <?php if ($row['user_district'] == 'Meherpur') echo ' selected="selected"'; ?>>Meherpur</option>
                                <option value="Munshiganj"  <?php if ($row['user_district'] == 'Munshiganj') echo ' selected="selected"'; ?>>Munshiganj</option>
                                <option value="Mymensingh"  <?php if ($row['user_district'] == 'Mymensingh') echo ' selected="selected"'; ?>>Mymensingh</option>
                                <option value="Naogaon"  <?php if ($row['user_district'] == 'Naogaon') echo ' selected="selected"'; ?>>Naogaon</option>
                                <option value="Narail"  <?php if ($row['user_district'] == 'Narail') echo ' selected="selected"'; ?>>Narail</option>
                                <option value="Narayanganj"  <?php if ($row['user_district'] == 'Narayanganj') echo ' selected="selected"'; ?>>Narayanganj</option>
                                <option value="Narsingdi" <?php if ($row['user_district'] == 'Narsingdi') echo ' selected="selected"'; ?>>Narsingdi</option>
                                <option value="Natore"  <?php if ($row['user_district'] == 'Natore') echo ' selected="selected"'; ?>>Natore</option>
                                <option value="Nawabganj"  <?php if ($row['user_district'] == 'Nawabganj') echo ' selected="selected"'; ?>>Nawabganj</option>
                                <option value="Netrokona"  <?php if ($row['user_district'] == 'Netrokona') echo ' selected="selected"'; ?>>Netrokona</option>
                                <option value="Nilphamari"  <?php if ($row['user_district'] == 'Nilphamari') echo ' selected="selected"'; ?>>Nilphamari</option>
                                <option value="Noakhali"  <?php if ($row['user_district'] == 'Noakhali') echo ' selected="selected"'; ?>>Noakhali</option>
                                <option value="Pabna"  <?php if ($row['user_district'] == 'Pabna') echo ' selected="selected"'; ?>>Pabna</option>
                                <option value="Panchagarh"  <?php if ($row['user_district'] == 'Panchagarh') echo ' selected="selected"'; ?>>Panchagarh</option>
                                <option value="Patuakhali"  <?php if ($row['user_district'] == 'Patuakhali') echo ' selected="selected"'; ?>>Patuakhali</option>
                                <option value="Pirojpur"  <?php if ($row['user_district'] == 'Pirojpur') echo ' selected="selected"'; ?>>Pirojpur</option>
                                <option value="Rajbari"  <?php if ($row['user_district'] == 'Rajbari') echo ' selected="selected"'; ?>>Rajbari</option>
                                <option value="Rajshahi"  <?php if ($row['user_district'] == 'Rajshahi') echo ' selected="selected"'; ?>>Rajshahi</option>
                                <option value="Rangamati"  <?php if ($row['user_district'] == 'Rangamati') echo ' selected="selected"'; ?>>Rangamati</option>
                                <option value="Rangpur"  <?php if ($row['user_district'] == 'Rangpur') echo ' selected="selected"'; ?>>Rangpur</option>
                                <option value="Shariatpur"  <?php if ($row['user_district'] == 'Shariatpur') echo ' selected="selected"'; ?>>Shariatpur</option>
                                <option value="Shatkhira"  <?php if ($row['user_district'] == 'Shatkhira') echo ' selected="selected"'; ?>>Shatkhira</option>
                                <option value="Sherpur" <?php if ($row['user_district'] == 'Sherpur') echo ' selected="selected"'; ?>>Sherpur</option>
                                <option value="Sirajganj" <?php if ($row['user_district'] == 'Sirajganj') echo ' selected="selected"'; ?>>Sirajganj</option>
                                <option value="Sunamgonj" <?php if ($row['user_district'] == 'Sunamgonj') echo ' selected="selected"'; ?>>Sunamgonj</option>
                                <option value="Sylhet"  <?php if ($row['user_district'] == 'Sylhet') echo ' selected="selected"'; ?>>Sylhet</option>
                                <option value="Tangail"  <?php if ($row['user_district'] == 'Tangail') echo ' selected="selected"'; ?>>Tangail</option>
                                <option value="Thakurgaon"  <?php if ($row['user_district'] == 'Thakurgaon') echo ' selected="selected"'; ?>>Thakurgaon</option>
                                </select>
                            </div>
            
                            <div>
                                <label for="con">Contact Number : </label>
                                <input type="text"  required placeholder="Enter Mobile Number"  id="con" name="user_contact_no" value="<?php echo $row['user_contact_no']; ?>"> 
                            </div>

                            <div>
                                <label for="age" >Donor Age : </label> 
                                <input  type="text" placeholder="Enter Your Age" pattern="[0-9]+" id="age" name="user_age" value="<?php echo $row['user_age']; ?>"> 
                            </div>


                            <div>
                                <label for="sel3">Available : </label>
                                <select id="sel3" name="available" value="">
                                    <option value="null">Select one...</option>
                                    <option value="Yes" <?php if ($row['available'] == 'Yes') echo ' selected="selected"'; ?>>Yes</option>
                                    <option value="No" <?php if ($row['available'] == 'No') echo ' selected="selected"'; ?>>No</option>
                                </select>
                            </div>
                            <br>
                            
                            <div>
                                <label> </label>
                                <span>
                                    <button class="button2" type="reset">Clear All</button> 
                                    <button class="button2" type="submit" name="profileUpdateData">Submit</button>
                                </span>
                            </div>
                            <br>
                            <br>        
            </form>

        <?php } ?>
    </body>
</html>
