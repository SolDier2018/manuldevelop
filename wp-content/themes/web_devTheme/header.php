<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package web_dev
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body>
		<!-- Preloader -->

		<div id="preloader">
		<div id="status"></div>
	</div>

	<!-- Home start -->

	<section id="home" class="pfblock-image screen-height">
        <div class="home-overlay"></div>
		<div class="intro">
			<?php if(ot_get_option('top_text')) { ?>
				<div class="start"><?php echo ot_get_option('top_text') ?></div>
			<?php } else { ?>
				<div class="start">Поле "верхний заголовок" не заполнено</div>
			<?php } ?>
			<?php if (ot_get_option('average_text')) { ?>
				<h1><?php echo ot_get_option('average_text') ?></h1>
			<?php } else { ?>
				<h1>заголовок пустой</h1>
			<?php } ?>
			<?php if(ot_get_option('bottom_text')) { ?>
			<div class="start"><?php echo ot_get_option('bottom_text') ?></div>
			<?php } else { ?>
				<div class="start">нижний заголовок не заполнен</div>
			<?php } ?>
		</div>

        <a href="#services">
		<div class="scroll-down">
            <span>
                <i class="fa fa-angle-down fa-2x"></i>
            </span>
		</div>
        </a>

	</section>

	<!-- Home end -->

	<!-- Navigation start -->

	<header class="header">

		<nav class="navbar navbar-custom" role="navigation">

			<div class="container">

				<div class="navbar-header">
					<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#custom-collapse">
						<span class="sr-only">Toggle navigation</span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
					<?php if (ot_get_option('logo_upload')) { ?>
						<img src="<?php echo ot_get_option('logo_upload') ?>" alt="" class='header_logo'>
					<?php } else { ?>
						<a class="navbar-brand" href="index.html">John Doe</a>
					<?php } ?>
				</div>

                <?

                $args = array (
	                'theme_location'  => 'primary',
	                'menu'            => '',
	                'container'       => 'div',
	                'container_class' => 'collapse navbar-collapse',
	                'container_id'    => 'custom-collapse',
	                'menu_class'      => 'nav navbar-nav navbar-right',
	                'menu_id'         => '',
	                'echo'            => true,
	                'fallback_cb'     => 'wp_page_menu',
	                'before'          => '',
	                'after'           => '',
	                'link_before'     => '',
	                'link_after'      => '',
	                'items_wrap'      => '<ul id="%1$s" class="%2$s">%3$s</ul>',
	                'depth'           => 0,
	                'walker'          => '',
                );
                wp_nav_menu( $args )
                ?>
			</div><!-- .container -->

		</nav>

	</header>

	<!-- Navigation end -->

