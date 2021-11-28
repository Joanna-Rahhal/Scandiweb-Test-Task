<?php
    include_once ('../app/require.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product List</title>
    <link rel="stylesheet" href="../public/css/productlist.css">
</head>
<body>
    <nav>
    <div id="title"><h2>Product List</h2></div>
        <form action="" method="POST" >
    <div id="buttons">
        <li><input type="submit" value="ADD" onclick="javascript: form.action='../public/add.php';"></li>
        <li><input type="submit"  name = "delete" value="MASS DELETE"></li>
    </div>

    </nav>
    <?php 
            
                ?>

    <div id="container">
            
            <?php 
                $prod->getProducts();
                $prod->deleteProducts();
            ?>
                
        </div>
    </div>
</form>
<footer>
    <h4>Scandiweb Test assignment</h4>
</footer>
</body>
</html>