<html>
    <head>
        <title>Amazing Login Page</title>
        <style>
            body{
                background-image: url("images/background.jpg");
                background-size: cover;
            }
            #login{
                background-color: wheat;
                border: 1px solid black;
                width: 500px;
                padding: 30px;
                margin: 150px auto;
            }
        </style>
        <!-- <script>
            document.addEventListener("DOMContentLoaded", ()=>{
                document.querySelector("#btn").onclick = ()=>{
                    var password = localStorage.getItem(document.getElementById("email").value)
                    console.log(password)
                    console.log(document.getElementById("email").value)
                    console.log(document.getElementById("password").value)
                    if(password == null){
                        document.getElementById("errormsg").innerHTML = "Invalid email ID or password";
                        return;
                    }

                    if(password == document.getElementById("password").value){
                        document.getElementById("errormsg").innerHTML = "We do not have a post login page, but you are registered here...";
                    }else{
                        document.getElementById("errormsg").innerHTML = "Invalid email ID or password";
                        return;
                    }
                }
            })
        </script> -->
    </head>
    <body>
        <?php 
            session_start();
            if(isset($_SESSION['email'])){
                header("Location: catalog.php");
            }
        ?>
        <div id="login" align="center">
            <img src="images/Amazing.png" alt="Amazing Website Logo">
            <h2>Welcome to Amazing Login Page</h2>
            <form action="authentication.php" method="POST">
                <table>
                    <tr>
                        <td><label for="email">Email Address:  </label></td>
                        <td><input type="text" placeholder="someone@example.com" id="email" name="email"></td>
                    </tr>

                    <tr>
                        <td><label>Password:  </label></td>
                        <td><input type="password" placeholder="Password" id="password" name="password"></td>
                    </tr>

                    <tr>
                        <td></td>
                        <td><a href="changepassword.php">Forgot Password?</a></td>
                    </tr>
                    <tr>
                        <td id="errormsg"></td>
                    </tr>
                </table>
                
                </br>
                <input type="submit" value="Login">
            </form>
        </div>
    </body>
</html>