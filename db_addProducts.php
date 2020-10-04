<?php
    if(isset($_POST['title'])){
        $title = $_POST['title'];
    }else{
        header("Location:addProducts.html");
    }

    if(isset($_POST['title_short'])){
        $title_short = $_POST['title_short'];
    }else{
        header("Location:addProducts.html");
    }

    if(isset($_POST['price'])){
        $price = $_POST['price'];
    }else{
        header("Location:addProducts.html");
    }

    if(isset($_POST['rating'])){
        $rating = $_POST['rating'];
    }else{
        header("Location:addProducts.html");
    }

    $image_url = "images/".$title_short.".jpg";

    include "db_connect.php";

    $sql = "INSERT INTO products (title, img_url, rating, price) VALUES ('".$title."', '".$image_url."',".$rating.",".$price.")";
    if(mysqli_query($connect, $sql)){
        echo "Query Executed";
        sleep(3);
        header("Location:addProducts.html");
    }
    else{
        echo "Query not executed";
    }
?>