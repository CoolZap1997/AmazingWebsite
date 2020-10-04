<?php
    session_start();
    
    if(isset($_POST['email'])){
        $email = $_POST['email'];
    }else{
        header("Location:login.php");
    }

    if(isset($_POST['password'])){
        $password = $_POST['password'];
    }else{
        header("Location:login.php");
    }
    // echo $email."<br>";
    // echo $password

    include "db_connect.php";

    $sql = "SELECT count(*) as count FROM users WHERE email='".$email."' AND password='".$password."';";
    // echo $sql;
    $result = mysqli_query($connect, $sql);
    $row = mysqli_fetch_array($result);
    $count = $row['count'];
    
    // echo $count;
    if($count > 0){
        $_SESSION["email"] = $email;
        header("Location:catalog.php");
    }
    else{
        header("Location:login.php");
    }

    // if($email=="dannie.winford@gmail.com" && $password == "coolzap"){
    //     $_SESSION["email"] = $email;
    //     header("Location:catalog.php");
    // }
    
?>