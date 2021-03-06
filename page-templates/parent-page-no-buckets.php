<?php
/*
Template Name: Parent Page (No Buckets)
*/
get_header(); ?>
<?php get_template_part( 'template-parts/featured-image' ); ?>
<div class="main-wrap sidebar-left" role="main">
	<?php do_action( 'foundationpress_before_content' ); ?>
	<?php while ( have_posts() ) : the_post(); ?>
	<article <?php post_class('main-content') ?> id="post-<?php the_ID(); ?>">
		<?php do_action( 'foundationpress_page_before_entry_content' ); ?>
		<div class="entry-content">
			<?php the_content(); ?>
		</div>
	</article>
	<?php endwhile;?>
	<?php do_action( 'foundationpress_after_content' ); ?>
	<?php get_sidebar(); ?>
	</div>
</div>
<?php get_footer();