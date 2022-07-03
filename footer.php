<footer class="site-footer">
      <div class="site-footer__inner container container--narrow">
        <div class="group">
          <div class="site-footer__col-one">
            <h1 class="school-logo-text school-logo-text--alt-color">
              <img class="logo" src="<?php echo get_theme_file_uri('/images/logo1.png')?>" height="120px" width="120px">
              <a class="fot-link" href="<?php echo site_url()?>"><strong>MyNomadLife</strong></a>
            </h1>
            <p>EXPLORE THE WORLD</p>
          </div>

          <div class="site-footer__col-two-three-group">
            <div class="site-footer__col-two">
              <h3 class="headline headline--large-medium">Explore</h3>
              <nav class="nav-list">
                <ul>
                    <li><a href="<?php echo site_url()?>">Home</a></li>
                    <li><a href="<?php echo site_url('/about-me')?>">About Me</a></li>
                    <li><a href="<?php echo site_url('/my-scottish-adventures')?>">Blog</a></li>
                    <li><a href="<?php echo site_url('/share-your-adventure')?>">Contact Form</a></li>
                </ul>
              </nav>
            </div>

            <div class="site-footer__col-three">
              <h3 class="headline headline--large-medium">Privacy</h3>
              <nav class="nav-list">
                <ul>
                  <li><a href="<?php echo site_url('/privacy-policy')?>">Privacy policy</a></li>
                </ul>
              </nav>
             </div>
            </div>
          
          <div class="site-footer__col-four">
               <h3 class="headline headline--large-medium">Connect With Us</h3>
              <nav>
                 <ul class="min-list social-icons-list group">
                    <li>
                    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
                      <a href="https://www.facebook.com/My-Nomad-Life-103170282375169" class="fa fa-facebook"></a>
                    </li>
                 </ul>
              </nav>
          </div>
        </div>
        <h7 class="author-headline--small">Lana Novak © 2022</h7>
      </div>
    </footer>

<?php wp_footer(); ?>
</body>
</html>