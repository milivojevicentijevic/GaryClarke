<?php
class Conncetion 
{
    private static int $count = 0;
    private string $connectionId;
    private int $conferenceId = 1234;

    public function __construct() {
        self::$count++;
    }
    public function getCount() {
        return self::$count;
    }
    public function __destruct() {
        self::$count--;
    }
    public function setConnectionId($ipAddress) {
        if (filter_var($ipAddress, FILTER_VALIDATE_IP)) {
            $this->connectionId = $ipAddress. "_" .self::$count;
            return;
        }
        die("not a valid IP address");
    }
    public function __get($name) {
        return $this->$name;
    }
    public function __toString() {
        return "Conference ID: {$this->conferenceId} <br>";
    }
}