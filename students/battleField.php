<?php

  require_once __DIR__ . "/../base/baseBattleField.php";
  require_once "warrior.php";


  class BattleField extends BaseBattleField
  {
      public static function createMyWarrior() {
          $firstWarrior=  new MarvelWarrior($GLOBALS['warriorID']);
          $Hammer = new Weapon("Hammer", 200);
          $Hammer->SetImageUrl("https://i.pinimg.com/originals/e4/44/7c/e4447cd25a656c6e35b2bb9fb2a509a1.jpg");
          $firstWarrior-> setWeapon($Hammer);
          $firstWarrior->SetImageUrl("https://scontent-cdt1-1.xx.fbcdn.net/v/t1.6435-9/68751007_10220160748113553_2128055745688633344_n.jpg?_nc_cat=101&ccb=1-3&_nc_sid=174925&_nc_ohc=sKKMGlyihZoAX8Cb1tB&_nc_ht=scontent-cdt1-1.xx&oh=9b348ce5522a175bb1c43a0b7c6bdd4c&oe=60E6102A");
          $firstWarrior->power();
          $firstWarrior->saveNew();
      }

  }
