<?php require_once('../app/require.php') ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product Add</title>
    <link rel="stylesheet" href="../public/css/productadd.css">
    <script src="../public/javascript/cancel.js"></script>
    <script src="../public/javascript/main.js"></script>
    <script src="../public/javascript/dropdown.js"></script>
    <script src="../public/javascript/add.js"></script>
    <script src="../public/javascript/isnumber.js"></script>
    <script src="../public/javascript/redirect.js"></script>
    <script src="../public/javascript/alphanumberic.js"></script>
</head>
<body>
    <nav>
        <div id="title"><h2>Product Add</h2></div>
            <form action="" method="POST" id="product_form">
        <div id="buttons">
            <li><input type="submit" value="Save" class="buttons" onclick="return clicksave()" name="save"></li>
            <li><input type="submit" value="Cancel" class="buttons" onclick="return redirect()"></li>
        </div>
    
        </nav>
    
        <div id="container">
            <div id="inputs">
                <ul>
                    <li><label for="sku">SKU</label>
                    <input type="text" name="sku" id="sku" onkeyup="this.value=this.value.replace(/[^a-zA-Z0-9]/g, '')"></li>
                    <li><label for="name">Name</label>
                    <input type="text" name="name" id="name" onkeyup="this.value=this.value.replace(/[^a-zA-Z0-9 ]/g, '')" ></li>
                    <li><label for="price">Price ($)</label>
                    <input type="text" name="price" id="price" onkeypress="return isNumberKey(event,this)"></li>
            </ul>
            </div>

            <div id="switch">
                <label> Type Switcher</label>
                <select name="type" id="productType" onchange="select(this)">
                    <option value="none">Type Switcher</option>
                    <option value="DVD" name="dvd" id="DVD"  >DVD</option>
                    <option value="Furniture" name="furniture" id="Furniture" >Furniture</option>
                    <option value="Book" name="book" id="Book" >Book</option>
                </select>
            </div>
            
            <div id="dvd-box" class="hide">
                <li><label for="size">Size</label>
                <input type="text" id="size" name="size" onkeypress="return isNumberK(event)"></li>
            </div>
            <div id="book-box" class="hide">
                <li><label for="weight">Weight</label>
                <input type="text" id="weight" name="weight" onkeypress="return isNumberK(event)"></li>
            </div>
            <div id="furniture-box" class="hide">
                <li><label for="length">Lenght</label>
                <input type="text" id="length" name="length" onkeypress="return isNumberK(event)"></li>
                <li><label for="height">Height</label>
                <input type="text" id="height" name="height" onkeypress="return isNumberK(event)"></li>
                <li><label for="width">Width</label>
                <input type="text" id="width" name="width" onkeypress="return isNumberK(event)"></li>
            </div>
            <?php
                $prod->getType();
                    
                
            ?>
        </div>
    </form>
    <footer>
        <hr>
        <h4>Scandiweb Test assignment</h4>
    </footer>
</body>
</html>