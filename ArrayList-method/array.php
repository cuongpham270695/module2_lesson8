<?php

class MyList
{
    public int $size = 0;
    public $elements = [];

    public function __construct($arr = "")
    {
        if (is_array($arr) == true) {
            $this->elements = $arr;
        } else {
            $this->elements = array();
        }
    }

    public function insert($index, $obj)
    {
        $arr1 = array_slice($this->elements, 0, $index);
        $arr2 = array_slice($this->elements, $index, count($this->elements) - $index + 1);
        array_push($arr1, $obj);
        $result = array_merge($arr1, $arr2);
        $this->elements = $result;
    }

    public function add($obj)
    {
        $this->elements[] = $obj;
    }

    public function remove($index)
    {
            array_splice($this->elements, $index, 1);
    }

    public function get($index)
    {
        $element = $this->elements[$index];
        return $element;
    }

    public function clear()
    {
        $this->elements = [];
    }

    public function addAll(array $arr)
    {
        foreach ($arr as $value) {
            array_push($this->elements, $value);
        }
        return $this->elements;
    }

    public function indexOf($obj)
    {
        foreach ($this->elements as $key => $value) {
            if ($value = $obj) {
                return $key;
            }
        }
        return "Array isn't contain $obj";
    }

    public function isEmpty()
    {
        return empty($this->elements);
    }

    public function sort()
    {
        for ($i = 0; $i < $this->size(); $i++) {
            for ($j = $i + 1; $j < $this->size(); $j++){
                if ($this->elements[$j]->id < $this->elements[$i]->id) {
                    $min = $this->elements[$j]->id;
                    $this->elements[$j]->id = $this->elements[$i]->id;
                    $this->elements[$i]->id = $min;
                }
            }
        }
    }

    public function reset()
    {
        $this->elements = [];
    }

    public function size()
    {
        $this->size = count($this->elements);
        return count($this->elements);
    }

}