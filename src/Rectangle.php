<?php
class Rectangle extends Shape{

    const SHAPE_TYPE = 2;
    public $width;

    public function __construct($newLength, $newWidth)
    {
        parent::__construct($newLength, $newWidth);
    }

    public function getFullDescription()
    {
        return "Rectangle<" . $this->getid() . ">:" . $this->name . "-" . $this->length . "X" . $this->width;
    }
}
