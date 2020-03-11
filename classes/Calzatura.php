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
   public $fasciaDiPrezzo;
   public $tipoDiSuola;
   public $tipoDiChiusura;
   public $colore;
   public $quantita;

   public function __construct($_marca)
   {
     $this->marca = $_marca;
   }
   public function totalprice($_prezzo) {
     if(empty($this->quantita)) {
       die("Non hai inserito la quantità");
     }
     return $this->quantita * $_prezzo;
   }

   public function getInfo() {
     return [
       $this->marca,
       $this->fasciaDiPrezzo
     ];
   }
 }
