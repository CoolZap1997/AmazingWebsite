<?php 
    session_start();
    if(isset($_SESSION['email'])){
        header("Location: catalog.php");
    }
?>
<html>
    <head>
        <title>Amazing Registration Page</title>
        <style>
            body{
                background-image: url("images/background.jpg");
                background-size: cover;
            }
            #register{
                background-color: wheat;
                border: 1px solid black;
                width: 500px;
                padding: 30px;
                margin: 150px auto;
            }
            #errormsg{
                color: red;
            }
        </style>
        <script>
            document.addEventListener("DOMContentLoaded", ()=>{
                document.querySelector("form").onsubmit = ()=>{
                    // var first = document.getElementById("first").value;
                    // var last = document.getElementById("last").value;
                    // var gender = document.getElementsByName("gender");
                    // for(let i = 0; i < gender.length; i++){
                    //     if(gender[i].checked==true){
                    //         gender = gender[i].value;
                    //         break;
                    //     }
                    // }
                    // //var dob="lol"
                    // var dob = document.getElementById("dob").value;
                    // var email = document.getElementById("email").value;
                    var password = document.getElementById("password").value;
                    var reconfirm = document.getElementById("reconfirm").value;

                    // var userExists = false;

                    // var users = localStorage.getItem(email);
                    // console.log(users)

                    // if(users != null){
                    //     document.querySelector("#errormsg").innerHTML = "User Already Exists"
                    //     return;
                    // }

                    if(password !== reconfirm){
                        document.querySelector("#errormsg").innerHTML = "Passwords do not match"
                        return false;
                    }
                    return true;

                    // localStorage.setItem(email, password)
                    // document.querySelector("#errormsg").innerHTML = "User Created Successfully!"
                    // message = document.getElementById("msg")

                    // var ul = document.createElement("ul");
                    // ul.append(document.createElement("li").innerHTML = first)
                    // ul.append(document.createElement("li").innerHTML = last)
                    // ul.append(document.createElement("li").innerHTML = gender)
                    // ul.append(document.createElement("li").innerHTML = dob)
                    // ul.append(document.createElement("li").innerHTML = email)
                    // ul.append(document.createElement("li").innerHTML = password)
                    // ul.append(document.createElement("li").innerHTML = reconfirm)
                    
                    // message.append(ul);
                    // console.log(first)
                    // console.log(last)
                    // console.log(gender)
                    // console.log(dob)
                    // console.log(email)
                    // console.log(password)
                    // console.log(reconfirm)
                }
            })
        </script>
    </head>
    <body>
        <div id="register" align="center">
            <img src="images/Amazing.png" alt="Amazing Website Logo">
            <h2>Welcome to Amazing Registration Page</h2>
            <form action="db_addUsers.php" method="POST">
                <table>
                    <tr>
                        <td><label for="first">First Name:  </label></td>
                        <td><input type="text" placeholder="First Name" id="first" name="first" required></td>
                    </tr>

                    <tr>
                        <td><label for="last">Last Name:  </label></td>
                        <td><input type="text" placeholder="Last Name" id="last" name="last" required></td>
                    </tr>

                    <tr>
                        <td><label for="gender">Gender:  </label></td>
                        <td>
                            <label>Male</label>
                            <input type="radio" name="gender" value="Male" required>
                            <label>Female</label>
                            <input type="radio" name="gender" value="Female" required>
                        </td>
                    </tr>

                    <tr>
                        <td><label for="date">Date of Birth:  </label></td>
                        <td><input type="date" placeholder="Date" id="dob" name="date" required></td>
                    </tr>

                    <tr>
                        <td><label for="email">Email Address:  </label></td>
                        <td><input type="text" placeholder="someone@example.com" id="email" name="email" required></td>
                    </tr>

                    <tr>
                        <td><label for="password">Password:  </label></td>
                        <td><input type="password" placeholder="Password" id="password" name="password" required></td>
                    </tr>

                    <tr>
                        <td><label for="reconfirm">Reconfirm Password:  </label></td>
                        <td><input type="password" placeholder="Confirm Password" id="reconfirm" name="reconfirm" required></td>
                    </tr>

                    <tr>
                        <td colspan=2><label id="errormsg"></label></td>
                    </tr>

                    <tr>
                        <td></td>
                        <td><input type="submit" value="Submit"></td>
                    </tr>
                </table>
            </form>
        </div>
        <div id="msg">
        </div>
    </body>
</html>