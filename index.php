<?php
session_start(); 
$_SESSION["forgetpassStep"]=0;  
$_SESSION["Emailcheaker"]= 0;   
$_SESSION["justlogin"]= 0; 
?>
<!DOCTYPE html>



<html>
    <head>
        <link  href="styles/home.css" rel="stylesheet" type="text/css">
        <title>Home - Active Blood Bank Bangladesh</title>

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

        <div> </div>
      


        <div class="part3">
            <form class="form1" method="post" action="server.php">
                <div>
                    <img class="inlin" src="images/blood.gif"> 
                    <span><h3 >Doners area</h3></span>
                </div >
                
                
                    <div class="sinLeft">
                         <label class="c2"> </label> <img class="user" src="images/user.png">
                      
                            <div class="space1">
                        
                                <label for="eami">Email : </label>
                                <input type="em" id="eami" name="user_email" required value="" placeholder="Enter Email">
                            </div>
        
                            <div class="space">
                                    <label for="pass">Password : </label>
                                    <input type="password" id="pass" name="user_pass" value="" required placeholder="Enter Password">
                            </div>
                        
                            
                            <div class="space">
                                
                               <label class="c1"> </label> 
                                <button class="buttonSub" type="submit" name="login"><strong>Log In</strong></button>
                                 
                            </div>
        
                            <div class="space">
                                <label class="c1"> </label> 
                                <a   href="forgotPassword.php" class="forgetPass">Forgot Password ?</a>
                                <br>
                                <label class="c3"> </label> 
                                <a   href="signup.php" class="forgetPass">Register</a>
                            </div>
                    </div>
                    
                        <img class="smilphoto" src="images/smileBlood.png">

            </form>
                    
            <fileset>
                <form class="form2"> 
                            <img class="blood" src="images/blood2.png">
                            <h2 class="color-green">Will be a blood donor?</h3>
                                
                            <div class="same">
                                <img class="img3" src="images/donateBlood2.png">
                                <a href="signup.php"><img class="img4" src="images/register.png"></a>
                            </div>
                            
                </form>
            </fileset>
                        
        </div>

        <div class="forn1">
            <form class="form3">
                <div class="leftpart" >
                    <center>
                        <div>
                            <h1>HELPLINE</h1>
                        </div>
                        <div>
                            <img class="helpline" src="images/helpline.png">
                        </div>

                        <div>
                            <h1>01689017897</h1>
                        </div>
                        <div>
                            <h3>(24/7)</h3>
                        </div>  
                    </center>
                           
                </div>
                <img class="boy" src="images/boy.png">
                


            </form>
        </div>
       

    </body>
</html>