<?php

  require_once __DIR__ . "/../base/baseBattleField.php";
  require_once "warrior.php";


  class BattleField extends BaseBattleField
  {
      public static function createMyWarrior() {
          $secondWarrior=  new MarvelWarrior($GLOBALS['warriorID']);
          $Hammer = new Weapon("Hammer", 200);
          $Hammer->setImageUrl("https://i.pinimg.com/originals/e4/44/7c/e4447cd25a656c6e35b2bb9fb2a509a1.jpg");
          $secondWarrior-> setWeapon($Hammer);
          $secondWarrior->setImageUrl("https://scontent-cdt1-1.xx.fbcdn.net/v/t1.6435-9/31648744_10216435734390538_8936758535501381632_n.jpg?_nc_cat=110&ccb=1-3&_nc_sid=174925&_nc_ohc=-FLt6wzXib0AX8CjNqA&_nc_ht=scontent-cdt1-1.xx&oh=1580edf6146145eb4b562958464dfd1e&oe=60E6E3CF");
          $secondWarrior->saveNew();
      }
      public static function createOtherWarrior()
      {
          $thirdWarrior = new MarvelWarrior('Thor');
          $Axe = new Weapon("Axe", 520);
          $Axe->setImageUrl("https://i.pinimg.com/originals/16/48/be/1648be7134ffbe1a75cbcaf22f79e79b.jpg");
          $thirdWarrior->setWeapon($Axe);
          $thirdWarrior->setImageUrl("https://scontent-cdt1-1.xx.fbcdn.net/v/t1.6435-9/68751007_10220160748113553_2128055745688633344_n.jpg?_nc_cat=101&ccb=1-3&_nc_sid=174925&_nc_ohc=sKKMGlyihZoAX8Cb1tB&_nc_ht=scontent-cdt1-1.xx&oh=9b348ce5522a175bb1c43a0b7c6bdd4c&oe=60E6102A");
          $thirdWarrior->saveNew();


                    $forthWarrior=  new MarvelWarrior('Risitas');
                    $Issou = new Weapon("Axe", 200002);
                    $Issou->SetImageUrl("https://pbs.twimg.com/profile_images/1114772105286049798/HeRzpvpG.jpg");
                    $forthWarrior-> setWeapon($Issou);
                    $forthWarrior->SetImageUrl("https://risibank.fr/cache/stickers/d549/54995-full.png");
                    $forthWarrior->saveNew();

          $fiftWarrior=  new PokemonWarrior('Ken');
          $Chancla = new Weapon("Axe", 200002);
          $Chancla->SetImageUrl("https://pbs.twimg.com/profile_images/1114772105286049798/HeRzpvpG.jpg");
          $fiftWarrior-> setWeapon($Chancla);
          $fiftWarrior->SetImageUrl("http://www.fulguropop.com/wp-content/uploads/2020/08/mise-en-avant-3.jpg");
          $fiftWarrior->saveNew();
      }
  }
