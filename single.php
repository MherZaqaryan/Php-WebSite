<?php
    $link = mysqli_connect('localhost', 'root', 'root', 'store');
    if ($link) {
        $sql = "SELECT * FROM `products` WHERE `id`=".$_GET['id'];
        $result = mysqli_query($link, $sql);
        mysqli_close($link);
    }else {
        echo "Cant Connect To Database!";
    }
    $r = mysqli_fetch_assoc($result);
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>HP | Single</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link rel = "icon" type = "image/png" href = "img/logo.png">
</head>
<body>

    <?php include('header.php') ?>

	<main class="main-content container">
        <div class="main-product-warp">
            <div class="product-image">
                <img src="img/<?php echo $r['image']; ?>">
            </div>
            <div class="product-info">
                <h1><?php echo $r['title']; ?></h1>
                <h2>Price: $ <?php echo $r['price']; ?></h2>
                <h4><?php echo $r['description']; ?></h4>
                <div class="product-info">
                    <a href="#" class="prod-button">Buy Now!</a>
                </div>
            </div>
        </div>
    </main>
    
    <?php include('footer.php') ?>
    
</body>
</html>