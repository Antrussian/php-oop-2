<?php
require_once 'Product.php';

class Cibo extends Product {
    private $expiryDate;

    public function __construct($_title, $_description, $_category, $_price, $_img, $_expiryDate) {
        parent::__construct($_title, $_description, $_category, $_price, $_img);
        $this->expiryDate = $_expiryDate;
    }

    public function getExpiryDate() {
        return $this->expiryDate;
    }



    public function setExpiryDate($expiryDate) {
        $this->expiryDate = $expiryDate;
    }
}
?>
