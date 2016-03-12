<?php //index.php is the last resort template, if no other templates match ?>
<?php get_header(); ?>

<div class="main">
  <div class="container">

    <div class="content">
		<?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
		<div id="about">
			<?php if (has_post_thumbnail( $post->ID ) ): ?>
			  <?php $backgroundimage = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'single-post-thumbnail' ); ?>
			  <?php endif; ?>
			<div class="headerBox">
				<img src="<?php echo $backgroundimage[0]; ?>" alt="">
			</div> <!-- end headerBox -->
				<div class="aboutBox">
					<div class="aboutContentBox">
						<h3 class="myName"><?php the_title(); ?></h3>
						<p class="myProfession"><?php the_field('about_subtitle'); ?></p>
						<p class="aboutMe"><?php the_content(); ?></p>
					</div>
				</div> <!-- end aboutBox -->
			</div> <!-- end about -->

		<div id="services">
			<h2 class="servicesSectionTitle"><?php the_field('service_section_title'); ?></h2>
				<div class="allServicesBox">
						<?php while( has_sub_field('individual_service')): ?>
						<div class="serviceListBox">
							<div class="individualService">
								<?php $image = get_sub_field('service_icon') ?>
								<div class= "serviceIconBox"><img src="<?php echo $image['sizes']['thumbnail']; ?>" alt=""></div>
								<h4 class="serviceTitle"><?php the_sub_field('service_title'); ?></h4>
							</div>
							<div class="servicesModal">
								<?php $image = get_sub_field('service_modal_icon') ?>
								<div class="serviceModalClose">
									<img src="../images/close.svg" alt="">
								</div>
								<div class="serviceModalIcon">
									<img src="<?php echo $image['sizes']['thumbnail']; ?>" alt="">
								</div>
								<h4><?php the_sub_field('service_modal_title'); ?></h4>
								<p><?php the_sub_field('service_modal_text'); ?></p>
							</div>
						</div>
				<?php endwhile; ?>
			</div>
		</div> <!-- end services -->

		<div id="portfolio">
			<h2><?php the_field('portfolio_section_title'); ?></h2>
			<?php $portfolioQuery = new WP_Query(array(
					'post_type' => 'portfolio'
				));?>
				<?php if($portfolioQuery -> have_posts() ): ?>
				<?php while ($portfolioQuery -> have_posts() ): ?>
				<?php $portfolioQuery -> the_post(); ?>
					<div class="portfolioPiece">
						
							<div class="portfolioPieceText">
								<h4 class="pieceType"><?php the_field('piece_type'); ?></h4>
								<p class="pieceTitle"><?php the_title(); ?></p>
								<p class="pieceBuiltWith"><?php the_field('piece_built_with'); ?></p>
								<p class="pieceDescription"><?php the_content(); ?></p>
								<p class="pieceViewLiveButton"><?php the_field('piece_view_live_button'); ?></p>
							</div>
							<div class="portfolioImageBox">
								<?php $imageUrl = get_featured_image_url($post);?> 
								<img src="<?php echo $imageUrl ?>" alt="">
							</div>
					</div>
				<?php endwhile; ?>
			<?php endif; ?>
			<?php wp_reset_postdata(); ?>
			
		</div>

		<div id="resume"></div>
		<div id="workflow">
			<h2 class="workflowSectionTitle"><?php the_field('workflow_title'); ?></h2>			
			<div class="workflow">
				<?php while(has_sub_field('workflow_section')): ?>
					<div class="workflowSection">
						<div class="workflowSectionText">
							<?php $image = get_sub_field('workflow_section_icon'); ?>
							<div class="workflowIconBox">
								<img class="workflowIcon" src="<?php echo $image['sizes']['thumbnail']; ?>" alt="">
							</div> <!-- end workflowIconBox -->
							<p class="workflowTitle"><?php the_sub_field('workflow_section_title'); ?></p>
							<p class="workflowDescription"><?php the_sub_field('workflow_section_description'); ?></p>
						</div> <!-- end workflowSectionText -->
						<?php $image = get_sub_field('workflow_section_image'); ?>
						<div class="workflowSectionImage">
							<img src="<?php echo $image['sizes']['thumbnail']; ?>" alt="" class="workflowImage">
						</div>
					</div>
				<?php endwhile; ?>
			</div> <!-- end workflowSection -->
		</div> <!-- end workflow -->
		<div id="contact">
			<h2 class="contactSectionTitle"><?php the_field('contact_section_title'); ?></h2>
			<p class="contactBlurb"><?php the_field('contact_section_blurb'); ?></p>
			<?php while(has_sub_field('contact_method')): ?>
			<div class="contactInformation">
				<?php $image = get_sub_field('contact_method_icon'); ?>
				<div class="contactIcon">
					<img src="<?php echo $image['sizes']['thumbnail']; ?>" alt="">
				</div>
				<p class="contactInformationText"><?php the_sub_field('contact_method_info'); ?></p>
			</div>
			<?php endwhile; ?>
			
		</div> <!-- end contact -->
	<?php endwhile ?>
    </div> <!--/.content -->


  </div> <!-- /.container -->
</div> <!-- /.main -->

<?php get_footer(); ?>