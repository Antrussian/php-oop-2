<?php
require_once 'Product.php';

class Cucce extends Product {
    public $size;

    public function __construct($_title, $_description, $_category, $_price, $_img, $_size) {
        parent::__construct($_title, $_description, $_category, $_price, $_img);
        $this->size = $_size;
    }
}
?>
