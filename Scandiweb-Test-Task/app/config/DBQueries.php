<?php 

class DBQueries{
    public $link;
    protected $query;
    // protected $value;

    public function __construct(){
        $this->link=new Database;
    }

    public function Insert($sku,$name,$price,$type,$description){
        
        if(isset($_POST['save'])){
            $sku=$_POST['sku'];
            $name=$_POST['name'];
            $price=$_POST['price'];
            $type=$_POST['type'];
            $this->query=$this->link->query("INSERT INTO products(sku,name,price,type,description)VALUES(:sku,:name,:price,:type,:description)");
            $this->query->bindParam(':sku',$sku);
            $this->query->bindParam(':name',$name);
            $this->query->bindParam(':price',$price);
            $this->query->bindParam(':type',$type);
            $this->query->bindParam(':description',$description);
            $this->query=$this->link->execute();
            
        }

    }

    public function display(){
        $results=$this->link->query("SELECT * FROM products");
        $results=$this->link->resultSet();
        foreach($results as $result){
            echo '<div class="product">'.
            '<input type="checkbox" class="delete-checkbox" name="check[]" value="'. $result["id"].' ">';
            echo '<p>'.$result['sku']. '<br>' .$result['name']. '<br>'.$result['price'].'<br>'.$result['type'].'<br>'.$result['description'].'</p>';
            echo '</div>';
        }
    }

    public function delete($id){
        if(isset($_POST['delete'])){
            if(isset($_POST['check'])){
                foreach($_POST['check'] as $id){
                    $this->query=$this->link->query('DELETE FROM products WHERE ID= :id');
                    $this->query->bindParam(':id',$id);
                    $this->query=$this->link->execute();
                    header('Location:../public/index.php');
                }
            }
        }
    }

    
}