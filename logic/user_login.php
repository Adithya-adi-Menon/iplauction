<?php
session_start();
include("../dbconfig.php");
    $user_email = mysqli_real_escape_string($conn, $_POST['loginemail']);
    $user_password = mysqli_real_escape_string($conn, $_POST['loginpassword']);
    $result = mysqli_query($conn, "SELECT * FROM login WHERE email = '" . $user_email . "' and password = '" . $user_password . "'");
    if ($row = mysqli_fetch_array($result)) {
        $_SESSION['email'] = $row['email'];
        
        header('Location:../matches.php');
        // $_SESSION["loggedin"]= true;
        echo "LoginSuccess";
    } else {
        echo "<script type='text/javascript'>alert('Username or Password is Incorrect');
        window.location.href='../index.php';
        
        </script>";
    }
?>