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


function extractMonth($date)
{
    $timestamp = strtotime($date); // convert string to timestamp (https://www.php.net/manual/en/function.strtotime)
    return date("m", $timestamp); // format date from timestamp, "m" means month (https://www.php.net/manual/en/function.date)
}

$set = new Set(); 

$set->add(extractMonth("2019/01/14")); // add month 01, set (1)
$set->add(extractMonth("2019/10/04")); // add month 10, set (1, 10)
$set->add(extractMonth("2019/01/02")); // add month 01, set (1, 10)
$set->add(extractMonth("2019/03/02")); // add month 03, set (1, 10, 3)
$set->add(extractMonth("2019/01/02")); // add month 01, set (1, 10, 3)

print_r($set->get()); // print set
//result: 1, 10, 3
?>