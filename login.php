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
    <section id="login">
        <div class="ui container">
            <div class="ui two column centered grid">
                <form class="ui form">
                    <div class="inline fields">
                        <div class="sixteen wide field">
                            <label class="four wide field">Email Id</label>
                            <input type="email" placeholder="Enter Email Id">
                        </div>
                    </div>
                    <div class="inline fields">
                        <div class="sixteen wide field">
                            <label class="four wide field">Password</label>
                            <input type="password" placeholder="Enter Password">
                        </div>
                    </div>
                    <a href="storeops.php"><button type="button" class="ui mini secondary button">Login</button></a>
                </form>
            </div>
        </div>
    </section>
    <?php include '_partial/footer-scripts.php' ?>
</body>

</html>