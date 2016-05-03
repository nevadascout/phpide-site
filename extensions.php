<?php
require "/inc/core.php";

$page = "extensions";

?><!DOCTYPE html>
    <head lang="en">
        <meta charset="utf-8" />
        <title>Extensions | <?= Core::APPNAME ?></title>
        <link rel="stylesheet" type="text/css" href="/styles/core.css" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    </head>
    <body>
        <header>
            <nav class="features">
                <?php include "/inc/menu.php" ?>
            </nav>

            <div class="headertext headertext-features">
                <h1>Add Your Favourite Languages</h1>
                <h2>Our extensions add support for your favourite programming and markup languages</h2>
            </div>
        </header>

        <div class="content-features">

            <div class="row">
                <div class="grid-container">
                    <div class="oldgrid">

                    <div class="grid-row">
                        <div class="rowhead rowhead-left">
                            <h2>Official Extensions</h2>
                            <h3>Made by the Eternium development team</h3>
                        </div>

                        <a href="/extensions/php">
                            <div class="module module-extension desktop-4">
                                <img src="/img/extension-placeholder.png" class="extension-module-logo" alt="PHP Extension Logo" />
                                <h3>PHP</h3>
                                <p>Transform <?= Core::APPNAME ?> into a world-class PHP IDE with full code-completion, code analysis, debugging and much more.</p>
                            </div>
                        </a>

                        <a href="/extensions/ruby">
                            <div class="module module-extension desktop-4">
                                <img src="/img/extension-placeholder.png" class="extension-module-logo" alt="Ruby Extension Logo" />
                                <h3>Ruby</h3>
                                <p>Coming soon...</p>
                            </div>
                        </a>

                        <a href="/extensions/javascript">
                            <div class="module module-extension desktop-4">
                                <img src="/img/extension-placeholder.png" class="extension-module-logo" alt="Javascript Extension Logo" />
                                <h3>Javascript</h3>
                                <p>Coming soon...</p>
                            </div>
                        </a>
                    </div>

                    <div class="grid-row">
                        <div class="rowhead rowhead-left" style="padding-top: 20px;">
                            <h2>Community Extensions</h2>
                            <h3>Made by our awesome developer community</h3>
                        </div>

                        <a href="/extensions/typescript">
                            <div class="module module-extension desktop-4">
                                <img src="/img/extension-placeholder.png" class="extension-module-logo" alt="Typescript Extension Logo" />
                                <h3>Typescript</h3>
                                <h4>By <span>nevada_scout</span></h4>
                                <p>Coming soon...</p>
                            </div>
                        </a>

                        <a href="/extensions/markdown">
                            <div class="module module-extension desktop-4">
                                <img src="/img/extension-placeholder.png" class="extension-module-logo" alt="Markdown Extension Logo" />
                                <h3>Markdown</h3>
                                <h4>By <span>nevada_scout</span></h4>
                                <p>Coming soon...</p>
                            </div>
                        </a>

                        <a href="/extensions/python">
                            <div class="module module-extension desktop-4">
                                <img src="/img/extension-placeholder.png" class="extension-module-logo" alt="Python Extension Logo" />
                                <h3>Python</h3>
                                <h4>By <span>nevada_scout</span></h4>
                                <p>Coming soon...</p>
                            </div>
                        </a>
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
