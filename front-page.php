<?php //index.php is the last resort template, if no other templates match ?>
<?php get_header(); ?>

<div class="main">
  <div class="container">

    <div class="content">
  		
    		<a id="home"></a>
    		<a id="about"></a>
    		<div id="portfolio">
    			<?php $portfolioQuery = new WP_Query(array(
    					'post_type' => 'portfolio'
	    			));?>
	    			<?php if($portfolioQuery -> have_posts() ) ?>
	    			<?php while ($portfolioQuery -> have_posts() ): ?>
	    			<?php $portfolioQuery -> the_post(); ?>
	    				<div class="portfolioPiece">
	    					<?php while(has_sub_field('portfolio_piece')) ?>
	    						<h4 class="pieceType"><?php the_sub_field('piece_type'); ?></h4>
	    						<h6 class="pieceTitle"><?php the_sub_field('piece_title'); ?></h6>
	    						<p class="pieceBuiltWith"><?php the_sub_field('piece_built_with'); ?></p>
	    						<p class="pieceDescription"><?php the_sub_field('piece_description'); ?></p>
	    						<p class="pieceViewLiveButton"><?php the_sub_field('piece_view_live_button'); ?></p>
	    				</div>
					<?php endwhile; ?>
    			
    		</div>

    		<a id="resume"></a>
    		<a id="workflow"></a>
    		<a id="contact"></a>
    </div> <!--/.content -->


  </div> <!-- /.container -->
</div> <!-- /.main -->

<?php get_footer(); ?>