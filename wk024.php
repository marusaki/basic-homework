<?php
class Queue{
    private $elements;

    public function __construct()
    {
        $this->elements = array();
    }

    //insert element
    public function enqueue($num)
    {
        array_unshift($this->elements,$num);
    
    }

    //delete front element
    public function dequeue()
    {
        if (!$this->isEmpty()){
            unset($this->elements[sizeof($this->elements) - 1]);
        }
    }

    //get front element
    public function front()
    {
        if (!$this->isEmpty()){
            return $this->elements[sizeof($this->elements) - 1];
        }
    }

    //check empty
    public function isEmpty()
    {
        return empty($this->elements);
    }
}

//文字列のすべての値を実装しすべての要素を表示する
$queue = new Queue();
$queue->enqueue("A");
$queue->enqueue("B");
$queue->enqueue("C");

while(!$queue->isEmpty()){
    echo $queue->front() . " ";
    $queue->dequeue();
}

?>