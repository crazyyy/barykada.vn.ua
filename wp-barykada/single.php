<?php get_header(); ?>
	
	<!-- section -->
	<section role="main">
	
	<?php if (have_posts()): while (have_posts()) : the_post(); ?>
	
		<!-- article -->
		<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
			
			<!-- post title -->
			<h1 class="title"><?php the_title(); ?></h1>
			<!-- /post title -->
			
			<?php the_content(); // Dynamic Content ?>
			
			<p><?php _e( 'Categorised in: ', 'html5blank' ); the_category(', '); // Separated by commas ?></p>
			
			<p><?php _e( 'This post was written by ', 'html5blank' ); the_author(); ?></p>
			
			<?php edit_post_link(); // Always handy to have Edit Post Links available ?>
			
			<?php comments_template(); ?>
			
		</article>
		<!-- /article -->
		
	<?php endwhile; ?>
	<?php else: ?>
		<!-- article -->
		<article>
			<h1 class="title"><?php _e( 'Sorry, nothing to display.', 'html5blank' ); ?></h1>
		</article>
		<!-- /article -->
	<?php endif; ?>
	</section>
	<!-- /section -->
	
<?php get_sidebar(); ?>
<?php get_footer(); ?>