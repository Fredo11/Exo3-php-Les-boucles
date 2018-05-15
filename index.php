
<!DOCTYPE html>
<html lang="fr">
  <head>
    <meta charset="utf-8">
    <title>Exo_php_boucle</title>
  </head>

  <body>
		<?php


    //=============exo 1 ==================================

    $maVar=0;
    while ($maVar <= 10) {
        echo $maVar++;
    }

    echo "<br>";
    //=============exo 2 ==================================
    echo "<br>Exo 2:";
    $maVar1=0;
    $maVar2=80;
    while ($maVar1<20) {
        $result=$maVar1*$maVar2;
        echo $result." ";             ## espace inter mot ou chiffre." "
        $maVar1++;              ##  incrementer
    }
    //=============exo 3 ==================================
    echo "<br>Exo 3:";
    $maVar1=100;
    $maVar2=50;
    while ($maVar1 >= 10) {
      $result=$maVar1*$maVar2;
      echo $result." ";
      $maVar1--;                ##  décrémenter
    }
    //=============exo 4 ==================================
    echo "<br>Exo 4:";
    //Créer une variable et l'initialiser à 1.
    //Tant que cette variable n'atteint pas 10, il faut :
    //l'afficher
    //l'incrementer de la moitié de sa valeur
    $maVar1=1;
    while ($maVar1 <= 10) {
      echo $maVar1." ";

      $maVar1=$maVar1+$maVar1 / 2 ;     ##incrementer de la moitié de sa valeur

    }
    //=============exo 5 ==================================
    //En allant de 1 à 15 avec un pas de 1, afficher le message On y arrive presque.
    echo "<br>Exo 5:";
    $maVar1="1";
    while ($maVar1 <= 15) {
      echo "On y arrive presque.....";
      $maVar1++;                  ##incrementer  pas de 1
    }

    //=============exo 6 ==================================
    echo "<br>Exo6:";
    //En allant de 20 à 0 avec un pas de 1, afficher le message C'est presque bon.
    $i=20;
    while ($i >= 0) {
      echo "C'est presque bon....";
    $i--;
    }
    //=============exo 7 ==================================
    echo "<br>Exo7:";
    //En allant de 1 à 100 avec un pas de 15, afficher le message On tient le bon bout.
    $i=1;
    while ($i <= 100) {
      echo "On tient le bon bout....";

    $i=$i + 15;
    }
    echo "<br>Exo8:";
    //En allant de 200 à 0 avec un pas de 12, afficher le message Enfin !!!!..
    $i=200;
    while ($i >= 0) {
      echo "Enfin!!!!!!";
      $i-=12;
    }

    ?>




  </body>
</html>
