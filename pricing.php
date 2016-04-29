<?php
require "/inc/core.php";

$page = "pricing";

?><!DOCTYPE html>
    <head lang="en">
        <meta charset="utf-8" />
        <title>Pricing | <?= Core::APPNAME ?></title>
        <link rel="stylesheet" type="text/css" href="/styles/core.css" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    </head>
    <body>
        <header>
            <nav class="pricing">
                <?php include "/inc/menu.php" ?>
            </nav>
        </header>

        <div class="content-pricing">

            <div class="row">
                <div class="grid-container">
                    <div class="oldgrid">

                        <div class="rowhead">
                            <h2>Pricing</h2>
                            <h3>Unlimited evaluation licence</h3>
                            <p>You may download and evaluate <?= Core::APPNAME ?> for free for as long as you want.
                            <br /><br />
                            Licenses are issued per user, and therefore you may use a licence on any number of computers/operating systems.</p>
                        </div>

                        <div class="module desktop-4"></div>
                        <div class="module module-pricebox desktop-4">
                            <h4><span>$</span>79</h4>
                            <h5>per user</h5>
                        </div>
                        <div class="module desktop-4"></div>

                        <div class="opensource-info">
                            <p><strong>Open Source Project?</strong> Contact us to arrange free or discounted licences.</p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row short">
                <div class="grid-container">
                    <div class="oldgrid">
                        <div class="module module-info module-priceinfo desktop-12">
                            <div class="info">
                                <h3>Free Beta!</h3>

                                <p><?= Core::APPNAME ?> will completely free for the duration of the beta.</p>
                                <p><strong>When the beta ends, existing users will receive a 50% discount on a full licence upgrade!</strong></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <?php include "/inc/request-access-row.php" ?>

            <footer>
                <p class="disclaimer">HVY Industries is a trading name of JCKD (UK) Ltd, registered in the UK, company no 7530099</p>
            </footer>
        </div>
    </body>
</html>
