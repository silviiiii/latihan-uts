<?php
class kelas 
{
   
    public $tgl_lahir;
    public $tempat_lhr;
    public $alamat;

    function nama_murid() {
   return "silvi ";
}
 function kelas_murid() {
   return "rpl 2";
}
}
$murid1 = new kelas();

$murid1->tgl_lahir="15 juni";
$murid1->tempat_lhr="bandung";
$murid1->alamat="nusa";


echo "nama = ". $murid1->nama_murid();
echo "<br />";
echo "kelas = ". $murid1->kelas_murid();
echo "<br />";
echo "tanggal lahir = ". $murid1->tgl_lahir;
echo "<br />";
echo "tempat lahir = ". $murid1->tempat_lhr;
echo "<br />";
echo "alamat = ". $murid1->alamat;
echo "<br />";

 function nama_murid() {
   return "dalot ";
}
 function kelas_murid() {
   return "rpl 2";
}
echo "<br />";
$murid2 = new kelas();
$murid2->tgl_lahir="12 juni";
$murid2->tempat_lhr="prancis";
$murid2->alamat="manila";

echo "nama = ". $murid2->nama_murid();
echo "<br />";
echo "kelas = ". $murid2->kelas_murid();
echo "<br />";
echo "tanggal lahir = ". $murid2->tgl_lahir;
echo "<br />";
echo "tempat lahir = ". $murid2->tempat_lhr;
echo "<br />";
echo "alamat = ". $murid2->alamat;
echo "<br />";
?>