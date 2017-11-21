<?php
/**
 * Created by PhpStorm.
 * User: Vinci
 * Date: 21-11-2017
 * Time: 14:16
 */
class Liedje{
    private $titel;
    private $artiest;

    function __construct($ti, $ar){
        $this->titel = $ti;
        $this->artiest = $ar;
    }

    /**
     * @return mixed
     */
    public function getTitel()
    {
        return $this->titel;
    }

    /**
     * @param mixed $titel
     */
    public function setTitel($titel)
    {
        $this->titel = $titel;
        return $this;

    }

    /**
     * @return mixed
     */
    public function getArtiest()
    {
        return $this->artiest;
    }

    /**
     * @param mixed $artiest
     */
    public function setArtiest($artiest)
    {
        $this->artiest = $artiest;
        return $this;


    }

}