<?php
/**
 * Created by PhpStorm.
 * User: Vinci
 * Date: 15-11-2017
 * Time: 13:50
 */
class Programma{
    private $naam ="Kendrick Lamar";
    private $omschrijving = "Your top 1-5";

    function getProgramma(){
        /**
         * geeft programma informatie terug
         * @return mixed
         */
        return array();
    }

    function setNaam($n){
        /**
         * geeft het programma een naam terug
         * @return mixed
         */
        $this->naam =$n;
    }

    function setOmschrijving($omschrijving){
        /**
         * geeft het programma een omschrijving
         * @param de omschrijving als string
         * @return mixed
         */
        return array();
    }

}