<?php
    ini_set('display_errors',1);

    require_once __DIR__ . '/classes/DogProducts.php';
    require_once __DIR__ . '/classes/AnonymousUser.php';
    require_once __DIR__ . '/classes/RegisteredUser.php';

    $peluche = new DogProducts('Toy Peluche', 'Global', 19);
    $stick = new DogProducts('Fake Wood Stick', 'Dog', 9);
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

    <div>
        <!-- test -->
        <h4> Name: <?php echo $peluche->name; ?> </h4>

        <h4> Price: <?php echo $peluche->price; ?> </h4>

        <h4> Name: <?php echo $stick->name; ?> </h4>

        <h4> Price: <?php echo $stick->price; ?> </h4>
    </div>
    
</body>
</html>