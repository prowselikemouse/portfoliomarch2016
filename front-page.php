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
						<div class="aboutMe"><?php the_content(); ?></div>
					</div>
				</div> <!-- end aboutBox -->
			</div> <!-- end about -->

		<div id="services" class="section">
			<h3 class="serviceSectionTitle"><?php the_field('services_section_title'); ?></h3>
				<div class="allServicesBox">
						<?php while( has_sub_field('individual_service')): ?>
						<div class="serviceListBox">
							<div class="individualService">
								<?php $image = get_sub_field('service_icon') ?> 
								<div class= "serviceIconBox"><img src="<?php echo $image['sizes']['thumbnail']; ?>" alt=""></div>
								<h4 class="serviceTitle"><?php the_sub_field('service_title'); ?></h4>
							</div>
							<div class="servicesModal" data-backdrop="true">
									<?php $image = get_sub_field('service_modal_icon') ?>
									<div class="serviceModalIcon">
										<img src="<?php echo $image['sizes']['thumbnail']; ?>" alt="">
									</div>
									<h4 class="serviceModalTitle"><?php the_sub_field('service_modal_title'); ?></h4>
									<p class="serviceModalText"><?php the_sub_field('service_modal_text'); ?></p>
								<div class="serviceModalClose">
									<img src="<?php bloginfo('template_directory'); ?>/images/close_x.svg" alt=""/>
								</div>
							</div>
						</div>
				<?php endwhile; ?>
			</div>
		</div> <!-- end services -->

		<div id="portfolio" class="section">
			<h3 class="sectionTitle"><?php the_field('portfolio_section_title'); ?></h3>
				<?php $portfolioQuery = new WP_Query(array(
						'post_type' => 'portfolio'
					));?>
					<?php if($portfolioQuery -> have_posts() ): ?>
					<?php while ($portfolioQuery -> have_posts() ): ?>
					<?php $portfolioQuery -> the_post(); ?>
				
					<div class="portfolioPiece">
						<div class="portfolioPieceText">
							<h4 class="pieceType"><?php the_field('piece_type'); ?></h4>
							<div class="pieceTitle"><?php the_title(); ?></div>
							<p class="pieceBuiltWith"><?php the_field('piece_built_with'); ?></p>
							<div class="pieceDescription"><?php the_content(); ?></div>
							<div class="pieceViewLiveButton"><?php the_field('piece_view_live_button'); ?></div>
						</div>
						<div class="portfolioImageBox">
							<?php $imageUrl = get_featured_image_url($post);?> 
							<img class="portfolioImageScreen" src="<?php bloginfo('template_directory'); ?>/images/computer_border.svg" alt=""/>
							<img class="portfolioImage" src="<?php echo $imageUrl ?>" alt="">
						</div>
					</div>
					<?php endwhile; ?>
				<?php endif; ?>
				<?php wp_reset_postdata(); ?>
			
		</div>

		<div id="resume"></div>
		<div id="workflow" class="section">
			<h3 class="sectionTitle"><?php the_field('workflow_title'); ?></h3>			
				<?php while(has_sub_field('workflow_section')): ?>
			<div class="workflow">
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
				</div> <!-- end workflowSection -->
				<div class="connectorLine">
					<img src="<?php bloginfo('template_directory'); ?>/images/connector.svg" alt="">
				</div>
			</div> 
				<?php endwhile; ?>
		</div> <!-- end workflow -->
  <!-- <div class="content"> -->
		
			<!-- </div> -->
		</div> <!-- end contact -->
    </div> <!--/.content -->
	<?php endwhile ?>
  </div> <!-- /.container -->
</div> <!-- /.main -->

<?php get_footer(); ?>

