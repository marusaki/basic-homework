<?php
class Stack {
    /** @var array stack element */
    private $elements;

    public function __construct()
    {
        $this->elements = array(); //initialize stack element
    }

    /**
    * insert an element
    * @param int num
    * @return void
    */
    public function push($num)
    {
        $this->elements[] = $num; //In php, this assignment will add element to the end of an array        
    }

    /**
    * delete top element
    * @return void
    */
    public function pop()
    {
        if (!$this->isEmpty()) {
            return $this->elements[sizeof($this->elements) - 1];
        }        
        return null;
    }

    /**
    * get top element
    * @return int
    */
    public function top()
    {
        if (!$this->isEmpty()) {
            return $this->elements[sizeof($this->elements) - 1];
        }        
        return null;
    }

    /**
    * check stack is empty or not
    * @return boolean
    */
    public function isEmpty()
    {
        return empty($this->elements);
    }

    public function printElement()
    {
        print_r($this->elements);
        echo "<br>";
        var_dump($this->elements);
    }
}

$stack = new Stack();
$stack->push("6");
$stack->push("2");
$stack->push("7");
$stack->push("1");
$stack->printElement();

?>