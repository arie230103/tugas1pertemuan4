<?php
//paradigma prosedural
$hero1name = "Alucard";
$hero1_hp = 4000;
$hero1_defense = 120;
$hero1_damage = 300;
$hero1_mana = 0;

$hero2name = "Akai";
$hero2_hp = 4100;
$hero2_defense = 300;
$hero2_damage = 50;
$hero2_mana = 0;

//paradigma OOP
class Hero
{
    //Atribut
    public $name;
    public $hp;
    public $defense;
    public $damage;
    public $mana;

    //Method
    //Konstruktor
    public function __construct($name, $hp, $defense, $damage, $mana)
    {
        $this->name = $name;
        $this->hp = $hp;
        $this->defense = $defense;
        $this->damage = $damage;
        $this->mana = $mana;
    }

    public function attack($target)
    {
        $target->hp = $target->hp - ($this->damage - $target->defense);
        echo "$this->name menyerang $target->name \n";
        echo "Hp $target->name Saat ini adalah : $target->hp \n";
    }
}

$hero1 = new Hero("Alucard", 4000, 120, 300, 0);
$hero2 = new Hero("Akai", 4100, 300, 50, 0);

// memanggil method
$hero1->attack($hero2);
