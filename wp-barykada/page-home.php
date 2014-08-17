<?php /* Template Name: Home Page */ get_header(); ?>
	<section role="main" class="clearfix">	
		<?php include(TEMPLATEPATH.'/add-info.php'); ?>
	    
		<div class="last-hews">
			<h3 class="ltitle">останні Новини</h3>
			<span class="additional-title">та події</span>
			<a href="http://barykada.vn.ua/category/news" class="all-news">усі новини</a>
			<?php query_posts("showposts=3&cat=1"); ?>
			<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
		  	<article class="looper clearfix">
				<!-- post thumbnail -->
				<?php if ( has_post_thumbnail()) : // Check if thumbnail exists ?>
					<a class="featureimage" href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
						<?php the_post_thumbnail(array(250,250)); // Declare pixel size you need inside the array ?>
					</a>
				<?php else: ?>
					<a class="featureimage" href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><img src="<?php echo catch_that_image(); ?>" alt="<?php the_title(); ?>" /></a>
				<?php endif; ?>
				<!-- /post thumbnail -->
				<h3><a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a></h3>
				<span class="date"><?php the_time('j F Y'); ?></span>
				<?php html5wp_excerpt('html5wp_index'); // Build your custom callback length in functions.php ?>
			</article><!-- looper -->
			<?php endwhile; endif; ?>
			<?php wp_reset_query(); ?>
		</div><!-- last-hews -->
	</section>

<?php get_sidebar(); ?>
<?php get_footer(); ?>