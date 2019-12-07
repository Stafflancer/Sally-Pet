<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package sally
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

<body <?php body_class(); ?>>
<div class="top">
	<div class="wrap">
		<div class="topline">
			<div class="logo">
				<a href="#"><?php the_custom_logo(); ?></a>
			</div>
			<ul class="menu">
				<li><a href="#about">About Us</a></li>
				<li><a href="#pet">Your Pet Name</a></li>
			</ul>
			<div class="card">
				<div class="lang">
                    <?php if (get_bloginfo('language')== 'en-US') : ?>
                            <a href="/zh">中文</a>
                    <?php else : ?>
                            <a href="/en">EN</a>
                    <?php endif; ?>
				</div>
				<div class="basket">
					<a href="#"><img src="<?php echo get_template_directory_uri();?>/img/card.png" alt=""></a>
				</div>
			</div>
		</div>
	</div>
</div>