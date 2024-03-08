<?php

class Box {
    private $weight;

    public function __construct($weight){
        $this->setWeight($weight);
        echo "object created \n";
    }

    public function getWeight(){
        return $this->weight;
    }
    public function setWeight($weight){
        if($weight > 0){
            $this->weight = $weight;
        } else {
            throw new Exception('Negative Mass error');
        }
    }

    public function __toString()
    {
        return 'Im box and I weigh ' . $this->weight;
    }

    public function __destruct()
    {
        echo "object destroyed \n";
    }
}

// sb else code

echo "before object created \n";
$box = new Box(10);
var_dump($box);
echo "after object created \n";
echo $box;
