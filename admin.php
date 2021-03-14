<?php 
    session_start();
    $_SESSION["adminLog"]=0;
?>
<!DOCTYPE html>
<html>
    <head>
        <link  href="styles/admin.css" rel="stylesheet" type="text/css">
        <title>Donor Profile</title>

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

        <form class = "form1"  method="post" action="server.php">
             <center>
             
                <img class="admi" src="images/admin.png">
             </center>
             <center>
            <div>
               
                <input type="text" placeholder="Admin username" required size="90" id="name" name="admin_username" value="">
            </div>
            <div>
                
                <input id="Pass" placeholder="Admin Password" type="password"  required size="30" name="admin_password" value="">
            </div>

            <div>
            </center>
            <center>
                <button class="button1" type="reset"><b>Clear</b></button> 
                <button class="button2" type="submit" name="adminLogin"><b>Login</b></button>
                </center>
            </div>


        </form>

        

    </body>
</html>
