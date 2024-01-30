<?php
include_once __DIR__ . '/Models/Product.php';
include_once __DIR__ . '/Models/Category.php';
include_once __DIR__ . '/Models/Cucce.php';
include_once __DIR__ . '/Models/Giochi.php';
include_once __DIR__ . '/Models/Cibo.php';


$catsCategory = new Category('Gatti', 'Tutto per gli amici gatti','https://cdn.icon-icons.com/icons2/38/PNG/512/dog_animal_5831.png');
$dogsCategory = new Category('Cani', 'Tutto per gli amici cani','https://static.vecteezy.com/ti/vettori-gratis/p1/21559307-gatto-icona-schema-icona-vettoriale.jpg');


$leash = new Product('Disney Leash', 'Disney Leash of dogs group', 37.99, 'https://m.media-amazon.com/images/I/61hF2MhxCYL._AC_UF1000,1000_QL80_.jpg', true, 12,$dogsCategory );

$bell = new Product('Trixie Cat Bell', 'Trixie of cats group', 5.99, 'https://upload.wikimedia.org/wikipedia/commons/thumb/6/60/Depth_of_field_Cat.jpg/800px-Depth_of_field_Cat.jpg', true, 14,$catsCategory );

$chickenBits = new Cibo('Chichen Bits', 'Chicken for cats', 4.99, 'https://c-fa.niceshops.com/upload/image/product/large/default/cats-love-junior-cibo-umido-al-pollo-per-gatti-344045-it.jpg', true, 14,$catsCategory, 6.6, 77.7, 33.55);

$toyBall = new Giochi('Toy Ball', 'Super toy ball', 9.00, 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSlgSFbWBmst2y5ApqT5x3o988mB-VE7Ujx2fb9Pqso-_wxIje82gNnyg3vD1thVSpbVgM&usqp=CAU', true, 50, $dogsCategory, 'plastic');

$cucciaWood = new Cucce('Cuccia Wood','Cuccia super Wood premier top', 399.99, 'https://lh3.googleusercontent.com/proxy/C39b0YknIGXPF17J0muCkmgnbr-EbiMUNAdz2f0MfVWENvUf_PoS0pNlp_sgsYc4F47ikrit3sxuwdZCqcOwI7dYYru6xBZ__NhpdbkBEC92ukjUloDXi-kpxNpz86l_E0tsRmeAMHQ2MZ2Bd5kzQiidOppCNEqIR96f0gqz5UJ0LsG0cUqZ2aZfKkn4VQh3NkbbGSY', true, 3, $dogsCategory, 'Big Size');

var_dump($leash);

$products = [
    $leash, $bell, $chickenBits, $toyBall, $cucciaWood
];


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

    <title>My Pet Shop</title>
    
</head>
<body>
    <h1 class="text-center">My Pet Shop</h1>
    <div class="container">
        <div class="row">
            <?php
            foreach ($products as $product) {
                echo "<div class='col-md-4 mb-3'>";
                echo "<div class='card'>";
                echo "<img src='{$product->imageUrl}' class='card-img-top' alt='{$product->name}'>";
                echo "<div class='card-body'>";
                echo "<h5 class='card-title'>{$product->name}</h5>";
                echo "<p class='card-text'>{$product->description}</p>";
                echo "<p class='card-text'>Prezzo: {$product->price} Euro</p>";
          
                if ($product instanceof Cibo) {
                    echo "<p class='card-text'>Calorie: {$product->getCalories()}</p>";
                    echo "<p class='card-text'>Grassi: {$product->fats}</p>";
                    echo "<p class='card-text'>Carboidrati: {$product->carbs}</p>";
                    echo "<p class='card-text'>Proteine: {$product->proteins}</p>";
                } elseif ($product instanceof Giochi) {
                    echo "<p class='card-text'>Materiale: {$product->material}</p>";
                } elseif ($product instanceof Cucce) {
                    echo "<p class='card-text'>Dimensioni: {$product->size}</p>";
                }
                echo "</div>";
                echo "</div>";
                echo "</div>";
            }
            ?>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>

