<?php

class animal {
    //property
    public $name;
    public $legs;
    public $cold_blooded;

    //constructor
    public function __construct($name, $legs, $cold_blooded){
        $this->name = $name;
        $this->legs = $legs;
        $this->cold_blooded = $cold_blooded;
    }

    //method
    public function set_nama($nama)
    {
        $this->name = $nama;
        return $this;
    }

    public function get_nama()
    {
        return $this->name = $nama;
    }

    //kaki
    public function set_legs($kaki)
    {
        $this->legs = $kaki;
        return $this;
    }

    public function get_legs()
    {
        return $this->legs = $kaki;
    }

    //darah
    //kaki
    public function set_blooded($darah)
    {
        $this->cold_blooded = $darah;
        return $this;
    }

    public function get_blooded()
    {
        return $this->cold_blooded = $darah;
    }
}

?>