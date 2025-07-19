<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Katalog Produk - PT. Arya Cakra Mahkota</title>
    <link rel="stylesheet" href="assets/styles/style.css">
</head>
<body>
    <?php include 'header.php'; ?>

    <main>
        <!-- Catalog Section -->
        <section class="catalog">
            <h1>Katalog</h1>

            <!-- Tab Navigation for Categories -->
            <div class="catalog-tabs">
                <button class="active" data-tab="valve">Valve</button>
                <button data-tab="pipe">Pipe & Fitting</button>
                <button data-tab="electric">Electric</button>
            </div>

            <!-- Catalog Items (Product Images) -->
            <div class="catalog-items">
                <!-- Valve Products -->
                <div class="catalog-category" id="valve">
                    <div class="catalog-item">
                        <img src="assets/images/Manual Valves.png" alt="Manual Valves">
                        <p>Manual Valves</p>
                    </div>
                    <div class="catalog-item">
                        <img src="assets/images/Lined Valve.png" alt="Lined Valve">
                        <p>Lined Valve</p>
                    </div>
                    <div class="catalog-item">
                        <img src="assets/images/subsea.png" alt="Subsea Valve">
                        <p>Subsea Valve</p>
                    </div>
                </div>

                <!-- Pipe & Fitting Products -->
                <div class="catalog-category" id="pipe" style="display: none;">
                    <div class="catalog-item">
                        <img src="assets/images/pipes.png" alt="Pipa">
                        <p>Pipa</p>
                    </div>
                    <div class="catalog-item">
                        <img src="assets/images/forged.png" alt="Forged Fittings">
                        <p>Forged Fittings</p>
                    </div>
                    <div class="catalog-item">
                        <img src="assets/images/butt.png" alt="Buttweld Fittings">
                        <p>Buttweld Fittings</p>
                    </div>
                </div>

                <!-- Electric Products -->
                <div class="catalog-category" id="electric" style="display: none;">
                    <div class="catalog-item">
                        <img src="assets/images/butt.png" alt="Cable Power">
                        <p>Cable Power</p>
                    </div>
                    <div class="catalog-item">
                        <img src="assets/images/mcb.png" alt="Miniature Circuit Breaker">
                        <p>Miniature Circuit Breaker (MCB)</p>
                    </div>
                    <div class="catalog-item">
                        <img src="assets/images/mccb.png" alt="MCCB">
                        <p>Moulded Case Circuit Breaker (MCCB)</p>
                    </div>
                </div>
            </div>
        </section>
    </main>

    <?php include 'footer.php'; ?>

    <script src="script.js"></script>
</body>
</html>
