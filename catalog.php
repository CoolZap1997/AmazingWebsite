<?php
    session_start();
    if(!isset($_SESSION['email'])){
        header("Location: login.php");
    }
?>
<html>
    <head>
        <title>Catalog Page</title>
        <style>
            .nav{
                display: flexbox;
            }
            #nav_logo{
                width: 100%;
                padding: 0px;
            }
            .nav td{
                text-decoration: none;
                font-size: 18px;
                border: 1px solid black;
                padding: 16px;
            }
            .nav td :hover{
                background-color: wheat;
                /* padding: 16px; */
            }
            body{
                background-image: url("images/background.jpg");
                background-size: auto;
                background-attachment: fixed;
            }
            /* td{
                border: 1px solid black;
            } */

            h3{
                font-size: 20px;
            }

            tr{
                box-shadow: 5px;
            }
            table{
                border-spacing: 3px 20px;
            }
            .item > td {
                background-color: white;
                border-radius:10px;
                box-shadow: 5px 10px 8px #888888;
            }
            .image{
                padding:10px;
                
            }
            .rating{
                font-size: 18px;
            }
            .info{
                padding: 16px;
            }
            .price{
                font-size: 24px;
                font-weight: lighter;
            }

            .prime{
                font-size: 16px;
            }
        </style>
    </head>
    <body>
        <?php
            include "nav.php";
        ?>

        <?php
            include "db_connect.php";
            $sql = "select * from products;";
            $result = mysqli_query($connect, $sql);

            echo "<div id=\"catalog_content\">";
            echo "<table>";

            while($row = mysqli_fetch_array($result)){
                echo "<tr class=\"item\">";
                echo "<td><img src=\"".$row['img_url']."\" alt=\"".$row['img_url']."\" width=\"200px\" class=\"image\"></td>";
                echo "<td class=\"info\">";
                echo "<div class=\"title\"><h3>".$row['title']."</h3></div>";
                echo "<div class=\"rating\"><span>".$row['rating']." Stars</span></div>";
                echo "<div class=\"price\">Rs ".$row['price']."</div>";
                echo "<div class=\"prime\">Prime Membership, Get order by Date</div>";
                echo "</td>";
            }

            echo "</table>";
            echo "</div>";
        ?>
        <!-- <div id="catalog_content">
            <table>
                <tr class="item">
                    <td><img src="images/JBL T460BT.jpg" alt="JBL T460BT" width="200px" class="image"></td>
                    <td class="info">
                        <div class="title"><h3>JBL T460BT Extra Bass Wireless On-Ear Headphones with 11 Hours Playtime & Mic (Black)</h3></div>
                        <div class="rating"><span>4 Stars</span></div>
                        <div class="price">Rs 2,999</div>
                        <div class="prime">Prime Membership, Get order by Date</div>
                    </td>
                </tr>

                <tr class="item">
                    <td><img src="images/Motorola Escape 210.jpg" alt="Motorola Escape 210" width="200px" class="image"></td>
                    <td class="info">
                        <div class="title"><h3>Motorola Escape 210 Over-Ear Bluetooth Headphones with Alexa (Black)</h3></div>
                        <div class="rating">3.6 Stars</div>
                        <div class="price">Rs 1,499</div>
                        <div class="prime">Prime Membership, Get order by Date</div>
                    </td>
                </tr>

                <tr class="item">
                    <td><img src="images/OnePlus 8.jpg" alt="OnePlus 8" width="200px" class="image"></td>
                    <td class="info">
                        <div class="title"><h3>OnePlus 8 (Onyx Black 12GB RAM+256GB Storage)</h3></div>
                        <div class="rating">4.3 Stars</div>
                        <div class="price">Rs 49,999</div>
                        <div class="prime">Prime Membership, Get order by Date</div>
                    </td>
                </tr>

                <tr class="item">
                    <td><img src="images/iPhone 11 (64GB).jpg" alt="iPhone 11 (64GB)" width="200px" class="image"></td>
                    <td class="info">
                        <div class="title"><h3>Apple iPhone 11 (64GB) - Black</h3></div>
                        <div class="rating">4.5 Stars</div>
                        <div class="price">Rs 66,900</div>
                        <div class="prime">Prime Membership, Get order by Date</div>
                    </td>
                </tr>

                <tr class="item">
                    <td><img src="images/Logitech F710.jpg" alt="Logitech F710" width="200px" class="image"></td>
                    <td class="info">
                        <div class="title"><h3>Logitech G F710 Wireless Gamepad (Silver and Black)</h3></div>
                        <div class="rating">4.4 Stars</div>
                        <div class="price">Rs 3,499</div>
                        <div class="prime">Prime Membership, Get order by Date</div>
                    </td>
                </tr>

                <tr class="item">
                    <td><img src="images/Xbox Controller.jpg" alt="Xbox Controller" width="200px" class="image"></td>
                    <td class="info">
                        <div class="title"><h3>Xbox Wireless Controller – Night Ops Camo Special Edition</h3></div>
                        <div class="rating">3.8 Stars</div>
                        <div class="price">Rs 6,499</div>
                        <div class="prime">Prime Membership, Get order by Date</div>
                    </td>
                </tr>

                <tr class="item">
                    <td><img src="images/Amazon Echo Dot.jpg" alt="Amazon Echo Dot" width="200px" class="image"></td>
                    <td class="info">
                        <div class="title"><h3>Echo Dot (3rd Gen) – New and improved smart speaker with Alexa (Black)</h3></div>
                        <div class="rating">4.3 Stars</div>
                        <div class="price">Rs 3,499</div>
                        <div class="prime">Prime Membership, Get order by Date</div>
                    </td>
                </tr>

                <tr class="item">
                    <td><img src="images/Kindle Paperwhite.jpg" alt="Kindle Paperwhite" width="200px" class="image"></td>
                    <td class="info">
                        <div class="title"><h3>Kindle Paperwhite (10th gen) - with Built-in Light, Waterproof, 8 GB, WiFi</h3></div>
                        <div class="rating">4.4 Stars</div>
                        <div class="price">Rs 12,999</div>
                        <div class="prime">Prime Membership, Get order by Date</div>
                    </td>
                </tr>
            </table>
        </div> -->
    </body>
</html>