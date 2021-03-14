<?php 
    session_start();

	$mysqli = new mysqli("localhost","root","","vip");

    if($mysqli===false){
        echo "Error : Could not connect Database";
    
    }


    $id = 0;
    $email = "";
    $_SESSION["iddd"]= 0;             //if login sucess it get user id..
    $_SESSION["u_id"]= 0;
    $_SESSION["u_login"]= 0;          // 0 or 1.... 1= login , 0 = logout 
    $_SESSION["donation_update"]= false; // donation history update yes or no
    $_SESSION["editProfile"]= false;
    $_SESSION["donation_serial"]= 0;  // the serial number which will be updated..
    $_SESSION["profile"]= 0;          //hold value for view profile from search donor page
    $_SESSION["justupdate"]= 0;
    $_SESSION["Emailcheaker"]= 0;


//member/ user signup
    if(isset($_POST['submit'])){
        $a = $_POST['user_name'];
        $b = $_POST['user_email'];
        $c = $_POST['user_password'];
        $d = $_POST['user_blood_group'];
        $e = $_POST['user_district'];
        $f = $_POST['user_contact_no'];
        $g = $_POST['user_age'];


        $sql1= "SELECT * FROM donorInfo WHERE user_email='$b'";
        if($result2 = $mysqli->query($sql1)){
            if($result2->num_rows > 0){
                $_SESSION["Emailcheaker"]= 1;
                header('location:signup.php');
            }
            else{
                $_SESSION["Emailcheaker"]= 0;
                $sql = "insert into donorInfo (user_name, user_email, user_password, user_blood_group, user_district, user_contact_no, user_age, available)
                values ('$a','$b','$c','$d','$e','$f','$g','Yes')";
                if($mysqli->query($sql) === true){
                    header('location:index.php');
                }
                else{
                    echo "ERROR : Could not able to execute $sql." .$mysqli->error;
                }

            }
        }
  
    }


   

//user / member login
    if(isset($_POST['login'])){
        $email = $_POST['user_email'];
        $password = $_POST['user_pass'];
        $sql = "SELECT * FROM donorInfo WHERE user_email = '$email' AND user_password = '$password'";
        $res = $mysqli->query($sql);
        if($res->num_rows>0){
            $n = $res->fetch_array();
            $id = $n['id'];
            $log = 1;
            $_SESSION["iddd"]= $id;
            $_SESSION["u_login"]= 1;
            $_SESSION["justlogin"]= 1;
            header("location:profile.php");
        }
        else{
            $_SESSION["u_login"]= 0;
            $_SESSION["justlogin"]= 10;
            header("location:index.php");
        }
    }


//admin login

    if(isset($_POST['adminLogin'])){
        $username = $_POST['admin_username'];
        $password = $_POST['admin_password'];
        $sql = "SELECT * FROM admin_table WHERE admin_username = '$username' AND admin_password = '$password'";
        $res = $mysqli->query($sql);
        if($res->num_rows>0){
            $n = $res->fetch_array();
            $_SESSION["justlogin"]= 1;
            $_SESSION["adminLog"]=1;
            header("location:admin_work.php");
        }
        else{
            $_SESSION["justlogin"]= 10;
            $_SESSION["adminLog"]=0;
            header("location:admin.php");
        }
    }

//forgot password reset passsword
    if(isset($_POST['newpass'])){
        $email = $_POST['femail'];
        $pass = $_POST['pass'];
        $sql = "UPDATE donorinfo SET user_password = '$pass' WHERE user_email= '$email'";
        
        if($mysqli->query($sql) === true){
            $_SESSION["u_login"]= 0;
           header('location:index.php');
        }
    }


     //Insert blood donation history from profile page
    if(isset($_POST['donation_history'])){
        $pro_id = $_SESSION["pro_id"];
        $d_date = $_POST['donation_date'];
        $d_location = $_POST['donation_location'];
        $d_detai = $_POST['description'];
        $sql = "insert into donation_details (id, donation_date, location, description)
        values ($pro_id, '$d_date', '$d_location','$d_detai')";
        if($mysqli->query($sql) === true){
            
            $_SESSION["iddd"]= $pro_id;
            $_SESSION["u_login"]= 1;
           header('location:profile.php');
        }
        else{
            $_SESSION["iddd"]= $pro_id;
            $_SESSION["u_login"]= 1;
            echo "ERROR : Could not able to execute $sql." .$mysqli->error;
        }


    }
    
    if(isset($_GET['edit_donation_history'])){
        $_SESSION["u_login"]= 1;
        $_SESSION["donation_update"]= true;
        $_SESSION["iddd"]= $_SESSION["pro_id"];
        $_SESSION["donation_serial"]= $_GET['edit_donation_history'];  //donation_details table serial/id number
        header('location:update.php');
    }

   // delt_donation_history
   if(isset($_GET['delt_donation_history'])){
    $serl = $_GET['delt_donation_history'];
    $pro_id = $_SESSION["pro_id"];
    $sql = "DELETE FROM donation_details WHERE id=$pro_id AND serialno=$serl";
    if($mysqli->query($sql) === true){  
        $_SESSION["iddd"]= $pro_id;
        $_SESSION["u_login"]= 1;
       header('location:profile.php');
    }
    else{
        $_SESSION["iddd"]= $pro_id;
        $_SESSION["u_login"]= 1;
        echo "ERROR : Could not able to execute $sql." .$mysqli->error;
    }
  }

    if(isset($_GET['editProfile'])){
        $_SESSION["u_login"]= 1;
        $_SESSION["editProfile"]= true;
        $_SESSION["iddd"]= $_SESSION["pro_id"];
        header('location:update.php');
    }
    
    //update from update page.....donation history
    if(isset($_POST['update_donation_history'])){
       
        $pro_id = $_SESSION["pro_id"];   //set id from profile page value
        $sel = $_SESSION["donation_serial_update"];
        $d_date = $_POST['donation_date'];
        $d_location = $_POST['donation_location'];
        $d_detai = $_POST['description'];
        $sql = "UPDATE donation_details SET donation_date = '$d_date', location = '$d_location', description = '$d_detai' WHERE serialno = $sel AND id = $pro_id";
        
        if($mysqli->query($sql) === true){
            $_SESSION["u_id"]= $pro_id;
            $_SESSION["iddd"]= $pro_id;
            $_SESSION["u_login"]= 1;
            $_SESSION["justupdate"]= 1;
           header('location:profile.php');
        }
        else{
            $$_SESSION["u_id"]= $pro_id;
            $_SESSION["iddd"]= $pro_id;
            $_SESSION["u_login"]= 1;
            $_SESSION["justupdate"]= 10;
            header('location:profile.php');
            
        //  echo "ERROR : Could not able to execute $sql." .$mysqli->error;
        }
    }


