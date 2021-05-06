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

function balancedParenthese($expression){
    if (empty($expression)){
        return 'Expression is empty';
    }
    $matches = array(
        ')' => '(',
        ']' => '[',
        '}' => '{',
    );

    $stack =new Stack();
    for ($i = 0; $i < strlen($expression); $i++){
        switch ($expression[$i]){
            case '(':
            case '{':
            case '[':
                $stack->push($expression[$i]);
                break;
            case ')':
            case '}':
            case ']':
                $top = $stack->top();
                $stack->pop();
                if ($top != $matches[$expression[$i]]){
                    return "NotBalanced";
                }
            default:
                break;
        }
    }

    if (!$stack->isEmpty()){
        return "Not Balanced";
    }
    return "Balanced";
}

echo balancedParenthese('(a + b - (c + d))') . "\n";
echo balancedParenthese('{a * [b - (c + d)]}') . "\n";
echo balancedParenthese('a + (c - d))') . "\n";
echo balancedParenthese('[(a - b] * c)') . "\n";

?>