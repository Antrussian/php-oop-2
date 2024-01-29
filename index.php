<?php
include_once __DIR__ . '/Models/Product.php';
include_once __DIR__ . '/Models/Category.php';
include_once __DIR__ . '/Models/Cucce.php';
include_once __DIR__ . '/Models/Giochi.php';
include_once __DIR__ . '/Models/Cibo.php';

$cane = new Category('Cane', 'Giochi');
$gatto = new Category('Gatto', 'Cuccia');

$list = [
    new Product('Cuccia Wood Premiere 150x100', 'Mitica cuccia per cani', $cane, '320', 'https://i.etsystatic.com/39589083/r/il/956a43/4597467021/il_794xN.4597467021_n9o0.jpg', 'Cuccia'),
    new Product('Giochino per gatti', 'Divertente gioco per gatti', $gatto, '15', 'https://i.etsystatic.com/26288876/r/il/554cb6/3682158725/il_570xN.3682158725_n46z.jpg', 'Giochi'),
    new Product('Cibo per gatti', 'Nutriente cibo per gatti', $gatto, '10', 'https://www.nonsprecare.it/wp-content/uploads/2016/11/cibo-per-gatti-fai-da-te-sano-e-low-cost-3.jpg', 'Cibo','test'),
];

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Pet Shop</title>
</head>
<body>
    <h1>My Pet Shop</h1>
    <ul>
        <?php foreach ($list as $product): ?>
            <li>
            <img style="width: 100px;" src="<?php echo $product->getImg(); ?>" alt="Product Image"><br>
                <strong>Title:</strong> <?php echo $product->getTitle(); ?><br>
                <strong>Description:</strong> <?php echo $product->getDescription(); ?><br>
                <strong>Category:</strong> <?php echo $product->getCategory()->getName(); ?><br>
                <strong>Price:</strong> <?php echo $product->getPrice(); ?> €<br>
                <strong>Product Type:</strong> <?php echo $product->getProductType(); ?><br>
                <?php if ($product instanceof Cucce): ?>
                    <strong>Size:</strong> <?php echo $product->getSize(); ?><br>
                <?php elseif ($product instanceof Giochi): ?>
                    <strong>Age Recommendation:</strong> <?php echo $product instanceof Giochi ? $product->getAgeRecommendation() : 'N/D'; ?><br>

                <?php elseif ($product instanceof Cibo): ?>
                    <strong>Expiry Date:</strong> <?php echo $product instanceof Cibo ? $product->getExpiryDate() : 'N/D'; ?><br>

                <?php endif; ?>

            </li>
        <?php endforeach; ?>
    </ul>
</body>
</html>


