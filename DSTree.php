<?php
// A node of Binary Tree
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

function insertNum($bt, $num)
{
    if ($bt->getRoot() == null) {
        $bt->setRoot($num);
    } else {
        $current = $bt->getRoot();
        while (true){
            if ($current->getLeft()->getData() === null){
                $newnode = new Node($num, null, null);
                $bt->setLeft($newnode);
                echo $num ." new node " . $bt->getData() . " Left add";
                break;
            } elseif ($current->getRight()->getData() === null){
                $newnode = new Node($num, null, null);
                $bt->setRight($newnode);
                echo $num ." new node " . $bt->getData() . " Right add";
                break;
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

?>