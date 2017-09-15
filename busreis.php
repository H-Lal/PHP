<?php
$leeftijd = 30;

if (($leeftijd < 3)) {
    echo 'U mag gratis mee';
} elseif (($leeftijd < 12) || ($leeftijd > 65)) {
    echo 'de ticket is 5 euro';
} else {
    echo "De ticket is 10 euro";
}
?>