<?php
class produk {

   var $customer;
   var $merk;
   var $ukuran_tv;
  
   function hidupkan_tv() {
     return "Hidupkan tv";
    }
   function matikan_tv() {
     return "Matikan tv";
   }
}
  
$tv1 = new produk();
  
$tv1->customer="silvi";
$tv1->merk="Samsung";
$tv1->ukuran_tv="15 ";
  
echo $tv1->customer;
echo "<br />";
echo $tv1->merk;
echo "<br />";
echo $tv1->ukuran_tv;
echo "<br />";
  
echo $tv1->hidupkan_tv();
echo "<br />";
echo $tv1->matikan_tv();
?>