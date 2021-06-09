<?php

require_once __DIR__ . "/../base/localWarrior.php";


$GLOBALS['warriorID'] = 'Lucartman';

// Définissez vos class de combattants
abstract class Warrior extends LocalWarrior {
    public $id;
    public $name;
    public $speed;
    public $life;
    public $shield;
    public $imageUrl;
    public $weapon;
    public function __construct($id)
    {
        $this->id=$id;
        $this->speed=30;
        $this->life=100;
        $this->shield=20;
    }
};

class StartrekWarrior extends Warrior {
public $mentalPower;
    public function __construct()
    {

    }
    public function power() {
        return $this->mentalPower;
    }
}

class MarvelWarrior extends Warrior{
public $superPower;
    public function __construct()
    {

    }
    public function power() {
        return $this->superPower;
    }
}

class PokemonWarrior extends Warrior{
public $level;
    public function __construct()
    {

    }
    public function power() {
        return $this->level;
    }
}


