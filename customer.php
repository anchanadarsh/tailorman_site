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
    <section id="customer">
        <div class="ui center container aligned grid">
            <div class="two column row">
                <div class="column center aligned">
                    <a href="existing-customer.php">
                        <button class="ui mini basic button">Existing Customer</button>
                    </a>
                </div>
                <div class="column center aligned">
                    <a href="javascript:void(0)">
                        <button class="ui mini basic button">New Customer</button>
                    </a>
                </div>
            </div>
        </div>
    </section>
    <?php include '_partial/footer-scripts.php' ?>
</body>

</html>