<?php
    $connect = mysqli_connect("localhost", "root", "", "amazing_website", "3308");
    if($connect == false){
        die("Error: ".mysqli_connect_error($connect));
    }
    //echo "Connection Successful!";
?>