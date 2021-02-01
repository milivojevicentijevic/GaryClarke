<?php
require_once 'DataModel.php';
class User extends DataModel
{
    private string $name;
    private float $price;
    protected string $tableName = "users";

}