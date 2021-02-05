<?php

class Octagon extends Shape{

    const SHAPE_TYPE = 4;
    protected $side;

    function __construct($side){
        $this->side = $side;
        parent::__construct(0,0);
    }

    function area(){
        return (2 * pow($this->side, 2)) + ((2 * pow($this->side, 2)) * sqrt(2));
    }

    public function getFullDescription(){
        return "Octagon<#{$this->getId()}>: {$this->name} - {$this->side}";
    }

}

?>
