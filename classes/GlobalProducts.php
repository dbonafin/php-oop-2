<?php
    require_once __DIR__ . '/ColorTrait.php';
    class GlobalProducts {
        use ColorTrait;
        public $name;
        public $target;
        public $price;

        function __construct($_name, $_target, $_price) {
            $this->name = $_name;
            $this->target = $_target;
            $this->price = $_price;
        }
    }
?>