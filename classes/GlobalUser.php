<?php
    class GlobalUser {
        public $name;
        public $mail;
        public $budget = 0;
    }

    function __assemble($_name, $_mail, $_budget) {
        $this->name = $_name;
        $this->mail = $_mail;
        $this->budget = $_budget;
    }
?>