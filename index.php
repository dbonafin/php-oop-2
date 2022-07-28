<?php
    require_once __DIR__ . '/classes/DogProducts.php';
    require_once __DIR__ . '/classes/AnonymousUser.php';
    require_once __DIR__ . '/classes/RegisteredUser.php';

    $peluche = new DogProducts('Toy Peluche', 'Global', 19);
    $stick = new DogProducts('Fake Wood Stick', 'Dog', 9);
    $tizio_caio = new AnonymousUser('Tizio Caio', 'tizio@email.com');

    $tizio_caio->budget = 40;
    $tizio_caio->addProductToCart($stick);
  
    if($tizio_caio->doPayment() === 'ok') {
        echo 'Succesful payment! Thank you';
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>Object oriented programming 2</title>
</head>
<body>

</body>
</html>