<?php

/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package web_dev
 */

?>



<footer id="footer">
	<div class="container">
		<div class="row">

			<div class="col-sm-12">

				<ul class="social-links">
					<li><a href="https://github.com/SolDier2018" class="wow fadeInUp" target="_blank"><i class="fa fa-github"></i></a></li>
					<li><a href="https://vk.com/zelezno" class="wow fadeInUp" data-wow-delay=".1s" target="_blank"><i class="fa fa-vk"></i></a></li>
					<li><a href="https://www.instagram.com/zentosska" class="wow fadeInUp" data-wow-delay=".4s" target="_blank"><i class="fa fa-instagram"></i></a></li>
					<li><a href="mailto:astels2009@gmail.com" class="wow fadeInUp" data-wow-delay=".5s" target="_blank"><i class="fa fa-envelope"></i></a></li>
				</ul>

				<p class="heart">
					Сделано с <span class="fa fa-heart fa-2x animated pulse"></span> в Новосибирске
				</p>

				<?php if (ot_get_option('copyright')) { ?>
					<p class="copyright"><?php echo ot_get_option('copyright') ?></p>
				<?php } else { ?>
					<p class="copyright"></p>
				<?php } ?>

			</div>

		</div><!-- .row -->
	</div><!-- .container -->
</footer>

<!-- Scroll to top -->

<div class="scroll-up">
	<a href="#home"><i class="fa fa-angle-up"></i></a>
</div>

<!-- Scroll to top end-->


<?php wp_footer(); ?>

</body>

</html>