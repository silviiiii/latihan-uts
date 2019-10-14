<?php
class aritmatika{
    public $bil1;
    public $bil2;
    public function __construct($bil1, $bil2)
    {
        $this->bil1=$bil1;
        $this->bil2=$bil2;
    }

    public function tambah(){
        $tambah=$this->bil1 + $this->bil2;
        return "hasil pertambahan : $tambah<br>";
    }
     public function kurang(){
        $kurang= $this->bil1 - $this->bil2;
        return "hasil perkurangan : $kurang<br>";
    }
     public function kali(){
        $kali= $this->bil1 * $this->bil2;
        return "hasil perkalian : $kali<br>";
    }
     public function bagi(){
        $bagi= $this->bil1 / $this->bil2;
        return "hasil pembagian : $bagi<br>";
    }
}
if(isset($_POST['sbm'])){
    $a= $_POST['bil1'];
    $b= $_POST['bil2'];
}
echo "<center>*HASIL PERHITUNGAN*</center><br>";
$hasil=new aritmatika($a,$b);
echo $hasil->tambah();
echo "<br>";
echo $hasil->kurang();
echo "<br>";
echo $hasil->kali();
echo "<br>";
echo $hasil->bagi();
?>