<?php
class Product {
    private $title;
    private $description;
    private $category;
    private $price;
    private $img;
    private $productType;

    public function __construct($_title, $_description, $_category, $_price, $_img, $_productType) {
        $this->title = $_title;
        $this->description = $_description;
        $this->category = $_category;
        $this->price = $_price;
        $this->img = $_img;
        $this->productType = $_productType;
    }

    public function getTitle() {
        return $this->title;
    }

    public function setTitle($title) {
        $this->title = $title;
    }

    public function getDescription() {
        return $this->description;
    }

    public function setDescription($description) {
        $this->description = $description;
    }

    public function getCategory() {
        return $this->category;
    }

    public function setCategory($category) {
        $this->category = $category;
    }

    public function getPrice() {
        return $this->price;
    }

    public function setPrice($price) {
        $this->price = $price;
    }

    public function getImg() {
        return $this->img;
    }

    public function setImg($img) {
        $this->img = $img;
    }

    public function getProductType() {
        return $this->productType;
    }
    // Nel file Product.php
public function getAgeRecommendation() {
    // Genera un numero casuale compreso tra 1 e 10 per rappresentare un'età consigliata casuale
    return rand(1, 10);
}

// Nel file Product.php
public function getExpiryDate() {
    // Genera una data casuale nel formato "YYYY-MM-DD" per rappresentare una data di scadenza casuale
    $randomDate = date('Y-m-d', strtotime('+'.rand(1, 365).' days'));
    return $randomDate;
}

}
?>
