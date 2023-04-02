<?php
require 'Models/Sheep.php';
class ServicesSheeps {
  function createSheeps(Array $sheeps,Array $newSheep = null, Array $newSheeps = null ) : Array{
    if(!empty($newSheeps)){
      foreach ($newSheeps as $sheep) {
        $sheeps[] = new Sheep($sheep['name'],$sheep['valeur']);
      }
    }else if (!empty($newSheep)){
      $sheeps[] = new Sheep($newSheep['name'],$newSheep['valeur']);
    }
    return $sheeps;
  }

  function createNameSheep():String{
    $nameSheep = "";
    $alphabet = "abcdefghijklmnpqrstuvwxy";
    for ($j=0; $j < rand(5,8); $j++) { 
      $nameSheep .= $alphabet[rand(0,strlen($alphabet)-1)];
    }
    return ucfirst($nameSheep);
  }

  function createAleatoireSheeps(Array $sheeps, Int $number): array{
    for ($i=0; $i < $number; $i++) { 
      $sheeps[] = new Sheep($this->createNameSheep(),rand(1,300));
    }
    return $sheeps;
  }

  function sumSheeps(Array $sheeps): Int{
    foreach ($sheeps as $sheep) {
       $arrValSheep[] = $sheep->getValue();
    } 
    $sum = round(array_sum($arrValSheep) / sizeof($arrValSheep));
    echo "Moyenne de la valeur de mes ". sizeof($arrValSheep)." moutons : ". $sum;
    return 0;
  }

  
}