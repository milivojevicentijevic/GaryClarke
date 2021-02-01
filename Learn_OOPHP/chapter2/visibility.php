<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Visibility</title>
</head>
<body>
<?php
    require 'FileReader.php';
    require 'CsvFileReader.php';
    $fileReader = new FileReader();
    $csvfileReader = new CsvFileReader();
?>
<p><?php echo $fileReader->getData() ?></p>
<p><?php echo $csvfileReader->getData() ?></p>
</body>
</html>