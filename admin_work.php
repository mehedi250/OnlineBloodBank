<!DOCTYPE html>
<html>
    <head>
        <link  href="styles/admin_work.css" rel="stylesheet" type="text/css">
        <title>Admin</title>

    </head>
    <body>
        <div class="header1">
            <span class="headLeft">
                <a href=""><img class="img1" src="images/head1.png"></a>
            </span>

            <span class="headRight">
            <img class="img1" src="images/head2.png">
            </span>
        </div>
        <br>
        <a href="admin.php"><button>Logout</button></a>

        <div>
            <center><h1>Welcome To Admin World</h1></center>
        </div>

        <form class = "form1"  method="post" action="server.php">
             <center>
                <h2>Upcomming Event Insert</h2>
             </center>

            <div>
                <label for="d1" ><b>Event Date : </b></label>
                <input type="date"  id="d1" name="evntDate" value="">
            </div>
            <div>
                <label for="h11" ><b>Headline : </b></label>
                <input type="text"  id="h11" placeholder="Event Headline"  name="headline" value="">
            </div>
            <div>
                <label for="pass"><b>Event Location : </b></label>
                <input id="Pass" placeholder="Event location" type="text"   size="30" name="location" value="">
            </div>
            <div>
                <label for="d2" ><b>Details: </b></label>
                <input type="text"  id="d2" placeholder="Event Details"  name="details" value="">
            </div>

            <div>
                <label> </label>
                <button class="button1" type="reset"><b>Clear</b></button> 
                <button class="button2" type="submit" name="eventsinsrt"><b>Submit</b></button>
            </div>


        </form>




        <form class = "form4"  method="post" action="server.php">
             <center>
                <h2>Blood Bank Information Insert</h2>
             </center>

             <div>
                <label for="h1" ><b>Blood Bank Name : </b></label>
                <input type="text"  id="h1" placeholder="Enter Blood Bank Name"  name="bname" value="">
            </div>
            <div>
                <label for="h12" ><b>Blood Bank Location : </b></label>
                <input type="text"  id="h12" placeholder="Enter Location"  name="blocation" value="">
            </div>
            <div>
                <label for="h13" ><b>Blood Bank Number : </b></label>
                <input type="text"  id="h13" placeholder="Enter Mobile Number"  name="bnumber" value="">
            </div>


            
            <center>
                <button class="button1" type="reset"><b>Clear</b></button> 
                <button class="button2" type="submit" name="bbankinsert"><b>Submit</b></button>
            </center>
            </div>


        </form>





        
        <form class = "form3"  method="post" action="server.php">
             <center>
                <h2>Blood Storage Data Update</h2>
             </center>

            <?php
            
            $mysqli = new mysqli("localhost","root","","vip");
            $sql = "SELECT * FROM storage";
            if($result = $mysqli->query($sql)){


            while($row = $result->fetch_array()){
                
                if($row['id_store']==1){
                    $an = $row['amount'];
                }
                if($row['id_store']==2){
                    $ap = $row['amount'];
                }
                if($row['id_store']==3){
                    $abn = $row['amount'];
                }
                if($row['id_store']==4){
                    $abp = $row['amount'];
                }
                if($row['id_store']==5){
                    $bn = $row['amount'];
                }
                if($row['id_store']==6){
                    $bp = $row['amount'];
                }
                if($row['id_store']==7){
                    $on = $row['amount'];
                }
                if($row['id_store']==8){
                    $op = $row['amount'];
                }

            }
            
            }
            else{
                echo "nooo ";
            }


           ?>



            <table>
                <tr>
                    <td>A negative(-)</td>
                    <td>A positive(+)</td>
                    <td>AB negative(-)</td>
                    <td>AB positive(+)</td>
                    <td>B negative(-)</td>
                    <td>B positive(+)</td>
                    <td>O negative(-)</td>
                    <td>O positive(+)</td>
                </tr>
                <tr>
                    <td><input class = "am" type="text" placeholder="Amount"  name="an" value="<?php echo $an;?>"> </td>
                    <td><input class = "am" type="text" placeholder="Amount"  name="ap" value="<?php echo $ap;?>"> </td>
                    <td><input class = "am" type="text" placeholder="Amount"  name="abn" value="<?php echo $abn;?>"> </td>
                    <td><input class = "am" type="text" placeholder="Amount"  name="abp" value="<?php echo $abp;?>"> </td>
                    <td><input class = "am" type="text" placeholder="Amount"  name="bn" value="<?php echo $bn;?>"> </td>
                    <td><input class = "am" type="text" placeholder="Amount"  name="bp" value="<?php echo $bp;?>"> </td>
                    <td><input class = "am" type="text" placeholder="Amount"  name="on" value="<?php echo $on;?>"> </td>
                    <td><input class = "am" type="text" placeholder="Amount"  name="op" value="<?php echo $op;?>"> </td>
                </tr>
            </table>
            
            <div>
            <center>
                <button class="button1" type="reset"><b>Clear</b></button> 
                <button class="button2" type="submit" name="storageUpdate"><b>Submit</b></button>
            </center>
            </div>


        </form>





        

    </body>
</html>
