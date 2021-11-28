<?php

class Furniture extends Products{
    protected $height;
    protected $width;
    protected $length;

    public function __construct(){
        parent::__construct();
        if(isset($_POST['height'], $_POST['weight'],$_POST['length'])){
            $this->height=$_POST['height'];
            $this->width=$_POST['width'];
            $this->length=$_POST['length'];
            $this->description=$this->height.'x'.$this->width.'x'.$this->length;
            $this->queries->Insert($this->sku,$this->name,$this->price,$this->type,$this->description);
        }
    }
}