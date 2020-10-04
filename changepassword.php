<html>
    <head>
        <title>Change Password</title>
        <style>
            body{
                background-image: url("images/background.jpg");
                background-size: auto;
                background-attachment: fixed;
            }
            #login{
                background-color: wheat;
                border: 1px solid black;
                width: 500px;
                padding: 30px;
                margin: 150px auto;
            }
            
        </style>
    </head>
    <body>
        <div id="login" align="center">
            <img src="images/Amazing.png" alt="Amazing Website Logo">
            <h2>Change Password</h2>
            <form>
                <table>
                    <tr>
                        <td><label>Email Address:  </label></td>
                        <td><input type="text" placeholder="someone@example.com"></td>
                    </tr>
                    <tr>
                        <td><label>Password:  </label></td>
                        <td><input type="password" placeholder="Password"></td>
                    </tr>
                    <tr>
                        <td><label>Confirm Password:  </label></td>
                        <td><input type="password" placeholder="Confirm Password"></td>
                    </tr>
                    <tr>
                        <td align="center" colspan="2"><input type="submit"></td>
                    </tr>
                </table>
               
            </form>
        </div>
    </body>
</html>