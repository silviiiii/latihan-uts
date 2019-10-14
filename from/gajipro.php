<?php
class gajioop
{
    public $jumlah;
    public function __construct($jumlah)
    {
    $this->jumlah=$jumlah;
    }
    public function gaji_kotor()
    {
        $gajik=$this->jumlah*75000;
        return "Gaji kotor : $gajik";
    }
     public function gaji_bersih()
    {
        $gajib=($this->jumlah*75000)-($this->jumlah*75000)*0.025;
        return "Gaji bersih : $gajib";
    }
}
if(isset($_POST['sbm'])){
    $a=$_POST['jumlah'];
    $b=$_POST['nama'];
    $c=$_POST['nip'];
    $d=$_POST['alamat'];
    
    echo"<center> Total Gaji </center>";
    $hasil=new gajioop($a);
    echo "Nama :$b<br>";
     echo "NIP :$c<br>";
      echo "Alamat :$d<br>";
       echo $hasil-> gaji_kotor()."<br>";
        echo $hasil-> gaji_bersih()."<br>";
        
}
?>