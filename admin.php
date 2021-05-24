<?php 

    if (isset($_GET['action']) && $_GET['action'] == "delete") {
        $id = $_GET['id'];

        $link = mysqli_connect('localhost', 'root', 'root', 'store');
        if ($link) {
            $sql = "DELETE FROM `products` WHERE `id`=$id";
            $result = mysqli_query($link, $sql);
            mysqli_close($link);

            if ($result) {
                echo "<script>alert('Deleted');</script>";
            }else {
                echo "Error 666";
            }
        }else {
            echo "Cant Connect To Database!";
        }
    }

    if ($_POST['add_product']) {
        $title = $_POST['title'];
        $image = $_POST['image'];
        $price = $_POST['price'];
        $desc = $_POST['descriotion'];

        $link = mysqli_connect('localhost', 'root', 'root', 'store');
        if ($link) {
            $sql = "INSERT INTO `products` (`title`, `price`, `image`, `description`) VALUES ('$title', $price, '$image', '$desc')";
            $result = mysqli_query($link, $sql);
            if ($result) {
                echo "<script>alert('Apranqy avelacvec');</script>";
            }else {
                echo "Error 666";
            }
            mysqli_close($link);
        }else {
            echo "Cant Connect To Database!";
        }
    }
    
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8"> 
	<title>HP | ADMIN PANEL</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link rel = "icon" type = "image/png" href = "img/logo.png">
</head>
<body>

    <?php include('header.php') ?>

    <main class="main-content container">
        <form class="admin-form" action="#" method="post">
            <div class="admin-block">
                <h3>Admin</h3>
                <input type="text" name="title" placeholder="Title"><br>
                <input type="text" name="price" placeholder="Price"><br>
                <input type="text" name="image" placeholder="Image"><br>
                <input type="text" name="desc" placeholder="Description"><br>
                <input type="submit" name="add_product">
            </div>
        </form>
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
        <table border='1'>
            <tr>
                <th>Id</th>
                <th>Title</th>
                <th>Price</th>
                <th>Image</th>
                <th colspan="2"></th>

            </tr>
            <?php
            while ($r = mysqli_fetch_assoc($result)) { ?>           
                <tr>
                    <td><?php echo $r['id']; ?></td>
                    <td><?php echo $r['title']; ?></td>
                    <td><?php echo $r['price']; ?></td>
                    <td><?php echo $r['image']; ?></td>
                    <td><a href="#">Update</a></td>
                    <td><a href="?action=delete&id=<?php echo $r['id']; ?>">Delete</a></td>
                </tr>   
            <?php $id++; }          
            ?>
        </table>
    </main>

    <?php include('footer.php') ?>
    
</body>
</html>