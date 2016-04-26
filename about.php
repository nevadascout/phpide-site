<?php
require "/inc/core.php";

$page = "about";

?><!DOCTYPE html>
    <head lang="en">
        <meta charset="utf-8" />
        <title>About | <?= Core::NAME ?></title>
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
                            <h2>About</h2>
                            <h3></h3>
                        </div>

                        <div class="narrow-content">
                            <h3>What's this all about?</h3>
                            <p>As a C# developer, I've spent the last few years being spoilt by (in my opinion) the best IDE ever made, Visual Studio, and the myriad of powerful extensions for it including <a href="https://www.jetbrains.com/resharper/" target="_blank">ReSharper</a> and <a href="http://www.ncrunch.net/" target="_blank">nCrunch</a>.</p>

                            <p>I've recently come back to developing in PHP after a long time away, and I'm sad to see that the editors for PHP can't hold a candle to Visual Studio.</p>

                            <p>I've decided to change that.</p>

                            <p>I created this website to show off my plans for a powerful IDE specifically designed for writing PHP. It also works great as a standalone editor for HTML/CSS.</p>

                            <br />

                            <h3>So... Who are you?</h3>
                            <p>Hey. I'm Joe Cotton <span class="grey">(aka <a href="https://twitter.com/nevada_scout" target="_blank">nevada_scout</a>)</span> and I've been building things for the web for over 8 years.</p>

                            <p>After spending five years years or so writing PHP, I jumped ship to the .NET stack and started writing C# full time. I'm now a Microsoft Technical Associate (MTA) and Certified Professional (MCP).</p>

                            <p>I recently came back to the open-source world and have returned to writing PHP for my day-job, so I've been looking for suitable tools that match the experience I had with writing C# - without any luck.</p>

                            <p>Through my business, Hvy Industries, I created <a href="https://hvy.io/crane" target="_blank">Crane</a> - the unofficial (and only) PHP Code-Completion/Intellisense extension for <a href="http://code.visualstudio.com/" target="_blank">Visual Studio Code</a>.</p>

                            <p>I previously also created <a href="http://dash.nevadascout.com/" target="_blank">Dash</a>, an editor for SQF - a scripting language for Bohemia Interactive's ArmA games series.</p>
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
