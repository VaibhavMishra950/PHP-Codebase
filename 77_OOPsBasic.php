<?php
echo "<style>body{font-family:Poppins;margin:2% 10%;}</style>";
class Player{
    // Properties
    public $name;
    public $speed = 5;
    public $running = false;
    
    // Methods
    function setName($name){
        $this->name = $name;
    }
    function getName(){
        return $this->name;
    }

    function run(){
        $this->running = true;
    }
    function stopRun(){
        $this->running = false;
    }

}

echo "<h3>Lets Understand OOPs</h3><br>";

$p1 = new Player();
$p1->setName("Vaibhav");
echo $p1->getName();
echo "<br>";

$p2 = new Player();
$p2->setName("Yogesh");
echo $p2->getName();
echo "<br>";

$p3 = new Player();
$p3->setName("Yash");
echo $p3->getName();
echo "<br>";


?>