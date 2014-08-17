<?php if (have_posts()): while (have_posts()) : the_post(); ?>
	
	<!-- article -->
	<article id="post-<?php the_ID(); ?>" <?php post_class('looper clearfix'); ?>>
	
		<!-- post thumbnail -->
		<?php if ( has_post_thumbnail()) : // Check if thumbnail exists ?>
			<a class="featureimage" href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
				<?php the_post_thumbnail(array(250,250)); // Declare pixel size you need inside the array ?>
			</a>
		<?php else: ?>
			<a class="featureimage" href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><img src="<?php echo catch_that_image(); ?>" alt="<?php the_title(); ?>" /></a>
		<?php endif; ?>
		<!-- /post thumbnail -->
		
		<!-- post title -->
		<h3 class="title">
			<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a>
		</h3>
		<!-- /post title -->
		
		<!-- post details -->
		<span class="date"><?php the_time('j F Y'); ?></span>
		
		<?php html5wp_excerpt('html5wp_index');?>
		
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