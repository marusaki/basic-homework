<?php
    class Set {
        /** @var array */
        private $elements;

        /**
        * constructor
        */
        public function __construct()
        {
            $this->elements = array();
        }

        /**
        * add element to set
        * @param int $ele
        */
        public function add($ele)
        {
            if (!$this->isExist($ele)) { // we have to check if element is existed before adding
                $this->elements[] = $ele; // because the order is any so we can add to the end or beginning
            }
        }

        /**
        * get set
        * @return array
        */
        public function get()
        {
            return $this->elements;
        }


        /**
        * check if element is exist in set
        * @param int $ele
        * @return bool
        */
        public function isExist($ele)
        {
            return in_array($ele, $this->elements); // In php, in_array use to check an element is in array or not
        }
    }

    $arr1 = array("Hello", "Hi", "Good morning", "Good night");
    $arr2 = array("Hi", "Name", "Age");
    $arr3 = array("Good morning", "How are you", "Fine", "Thank");

    $arr = array($arr1, $arr2, $arr3);

    $set = new Set(); // init set: ()
    
    foreach($arr as $row){
        foreach($row as $val){
            $set->add($val);
        }
    }
    
    print_r($set->get()); // print set

?>