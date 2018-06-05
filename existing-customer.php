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
    <section id="existing_customer">
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
            <div class="centered row">
                <div class="ten wide column ec_box">
                    <form class="ui form">
                        <div class="inline fields">
                            <div class="sixteen wide field">
                                <label>Name</label>
                                <input type="text" placeholder="Enter Name">
                                <button type="button" class="ui button">Search</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <div class="ui small customer_modal modal">
            <div class="ui grid container form">
                <div class="ten wide column modal_half">
                    <div class="inline fields">
                        <div class="sixteen wide field">
                            <label>Name</label>
                            <input type="text" placeholder="Enter Name" disabled>
                            <button type="button" class="ui button">Search</button>
                        </div>
                    </div>

                    <div class="ui grid first_half_button">
                        <div class="eight wide column">
                            <button type="button" class="ui secondary mini button make_edits">Edit</button>
                        </div>
                        <div class="eight wide column right aligned">
                            <a href="order-details.php"><button type="button" class="ui secondary mini button">Proceed</button></a> 
                        </div>
                    </div>
                </div>
                <div class="six wide column modal_half">
                    <div class="inline fields">
                        <div class="sixteen wide field">
                            <label>Name</label>
                            <input type="text" disabled>
                        </div>
                    </div>
                    <div class="inline fields">
                        <div class="sixteen wide field">
                            <label>DOB</label>
                            <input type="date" disabled>
                        </div>
                    </div>
                    <div class="inline fields">
                        <div class="sixteen wide field">
                            <label>Phone</label>
                            <input type="tel" disabled>
                        </div>
                    </div>
                    <div class="inline fields">
                        <div class="sixteen wide field">
                            <label>Email Id</label>
                            <input type="email" disabled>
                        </div>
                    </div>
                    <div class="fields">
                        <div class="sixteen wide field">
                            <label>Billing Address</label>
                            <textarea type="email" rows="2" placeholder="" disabled></textarea>
                        </div>
                    </div>
                    <div class=" fields">
                        <div class="sixteen wide field">
                            <label>Shipping Address</label>
                            <textarea type="email" rows="2" placeholder="" disabled></textarea>
                        </div>
                    </div>
                    <div class="sixteen wide column center aligned">
                        <button type="button" class="ui secondary mini button save_edits">Save</button>
                    </div>
                </div>
            </div>

        </div>
    </section>
    <?php include '_partial/footer-scripts.php' ?>
</body>

</html>