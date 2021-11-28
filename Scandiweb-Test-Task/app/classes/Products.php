<?php 

Class Products{
    protected $id;
    protected $sku;
    protected $name;
    protected $price;
    protected $type;
    protected $description;
    protected $queries;


    public function __construct(){
        $this->queries=new DBQueries;
    }

    public function getProducts(){
        $this->queries->display();
    }

    public function deleteProducts(){
        $this->queries->delete($this->id);
    }
    public function Insert(){
        $result=$this->queries->Insert($this->sku,$this->name,$this->price,$this->type,$this->description);
        // $result=$this->queries->Insert($this->sku,$this->name,$this->price,$this->type,$this->description);
        $result=$this->link->execute();
        $this->result.=$this->link->rowCount();
    }
    
    public function getType(){
        
        
        if(isset($_POST['type'])){
            switch($_POST['type']){
                case "Book":
                    new Book;
                    break;
                case "DVD":
                    new DVD;
                    break;
                case "Furniture";
                    new Furniture;
                    break;
                default:
                    echo"error";
            }
        
        }
    }
}