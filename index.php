<?php
 // include "classes/Calzatura.php";
 require_once "classes/Calzatura.php";
 require_once "classes/Stivaletti.php";

 $calzaturaGeox = new Calzatura("Geox");
 $calzaturaGeox->fasciaDiPrezzo = "Premium";
 $calzaturaGeox->tipoDiSuola = "gomma";
 $calzaturaGeox->quantita = 10;
 echo $calzaturaGeox->totalprice(150);
 var_dump($calzaturaGeox);

 $calzaturaDolceGabbana = new Calzatura("Dolce & Gabbana");
 $calzaturaDolceGabbana->fasciaDiPrezzo = "Premium";
 $calzaturaDolceGabbana->tipoDiSuola = "pelle";
 $calzaturaDolceGabbana->quantita = 100;
 echo $calzaturaDolceGabbana->totalprice(300);
 var_dump($calzaturaDolceGabbana);
 var_dump($calzaturaDolceGabbana->getInfo());

$calzaturaTimberland = new Calzatura("Timberland");
var_dump($calzaturaTimberland);
