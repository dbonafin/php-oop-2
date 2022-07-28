<?php
    // The non-registered user dont get any discount
    require_once __DIR__ . '/GlobalUser.php';
    class AnonymousUser extends GlobalUser {
    }
?>