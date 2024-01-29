<?php
require_once 'Product.php';

class Giochi extends Product {
    private $ageRecommendation;

    public function __construct($_title, $_description, $_category, $_price, $_img, $_ageRecommendation) {
        parent::__construct($_title, $_description, $_category, $_price, $_img, 'Gioco');
        $this->ageRecommendation = $_ageRecommendation;
    }

    public function getAgeRecommendation() {
        return $this->ageRecommendation;
    }

    public function setAgeRecommendation($ageRecommendation) {
        $this->ageRecommendation = $ageRecommendation;
    }
}
?>
