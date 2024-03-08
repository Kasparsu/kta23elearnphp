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

$box1 = new Box();
$box1->width = 1;
$box1->heigth = 2;
$box1->length = 3;
$box1->material = 'Wood';
var_dump($box1);

$box2 = new Box();
$box2->width = 5;
$box2->heigth = 6;
$box2->length = 7;
$box2->material = 'Metal';
var_dump($box2);
var_dump($box1);