<?php
/**
 * The template for displaying all single posts.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package AcmeThemes
 * @subpackage Supermag
 */
global $supermag_customizer_all_values;

get_header(); ?>
	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

		<?php while ( have_posts() ) : the_post(); ?>

			<?php get_template_part( 'template-parts/content', 'single' ); ?>
			<?php
			the_post_navigation();
			/**
			 * supermag_related_posts hook
			 * @since supermag 1.0.0
			 *
			 * @hooked supermag_related_posts_belo -  10
			 */
			do_action( 'supermag_related_posts' ,get_the_ID() );
			?>

			<?php
				// If comments are open or we have at least one comment, load up the comment template.
				if ( comments_open() || get_comments_number() ) :
					comments_template();
				endif;
			?>

		<?php endwhile; // End of the loop. ?>

		</main><!-- #main -->
	</div><!-- #primary -->
<?php get_sidebar( 'left' ); ?>
<?php get_sidebar(); ?>
<?php get_footer(); ?>
