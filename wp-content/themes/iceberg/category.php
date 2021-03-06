<?php get_header(); ?>

<div class="container"> 
<!-- main content area -->
    <div class="row">
        <div class="col-md-9">
        	<h1><?php single_cat_title(); ?></h1>

 			<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

 			<article>
				<a href="<?php the_permalink(); ?>" title="Read more">
					<h3><?php the_title(); ?></h3>
					<?php the_post_thumbnail(); ?>
					<?php the_excerpt(); ?>
					<div class="btn">Read More</div>
				</a>
			</article>

 			<?php endwhile; else : ?>

 			<p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>

 			<?php endif; ?>

 			<?php if (function_exists("pagination")) : ?>
    			<div class="blog-pagination">
    				<?php pagination($additional_loop->max_num_pages); ?>
    			</div>
			<?php endif; ?>
        </div>
		<div class="col-md-3">
			<?php get_sidebar(); ?>
        </div>
    </div>
</div>
​
<?php get_footer(); ?>