<?php
class Shape{
    const SHAPE_TYPE = 1;
    public $name;
    protected $length;
    private $width;
    private $id;

     function __construct($newLength, $newWidth) {
        $this->length = $newLength;
        $this->width = $newWidth;
        $this->id = uniqid();
    }

    function setName($newName){
        $this->name = $newName;
    }
    function getName(){
        return $this->name;
    }
    function getid(){
        return $this->id;
    }

    public function area(){
         return $this->length*$this->width;
    }

    public static function getTypeDescription(){
         return static::SHAPE_TYPE;
    }

    public function getFullDescription(){
         return "Shape<".$this->id.">:".$this->name."-".$this.$this->length."X".$this->width;
    }
}