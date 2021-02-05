<?php
class Shape{

    //initialize variables
    const SHAPE_TYPE = 1;
    public $name;
    protected $length;
    protected $width;
    private $id;


    //constructor
    function __construct($length, $width){
        $this->length = $length;
        $this->width = $width;
        $this->id = uniqid();

    }

    //getters + setters
    function setName($name){
        $this->name = $name;
    }
    function getName(){
        return $this->name;
    }
    function getId(){
        return $this->id;
    }

    //computational methods
    public function area(){
        return $this->length * $this->width;
    }

    public static function getTypeDescription(){
        return "Type: ".static::SHAPE_TYPE;
    }

    public function getFullDescription(){
        return "Shape<#{$this->id}>: {$this->name} - {$this->length} x {$this->width}";
    }

}
?>