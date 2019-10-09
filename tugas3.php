<?php
class data {

    public $id;
    protected $pas="slvdlt";
    private $name="silvi anindya";

    public function true(){
        return $this->name;
    }
    protected function word(){
        return $this ->pas;

    }
}
$user= new data();
$user-> id="beakkabeh23";

echo "name : ".$user->true();
echo "<br>";
echo "id : ".$user->id;
echo "<br>";
echo "pas : ".$user->word();



?>