<?php

class ape extends animal{
    //property
    public $yell;
    public $jump;

    //method
    public static function yell()
    {
        echo "Auooo";
    }

    public static function jump()
    {
        echo "Hoop Hoop";
    }

    // public static function set_yell($suarah)
    // {
    //     $this->yell = $suarah;
    //     return $this;
    // }

    // public function get_yell()
    // {
    //     return $this->yell;
    // }
}

?>