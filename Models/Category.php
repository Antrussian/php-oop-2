<?php
class Category {
    private $name;
    private $type;

    public function __construct(string $_name, string $_type) {
        $this->name = $_name;
        $this->type = $_type;
    }

    public function getName() {
        return $this->name;
    }

    public function getType() {
        return $this->type;
    }
}
?>
