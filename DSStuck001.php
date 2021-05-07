<?php
class Stack {
    //@var array stack element 
    private $elements;

    public function __construct() {
        $this->elements = array();
    }

    //insert @param string num
    public function push($ele){
        $this->elements[] = $ele;
    }

    //delete top
    public function pop(){
        if (!$this->isEmpty()) {
            array_pop($this->elements);  
        }
    }

    //get top
    public function top(){
        if (!$this->isEmpty()){
            return $this->elements[sizeof($this->elements) - 1];
        }
        return null;
    }

    //null check
    public function isEmpty(){
        return empty($this->elements);
    }

    //elementsはprivateなのでクラス内でしか処理ができない
    //なので要素数を調べる関数を追加しておく
    public function size(){
        return sizeof($this->elements);
    }
}

function removeCoupleOfWords($words){
    $stack = new Stack();

    for ($i = 0; $i < count($words); $i++){
        //空だったら単純にpushする
        if ($stack->isEmpty()){
            $stack->push($words[$i]);
        } else {
            //今のスタックのtopの値を取得
            $str = $stack->top();
            //入れようとしている値とtopの値が同じならpop削除
            if ($words[$i] == $str) {
                $stack->pop();
            } else { //入れようとしている値とtopの値が違うのでpushで値を入れる
                $stack->push($words[$i]);
            }
        }
    }

    return $stack->size();
}

$words = ["ab", "aa", "aa", "bcd", "ab"];
echo removeCoupleOfWords($words) . "<br>";

$words = ["hello" , "world" , "world" , "hello"];
echo removeCoupleOfWords($words);
