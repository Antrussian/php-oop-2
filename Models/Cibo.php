<?php
require_once __DIR__ . '/Product.php';

class Cibo extends Product{
    public $calories;
    public $fats; 
    public $carbs;
    public $proteins;

    public function __construct(string $_name, string $_description, float $_price, string $_imageUrl, bool $_isInStock, int $_quantity, Category $_category, float $_fats, float $_carbs, float $_proteins){
        parent::__construct ($_name, $_description, $_price, $_imageUrl, $_isInStock, $_quantity, $_category);
        $this->fats = $_fats;
        $this->carbs = $_carbs;
        $this->proteins = $_proteins;
        $this->calories = ($_fats * 9) + ($_carbs + $_proteins) + 4;
    }

    public function getCalories(): int{
        return round($this->calories);
    }
}
?>
