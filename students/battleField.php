<?php

  require_once __DIR__ . "/../base/baseBattleField.php";
  require_once "warrior.php";


  class BattleField extends BaseBattleField
  {
      public static function createMyWarrior() {
          $secondWarrior=  new MarvelWarrior($GLOBALS['warriorID']);
          $Hammer = new Weapon("Hammer", 200);
          $Hammer->SetImageUrl("https://i.pinimg.com/originals/e4/44/7c/e4447cd25a656c6e35b2bb9fb2a509a1.jpg");
          $secondWarrior-> setWeapon($Hammer);
          $secondWarrior->SetImageUrl("https://scontent-cdt1-1.xx.fbcdn.net/v/t1.6435-9/31648744_10216435734390538_8936758535501381632_n.jpg?_nc_cat=110&ccb=1-3&_nc_sid=174925&_nc_ohc=-FLt6wzXib0AX8CjNqA&_nc_ht=scontent-cdt1-1.xx&oh=1580edf6146145eb4b562958464dfd1e&oe=60E6E3CF");
          $secondWarrior->power();
          $secondWarrior->saveNew();
      }
      public static function createOtherWarrior() {
          $thirdWarrior=  new MarvelWarrior('thor');
          $Axe = new Weapon("Axe", 200);
          $Axe->SetImageUrl("https://i.pinimg.com/originals/16/48/be/1648be7134ffbe1a75cbcaf22f79e79b.jpg");
          $thirdWarrior-> setWeapon($Axe);
          $thirdWarrior->SetImageUrl("https://scontent-cdt1-1.xx.fbcdn.net/v/t1.6435-9/68751007_10220160748113553_2128055745688633344_n.jpg?_nc_cat=101&ccb=1-3&_nc_sid=174925&_nc_ohc=sKKMGlyihZoAX8Cb1tB&_nc_ht=scontent-cdt1-1.xx&oh=9b348ce5522a175bb1c43a0b7c6bdd4c&oe=60E6102A");
          $thirdWarrior->power();
          $thirdWarrior->saveNew();
      }
  }
