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
    <section id="benguluru">
        <div class="ui center container aligned grid">
            <div class="doubling six column row">
                <div class="column">
                    <a href="customer.php"><button class="ui mini basic button">Customer / New Sale</button></a> 
                </div>
                <div class="column">
                    <a href="javascript:void(0)"><button class="ui mini basic button">Customer Details</button></a> 
                </div>
                <div class="column">
                    <a href="javascript:void(0)"><button class="ui mini basic button">Edit in Today's order</button></a> 
                </div>
                <div class="column">
                    <a href="javascript:void(0)"><button class="ui mini basic button">Add Sampe SKU's to order</button></a> 
                </div>
                <div class="column">
                    <a href="javascript:void(0)"><button class="ui mini basic button">Pending Order details</button></a> 
                </div>
                <div class="column">
                    <a href="javascript:void(0)"><button class="ui mini basic button">Pending Payments</button></a> 
                </div>
            </div>
        </div>
    </section>
    <?php include '_partial/footer-scripts.php' ?>
</body>

</html>