<div class="copyright">
	<div class="wrap">
		<div class="copp_all">
			<div class="cop_info">
				<?php the_field('footer_main', 11); ?>
			</div>
			<div class="social">
				<a href="https://www.instagram.com/luckypetnames/?hl=en" target="_blank"><img src="<?php echo get_template_directory_uri();?>/img/social_1.png" alt=""></a>
				<a href="https://www.facebook.com/luckypetnames" target="_blank"><img src="<?php echo get_template_directory_uri();?>/img/social_2.png" alt=""></a>
				<a href="#" target="_blank"><img src="<?php echo get_template_directory_uri();?>/img/social_3.png" alt=""></a>
				<a href="#" target="_blank"><img src="<?php echo get_template_directory_uri();?>/img/social_4.png" alt=""></a>
			</div>
		</div>
	</div>
</div>

<?php wp_footer(); ?>

<script>
$('.menu li a').on( 'click', function(){ 
    var el = $(this);
    var dest = el.attr('href'); // получаем направление
    if(dest !== undefined && dest !== '') { // проверяем существование
        $('html').animate({ 
            scrollTop: $(dest).offset().top // прокручиваем страницу к требуемому элементу
        }, 500 // скорость прокрутки
        );
    }
    return false;
});

$('.petClass').click(function(){
	$('html, body').animate({scrollTop:$('#pet').position().top}, 2000);
});

/*dog*/
$('label#label_1_7_0').click(function() {
	console.log('dog');
	$('li#field_1_5').show();
	$('li#field_1_4').hide();
	$('li#field_1_3').hide();
});

/*cat*/
$('label#label_1_7_1').click(function() {
	console.log('cat');
	$('li#field_1_4').show();
	$('li#field_1_5').hide();
	$('li#field_1_3').hide();
});

/*other*/
$('label#label_1_7_2').click(function() {
	console.log('other');
	$('li#field_1_3').show();
	$('li#field_1_4').hide();
	$('li#field_1_5').hide();
});



$(window).scroll(function () {

	var topMenu = $('.top');

	$(window).scroll(function () {
		if ($(this).scrollTop() > 80) {
			topMenu.addClass('active');
		}
		else {
			topMenu.removeClass('active');
		}
	});
});

</script>
</body>
</html>
