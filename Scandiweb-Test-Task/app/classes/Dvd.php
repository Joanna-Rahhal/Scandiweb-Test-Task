<?php 

class DVD extends Products{
    protected $size;

    public function __construct(){
        parent::__construct();
        if(isset($_POST['size'])){
            $this->size=$_POST['size'];
            $this->description=$this->size.' MB';
            $this->queries->Insert($this->sku,$this->name,$this->price,$this->type,$this->description);
        }
    }

}