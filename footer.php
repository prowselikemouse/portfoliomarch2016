<footer>
	<div class="container">
	<div id="contact" class="section">
  		<div class="content">
			<h3 class="sectionTitle"><?php the_field('contact_section_title'); ?></h3>
			<div class="contactSectionInformation">
				<p class="contactBlurb"><?php the_field('contact_section_blurb'); ?></p>
				<div class="contactInformationBox">
					<?php while(has_sub_field('contact_method')): ?>
						<a href="<?php the_sub_field('contact_method_link'); ?>?Subject=Let's%20Work!" target="blank">
							<div class="contactInformation">
								<?php $image = get_sub_field('contact_method_icon'); ?>
								<div class="contactIcon">
									<img src="<?php echo $image['sizes']['thumbnail']; ?>" alt="">
								</div>
								<p class="contactInformationText"><?php the_sub_field('contact_method_info'); ?></p>
							</div>
						</a>
					<?php endwhile; ?>
				</div>
			</div>
		</div> <!-- end content -->
	</div> <!-- end contact -->
    <div class="footerContent">
    	<p>&copy; Clare Prowse | <?php echo date('Y'); ?></p>
    	<div class="socialNavBox">
    		   <ul class="socialNav">
    		   	<a href="http://www.github.com/prowselikemouse" target="_blank"><li class="github"><img src="<?php bloginfo('template_directory'); ?>/images/git.svg" alt=""></li></a>
    		   	<a href="http://www.behance.com/prowselikemouse" target="_blank"><li class="behance"><img src="<?php bloginfo('template_directory'); ?>/images/behance.svg" alt=""></li></a>
    		   	<a href="http://www.twitter.com/prowselikemouse" target="_blank"><li class="twitter"><img src="<?php bloginfo('template_directory'); ?>/images/twitter.svg" alt=""></li></a>
    		   	<a href="http://www.linkedin.com/in/prowselikemouse" target="_blank"><li class="linkedin"><img src="<?php bloginfo('template_directory'); ?>/images/linkedin.svg" alt=""></li></a>
    		   </ul>
    		</div>
    </div>
</footer>

<script>
// scripts.js, plugins.js and jquery are enqueued in functions.php
/* Google Analytics! */
 var _gaq=[["_setAccount","UA-XXXXX-X"],["_trackPageview"]]; // Change UA-XXXXX-X to be your site's ID
 (function(d,t){var g=d.createElement(t),s=d.getElementsByTagName(t)[0];g.async=1;
 g.src=("https:"==location.protocol?"//ssl":"//www")+".google-analytics.com/ga.js";
 s.parentNode.insertBefore(g,s)}(document,"script"));
</script>

<?php wp_footer(); ?>
</body>
</html>