<?php
class User 
{
    // create properties
    public $name;
    public $username;
    public $followerCount;

    public function writeText() {
        echo "We use this function to write some text";
    }
}

$myObject = new User();
$myObject->name = "Jovan";
$myObject->username = "jovan780";
$myObject->followerCount = 320;
print_r($myObject);
echo "<br>";
echo get_class($myObject);
echo "<br>";
print_r(get_class_vars('User'));
echo "<br>";
print_r(get_class_methods('User'));





/* User Object ( [name] => Jovan [username] => jovan780 [followerCount] => 320 )
User
Array ( [name] => [username] => [followerCount] => )
Array ( [0] => writeText ) */
