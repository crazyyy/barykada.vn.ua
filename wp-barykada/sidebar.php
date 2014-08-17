<!-- sidebar -->
<aside class="right-bar" role="complementary">
		<div class="widget">
			<a href="http://barykada.vn.ua/callback.htm"><img src="<?php echo get_template_directory_uri(); ?>/img/widget-4.jpg" alt=""></a>
		</div>

	<?php if ( is_active_sidebar('widget-area-1') ) : ?>
		<?php dynamic_sidebar( 'widget-area-1' ); ?>
	<?php else : ?>
 
		<div class="widget">
			<img src="<?php echo get_template_directory_uri(); ?>/img/widget-1.jpg" alt="">
		</div>

		<div class="widget">
			<img src="<?php echo get_template_directory_uri(); ?>/img/widget-2.jpg" alt="">
		</div>

		<div class="widget">
			<h4>Мета та завдання</h4>
			<img src="<?php echo get_template_directory_uri(); ?>/img/widget-3.png" alt="">
		</div>
 
	<?php endif; ?>
 
</aside>
<!-- /right-bar -->