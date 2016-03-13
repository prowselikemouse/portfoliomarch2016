<footer>
  <div class="container">
    <p>&copy; Clare Prowse | <?php echo date('Y'); ?></p>
    <!-- <div class="socialNavBox">
	   <ul class="socialNav">
	   	<li class="github"><img src="<?php bloginfo('template_directory'); ?>/images/git.svg" alt=""></li>
	   	<li class="behance"><img src="<?php bloginfo('template_directory'); ?>/images/behance.svg" alt=""></li>
	   	<li class="twitter"><img src="<?php bloginfo('template_directory'); ?>/images/twitter.svg" alt=""></li>
	   	<li class="linkedin"><img src="<?php bloginfo('template_directory'); ?>/images/linkedin.svg" alt=""></li>
	   </ul>
	</div> -->
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