<?php
class Fruit{
    public $name;
    function __construct($name)
    {
        $this->name = $name;
    }
    
    function get_name(){
        return $this->name;
    }
}

$Banana = new Fruit("Banana");
echo $Banana->get_name();
?>