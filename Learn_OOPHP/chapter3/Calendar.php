<?php
define('YEAR', 2021);
class Calendar
{
    public string $name;
    public $seasons = ["Spring","Summer","Autumn","Winter"];
    public ?float $weeksInYear = null;
    public int $year = YEAR;
    public static $daysInFebruary = 28;
    public static $count = 0;

    public const MONTHS_IN_YEAR = 12;

    public function __construct() {
        self::$count++;
    }
    public function getMonthsInYear() {
        return self::MONTHS_IN_YEAR;
    }
}
$calendar = new Calendar();
$calendar2 = new Calendar();

$calendar->name = "Year Planner";
print $calendar->name. PHP_EOL; 
echo "<br>";
print Calendar::MONTHS_IN_YEAR. PHP_EOL;
echo "<br>";
print $calendar->getMonthsInYear(). PHP_EOL;
echo "<br>";
print $calendar::$daysInFebruary. PHP_EOL;
Calendar::$daysInFebruary++;
print $calendar::$daysInFebruary. PHP_EOL;
echo "<br>";
print $calendar::$count. PHP_EOL;
echo "<br>";
print_r($calendar->seasons);
echo "<br>";
print_r($calendar->year);
echo "<br>";
$calendar->weeksInYear = 365 / 7;
var_dump($calendar->weeksInYear);





/* Year Planner
12
12
28 29
2
Array ( [0] => Spring [1] => Summer [2] => Autumn [3] => Winter )
2021
float(52.142857142857146) */