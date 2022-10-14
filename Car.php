<?php
class Car
{
    // Constructor
    public function __construct()
    {
        echo "Ini Konstruktor\n";
        
    }
    // Atribut
    public $color = "Red";
    public $max_speed = 300;

    //Method
    public function jalan()
    {
        echo "Mobil berjalan...\n";
    }
}