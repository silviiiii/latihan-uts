<?php
//1. class adalah sebuah blueprint/template
// untuk membuat instance dari object
// 2.class mendefinisikan object
// 3.menyimpan data(property) dan perilaku (method)

// membuat class dengan nama kucing
  class kucing 
  {
    // membuat property
    public $warna;
    public $jml_kaki;
    public $mkn_fav;

// membuat method dengan nama bersuara
    public function bersuara()
    {
        return "miaww";
    }
  }

//   membuat objek baru
$kucing1 =new kucing();
  var_dump($kucing1);
        echo "warna kucing:$warna";
?>