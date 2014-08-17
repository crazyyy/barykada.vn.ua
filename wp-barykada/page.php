<?php get_header(); ?>
	
	<!-- section -->
	<section role="main">
	
		<h1 class="title"><?php the_title(); ?></h1>
	
	<?php if (have_posts()): while (have_posts()) : the_post(); ?>
	
		<!-- article -->
		<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
		
			<?php the_content(); ?>
			
			<br class="clear">
			
		</article>
		<!-- /article -->
		
	<?php endwhile; ?>
	
	<?php else: ?>
	
		<!-- article -->
		<article>
			
			<h2 class="title"><?php _e( 'Sorry, nothing to display.', 'html5blank' ); ?></h2>
			
		</article>
		<!-- /article -->
	
	<?php endif; ?>
	
	</section>
	<!-- /section -->
	
<?php get_sidebar(); ?>

<?php get_footer(); ?>