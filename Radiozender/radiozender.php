<?php
/**
 * Created by PhpStorm.
 * User: Vinci
 * Date: 15-11-2017
 * Time: 13:50
 */
class Programma{
    private $naam = "";
    private $omschrijving = "";
    private $liedjes = array();

    public function voegLiedjeToe($liedje){
        $this->liedjes[] = $liedje;
    }
    public function getLiedjes(){
        return $this->liedjes;
    }

    public function getProgramma(){
        return array("naam"=> $this->naam,"omschrijving" => $this->omschrijving);
        /**
         * geeft programma informatie terug
         * @return mixed
         */
    }

    public function setNaam($n){
        $this->naam =$n;
        if(strlen($n)>=2){
            $this->naam = $n;
        }
        /**
         * geeft het programma een naam terug
         * @return mixed
         */
    }

    public function setOmschrijving($omschrijving){
        $this->omschrijving = $omschrijving;
        /**
         * geeft het programma een omschrijving
         * @param de omschrijving als string
         * @return mixed
         */
    }
    public function getNaam(){
        return $this->naam;
        /**
         * Retourneert naam van het programma
         * @param de naam als string
         */
    }
    public function getOmschrijving(){
        return $this->omschrijving;
        /**
         * Retourneert omschrijving van het programma
         * @param de omschrijving als string
         */
    }

}