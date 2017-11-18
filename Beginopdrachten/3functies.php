<?php
//Opdracht: Functies
// Schrijf een functie die als argument een waarde in Celsius accepteert en de temperatuur in Fahrenheit weergeeft.
$text1 = "Het is ";
$text2 = " graden celcius";

function fahrenheit()
{
    $fahrenheit = 95;
    $celcius = ($fahrenheit - 32) * 5 / 9;
    echo $celcius;
}
echo $text1;
echo fahrenheit();
echo $text2;
echo "<br>";
echo "<hr>";


// Schrijf een functie die bepaalt of een getal deelbaar is door 3. De functie accepteert een getal als argument en als retour-waarde wordt een boolean teruggegeven.
$check;

function deel()
{
    $number = 1;
    $three = 8;
    if ($number / $three) {
        /*$check = true;
                return $check;
                echo $check;*/
        echo "het is deelbaar";
    } else {
        /*        $check = false;
                return check;*/
        echo "het is niet deelbaar";
    }
}

echo deel();
echo "<br>";
echo "<hr>";

//Schrijf een functie die een string accepteert als argument en als return-waarde een string geeft met de letters in omgekeerde volgorde.
$string = "Deze string komt zomenteen achteruit        ";
function revert(){
    echo strrev("Deze komt zomenteen achteruit");
    }
    echo revert();
?>