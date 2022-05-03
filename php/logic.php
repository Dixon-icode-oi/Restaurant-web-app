<?php
    session_start();

    @include 'config.php';
   
   
   
   
   
   
    /**
     * Logics for Registering a user
     */

    # setting up variables
    if(isset($_POST['submit'])){
            
        $fname = mysqli_real_escape_string($conn, $_POST['fname']);
        $lname =  mysqli_real_escape_string($conn, $_POST['lname']);
        $email =  mysqli_real_escape_string($conn, $_POST['email']);
        $pass = md5($_POST['password']);
        $cpass = md5($_POST['cpassword']);



        // checking for already existing emails
        $query = "select * from user where email = '$email' || fname='$fname' || lname ='$lname'";
        
        $result = mysqli_query($conn, $query);

        if(mysqli_num_rows($result) > 0){
            $error[] = 'user already exist!'; 
        }else{
            if($pass != $cpass){
                $error[] = 'Passwords do not match!'; 
            }else{
                $insert = "insert into user(fname,lname,email,password) value('$fname','$lname','$email','$pass')";
                mysqli_query($conn, $insert);
                header('location: index.php'); 
            }  
        }
    };

    /**
        * Logics for Registering a use
    */
    if(isset($_POST['login_user'])){
        $email =  mysqli_real_escape_string($conn, $_POST['email']);
        $pass = md5($_POST['password']);

        // Validate user login
        $select = "select * from user where email ='$email' && password = '$pass' limit 1";
        $res = mysqli_query($conn, $select);

        if(mysqli_num_rows($res) > 0){
            $row = mysqli_fetch_array($res);
            $data = array($row);
            
            $_SESSION['email'] = $data[0]['email'];
            $_SESSION['name'] = $data[0]['fname'];
            $_SESSION['user_type'] = $data[0]['user_type'];

           if(isset($_SESSION['user_type']) && $_SESSION['user_type'] == "admin"){
               header('location: admin.php');
           }elseif(isset($_SESSION['user_type']) && $_SESSION['user_type'] == "user"){
                header('location: home.php');
           }

            
        }else{
            $error[]= 'email and password do not exit!';
        }       

    }

?>