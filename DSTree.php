<?php
// A node of Binary Tree

use Queue as GlobalQueue;

class node
{
    private $data;
    private $left;
    private $right;

    public function __construct($data, $left = null, $right = null)
    {
        $this->data = $data;
        $this->left = $left;
        $this->right = $right;        
    }

    //get data
    public function getData()
    {
        return $this->data;
    }

    //set data
    public function setData($data)
    {
        $this->data = $data;
    }

    //get left node
    public function getLeft()
    {
        return $this->left;
    }

    //set left node
    public function setLeft($left)
    {
        $this->left = $left;
    }

    //get right node
    public function getRight()
    {
        return $this->right;
    }

    //set right node
    public function setRight($right)
    {
        $this->right = $right;
    }
}

//Binary Tree Class
class BT
{
    /** @var Node */ 
    private $root;

    public function __construct($root)
    {
        $this->root = $root;   
    }

    //get root
    public function getRoot()
    {
        return $this->root;
    }

    //set root
    public function setRoot($root)
    {
        $this->root = $root;
    }
}

/*
function insertNum($arr, $num)
{
    $tmpi = 0;
    foreach ($arr as $val){
        if ($val->getLeft() === null){
            $newnode = new Node($num, null, null);
            $val->setLeft($newnode);
            echo $num ." new node " . $val->getdata() . " Left add";
            break;
        } elseif ($val->getRight() === null){
            $newnode = new Node($num, null, null);
            $val->setRight($newnode);
            echo $num ." new node " . $val->getdata() . " Right add";
            break;
        }
    }
}
*/

class Queue {
    /** @var array queue element */
    private $elements;

    public function __construct()
    {
        $this->elements = array(); //initialize queue element
    }

    /**
    * insert an element
    * @param string $ele
    * @return void
    */
    public function enqueue($ele)
    {
        array_unshift($this->elements, $ele); 
    }

    /**
    * delete front element
    * @return void
    */
    public function dequeue()
    {
        if (!$this->isEmpty()) { //check if queue is not empty
            unset($this->elements[sizeof($this->elements) - 1]); // same to pop function in stack
        }
    }

    /**
    * get front element
    * @return string
    */
    public function front()
    {
            if (!$this->isEmpty()) {
            return $this->elements[sizeof($this->elements) - 1]; // same to top function in stack
        }

        return null;
    }

    /**
    * check queue is empty or not
    * @return boolean
    */
    public function isEmpty()
    {
        return empty($this->elements);
    }
}

function insertNum(&$bt, $num)
{
    if ($bt->getRoot() == null) {
        $bt->setRoot($num);
    } else {
        $queue = new Queue();
        $queue->enqueue($bt->getRoot());

        while (true){
            $current = $queue->front();
            if ($current->getLeft() == null){
                $newnode = new Node($num, null, null);
                $current->setLeft($newnode);
                echo $num ." new node " . $current->getData() . " Left add<br>";
                break;
            } elseif ($current->getRight() == null){
                $newnode = new Node($num, null, null);
                $current->setRight($newnode);
                echo $num ." new node " . $current->getData() . " Right add<br>";
                break;
            } else {
                $queue->enqueue($current->getLeft());
                $queue->enqueue($current->getRight());
                $queue->dequeue();
            }
        }
    }
}

$left1 = new Node(7);
$left2 = new Node(15);
$left3 = new Node(8);

$parent1 = new node(11, $left1, null);
$parent2 = new node(9, $left2, $left3);

$root = new Node(10, $parent1, $parent2);

$bt = new BT($root);
//配列にrootから順にノード情報をもつ
//$arr = array($root, $parent1, $parent2, $left1, $left2, $left3);
//insertNum($arr, 12);
insertNum($bt, 12);
insertNum($bt, 99);
insertNum($bt, 100);
insertNum($bt, 101);
insertNum($bt, 102);
insertNum($bt, 103);
insertNum($bt, 104);

?>