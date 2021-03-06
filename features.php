<?php
require "/inc/core.php";

$page = "features";

?><!DOCTYPE html>
    <head lang="en">
        <meta charset="utf-8" />
        <title>Features | <?= Core::APPNAME ?></title>
        <link rel="stylesheet" type="text/css" href="/styles/core.css" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    </head>
    <body>
        <header>
            <nav class="features">
                <?php include "/inc/menu.php" ?>
            </nav>

            <div class="headertext headertext-features">
                <h1>Improve your web development experience</h1>
                <h2><strong>Be more productive.</strong> Write better code, faster.</h2>
            </div>
        </header>

        <div class="content-features">

            <!-- <div class="row">
                <div class="grid-container">
                    <div class="oldgrid">
                        <div class="module module-info desktop-12">
                            <h2>What is all this?</h2>
                            <p><?= Core::APPNAME ?> is a powerful editor designed specifically for PHP development.</p>
                        </div>
                    </div>
                </div>
            </div> -->

            <div class="row">
                <div class="grid-container">
                    <div class="oldgrid">

                        <div class="rowhead">
                            <h2>HTML/CSS Editor</h2>
                            <h3>The Web development environment you've always dreamed of...</h3>
                        </div>

                        <div class="module module-info desktop-7">
                            <div class="info">
                                <h3>Full Code-Completion</h3>

                                <p>Our code-completion suggestions allow you to work smarter, not harder. Using the completion options not only cuts down on the possibilities of introducing syntax errors, and gives also allows you to code without having to switch back and forth between files to check what properties or methods are named.</p>

                                <p class="link"><a href="#">Learn more about Code-Completion &rsaquo;</a></p>
                            </div>
                        </div>
                        <div class="module module-image desktop-5">
                            <div class="info">
                                <img src="/img/placeholder.png" alt="Placeholder" />
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="grid-container">
                    <div class="oldgrid">
                        <div class="module module-image desktop-5">
                            <div class="info">
                                <img src="/img/placeholder.png" alt="Placeholder" />
                            </div>
                        </div>
                        <div class="module module-info desktop-7">
                            <div class="info">
                                <h3>Minimal Code-Completion</h3>

                                <p>Not keen on obtrusive UI, or prefer a more minimal editing experience? Enable our minimal code-completion mode to still get the power of variable/method hinting, but with much more lightweight bash-style completions.</p>

                                <p class="link"><a href="#">Learn more about Code-Completion &rsaquo;</a></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="grid-container">
                    <div class="oldgrid">
                        <div class="module module-info desktop-7">
                            <div class="info">
                                <h3>Markup Analysis</h3>

                                <p>Reduce the number of runtime errors and cut down on unused or complicated code with our real time Markup Analysis. Running in the background as you work, we can immediately point out potential mistakes or improvements you could make. You can even configure the version of PHP that should be used for analysis, all the way back to v5.3.</p>

                                <p class="link"><a href="#">Learn more about Markup Analysis &rsaquo;</a></p>
                            </div>
                        </div>
                        <div class="module module-image desktop-5">
                            <div class="info">
                                <img src="/img/placeholder.png" alt="Placeholder" />
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="grid-container">
                    <div class="oldgrid">
                        <div class="module module-image desktop-5">
                            <div class="info">
                                <img src="/img/placeholder.png" alt="Placeholder" />
                            </div>
                        </div>
                        <div class="module module-info desktop-7">
                            <div class="info">
                                <h3>Code Navigation</h3>

                                <!-- Ctrl + T popup -->

                                <p>Our keyboard shortcuts and UI hints allow you to quickly and easily navigate even the largest, most complex codebases. You can jump directly to a file, class/trait/interface definition or project with a single keyboard shortcut.</p>

                                <p class="link"><a href="#">Learn more about Code Navigation &rsaquo;</a></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="grid-container">
                    <div class="oldgrid">
                        <div class="module module-info desktop-7">
                            <div class="info">
                                <h3>Refactoring</h3>

                                <p>Our powerful refactoring options allow you to very easily make sweeping changes to your codebase with complete confidence. Refactoring options include global rename, generate variable, extract function from selection, change function signature, introduce property, auto-implement interface, pull members up/down, extract interface, and much, much more.</p>

                                <p class="link"><a href="#">Learn more about Refactoring &rsaquo;</a></p>
                            </div>
                        </div>
                        <div class="module module-image desktop-5">
                            <div class="info">
                                <img src="/img/placeholder.png" alt="Placeholder" />
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="grid-container">
                    <div class="oldgrid">
                        <div class="module module-image desktop-5">
                            <div class="info">
                                <img src="/img/placeholder.png" alt="Placeholder" />
                            </div>
                        </div>
                        <div class="module module-info desktop-7">
                            <div class="info">
                                <h3>SASS/LESS Support</h3>

                                <p><?= Core::APPNAME ?> comes with built-in SASS and LESS transpilers that run on-type and let you easily create usable CSS files that are updated automatically. We also provide code-completion for your existing variables, and let you generate new ones with a few keystrokes.</p>

                                <p class="link"><a href="#">Learn more about HTML/CSS Integration &rsaquo;</a></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="grid-container">
                    <div class="oldgrid">
                        <div class="module module-info desktop-7">
                            <div class="info">
                                <h3>Syntax Highlighting</h3>

                                <p>We wouldn't be a modern development environment without having full syntax highlighting for your code. Out of the box, we support the latest versions of PHP, HTML, CSS, SASS, LESS, Javascript (including AngularJS), JSON and SQL. Users can add custom syntax themes using industry standard .tmtheme files.</p>

                                <p class="link"><a href="#">Learn more about Editing &rsaquo;</a></p>
                            </div>
                        </div>
                        <div class="module module-image desktop-5">
                            <div class="info">
                                <img src="/img/placeholder.png" alt="Placeholder" />
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <?php include "/inc/request-access-row.php" ?>

            <div class="row">
                <div class="grid-container">
                    <div class="oldgrid">
                        <div class="module module-image desktop-5">
                            <div class="info">
                                <img src="/img/placeholder.png" alt="Placeholder" />
                            </div>
                        </div>
                        <div class="module module-info desktop-7">
                            <div class="info">
                                <h3>Projects</h3>

                                <p>In it's most basic form, a project is simply a folder that contains source code. Having projects allow you to configure project-wide settings per user, or for a whole team. You can set things like the target version of PHP and more.</p>

                                <p class="link"><a href="#">Learn more about Projects &rsaquo;</a></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="grid-container">
                    <div class="oldgrid">
                        <div class="module module-info desktop-7">
                            <div class="info">
                                <h3>Git Support</h3>

                                <p>Say goodbye to the command line* as we have full support for Git out of the box. Create branches, push/pull/fetch, commit changes and even do merges in a specifically designed UI. We detect existing git repositories and track changes automatically.</p>

                                <p><i class="footnote">* or don't, we're happy either way!</i></p>

                                <p class="link"><a href="#">Learn more about Git Support &rsaquo;</a></p>
                            </div>
                        </div>
                        <div class="module module-image desktop-5">
                            <div class="info">
                                <img src="/img/placeholder.png" alt="Placeholder" />
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="grid-container">
                    <div class="oldgrid">
                        <div class="module module-image desktop-5">
                            <div class="info">
                                <img src="/img/placeholder.png" alt="Placeholder" />
                            </div>
                        </div>
                        <div class="module module-info desktop-7">
                            <div class="info">
                                <h3>Distraction-Free Mode</h3>

                                <p>Prefer your editor with a more lightweight interface, or just need to focus? Enable our distraction-free mode to hide almost all of the UI. You can even configure what should be hidden when this mode is enabled, from scroll bars to line numbers to whitespace.</p>

                                <p class="link"><a href="#">Learn more about Distraction-Free Mode &rsaquo;</a></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="grid-container">
                    <div class="oldgrid">
                        <div class="module module-info desktop-7">
                            <div class="info">
                                <h3>File Change Diffs</h3>

                                <p>Prefer your editor with a more lightweight interface, or just need to focus? Enable our distraction-free mode to hide almost all of the UI. You can even configure what should be hidden when this mode is enabled, from scroll bars to line numbers to whitespace.</p>

                                <p class="link"><a href="#">Learn more about Distraction-Free Mode &rsaquo;</a></p>
                            </div>
                        </div>
                        <div class="module module-image desktop-5">
                            <div class="info">
                                <img src="/img/placeholder.png" alt="Placeholder" />
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="grid-container">
                    <div class="oldgrid">
                        <div class="module module-image desktop-5">
                            <div class="info">
                                <img src="/img/placeholder.png" alt="Placeholder" />
                            </div>
                        </div>
                        <div class="module module-info desktop-7">
                            <div class="info">
                                <h3>Configurable</h3>

                                <p>Prefer your editor with a more lightweight interface, or just need to focus? Enable our distraction-free mode to hide almost all of the UI. You can even configure what should be hidden when this mode is enabled, from scroll bars to line numbers to whitespace.</p>

                                <p class="link"><a href="#">Learn more about Distraction-Free Mode &rsaquo;</a></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="grid-container">
                    <div class="oldgrid">

                        <div class="rowhead">
                            <h2>Cross-Platform</h2>
                            <h3>Works on Windows, Mac OS X and Linux</h3>
                        </div>

                        <div class="module module-image desktop-12">
                            <div class="info">
                                <img src="/img/cross-platform.png" alt="The Windows, Mac OS X and Linux Logos" />
                            </div>
                        </div>
                        <div class="module module-info desktop-12">
                            <div class="info" style="text-align: center">
                                <p><?= Core::APPNAME ?> is fully cross-platform and runs on Windows, Mac OS X, Ubuntu, Debian, Fedora &amp; CentOS.</p>
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
