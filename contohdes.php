<?php
class laptop {
  
   private $pemilik = "dlt";
   private $merk = "Asus";
   
   public function __construct(){
     echo "Ini berasal dari Constructor Laptop";
   }
  
   public function hidupkan_laptop(){
     return "Hidupkan Laptop $this->merk punya $this->pemilik";
  
   }
   public function __destruct(){
     echo "Ini berasal dari Destructor Laptop";
   }
}
  

$laptop_dlt= new laptop();
echo "<br />";
echo $laptop_dlt->hidupkan_laptop();
echo "<br />";
unset($laptop_dlt);
echo "<br />";
echo "Objek Telah Dihancurkan";
?>