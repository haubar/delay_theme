<?php
/**
 * Template part for displaying posts.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package AcmeThemes
 * @subpackage Supermag
 */
global $supermag_customizer_all_values;
$supermag_get_image_sizes_options = $supermag_customizer_all_values['supermag-blog-archive-image-layout'];

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header">
		<?php the_title( sprintf( '<h2 class="entry-title"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h2>' ); ?>

		<?php if ( 'post' === get_post_type() ) : ?>
		<div class="entry-meta">
			<?php supermag_posted_on(); ?>
		</div><!-- .entry-meta -->
		<?php endif; ?>
	</header><!-- .entry-header -->

	<?php
	$no_fs = '';
	if ( has_post_thumbnail() &&
		( $supermag_customizer_all_values['supermag-blog-archive-layout'] == 'left-image' ||
			$supermag_customizer_all_values['supermag-blog-archive-layout'] == 'large-image' )
	) {
		?>
		<!--post thumbnal options-->
		<div class="post-thumb">
			<a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>">
				<?php
				the_post_thumbnail( $supermag_get_image_sizes_options );
				?>
			</a>
		</div><!-- .post-thumb-->
		<?php
	}
	else{
		$no_fs = 'at-no-fs';
	}
	?>

	<div class="entry-content <?php echo $no_fs;?>">
		<?php
		the_excerpt();
		?>
		<a class="read-more" href="<?php the_permalink(); ?> "><?php _e('Read More', 'supermag'); ?></a>

		<?php
			wp_link_pages( array(
				'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'supermag' ),
				'after'  => '</div>',
			) );
		?>
	</div><!-- .entry-content -->

	<footer class="entry-footer">
		<?php supermag_entry_footer(); ?>
	</footer><!-- .entry-footer -->
</article><!-- #post-## -->
