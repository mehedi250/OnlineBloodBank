<?php
session_start();
?>
<!DOCTYPE html>
<html>
    <head>    
        <link rel="stylesheet" type="text/css" href="styles/signup.css">
        <title>Donor Registation</title>
    </head>
    <body>
            <?php
                if($_SESSION["Emailcheaker"]== 1){
                    $_SESSION["Emailcheaker"]= 0;
                    echo '<script language="javascript">';
                    echo 'alert("Use a new email. This Email has already an account.")';
                    echo '</script>';
                }
                    
            ?>


            <div class="header1">
                    <span class="headLeft">
                        <a href="index.php"><img class="img1" src="images/head1.png"></a>
                    </span>
        
                    <span class="headRight">
                    <img class="img1" src="images/head2.png">
                    </span>
            </div>
        
        <span class="headmen">
            <div class="btn-group header2">
        
                <a href="index.php"><button class="button">Home</button></a>
                <a href="upcommingEvent.php"><button class="button">Upcomming Event</button></a>
                <a href="bloodStorage.php"><button class="button">Blood Storage</button></a>
                <a href="searchDonor.php"><button class="button">Search Blood Donors</button></a>
                <a href="bloodBanks.php"><button class="button">Blood Banks</button></a>
                <a href="aboutBlood.html"><button class="button">About Blood</button></a>
                <a href="contactUs.html"><button class="button">Contact Us</button></a>
                
            </div>

        </span>

        
            

        <div class="all">


        <div class="formSign">
            <form method="post" action="server.php">
                    <div>
                        <img src="images/blood.gif">
                        <span>
                            <h2>Member Registration</h2>
                        </span>
                    </div>
                    <br>
                       
                            <div>
                                <label for="name" >Name : </label>
                                <input type="text" placeholder="Enter Name" required size="90" id="name" name="user_name" value="">
                            </div>
                            
                            <div>
                                <label for="email">Email : (will be login ID)</label>
                                <input id="email" placeholder="Enter Email" type="email"  required size="90" name="user_email" value="" >
                            </div>
            
                            <div>
                                <label for="pass">Password : </label>
                                <input id="Pass" placeholder="Enter Password" type="password" required  size="30" name="user_password" value="">
                            </div>
            
                            <div>
                                <label for="sel">Blood group </label>
                                <select id="sel" name="user_blood_group">
                                <option value="null">Select one...</option>
                                <option value="A negative(-)">A negative(-)</option>
                                <option value="A positive(+)">A positive(+)</option>
                                <option value="AB negative(-)">AB negative(-)</option>
                                <option value="AB positive(+)">AB positive(+)</option>
                                <option value="B negative(-)">B negative(-)</option>
                                <option value="B positive(+)">B positive(+)</option>
                                <option value="O negative(-)">O negative(-)</option>
                                <option value="O positive(+)">O positive(+)</option>
                                </select>
                            </div>
            
                            <div>
                                <label for="district">Living District </label>
                                
                                <select  id="district" name="user_district" >
                                <option value="null">Select one...</option>
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
                            </div>
            
                            <div>
                                <label for="con">Contact No </label>
                                <input type="text" placeholder="Enter Mobile Number" id="con" required name="user_contact_no" value=""> 
                            </div>

                            <div>
                                <label for="age" >Donor Age </label> 
                                <input  type="text" placeholder="Enter Your Age"  id="age" name="user_age" value="">
                            </div>

                            <br>
                            
                            <div>
                                <label> </label>
                                <span>
                                    <button class="button2" type="reset">Clear All</button> 
                                    <button class="button2" type="submit" name="submit">Submit To Registation</button>
                                </span>
                            </div>
                            <br>
                            <br>
                    
            </form>

        </div>
            <center>
                <h2 class="text1">If you are a blood donor, you are a hero to someone, somewhere, who received your gracious gift of life</h2>
            </center>
            <br>
            <br>
            <br>

        </div>
            <br>
            <br>
            <br>
            <br>
    </div>
               
    </body>
</html>