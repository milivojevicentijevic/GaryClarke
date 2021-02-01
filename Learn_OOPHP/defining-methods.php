<?php
class Basket 
{
    public $itemsTotal;
    public $shippingCost;
    public $discount;

    public function calculateSubTotal() {
        $subTotal = $this->itemsTotal + $this->shippingCost - $this->discount;
        return $subTotal;
    }
}

$myBasket = new Basket();
$myBasket->itemsTotal = 50;
$myBasket->shippingCost = 10;
$myBasket->discount = 20;

var_dump($myBasket);
echo "<br>";
echo $myBasket->calculateSubTotal()."<br>";
var_dump($myBasket->calculateSubTotal());