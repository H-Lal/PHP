<?php
/**
 * Created by PhpStorm.
 * User: Vinci
 * Date: 19-11-2017
 * Time: 21:19
 */
    include_once ("radiozender.php");
    include_once ("songs.php");


    $ditprogramma = new Programma();
    $ditprogramma->setNaam("mijn eerste programma");
    $ditprogramma->setOmschrijving("even testen");

    foreach ( $ditprogramma->getProgramma() as $item) {
        echo $item."<br>";
    }

    $nieuwliedje = new Liedje("Kendrick Lamar", "Good Kid, M.A.A.d City");

    $ditprogramma->voegLiedjeToe($nieuwliedje);

    foreach ($ditprogramma->getLiedjes() as $liedje){
        echo $liedje->getTitel()."-".$liedje->getArtiest()."<br>";
    }