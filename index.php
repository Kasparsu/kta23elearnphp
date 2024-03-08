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


$num1 = 4;
$num2 = $num1;
$num2 = 7;
var_dump($num1, $num2);


$box1 = new Box();
$box1->heigth = 4;
$box2 = clone $box1;
$box2->heigth = 7;
var_dump($box1, $box2);
$box1->describe();