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
};

class StartrekWarrior extends Warrior {
public $mentalPower;
}

class MarvelWarrior extends Warrior{
public $superPower;
}

class PokemonWarrior extends Warrior{
public $level;
}


