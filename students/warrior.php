<?php

require_once __DIR__ . "/../base/localWarrior.php";


$GLOBALS['warriorID'] = 'Lucartman';

// Définissez vos class de combattants
abstract class Warrior extends LocalWarrior {
};

class StartrekWarrior extends Warrior {

}

class MarvelWarrior extends Warrior{

}

class PokemonWarrior extends Warrior{

}


