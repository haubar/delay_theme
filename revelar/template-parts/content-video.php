<?php
/**
 * Template part for displaying video post post format.
 *
 * @package Revelar
 */

$content = apply_filters( 'the_content', get_the_content( __( 'Continue reading <span class="meta-nav">&rarr;</span>', 'revelar' ) ) );
$media = get_media_embedded_in_content( $content, array( 'video', 'object', 'embed', 'iframe' ) );
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header">
		<?php revelar_post_format(); ?>
		<?php if ( is_single() ) : ?>
			<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
		<?php else : ?>
			<?php the_title( sprintf( '<h2 class="entry-title"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h2>' ); ?>
		<?php endif; ?>

		<div class="entry-meta">
			<?php revelar_post_meta(); ?>
		</div><!-- .entry-meta -->
	</header><!-- .entry-header -->

	<?php if ( ! empty( $media ) ) : ?>
		<?php
		foreach ( $media as $embed_html ) {
			$content = str_replace( $embed_html, '', $content );
		} ?>
		<div class="entry-video jetpack-video-wrapper">
		<?php
		foreach ( $media as $embed_html ) {
			printf( '%1$s', $embed_html );
		} ?>
		</div>
	<?php endif; ?>

	<div class="entry-content">
		<?php echo $content; ?>
		<?php
			wp_link_pages( array(
				'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'revelar' ),
				'after'  => '</div>',
			) );
		?>
	</div><!-- .entry-content -->

</article><!-- #post-## -->