// update profile value
    if(isset($_POST['profileUpdateData'])){
        $pro_id = $_SESSION["pro_id"];   //set id from profile page value
        $name = $_POST['user_name'];
        $district = $_POST['user_district'];
        $bg= $_POST['user_blood_group'];
        $number = $_POST['user_contact_no'];
        $age = $_POST['user_age'];
        $avail = $_POST['available'];
        $sql = "UPDATE donorinfo  SET user_name ='$name',user_age='$age', user_blood_group = '$bg', user_district = '$district', user_contact_no='$number', available='$avail' WHERE id = $pro_id";
        
        if($mysqli->query($sql) === true){
            $_SESSION["iddd"]= $pro_id;
            $_SESSION["u_login"]= 1;
            $_SESSION["justupdate"]= 1;
           // echo "Done";
           header('location:profile.php');
        }
        else{
            
            $_SESSION["iddd"]= $pro_id;
            $_SESSION["u_login"]= 1;
            $_SESSION["justupdate"]= 10;
         //  header('location:profile.php');

            
        // echo "ERROR : Could not able to execute $sql." .$mysqli->error;
        }
    }









// blood storage update by admin in admin work.......
    if(isset($_POST['storageUpdate'])){
        $b1= $_POST['an'];
        $b2= $_POST['ap'];
        $b3= $_POST['abn'];
        $b4= $_POST['abp'];
        $b5= $_POST['bn'];
        $b6= $_POST['bp'];
        $b7= $_POST['on'];
        $b8= $_POST['op'];

        $d_detai = $_POST['description'];
        $sql = "UPDATE storage SET amount =  '$b1' WHERE id_store=1";
        $sq2 = "UPDATE storage SET amount =  '$b2' WHERE id_store=2";
        $sq3 = "UPDATE storage SET amount =  '$b3' WHERE id_store=3";
        $sq4 = "UPDATE storage SET amount =  '$b4' WHERE id_store=4";
        $sq5 = "UPDATE storage SET amount =  '$b5' WHERE id_store=5";
        $sq6 = "UPDATE storage SET amount =  '$b6' WHERE id_store=6";
        $sq7 = "UPDATE storage SET amount =  '$b7' WHERE id_store=7";
        $sq8 = "UPDATE storage SET amount =  '$b8' WHERE id_store=8";
        $mysqli->query($sq2);
        $mysqli->query($sq3);
        $mysqli->query($sq4);
        $mysqli->query($sq5);
        $mysqli->query($sq6);
        $mysqli->query($sq7);
        $mysqli->query($sq8);

        if($mysqli->query($sql) === true ){
            $_SESSION["justupdate"]= 1;
           header('location:admin_work.php');
        }
        else{
            $_SESSION["justupdate"]= 10;
            header('location:admin_work.php');
            echo "ERROR : Could not able to execute $sql." .$mysqli->error;
        }


    }

// blood bank information insert from admin work
    if(isset($_POST['bbankinsert'])){
        $bname = $_POST['bname'];
        $blocation = $_POST['blocation'];
        $bnumber = $_POST['bnumber'];
        $sql = "insert into bbank (bname, blocation, bnumber)
        values ('$bname', '$blocation','$bnumber')";
        if($mysqli->query($sql) === true){
            
           header('location:admin_work.php');
        }
        else{
            echo "ERROR : Could not able to execute $sql." .$mysqli->error;
        }
    }
// upcomming event information insert from admin work....
    if(isset($_POST['eventsinsrt'])){
        $evntDate = $_POST['evntDate'];
        $headline = $_POST['headline'];
        $location = $_POST['location'];
        $details = $_POST['details'];
        $sql = "insert into events (eventDate, headline, location, details) values ('$evntDate', '$headline','$location', '$details')";
        if($mysqli->query($sql) === true){
            
           header('location:admin_work.php');
        }
        else{
            echo "ERROR : Could not able to execute $sql." .$mysqli->error;
        }
    }
//view donor profile info by a viewer/gest user from search donor...
    if(isset($_GET['profile'])){
        $_SESSION["profile"]= $_GET['profile'];
        $_SESSION['iddd'] = 0;
        $_SESSION["u_login"]=0;
        $_SESSION["justlogin"]= 0;

        header('location:profile.php');

    }

    //When we clickk logout/signout button in profile page.... it signout and go to home/index
    if(isset($_GET['logout'])){
        $_SESSION["profile"]= 0;
        $_SESSION['iddd'] = 0;
        $_SESSION["u_login"]=0;
        $_SESSION["justlogin"]= 0;
        header('location:index.php');

    }

    
    //$mysqli->close();


?>