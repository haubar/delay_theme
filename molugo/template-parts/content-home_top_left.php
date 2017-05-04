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

	<div id="post-<?php the_ID(); ?>" class="news-box">
		<img src="http://fakeimg.pl/576x576/aaa/" alt="img">
		<div class="date">
			<span><?php the_time('m'); ?></span>
			<span><?php the_time('d'); ?></span>
			<span><?php the_time('D'); ?></span>
		</div>
		<div class="social">
			<a href="#" class="like"><img src="<?php bloginfo('template_directory') ?>/assets/images/icon-4.png" alt="icon like"></a>
			<a href="#" class="link"><img src="<?php bloginfo('template_directory') ?>/assets/images/icon-3.png" alt="icon link"></a>
		</div>
		<div class="title">
			<div class="sort"><?php echo get_the_category()[0]->cat_name; ?></div>
			<a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a>					</div>
	</div>