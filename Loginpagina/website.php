<?php
/**
 * Created by PhpStorm.
 * User: Vinci
 * Date: 14-11-2017
 * Time: 09:04
 */
session_start();

if(isset($_SESSION["user"])){
    echo "<h1>Welkom ".$_SESSION["user"]["email"]." op de website</h1>";
    echo "<a><a href='login.php'>Website</a> </a></p>";
}else{
    header('location: login.php');
}