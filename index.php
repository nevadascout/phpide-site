<?php
require "/inc/core.php";

$page = "index";

?><!DOCTYPE html>
    <head lang="en">
        <meta charset="utf-8" />
        <title><?= Core::APPNAME ?> - <?= Core::TAGLINE ?></title>
        <link rel="stylesheet" type="text/css" href="/styles/core.css" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    </head>
    <body>
        <header>
            <nav class="landing">
                <?php include "/inc/menu.php" ?>
            </nav>

            <div class="headertext headertext-landing">
                <h1>An Editor for the Modern Web</h1>
                <h2><?= Core::APPNAME ?> is a powerful, feature-rich development environment designed by web developers, for web developers.</h2>

                <!-- <h2><?= Core::APPNAME ?> gives you everything you need to build beautiful, dynamic websites or apps using the latest languages and frameworks.</h2> -->

                <p class="feature-tour-link"><a href="/features">Take a Feature Tour &rsaquo;</a></p>

                <p class="landing-buttons"><a href="/beta" class="btn">Request Beta Access</a> or <a href="/notify" class="btn btn-secondary">Notify me at Launch</a></p>

                <p class="notes">Runs on Windows, Mac OS X, Ubuntu, Debian, Fedora and CentOS. <!-- &nbsp; &nbsp; Student, Open Source &amp; Upgrade discounts available. --></p>
            </div>
        </header>

        <div class="content-landing">

            <div class="row">
                <div class="grid-container">
                    <div class="oldgrid">

                        <div class="rowhead">
                            <h2>Be More Productive</h2>
                            <h3>Write better code, faster</h3>
                        </div>

                        <!-- TODO -- Screenshots here -->

                        <div class="rowhead">
                            <h2>Extendable Language Support</h2>
                            <h3>Our Extensions add full support for the latest frameworks and languages<br />including PHP, Ruby and Javascript</h3>
                        </div>

                        <!-- TODO -- Testimonials -->

                        <!-- TODO -- Clients (companies using it) -->

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
