<?php
class Reservation 
{
    private $host = 'Host class';
    private $guest = 'Guest class';

    public function cancel() {
        $this->sendCancelationNotification();
        $this->refundGuest();
        echo "And a load of other stuff that you don't need to know about...";
    }
    private function sendCancelationNotification() {
        echo "Sending notification to $this->host <br>";
    }
    private function refundGuest() {
        echo "Refunding $this->guest <br>";
    }
}

