<?php
 require_once "Calzatura.php";

 class Stivaletti extends Calzatura
 {
   public $sconto;

   public function __construct($_marca, $_sconto)
   {
     parent::__construct($_marca);
     $this->sconto = $_sconto;
   }

   public function totalprice($_prezzo) {
     if(empty($this->quantita)) {
       die("Non hai inserito la quantità");
     }
     elseif (empty($this->sconto)) {
       die("Non hai inserito la quantità");
     }
     return $this->quantita * $_prezzo * $this->sconto;
   }

 }
