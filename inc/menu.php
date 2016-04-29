<div class="grid-container">
    <ul>
        <li class="request-beta-btn"><a href="/beta" class="btn">Request Beta Access</a></li>

        <li><a href="/" class="logo"><?= Core::APPNAME ?></a></li>

        <li><a href="/features" <?php if ($page == "features") { ?> class="active" <?php } ?>>Features</a></li>
        <li><a href="/extensions" <?php if ($page == "extensions") { ?> class="active" <?php } ?>>Extensions</a></li>
        <li><a href="/download" <?php if ($page == "download") { ?> class="active" <?php } ?>>Download</a></li>
        <li><a href="/learn" <?php if ($page == "learn") { ?> class="active" <?php } ?>>Learn</a></li>
        <li><a href="/support" <?php if ($page == "support") { ?> class="active" <?php } ?>>Support</a></li>


        <!-- <li><a href="/pricing" <?php if ($page == "pricing") { ?> class="active" <?php } ?>>Pricing</a></li>
        <li><a href="/about" <?php if ($page == "about") { ?> class="active" <?php } ?>>About</a></li>
        <li><a href="/blog" <?php if ($page == "blog") { ?> class="active" <?php } ?>>Blog</a></li> -->
    </ul>
</div>