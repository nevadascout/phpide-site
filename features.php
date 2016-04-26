<?php
require "/inc/core.php";

$page = "index";

?><!DOCTYPE html>
    <head lang="en">
        <meta charset="utf-8" />
        <title><?= Core::NAME ?> | <?= Core::TAGLINE ?></title>
        <link rel="stylesheet" type="text/css" href="/styles/core.css" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    </head>
    <body>
        <header>
            <nav>
                <?php include "/inc/menu.php" ?>
            </nav>

            <div class="headertext">
                <h1>Improve your web development experience</h1>
                <h2><strong>Be more productive.</strong> Write better code, faster.</h2>
            </div>
        </header>

        <div class="features-content">

            <!-- <div class="row">
                <div class="grid-container">
                    <div class="oldgrid">
                        <div class="module module-info desktop-12">
                            <h2>What is all this?</h2>
                            <p><?= Core::NAME ?> is a powerful editor designed specifically for PHP development.</p>
                        </div>
                    </div>
                </div>
            </div> -->

            <div class="row">
                <div class="grid-container">
                    <div class="oldgrid">

                        <div class="rowhead">
                            <h2>Editor</h2>
                            <h3>The PHP development environment you've always dreamed of...</h3>
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
                                <h3>Code Analysis</h3>

                                <p>Reduce the number of runtime errors and cut down on unused or complicated code with our real time Code Analysis. Running in the background as you work, we can immediately point out potential mistakes or improvements you could make. You can even configure the version of PHP that should be used for analysis, all the way back to v5.3.</p>

                                <p class="link"><a href="#">Learn more about Code Analysis &rsaquo;</a></p>
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
                                <h3>PSR Enforcement</h3>

                                <p>Code quality is improved when a development team uses a shared set of code styling rules. We have a fully customisable <i>PHP Standards Recommendations</i> (PSR) enforcement engine that runs in real time and flags style violations to developers as they're writing code.</p>

                                <p class="link"><a href="#">Learn more about PSR Enforcement &rsaquo;</a></p>
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

            <?php include "/inc/request-access-row.php" ?>

            <div class="row">
                <div class="grid-container">
                    <div class="oldgrid">
                        <div class="rowhead">
                            <h2>HTML/CSS Integration</h2>
                            <h3>Subheading goes here</h3>
                        </div>

                        <div class="module module-info desktop-7">
                            <div class="info">
                                <h3>Code-Completion</h3>

                                <p><?= Core::APPNAME ?> isn't just a great PHP editor, it's also a dream to use for HTML and CSS due to our intelligent code-completion engine. We suggest HTML elements and attributes, as well as user defined CSS classes and IDs where relevant. We also provide code-completion suggestions for user defined SASS or LESS variables.</p>

                                <p class="link"><a href="#">Learn more about HTML/CSS Integration &rsaquo;</a></p>
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
                                <h3>Code Analysis</h3>

                                <p>Reduce runtime errors and cut back on mistakes with our HTML/CSS analysis engine runs as you're working. As well as basic linting features, we also indicate places where CSS classes are defined without being used, or duplicated within a file.</p>

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
                                <h3>Refactoring</h3>

                                <p>Quickly and easily make changes to your styles and layouts without unique HTML/CSS refactoring tools. For example, rename a CSS class to have all references to it renamed as well. You can navigate directly to where a CSS class is defined, and we even let you to edit your stylesheet source files inline from the HTML.</p>

                                <p class="link"><a href="#">Learn more about HTML/CSS Integration &rsaquo;</a></p>
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
                                <h3>PHP Template Frameworks</h3>

                                <p>Using a PHP template framework? No problem! We offer full support for Twig and Smarty, with users easily able to extend <?= Core::APPNAME ?> to support other frameworks. Template support includes syntax highlighting, code completion for variables (both in HTML and PHP files), code analysis to check for unused or undefined variables and more.</p>

                                <p class="link"><a href="#">Learn more about HTML/CSS Integration &rsaquo;</a></p>
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
                        <div class="rowhead">
                            <h2>PHP Unit Testing</h2>
                            <h3>Subheading goes here</h3>
                        </div>

                        <div class="module module-image desktop-5">
                            <div class="info">
                                <img src="/img/placeholder.png" alt="Placeholder" />
                            </div>
                        </div>
                        <div class="module module-info desktop-7">
                            <div class="info">
                                <h3>PHPUnit Continuous Test Runner</h3>

                                <p>You don't realise how useful it is to know immediately when one of your code changes has broken a unit test until you have a continuous test runner. Ours runs in the background monitoring your code and running impacted tests automatically. Combined with code coverage (see below) this is a very powerful and useful feature.</p>

                                <p class="link"><a href="#">Learn more about Testing &rsaquo;</a></p>
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
                                <h3>Code Coverage</h3>

                                <p>Combined with our continuous test runner, we're able to show full code coverage for every PHP file in a project - in real time. We highlight lines that are covered by failing, risky, incomplete or skipped tests, or even lines that don't have any code coverage. You will know immediately show you if your code change has broken any unit tests.</p>

                                <p class="link"><a href="#">Learn more about Testing &rsaquo;</a></p>
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

            <footer>
                <p class="disclaimer">HVY Industries is a trading name of JCKD (UK) Ltd, registered in the UK, company no 7530099</p>
            </footer>
        </div>
    </body>
</html>
