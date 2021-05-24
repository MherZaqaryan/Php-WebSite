<?php
    $link = mysqli_connect('localhost', 'root', 'root', 'store');
    if ($link) {
        $sql = "SELECT * FROM `products`";
        $result = mysqli_query($link, $sql);
        mysqli_close($link);
    }else {
        echo "Cant Connect To Database!";
    }
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>HP | Shop</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link rel = "icon" type = "image/png" href = "img/logo.png">
</head>
<body>

	<?php include('header.php'); ?>

	<main class="main-content container">
		<div class="row">
			<h1>Shop Page</h1>
			<div class="shop-box">
				<div class="flex">
		<?php
		while ($r = mysqli_fetch_assoc($result)) { 
			?>
			<div class="shop-block">
				<img class="shop-block-img" src="img/<?php echo $r['image']; ?>">
				<h1><?php echo $r['title']; ?></h1>
				<p>$ <?php echo $r['price']; ?></p>
				<div class="prod-info">
					<a href="#" class="prod-button">Buy</a>
					<a href="single.php?id=<?php echo $r['id'] ?>" class="prod-button">View More</a>
				</div>
			</div>
		<?php } ?>   
				</div>
			</div>
		</div>
	</main>

	<?php include('footer.php') ?>
	
</body>
</html>




