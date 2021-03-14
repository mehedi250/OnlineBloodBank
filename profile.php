<?php
session_start();
$_SESSION["pro_id"]= 0;

?>
<!DOCTYPE html>
<html>
    <head>
        <link  href="styles/profile.css" rel="stylesheet" type="text/css">
        <title>Donor Profile</title>

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
            $user_id = 0;
            if($_SESSION["u_login"]==1){
            $user_id = $_SESSION['iddd'];
            $_SESSION["pro_id"]= $_SESSION['iddd'];
            }
            if($_SESSION["profile"]>0){
                $user_id = $_SESSION["profile"];

            }

            $mysqli = new mysqli("localhost","root","","vip");
            $sql = "SELECT * FROM donorinfo WHERE id = $user_id";
            $result = $mysqli->query($sql); 
        ?>
  
            
        <?php if($_SESSION["u_login"]==1){ ?>
                <div>
                  <a <?php echo "href=server.php?logout=" . $user_id . " >";?><button class="btn">Sign Out</button></a>
                </div>
        <?php } ?>
    



        <center><h1>Donor Profile</h1></center>
	    <?php $row = $result->fetch_array();  ?>
        <div class= "infoform">
        <?php if($_SESSION["u_login"]==1){ ?>
                <div class="rightEdit">
                  <a <?php echo "href=server.php?editProfile=" . $user_id . " >";?><button class="btn2">Edit profile</button></a>
                </div>
        <?php } ?>
            <div>
                <h4><b>Name : </b></h4>
                <p><?php echo $row['user_name']; ?></p>
            </div>

            <div>
                <h4><b>Email : </b></h4>
                <p><?php echo $row['user_email']; ?></p>
            </div>
		    <div>
                <h4><b>Blood Group : </b></h4>
                <p><?php echo $row['user_blood_group']; ?></p>
            </div>
            <div>
                <h4><b>District : </b></h4>
                <p><?php echo $row['user_district']; ?></p>
            </div>
		    <div>
                <h4><b>Age : </b></h4>
                <p><?php echo $row['user_age']; ?></p>
            </div>
            <div>
                <h4><b>Mobile Number : </b></h4>
                <p><?php echo $row['user_contact_no']; ?></p>
            </div>
            <div>
                <h4><b>Available : </b></h4>
                <p><?php echo $row['available']; ?></p>
            </div>

        </div>

        <div>
            <h3 id="jump">Donation History</h3>

        </div>
        <div>
            
            <?php
 

               
                $sql2 = "SELECT * FROM donation_details WHERE id = $user_id";
                if($result2 = $mysqli->query($sql2)){
                    if($result2->num_rows > 0){
                        echo "<table>";
                            echo "<tr>";
                            echo "<th>Date</th>";
                            echo "<th>Location</th>";
                            echo "<th>Description</th>"; 
                            if($_SESSION["u_login"]==1){ echo "<th class='mid' colspan='2'>Action</th>"; }
                        echo "</tr>";
                        while($row = $result2->fetch_array()){
                            echo "<tr>";
                                echo "<td>" . $row['donation_date'] . "</td>";
                                echo "<td>" . $row['location'] . "</td>";
                                echo "<td>" . $row['description'] . "</td>";
                                if($_SESSION["u_login"]==1){
                                echo "<td > <a class='edit_btn'  href=server.php?edit_donation_history=" . $row['serialno'] . " > Edit </a> </td>";
                                echo "<td> <a class='del_btn' href=server.php?delt_donation_history=" . $row['serialno'] . " > Delete </a> </td>";
                                }
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

        </div>
        <?php  if($_SESSION["u_login"]==1){ ?> 
        <div>
            <h3>Add new donation hoistory</h3>
            <form method="post" action="server.php">
                <div>
                    <label for="d1" ><b>Date : </b></label>
                    <input type="date" id="d1" name="donation_date"  value="">
                </div>
                <div>
                    <label for="h11" ><b>Location : </b></label>
                    <input type="text"  id="h11" placeholder="Location" required name="donation_location" value="">
                </div>
                <div>
                    <label for="pass"><b>Description : </b></label>
                    <input id="Pass" placeholder="Description" type="text" required  size="30" name="description" value="">
                </div>
                <div>
                    <label> </label>
                    <span>
                        <button class="button1" type="reset">Clear All</button> 
                        <button class="button2" type="submit" name="donation_history">Submit</button>
                    </span>
                </div>
          
            </form >
        </div>
        <?php
        } 

        if($_SESSION["justlogin"]== 1){
        ?>
             <script type='text/javascript'>alert("Welcome...Login Successfull");</script>
             
        <?php
       $_SESSION["justlogin"]= 0;
        }
        ?>
  

    </body>
</html>
