<?php
/**
 * Created by PhpStorm.
 * User: Vinci
 * Date: 10-11-2017
 * Time: 08:39
 */
session_start();

$users = array(
    "piet@worldonline.nl"=> array("pwd" => "doetje123", "rol" => "Gebruiker"),
    "klaas@carpets.nl"=> array("pwd" => "snoepje777", "rol" => "Administrator"),
    "truushendriks@wegweg.nl"=> array("pwd" => "arkiearkie201", "rol" => "Gebruiker")
);
if(isset($_GET["loguit"])){
    $_SESSION = array();
    session_destroy();
}
if(isset($_POST['knop'])
    && isset($users[$_POST['email']])
    && $users[$_POST["email"]]["pwd"] == $_POST ['pwd'] ){
    $_SESSION["user"] = array("email" => $_POST["email"],
                            "pwd" => $users [$_POST["email"]]['pwd'],
                            "rol" => $users [$_POST["email"]]['rol']);
    $message = "Welkom ".$_SESSION["user"]["email"]." met de rol ". $_SESSION["user"]["rol"];

} else{
    $message = "Inloggen";
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
  <title>Login</title>
  <meta charset="utf-8">
</head>
<style>
body{
    text-align: center;
    }
</style>
<body>
<h1><?php echo $message; ?></h1>
<form action= "<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
    <hr>
Email <br>
    <input type="email" name="email" value="">
    <br><hr>
Wachtwoord <br>
    <input type="password" name="pwd" value="">
    <br><hr>
    <button type="submit" name="knop">Submit</button>
    <br><hr>
</form>
<p><a href="login.php?loguit"</a>Uitloggen</p>
<p><a href="website.php"</a>Website</p>
<p><a href="admin.php"</a>Admin</p>


</body>
</html>
