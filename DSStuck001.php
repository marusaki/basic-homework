<?php
class Stack {
    //@var array stack element 
    private $elements;

    public function __construct()
    {
        $this->elements = array();
    }

    //insert @param string num
    public function push($ele)
    {
        $this->elements[] = $ele;
    }

    //delete top
    public function pop()
    {
        if (!$this->isEmpty()) {
            unset($this->elements[sizeof($this->elements) - 1]); 
        }
    }

    //get top
    public function top(){
        if (!$this->isEmpty()){
            return $this->elements[sizeof($this->elements) -1];
        }
        return null;
    }

    //null check
    public function isEmpty(){
        return empty($this->elements);
    }
}

