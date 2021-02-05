<?php
require 'Shape.php';
class Rectangle extends Shape{

    public $id;
    public $width;
    
    public function getFullDescription()
    {
        return "Rectangle<" . $this->id . ">:" . $this->name . "-" . $this . $this->length . "X" . $this->width;
    }
}
