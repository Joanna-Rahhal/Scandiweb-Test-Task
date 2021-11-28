<?php 
include_once('Products.php');
Class Book extends Products{
    protected $weight;

    public function __construct(){
        parent::__construct();
        if(isset($_POST['weight'])){
            $this->weight=$_POST['weight'];
            $this->description=$this->weight.' KG';
            $this->queries->Insert($this->sku,$this->name,$this->price,$this->type,$this->description);
        }
    }

}