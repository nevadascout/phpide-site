<?php

require "inc/core.php";

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
            <h1>Hvy Industries</h1>
            <h2>We make tools for php developers</h2>
        </header>

        <div class="welcome">
            <p><strong>Be more productive.</strong> Write better code, faster.</p>
        </div>

        <div class="subnav">
            <!--
                - / PHP Editor (#php-editing)
                - / HTML/CSS Integration (#htmlcss-integration)
                - / Testing (#testing)
            -->
            <ul>
                <li><a href="#">PHP Editor</a></li>
                <li><a href="#">HTML/CSS Integration</a></li>
                <li><a href="#">Unit Testing</a></li>
            </ul>
        </div>

        <div id="php-editing">
            <a name="php-editing"></a>
            <div class="row row1">
                <div class="grid-container">
                    <div class="oldgrid">

                        <div class="rowhead">
                            <h2>Editor</h2>
                            <h3>The PHP development environment you've always dreamed of...</h3>
                        </div>

                        <div class="module module-image desktop-5">
                            <div class="info">
                                <img src="/img/placeholder.png" alt="Placeholder" />
                            </div>
                        </div>
                        <div class="module module-info desktop-7">
                            <div class="info">
                                <h3>Code-Completion</h3>

                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>

                                <p class="link"><a href="#">Learn more about Code-Completion &rsaquo;</a></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row row2">
                <div class="grid-container">
                    <div class="oldgrid">
                        <div class="module module-info desktop-7">
                            <div class="info">
                                <h3>Code Analysis</h3>

                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>

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

            <div class="row row1">
                <div class="grid-container">
                    <div class="oldgrid">
                        <div class="module module-image desktop-5">
                            <div class="info">
                                <img src="/img/placeholder.png" alt="Placeholder" />
                            </div>
                        </div>
                        <div class="module module-info desktop-7">
                            <div class="info">
                                <h3>Refactoring</h3>

                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>

                                <p class="link"><a href="#">Learn more about Refactoring &rsaquo;</a></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row row2">
                <div class="grid-container">
                    <div class="oldgrid">
                        <div class="module module-info desktop-7">
                            <div class="info">
                                <h3>PSR Style Rules Enforcement</h3>

                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>

                                <p class="link"><a href="#">Learn more about PSR Enforcement &rsaquo;</a></p>
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

            <div class="row row1">
                <div class="grid-container">
                    <div class="oldgrid">
                        <div class="module module-image desktop-5">
                            <div class="info">
                                <img src="/img/placeholder.png" alt="Placeholder" />
                            </div>
                        </div>
                        <div class="module module-info desktop-7">
                            <div class="info">
                                <h3>Syntax Highlighting</h3>

                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>

                                <p class="link"><a href="#">Learn more about Editing &rsaquo;</a></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row row2">
                <div class="grid-container">
                    <div class="oldgrid">
                        <div class="module module-info desktop-7">
                            <div class="info">
                                <h3>Projects</h3>

                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>

                                <p class="link"><a href="#">Learn more about Projects &rsaquo;</a></p>
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

            <div class="row row1">
                <div class="grid-container">
                    <div class="oldgrid">
                        <div class="module module-image desktop-5">
                            <div class="info">
                                <img src="/img/placeholder.png" alt="Placeholder" />
                            </div>
                        </div>
                        <div class="module module-info desktop-7">
                            <div class="info">
                                <h3>Git Support</h3>

                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>

                                <p class="link"><a href="#">Learn more about Git Support &rsaquo;</a></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row row2">
                <div class="grid-container">
                    <div class="oldgrid">
                        <div class="module module-info desktop-7">
                            <div class="info">
                                <h3>Distraction-Free Mode</h3>

                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>

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
        </div>

        <div id="htmlcss-integration">
            <a name="htmlcss-integration"></a>
            <div class="row row1">
                <div class="grid-container">
                    <div class="oldgrid">
                        <div class="rowhead">
                            <h2>HTML/CSS Integration</h2>
                            <h3>Subheading goes here</h3>
                        </div>

                        <div class="module module-image desktop-5">
                            <div class="info">
                                <img src="/img/placeholder.png" alt="Placeholder" />
                            </div>
                        </div>
                        <div class="module module-info desktop-7">
                            <div class="info">
                                <h3>Code-Completion</h3>

                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>

                                <p class="link"><a href="#">Learn more about HTML/CSS Integration &rsaquo;</a></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row row2">
                <div class="grid-container">
                    <div class="oldgrid">
                        <div class="module module-info desktop-7">
                            <div class="info">
                                <h3>Code Analysis</h3>

                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>

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

            <div class="row row1">
                <div class="grid-container">
                    <div class="oldgrid">
                        <div class="module module-image desktop-5">
                            <div class="info">
                                <img src="/img/placeholder.png" alt="Placeholder" />
                            </div>
                        </div>
                        <div class="module module-info desktop-7">
                            <div class="info">
                                <h3>Refactoring</h3>

                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>

                                <p class="link"><a href="#">Learn more about HTML/CSS Integration &rsaquo;</a></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row row2">
                <div class="grid-container">
                    <div class="oldgrid">
                        <div class="module module-info desktop-7">
                            <div class="info">
                                <h3>SASS/LESS Support</h3>

                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>

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

            <div class="row row1">
                <div class="grid-container">
                    <div class="oldgrid">
                        <div class="module module-image desktop-5">
                            <div class="info">
                                <img src="/img/placeholder.png" alt="Placeholder" />
                            </div>
                        </div>
                        <div class="module module-info desktop-7">
                            <div class="info">
                                <h3>PHP Template Frameworks</h3>

                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>

                                <p class="link"><a href="#">Learn more about HTML/CSS Integration &rsaquo;</a></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div id="testing">
            <a name="testing"></a>
            <div class="row row2">
                <div class="grid-container">
                    <div class="oldgrid">
                        <div class="rowhead">
                            <h2>Unit Testing</h2>
                            <h3>Subheading goes here</h3>
                        </div>

                        <div class="module module-image desktop-5">
                            <div class="info">
                                <img src="/img/placeholder.png" alt="Placeholder" />
                            </div>
                        </div>
                        <div class="module module-info desktop-7">
                            <div class="info">
                                <h3>Continuous Test Runner</h3>

                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>

                                <p class="link"><a href="#">Learn more about Testing &rsaquo;</a></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row row1">
                <div class="grid-container">
                    <div class="oldgrid">
                        <div class="module module-info desktop-7">
                            <div class="info">
                                <h3>Code Coverage</h3>

                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>

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
        </div>

        <footer>
            <p class="disclaimer">HVY Industries is a trading name of JCKD (UK) Ltd, registered in the UK, company no 7530099</p>
            <!--<ul>
                <li><a href="#">About</a></li>
                <li><a href="#">Support</a></li>
                <li><a href="#">Blog</a></li>
                <li><a href="#">Forums</a></li>
                <li><a href="#">My Account</a></li>
                <li><a href="#">Legal Info</a></li>
            </ul>
            <ul>
                <li><a href="https://twitter.com/HvyIndustries" target="blank">@HvyIndustries</a></li>
            </ul>-->
        </footer>
    </body>
</html>
