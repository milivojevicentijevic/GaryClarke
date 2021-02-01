<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Magic Methods</title>
</head>
<body>
    <?php
        require 'Connection.php';
        // __construct called behind the scenes
        $connection1 = new Conncetion();
        $connection1->setConnectionId('127.0.0.1');
        $connection2 = new Conncetion();
        unset($connection2);
        print($connection1);
    ?>
    <p><?php echo"The number of connections is ".$connection1->getCount(); ?></p>
    <p><?php echo"The conference ID is ".$connection1->conferenceId; ?></p>
    <p><?php echo"The connection ID is ".$connection1->connectionId; ?></p>
</body>
</html>






<!-- 
Conference ID: 1234
The number of connections is 1
The conference ID is 1234
The connection ID is 127.0.0.1_1 
-->