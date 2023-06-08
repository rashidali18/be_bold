<?php
    session_start();
    include "../common/_dbconnect.php";

    if(isset($_POST['submit_login'] ) && $_POST["submit_login"]=="Login"){

        $username = $_POST['username'];
        $password = $_POST['password'];


        $qry = "SELECT * FROM users 
                WHERE username = '$username' 
                AND password = '$password'";

        $res = mysqli_query($conn,$qry);

        if(mysqli_num_rows($res) == 1){
            //login
            $_SESSION['logged_in'] = true;
            $_SESSION['login_msg'] = "Logged in successfully";
            header("location:view.php");
        }
        else
        {
            //not login
            $_SESSION['error_login'] = "Invalid email or password";
            header("location:index.php");
        }
    }





























