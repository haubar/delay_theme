<?php
/**
 * Template part for displaying posts on the home page.
 *
 * @package Revelar
 */

$revelar_has_thumbnail = '';

if ( ! get_the_post_thumbnail() ) :
	$revelar_has_thumbnail = 'no-thumbnail';
endif;
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<div class="entry-thumbnail <?php echo esc_attr( $revelar_has_thumbnail ); ?>">
		<a href="<?php the_permalink(); ?>">
			<?php the_post_thumbnail( 'revelar-front-thumbnail' ); ?>
		</a>
	</div>
	<header class="entry-header">
		<?php the_title( '<h2 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' ); ?>

		<div class="entry-meta">
			<?php revelar_posted_on(); ?>
		</div><!-- .entry-meta -->
	</header><!-- .entry-header -->
</article><!-- #post-## -->
