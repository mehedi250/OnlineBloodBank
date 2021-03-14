<?php 
    session_start();
?>

<!DOCTYPE html>
<html>
    <head>    
        <link rel="stylesheet" type="text/css" href="styles/forgotPassword.css">
        <title>Forgot Password</title>
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
        <br>
        <br>


     <?php 
     $femail="";
    
        if(isset($_POST['submitEmail'])){
           $femail = $_POST['user_email'];
        ?>


        <form method="post" action="forgotPassword.php">
                <div>
                    <center><h5>Step 2 of 3</h5></center>
                </div>
                <input   type="hidden"   size="90" name="femail" value="<?php echo $femail;?>" >
    
                <div>
                    <?php $ran= rand(1000,9999);?>
                    <label for="email">Enter 4 digit code : </label>
                    <input id="email" placeholder="Enter 4 digit code" type="text"   size="90" name="user_code" value="<?php echo $ran;?>" >
                </div>
                <div>
                    <label> </label><button class="button2" type="submitcode" name="round2">NEXT</button>
                </div>
        </form>

         <?php
        
          } 
          ?>

         <?php 
         if(isset($_POST['round2'])){
             $femail = $_POST['femail'];

        ?>

        <form method="post" action="server.php">
                <div>
                    <center><h5>Step 3 of 3</h5></center>
                    <input   type="hidden"   size="90" name="femail" value="<?php echo $femail;?>" >
                </div>
    
                <div>
                    <label for="email">Enter New Password : </label>
                    <input id="email" placeholder="Enter New Password" type="password"  required size="40" name="pass" value="" >
                </div>
                <div>
                    <label> </label><button class="button2" type="submitcode" name="newpass">DONE</button>
                </div>
                
        </form>
        <?php  } 
       
        
        
        ?>



<?php 
      if(!isset($_POST['round2']) && !isset($_POST['submitEmail'])){
    
     ?>
     <form method="post" action="forgotPassword.php">
         <div>
             <center><h5>Step 1 of 3</h5></center>
         </div>

         <div>
             <label for="email">Email : </label>
             <input id="email" placeholder="Enter Email" required type="email"   size="90" name="user_email" value="" >
         </div>
         <div>
             <label> </label><button class="button2" type="submit" name="submitEmail">Send confirmation code</button>
         </div>
         

     </form>  
  
     <?php }
     
      ?>




    </body>
</html>