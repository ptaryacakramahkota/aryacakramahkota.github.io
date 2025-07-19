<?php
$category = $_GET['category'];
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Produk - <?php echo ucfirst($category); ?> - PT. Arya Cakra Mahkota</title>
    <link rel="stylesheet" href="assets/styles/style.css">
</head>
<body>
    <header>
        <nav>
            <ul>
                <li><a href="index.php">Beranda</a></li>
                <li><a href="tentang_kami.php">Tentang Kami</a></li>
                <li><a href="katalog.php">Katalog</a></li>
            </ul>
        </nav>
    </header>
    <section id="product">
        <h1>Produk Kategori: <?php echo ucfirst($category); ?></h1>
        <?php
        if($category == 'electric') {
            echo '<img src="assets/katalog_electric.jpg" alt="Electric Products">';
        } elseif($category == 'pipe') {
            echo '<img src="assets/katalog_pipe.jpg" alt="Pipe Products">';
        } elseif($category == 'valve') {
            echo '<img src="assets/katalog_valve.jpg" alt="Valve Products">';
        }
        ?>
    </section>
    <footer>
        <p>Copyright © 2020. PT. Arya Cakra Mahkota All rights reserved.</p>
    </footer>
</body>
</html>
