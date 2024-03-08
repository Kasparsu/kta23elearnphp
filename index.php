<?php

class Box {
    public $width;
    public $heigth;
    public $length;
    public $material;

    public function describe(){
        echo 'width: ' . $this->width . ' height: ' . $this->heigth . ' lenght: ' . $this->length;
    }
}

class MetalBox extends Box {
    use HasSmell;
    public $material = 'Metal';
    public $weight;

    public function volume(){
        return $this->width * $this->heigth * $this->length;
    }
}

class Animal {
    use HasSmell;
}

trait HasSmell {
    public $smell;
    public function sniff(){
        if($this->smell !== 'Bad') {
            return 'Fine';
        }
        return 'Bad';
    }
}

$box1 = new Box();
var_dump($box1);
$metalBox1 = new MetalBox();
var_dump($metalBox1);