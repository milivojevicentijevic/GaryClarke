<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Abstract Methods</title>
</head>
<body>
<?php
    require 'Cylinder.php';
    require 'Sphere.php';
    $cylinder1 = new Cylinder(['radius' => 5, 'height' => 10]);
    $sphere1 = new Sphere(['radius' => 5]);
    $cylinder1Volume = $cylinder1->volume();
    print_r($cylinder1Volume);
    echo "<br>";
    $sphere1Volume = $sphere1->volume();
    print_r($sphere1Volume);
?>  
</body>
</html>





<!-- 
785.39816339745
523.5987755983 
-->