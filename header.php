<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<?php // Load Meta ?>
  <meta charset="<?php bloginfo( 'charset' ); ?>" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?php  wp_title('|', true, 'right'); ?></title>
  <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
  <!-- stylesheets should be enqueued in functions.php -->
  <script src="https://use.typekit.net/hpa2uhr.js"></script>
  <script>try{Typekit.load({ async: true });}catch(e){}</script>
  <?php wp_head(); ?>
</head>


<body <?php body_class(); ?>>

<header>
<!--   <div id="menu-toggle">
    <div id="hamburger">
      <span></span>
      <span></span>
      <span></span>
    </div>
    <div id="cross">
      <span></span>
      <span></span>
    </div>
  </div> -->
  <div class="headerContainer">
      
      <div class="logoNavBox">
        <?php $logo = get_field('logo'); ?>
          <div class="logoBox">
            <img src="<?php echo $logo['sizes']['thumbnail']; ?>" alt="" class="logo">
          </div>
          <nav><?php wp_nav_menu( array(
              'container' => false,
              'theme_location' => 'primary'
            )); ?></nav>
          <div class="navRuler"></div>
      </div>


  </div> <!-- /.container -->
</header><!--/.header-->

