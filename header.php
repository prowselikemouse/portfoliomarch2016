<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<?php // Load Meta ?>
  <meta charset="<?php bloginfo( 'charset' ); ?>" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?php  wp_title('|', true, 'right'); ?></title>
  <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
  <!-- stylesheets should be enqueued in functions.php -->
  <?php wp_head(); ?>
</head>


<body <?php body_class(); ?>>

<header>
  <div class="container">
      
      <div class="header">
        <?php if (has_post_thumbnail( $post->ID ) ): ?>
          <?php $backgroundimage = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'single-post-thumbnail' ); ?>
          <?php endif; ?>
        <div class="headerNameProfessionBox" style="background-image: url(<?php echo $backgroundimage[0]; ?>)">
          <p class="headerName"><?php echo get_field('header_name'); ?></p>
          <p class="headerProfession"><?php the_field('header_profession_title'); ?></p>
          <?php $logo = get_field('logo'); ?>
          <img src="<?php echo $logo['sizes']['thumbnail']; ?>" alt="" class="logo">
          <?php wp_nav_menu( array(
            'container' => false,
            'theme_location' => 'primary'
          )); ?>
        </div>

      </div>


  </div> <!-- /.container -->
</header><!--/.header-->

