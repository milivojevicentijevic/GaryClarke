<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inheritance</title>
</head>
<body>
<?php

    require 'CheckingAccount.php';
    $checkingAccount = new CheckingAccount();
    $checkingAccount->deposit(20);
    $checkingAccount->withdraw(10);
    $checkingAccount->transfer(100);
?>
    
</body>
</html>





<?php
    /*Depositing 20
    Withdrawing 10
    Transfering 100 */
?>