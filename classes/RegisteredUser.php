<?php
    // The registered user gets a 20% discount
    require_once __DIR__ . '/GlobalUser.php';
    class RegisteredUser extends GlobalUser {
        // Override
        public $discount = 20;
    }
?>