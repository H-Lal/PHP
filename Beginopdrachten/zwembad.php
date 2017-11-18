<?php

$zwemmen["De Spartelkuikens"] = 25;
$zwemmen["De Waterbuffels"] = 32;
$zwemmen["Plonsmerin"] = 11;
$zwemmen["Bommetje"] = 23;

foreach ($zwemmen as $namen => $waarde) {
    print("<table border='8'>");
    echo "<tr> <td colspan='2'> " . $namen . "</td>
        <td colspan='2'>" . $waarde . " </td> <br> ";
    for ($i = 0; $i < $waarde / 6 ; $i++) {
        echo "<img src='zwem.png'>";
    }

}
?>