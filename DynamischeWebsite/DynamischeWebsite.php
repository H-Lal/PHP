<?php
/**
 * Created by PhpStorm.
 * User: Vinci
 * Date: 23-10-2017
 * Time: 14:06
 */

$berichten = array();

if (!isset($_GET["naam"]) && !isset($_GET["adres"]) && !isset($_GET["email"]) && !isset($_GET["password"])) {
    $berichten[] = "Vul A.U.B. het formulier in.";
} elseif (strlen($_GET["naam"]) < 0) {
    $berichten[] = "Vul A.U.B. je naam in.";
} elseif (strlen($_GET["adres"]) < 0) {
    $berichten[] = "Vul A.U.B. je adres in.";
} elseif (strlen($_GET["wachtwoord"]) < 0) {
    $berichten[] = "Vul A.U.B. een wachtwoord in.";
}
if (!count($berichten) == 0 ) {
    //berichten weergeven
    $html = "<ul>";
    foreach ($berichten as $bericht) {
        $html .= "<li>" .$bericht . "</li>";
    }
    $html .= "<ul>";
} else{
    echo "Deze gegevens heb je ingevuld". "<br> <hr>";
    echo $_GET["naam"]. "<br> <hr>";
    echo $_GET["adres"]. "<br> <hr>";
    echo $_GET["email"]. "<br> <hr>";
    echo $_GET["wachtwoord"]. "<br> <hr>";
}

