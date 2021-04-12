<?php

class ArrayList
{
    public $arrList;

    public function ArrayList($arr = "")
    {
        if (is_array($arr) == true) {
            $this->arrList = $arr;
        } else {
            $this->arrList = array();
        }
    }

    public function add($obj)
    {
        array_push($this->arrList, $obj);
    }

    public function get($index)
    {
        if ($this->isInteger($index) && $index < $this->size()) {
            return $this->arrList[$index];
        } else {
            die("ERROR in ArrayList.get");
        }
    }

    public function isInteger($toCheck)
    {
        return preg_match("/^[0-9]+$/",$toCheck);
    }

    public function size()
    {
        return count($this->arrList);
    }
}