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
          $forthWarrior=  new MarvelWarrior('risitas');
          $Chancla = new Weapon("Axe", 200002);
          $Chancla->SetImageUrl("https://pbs.twimg.com/profile_images/1114772105286049798/HeRzpvpG.jpg");
          $forthWarrior-> setWeapon($Chancla);
          $forthWarrior->SetImageUrl("https://risibank.fr/cache/stickers/d549/54995-full.png");
          $forthWarrior->power();
          $forthWarrior->saveNew();
      }
     
  }
