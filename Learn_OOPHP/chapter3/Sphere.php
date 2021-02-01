<?php
require_once 'NonCuboidShape.php';
class Sphere extends NonCuboidShape
{
    public function volume(): float {
        return 4 / 3 * pow($this->dimensions['radius'], 3) *  pi() ;
    }
}