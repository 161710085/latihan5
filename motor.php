<?php
// buat class laptop
class motor {
 
   public $pemilik;
   public $merek ;
   public $harga ;
  
   public function __construct($p,$m,$h){
     $this->pemilik=$p;
     $this->merek=$m;
      $this->harga=$h;
   }
 }
 ?>