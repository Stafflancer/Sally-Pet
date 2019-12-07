<?php get_header(); ?>

<div class="bg">
	<div class="wrap">
		<div class="bg_all">
			<?php the_field('top_header', 11); ?>
			<div class="bg_right">
				<?php echo do_shortcode('[fvplayer id="1"]'); ?>
			</div>
		</div>
	</div>
</div>

<div class="about" id="about">
	<div class="wrap">
		<div class="about_all">
			<div class="ab_left">
				<img src="<?php echo get_template_directory_uri();?>/img/about.jpg" alt="">
			</div>
			<div class="ab_right">
				<?php the_field('about_us', 11); ?>
			</div>
		</div>
		<div class="about_all about_bottom">
			<div class="ab_left">
				<?php the_field('about_bottom', 11); ?>
			</div>
			<div class="ab_right">
				<img src="<?php echo get_template_directory_uri();?>/img/cat.jpg" alt="">
			</div>
		</div>
	</div>
</div>


<div class="footer" id="pet">
	<div class="wrap">
		<div class="form_f">
			<h2>Your Pet Name</h2>
			<hr>
			<p>We all love our pets – we can give your dog or cat or whatever pet have a lucky</p>
			<p>English name that will suit and is not embarrassing</p>
			<div class="formMain">
				<?php echo gravity_form(1, false, false, false, '', true, 12); ?>


				<div class="info_input">
					<div class="gender char">
						<h3>Your Information</h3>
					</div>
					<input type="text" placeholder="Your e-mail address">
				</div>

				<div class="t_price">
					<button>Add to Cart</button>
					<p>Price: <span>Yuan 18.66 each pet</span></p>
				</div>

			</div>
		</div>
	</div>
</div>

<!-- <div class="footer" id="pet">
	<div class="wrap">
		<div class="form_f">
			<?php the_field('pet_name', 11); ?>
		</div>
	</div>
</div> -->

<?php
get_footer();
