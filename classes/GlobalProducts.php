<?php
    class GlobalProducts {
        public $name;
        public $target;
        public $price = 0;
    }

    function __construct($_name, $_target, $_price) {
        $this->name = $_name;
        $this->target = $_target;
        $this->price = $_price;
    }
?>