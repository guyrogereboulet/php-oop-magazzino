<!-- Crea e modellizza classi per gestire i prodotti di un magazzino
Facciamo come in classe

scegliamo la categoria merceologica dei prodotti
(tecnologia, abbigliamento, detersivi, libri, sanitari... quello che vi pare )
poi individuiamo una classe prodotto generica e le classi figlie specifiche per un tipo di prodotto.
Se riusciamo creiamo un trait  trasversale  che possa essere usato in varie classi.
Pushate, pushate, pushate e fidatevi: amerete gli oggetti e poi cercherete di usarli ovunque... -->

<?php
 class Calzature {
   public $marca;
   public $tipologia;
   public $fasciaDiPrezzo;
   public $tipoDiSuola;
 }

 $geox = new Calzature();
 $geox->marca = "Geox";
 $geox->tipologia = "Stivaletti";
 $geox->fasciaDiPrezzo = "Premium";
 $geox->tipoDiSuola = "gomma";
 var_dump($geox);

 $geox = new Calzature();
 $geox->marca = "Dolce & Gabbana";
 $geox->tipologia = "Stivaletti";
 $geox->fasciaDiPrezzo = "Premium";
 $geox->tipoDiSuola = "pelle";
 var_dump($geox);
