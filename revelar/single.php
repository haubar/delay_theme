<?php
/**
 * The template for displaying all single posts.
 *
 * @package Revelar
 */

$format = get_post_format();

if ( ! in_array( $format, array( 'gallery', 'video' ) ) ) {
	$format = 'single';
}

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

		<?php while ( have_posts() ) : the_post(); ?>

		<?php get_template_part( 'template-parts/content', $format ); ?>

			<?php
				// If comments are open or we have at least one comment, load up the comment template.
				if ( comments_open() || get_comments_number() ) :
					echo '<div class="comments-wrapper">';
					comments_template();
					echo '</div>';
				endif;
			?>

			<?php the_post_navigation(); ?>

		<?php endwhile; // End of the loop. ?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>
