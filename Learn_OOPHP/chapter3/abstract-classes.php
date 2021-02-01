<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Abstract Classes</title>
</head>
<body>
    <?php
        require 'Product.php';
        require 'User.php';
        $product1 = new Product();
        $product1->save();      
        echo "<br>";
        $user1 = new User();
        $user1->save();
    ?>
</body>
</html>





<!-- 
Saving data to table: products
Saving data to table: users 
-->