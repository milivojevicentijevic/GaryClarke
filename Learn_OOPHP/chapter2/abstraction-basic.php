<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>abstraction basic</title>
</head>
<body>
    <?php
        require 'Reservation.php';
        $reservation = new Reservation();
        $reservation->cancel();
    ?>
</body>
</html>





<!-- 
Sending notification to Host class
Refunding Guest class
And a load of other stuff that you don't need to know about...
 -->