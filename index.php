<?php get_header(); ?>
    
    <div class="page-banner">
      <div class="page-banner__bg-image" style="background-image: url(<?php echo get_theme_file_uri('/images/tartan.jpg')?>)"></div>
      <div class="page-banner__content container t-center c-white">
        <h1 class="headline headline--large">LIFE IS AN ADVENTURE</h1>
      </div>
      </div>

    <div class="hero-slider-slide">
      <div data-glide-el="track" class="glide__track">
        <div class="glide__slides">
        
        <div class="hero-slider__slide" style="background-image: url(<?php echo get_theme_file_uri('/images/JS1.jpg')?>)">
            <div class="hero-slider__interior container">
              <div class="hero-slider__overlay">
                <h2 class="headline headline--large t-center">My Scottish adventures</h2>
                <p class="t-center"></p>
                <p class="t-center no-margin"><a href="<?php echo site_url('/blog/my-scottish-adventures')?>" class="btn btn--blue">Find more about my Scottish adventure</a></p>
              </div>
            </div>
          </div>

<?php get_footer(); ?>
