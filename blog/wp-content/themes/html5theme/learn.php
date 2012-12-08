<? /* Template Name: Learn */ ?>

<?php get_header(); ?>

<div id="posts">
	
	<h2>Learning Center</h2>
	<?php
	global $more;
	$more = 0;
	?>
	
	<?php
	query_posts('cat=65'); if (have_posts()) : while (have_posts()) : the_post(); ?>


		<article <?php post_class() ?> id="post-<?php the_ID(); ?>">

			<h3><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h3>

			<?php include (TEMPLATEPATH . '/_/inc/meta.php' ); ?>

			<div class="entry">
				
				<?php echo catch_that_image() ?>
				
				<?php the_content("Read More"); ?> 


			</div>

			<footer class="postmetadata">
				<?php //comments_popup_link('No Comments &#187;', '1 Comment &#187;', '% Comments &#187;'); ?> 
			</footer>

		</article>

	<?php endwhile; ?>

	<?php include (TEMPLATEPATH . '/_/inc/nav.php' ); ?>

	<?php else : ?>

		<h2>Not Found</h2>

	<?php endif; ?>

</div><!-- /posts -->

<?php include("sidebar_2.php"); ?>

<?php get_footer(); ?>
