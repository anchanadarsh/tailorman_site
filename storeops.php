<!doctype html>
<html lang="en-US">

<head>
    <title>Tailorman</title>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <?php include '_partial/head.php' ?>
</head>

<body>
    <header>
        <?php include '_partial/header.php' ?>
    </header>
    <section id="storeops">
        <div class="ui center aligned grid">
            <div class="row">
                <div class="column">
                    <button class="ui button">STORE OPS</button>
                </div>
            </div>
            <div class="row in_location">
                <div class="column sixteen wide">
                    <a href="benguluru.php">
                        <button class="ui mini grey basic button">Benguluru</button>
                    </a>
                </div>
                <!--
                <div class="column sixteen wide">
                    <button class="ui mini grey basic button">Chennai</button>
                </div>
                <div class="column sixteen wide">
                    <button class="ui mini grey basic button">Mumbai</button>
                </div>
-->
            </div>
        </div>
    </section>
    <?php include '_partial/footer-scripts.php' ?>
</body>

</html>