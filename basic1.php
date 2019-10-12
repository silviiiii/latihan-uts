<?php
class komputer
{
    public $procesor="intel core 1 7";
    public function _construct()
    {
       echo "construct dari komputer<br>";
    }

    public function _destruct()
    {
        echo "desctructor dari komputer<br>";
    }
}
    class laptop extends komputer
    {
        public function _construct()
        {
            parent::_construct();
            echo "construct dari laptop<br>";
        }

        public function spesifikasi()
        {
            echo "spesifikasi laptop :";
        }
        public function _destruct()
        {
            echo "desctruct dari laptop<br>";
            parent::_destruct();
        }
    }
    $asus=new laptop();
    $asus->spesifikasi();
    echo $asus->procesor ."<br>";
?>