$username = $_POST('username');
$password = $_POST('password');

if($username == "dannie.winford@gmail.com" && $password =="coolzap"){
    header("Location:catalog.php")
}else{
    header("Location:login.php")
}
