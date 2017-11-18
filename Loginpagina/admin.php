<?php
/**
 * Created by PhpStorm.
 * User: Vinci
 * Date: 15-11-2017
 * Time: 13:31
 */
session_start();

if(isset($_SESSION["user"]) && $_SESSION["user"]["rol"] == "Administrator"){
    echo "<h1>Welkom".$_SESSION["user"]["email"]." op het admingeddeelte van de website";
    echo "<br>";
    echo "<a><a href='login.php'>Website</a> </a></p>";
}else{
    header('location: login.php');
}