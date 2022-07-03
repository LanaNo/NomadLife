<!DOCTYPE html>
<html>
    <head>
        <?php wp_head(); ?>
    </head>
    <body>
    <header class="site-header">
        <div class="container">
            <h1 class="site-logo-text float-left">
            <a class="ha" href="<?php echo site_url()?>"><strong>MyNomadLife</strong></a>
            </h1>
            <div class="site-header__menu group">
            <nav class="main-navigation">
                <ul>
                    <li><a href="<?php echo site_url()?>">Home</a></li>
                    <li><a href="<?php echo site_url('/about-me')?>">About me</a></li>
                    <li><a href="<?php echo site_url('/my-scottish-adventures')?>">Blog</a></li>
                    <li><a href="<?php echo site_url('/share-your-adventure')?>">Share your adventures</a></li>
                </ul>
            </nav>
            </div>
        </div>
    </header>
    </body>
</html>
