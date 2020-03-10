<!-- Crea e modellizza classi per gestire i prodotti di un magazzino
Facciamo come in classe

scegliamo la categoria merceologica dei prodotti
(tecnologia, abbigliamento, detersivi, libri, sanitari... quello che vi pare )
poi individuiamo una classe prodotto generica e le classi figlie specifiche per un tipo di prodotto.
Se riusciamo creiamo un trait  trasversale  che possa essere usato in varie classi.
Pushate, pushate, pushate e fidatevi: amerete gli oggetti e poi cercherete di usarli ovunque... -->

<?php
 class Calzatura {
   public $marca;
   public $tipologia;
   public $fasciaDiPrezzo;
   public $tipoDiSuola;
   public $tipoDiChiusura;
   public $colore;
   public $quantita;

   public function __construct($_marca, $_tipologia)
   {
     $this->marca = $_marca;
     $this->tipologia = $_tipologia;
   }
   public function totalprice($prezzo) {
     if(empty($this->quantita)) {
       die("Non hai inserito la quantità");
     }
     return $this->quantita * $prezzo;
   }
 }

 $geox = new Calzatura("Geox", "Stivaletti");
 $geox->fasciaDiPrezzo = "Premium";
 $geox->tipoDiSuola = "gomma";
 $geox->quantita = 10;
 echo $geox->totalprice(150);
 var_dump($geox);

 $dolceGabbana = new Calzatura("Dolce & Gabbana", "Stivaletti");
 $dolceGabbana->fasciaDiPrezzo = "Premium";
 $dolceGabbana->tipoDiSuola = "pelle";
 $dolceGabbana->quantita = 100;
 echo $dolceGabbana->totalprice(300);
 var_dump($dolceGabbana);
