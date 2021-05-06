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

    $arr = array(1,2,3,4,5,2,-1,5,2,7,11,11,-5);
    $set = new Set(); // init set: ()
    
    foreach($arr as $val){
        $set->add($val);
    }
    
    print_r($set->get()); // print set

?>