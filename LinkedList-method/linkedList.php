<?php
include "Node.php";

class LinkedList
{
    public int $count;
    public $firstNode;
    public $lastNode;

    public function __construct()
    {
        $this->firstNode = NULL;
        $this->lastNode = NULL;
        $this->count = 0;
    }

    public function insertFirst($data)
    {
        $node = new Node($data);
        $node->next = $this->firstNode;
        $this->firstNode = $node;
        if ($this->lastNode == NULL) {
            $this->lastNode = $node;
        }
        $this->count++;
    }

    public function insertLast($data)
    {
        if ($this->firstNode != NULL) {
            $node = new Node($data);
            $this->lastNode->next = $node;
            $node->next = NULL;
            $this->lastNode = $node;
            $this->count++;
        } else {
            $this->insertFirst($data);
        }
    }

    public function remove($index)
    {
        if ($this->firstNode == NULL) {
            echo "Empty list!";
        } else if ($index == 1) {
            if ($this->count == 1) {
                $this->firstNode = NULL;
                $this->lastNode = NULL;
                $this->count--;
            } else {
                $delNode = $this->firstNode;
                $this->firstNode = $delNode->next;
                $delNode = NULL;
                $this->count--;
            }
        } else if ($index > 1 && $index <= $this->count) {
            $currentNode = $this->firstNode;
            for ($i = 0; $i < $index; $i++) {
                $currentNode = $currentNode->next;
            }
            $delNode = $currentNode->next;
            $currentNode->next = $delNode->next;
            if ($delNode->next == NULL) {
                $this->lastNode = $currentNode;
            }
            $delNode = NULL;
            $this->count--;
        } else {
            echo "Invalid index!";
        }
    }

    public function insert($data, $key)
    {
        if ($key == 1) {
            $this->insertFirst($data);
        } else if ($key > 1 && $key <= $this->count) {
            $currentNode = $this->firstNode;
            for ($i = 1; $i < $key - 1; $i++) {
                $currentNode = $currentNode->next;
            }
            $node = new Node($data);
            $node->next = $currentNode->next;
            $currentNode->next = $node;
            $this->count++;
        } else if ($key = $this->count + 1) {
            $this->insertLast($data);
        } else echo "Invalid key!!";
    }

    public function find($key)
    {
        $currentNode = $this->firstNode;
        while ($currentNode->data != $key) {
            if ($currentNode->next == NULL) {
                return NULL;
            } else $currentNode = $currentNode->next;
        }
        return $currentNode;
    }

    public function clone()
    {
        $cloneLinkList = new LinkList();
        for ($currentNode = $this->firstNode; $currentNode != NULL; $currentNode->next) {
            $data = $currentNode->readNode();
            $cloneLinkList->addLast($data);
        }
        return $cloneLinkList;
    }

    public function contains($obj)
    {
        if ($this->indexOf($obj) == false) {
            echo "Not found";
        } else {
            echo "appears in list";
        }
    }

    public function indexOf($obj)
    {
        if ($this->count == 0) {
            return false;
        } else {
            $currentNode = $this->firstNode;
            $index = 0;
            while ($obj != $currentNode->readNode()) {
                if ($currentNode->next == null) {
                    break;
                } else {
                    $index++;
                    $currentNode = $currentNode->next;
                }
            }
            if ($index === 0) {
                return false;
            } else {
                return $index + 1;
            }
        }
    }

    public function totalNode()
    {
        return $this->count;
    }

}