<?php
class Queue
{
    private $elements;

    public function __construct()
    {
        $this->elements = array();
    }

    //insert element
    public function enqueue($num)
    {
        array_unshift($this->elements, $num);
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
        return null;
    }

    //check queue is empty or not
    public function isEmpty()
    {
        return empty($this->elements);
    }
}

//output unit
$unit = 0;

//Priority tasks: 2, 1, 3
$prioritytasks = new Queue();
$prioritytasks->enqueue("2");
$prioritytasks->enqueue("1");
$prioritytasks->enqueue("3");

//Dependent list: 1, 2, 3
$dependentlist = new Queue();
$dependentlist->enqueue("1");
$dependentlist->enqueue("2");
$dependentlist->enqueue("3");

//優先タスクの先頭の値が依存タスクの先頭が確認
//依存タスクの先頭の場合、優先タスクと依存タスクの先頭削除(2unit)
//依存タスクの先頭ではない場合、優先タスクの先頭を最後に移動（1unit)

while(!$prioritytasks->isEmpty()){
    if ($prioritytasks->front() === $dependentlist->front()){
        $prioritytasks->dequeue();
        $dependentlist->dequeue();
        $unit += 2;

    } else {
        $prioritytasks->enqueue($prioritytasks->front());
        $prioritytasks->dequeue();
        $unit += 1;
    }
}

echo $unit;

?>